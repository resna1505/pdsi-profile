<?php
session_start();

// Language configuration
$languages = [
  'id' => [
    'site_title' => 'PDSI - Detail Agenda',
    'meta_description' => 'Detail agenda kegiatan PDSI - Informasi lengkap tentang pelatihan dan kegiatan kedokteran',

    // Navigation
    'nav_news' => 'berita',
    'nav_testimonial' => 'Pengakuan',
    'nav_partners' => 'mitra',
    'nav_profile' => 'Profil PDSI',
    'nav_login' => 'Login',

    // Mega Menu
    'mega_about_us' => 'Tentang Kami',
    'mega_about_overview' => 'Sekilas',
    'mega_vision_mission' => 'Visi, Misi, Value',
    'mega_honorary_members' => 'Anggota Kehormatan',
    'mega_news' => 'Berita',
    'mega_activities' => 'Kegiatan',
    'mega_work_program' => 'Program Kerja',
    'mega_agenda' => 'Agenda PDSI',
    'mega_faq' => 'FAQ',
    'mega_faq_full' => 'frequently answer & questions',
    'mega_struktur' => 'Struktur',

    // Article Content
    'article_not_found' => 'Artikel tidak ditemukan',
    'published_by' => 'oleh',
    'date_format' => 'j F Y', // Indonesian date format: 15 Januari 2025

    // Sidebar
    'sidebar_about_title' => 'Tentang Kami',
    'sidebar_about_description' => 'Perkumpulan Dokter Seluruh Indonesia (PDSI) adalah wadah profesional untuk meningkatkan kompetensi, etika, dan kolaborasi antar dokter di Indonesia.',
    'sidebar_established' => 'Didirikan',
    'sidebar_chairman' => 'Ketua Umum',
    'sidebar_headquarters' => 'Kantor Pusat',
    'sidebar_headquarters_location' => 'Jakarta, Indonesia',
    'sidebar_latest_articles' => 'Artikel Terbaru',
    'sidebar_see_all' => 'Lihat Semua',

    // Footer
    'footer_description' => 'Platform Perkumpulan Dokter Seluruh Indonesia & Lembaga Pendidikan dan Pelatihan Dokter Seluruh Indonesia',
    'footer_copyright' => 'Copyright 2025©Ict-Pekumpulan Dokter Seluruh Indonesia-PDSI-LPDSI',
    'footer_address' => 'KTC Mall Lantai 3 Jl. Pulau Putri No.2, RW.9, Klp. Gading Bar., Kec. Klp. Gading, Kota Jkt Utara, Jakarta, Indonesia 14240.',
    'footer_legal' => 'Legal',
    'footer_privacy' => 'Privacy policy',
    'footer_terms' => 'Terms of use',

    // Settings
    'theme_mode' => 'theme mode',
    'light' => 'light',
    'dark' => 'dark',
    'language' => 'language',
    'lang_english' => 'English',
    'lang_indonesian' => 'Bahasa Indonesia'
  ],

  'en' => [
    'site_title' => 'PDSI - Agenda Details',
    'meta_description' => 'PDSI activity agenda details - Complete information about medical training and activities',

    // Navigation
    'nav_news' => 'news',
    'nav_testimonial' => 'testimonial',
    'nav_partners' => 'partners',
    'nav_profile' => 'Institution Profile',
    'nav_login' => 'Login',

    // Mega Menu
    'mega_about_us' => 'About Us',
    'mega_about_overview' => 'Overview',
    'mega_vision_mission' => 'Vision, Mission, Values',
    'mega_honorary_members' => 'Honorary Members',
    'mega_news' => 'News',
    'mega_activities' => 'Activities',
    'mega_work_program' => 'Work Program',
    'mega_agenda' => 'Agenda PDSI',
    'mega_faq' => 'FAQ',
    'mega_faq_full' => 'frequently asked questions',
    'mega_struktur' => 'Structure',

    // Article Content
    'article_not_found' => 'Article not found',
    'published_by' => 'by',
    'date_format' => 'F j, Y', // English date format: January 15, 2025

    // Sidebar
    'sidebar_about_title' => 'About Us',
    'sidebar_about_description' => 'Indonesian Medical Association (PDSI) is a professional platform to enhance competency, ethics, and collaboration among doctors in Indonesia.',
    'sidebar_established' => 'Established',
    'sidebar_chairman' => 'Chairman',
    'sidebar_headquarters' => 'Headquarters',
    'sidebar_headquarters_location' => 'Jakarta, Indonesia',
    'sidebar_latest_articles' => 'Latest Articles',
    'sidebar_see_all' => 'See All',

    // Footer
    'footer_description' => 'Platform of the Indonesian Doctors Association & Educational and Training Institutions for Doctors Throughout Indonesia',
    'footer_copyright' => 'Copyright 2025©Ict-Pekumpulan Dokter Seluruh Indonesia-PDSI-LPDSI',
    'footer_address' => 'KTC Mall 3rd Floor Jl. Pulau Putri No.2, RW.9, Klp. Gading Bar., Kec. Klp. Gading, North Jakarta City, Jakarta, Indonesia 14240.',
    'footer_legal' => 'Legal',
    'footer_privacy' => 'Privacy policy',
    'footer_terms' => 'Terms of use',

    // Settings
    'theme_mode' => 'theme mode',
    'light' => 'light',
    'dark' => 'dark',
    'language' => 'language',
    'lang_english' => 'English',
    'lang_indonesian' => 'Bahasa Indonesia'
  ]
];

// Language detection and setting
if (isset($_GET['lang']) && in_array($_GET['lang'], ['id', 'en'])) {
  $_SESSION['language'] = $_GET['lang'];
} elseif (!isset($_SESSION['language'])) {
  $_SESSION['language'] = 'id'; // Default language
}

$currentLang = $_SESSION['language'];
$text = $languages[$currentLang];

// 1. Get article ID from URL
$articleId = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// 2. Fetch all articles from API
$apiUrl = "https://www.platform.pdsionline.org/api/agenda";
$response = file_get_contents($apiUrl);
$data = json_decode($response, true);

// 3. Find the requested article and prepare latest posts
$article = null;
$latestPosts = [];
if ($data && $data['status'] === 'success' && !empty($data['data']['articles'])) {
  foreach ($data['data']['articles'] as $item) {
    if ($item['id'] == $articleId) {
      $article = $item;
    } else {
      $latestPosts[] = $item;
    }
  }

  // Get only 5 latest posts (excluding current article)
  $latestPosts = array_slice($latestPosts, 0, 5);
}

// 4. If article not found, show error
if (!$article) {
  // Handle not found case without exit
  $articleNotFound = true;
} else {
  $articleNotFound = false;
  // 5. Format dates according to language
  $articleDate = date($text['date_format'], strtotime($article['created_at']));
}
?>

<!DOCTYPE html>
<html lang="<?php echo $currentLang; ?>" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="description" content="<?php echo $text['meta_description']; ?>">
  <meta name="viewport" content="minimum-scale=1, initial-scale=1, width=device-width, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="./assets/favicons/favicon.png">
  <link rel="apple-touch-icon" sizes="57x57" href="./assets/favicons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="./assets/favicons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="./assets/favicons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/favicons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="./assets/favicons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="./assets/favicons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="./assets/favicons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="./assets/favicons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="./assets/favicons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicons/favicon.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicons/favicon.png">
  <link rel="manifest" href="./assets/favicons/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="./assets/favicons/ms-icon-144x144.png">
  <!-- PWA primary color-->
  <meta name="theme-color" content="#03ACF2">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,900&amp;display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Facebook-->
  <meta property="author" content="nirwana">
  <meta property="og:site_name" content="alexstrap.ux-maestro.com">
  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="website">
  <!-- Twitter-->
  <meta property="twitter:site" content="nirwana.ux-maestro.com">
  <meta property="twitter:domain" content="nirwana.ux-maestro.com">
  <meta property="twitter:creator" content="nirwana">
  <meta property="twitter:card" content="summary">
  <meta property="twitter:image:src" content="./assets/images/logo-medical.png">
  <meta property="og:url" content="nirwana.indisains.com/medical">
  <meta property="og:title" content="Medical">
  <meta property="og:description" content="<?php echo $text['meta_description']; ?>">
  <meta name="twitter:site" content="nirwana.indisains.com/medical">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:image" content="/images/logo-medical.png">
  <meta property="og:image" content="/images/logo-medical.png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <title><?php echo $text['site_title']; ?></title>
  <!-- Styles-->
  <link href="./assets/css/vendors/normalize.css" rel="stylesheet">
  <link href="./assets/css/vendors/bootstrap.css" rel="stylesheet">
  <link href="./assets/css/vendors/magnific-popup.css" rel="stylesheet">
  <link href="./assets/css/vendors/materialize.css" rel="stylesheet">
  <link href="./assets/css/vendors/hamburger-menu.css" rel="stylesheet">
  <link href="./assets/css/vendors/animate.css" rel="stylesheet">
  <link href="./assets/css/vendors/animate-extends.css" rel="stylesheet">
  <link href="./assets/css/vendors/slick-carousel/slick.css" rel="stylesheet">
  <link href="./assets/css/vendors/slick-carousel/slick-theme.css" rel="stylesheet">
  <link href="./assets/css/styles.css" rel="stylesheet">
</head>

<body>
  <div id="preloader" style="position: fixed; z-index: 10000; background: #fafafa; width: 100%; height: 100%">
    <img style="opacity: 0.2; position: fixed; top: calc(50% - 50px); left: calc(50% - 50px)" src="./assets/images/loading.gif" alt="loading">
  </div>
  <div class="m-application theme--light transition-page" id="app">
    <div class="loading"></div>
    <div class="m-content fresh fresh-var" id="main-wrap">
      <div id="blog-page">
        <div class="main-wrap">

          <!-- #### HEADER ####-->
          <div class="sidenav mobile-nav" id="slide_menu">
            <div class="side-multilv">
              <div class="collection side-multilv">
                <ul class="collapsible expandable">
                  <li class="collection-item"><a class="sidenav-close waves-effect menu-list" href="index.php"><?php echo $text['nav_news']; ?></a></li>
                  <li class="collection-item"><a class="sidenav-close waves-effect menu-list" href="index.php"><?php echo $text['nav_testimonial']; ?></a></li>
                  <li class="collection-item"><a class="sidenav-close waves-effect menu-list" href="index.php"><?php echo $text['nav_partners']; ?></a></li>
                  <li class="collection-item group-child has-child">
                    <div class="collapsible-header">
                      <a class="waves-effect text-truncate menu-list" href="#!">
                        <?php echo $text['nav_profile']; ?>
                        <i class="material-icons right">keyboard_arrow_down</i>
                      </a>
                    </div>
                    <div class="collapsible-body">
                      <div class="collection side-group">
                        <ul class="group-child">
                          <li class="collection-header">
                            <div class="title-mega"><?php echo $text['mega_about_us']; ?></div>
                          </li>
                          <li class="collection-item side-group-link">
                            <a class="waves-effect text-truncate menu-list" href="about.php"><?php echo $text['mega_about_overview']; ?></a>
                          </li>
                          <li class="collection-item side-group-link">
                            <a class="waves-effect text-truncate menu-list" href="visi-misi.php"><?php echo $text['mega_vision_mission']; ?></a>
                          </li>
                          <li class="collection-item side-group-link">
                            <a class="waves-effect text-truncate menu-list" href="about-team.php"><?php echo $text['mega_honorary_members']; ?></a>
                          </li>
                          <li class="collection-item side-group-link">
                            <a class="waves-effect text-truncate menu-list" href="news.php"><?php echo $text['mega_news']; ?></a>
                          </li>
                        </ul>
                        <ul class="group-child">
                          <li class="collection-header">
                            <div class="title-mega"><?php echo $text['mega_activities']; ?></div>
                          </li>
                          <li class="collection-item side-group-link">
                            <a class="waves-effect text-truncate menu-list" href="program-kerja.php"><?php echo $text['mega_work_program']; ?></a>
                          </li>
                          <li class="collection-item side-group-link">
                            <a class="waves-effect text-truncate menu-list current" href="agenda.php"><?php echo $text['mega_agenda']; ?></a>
                          </li>
                          <li class="collection-item side-group-link">
                            <a class="waves-effect text-truncate menu-list" href="struktur.php"><?php echo $text['mega_struktur']; ?></a>
                          </li>
                        </ul>
                        <ul class="group-child">
                          <li class="collection-header">
                            <div class="title-mega"><?php echo $text['mega_faq']; ?></div>
                          </li>
                          <li class="collection-item side-group-link">
                            <a class="waves-effect text-truncate menu-list" href="faq.php"><?php echo $text['mega_faq_full']; ?></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="dropdown-divider"></div>
              <div class="collection">
                <ul>
                  <li class="collection-item">
                    <a class="sidenav-close waves-effect menu-list" href="https://www.platform.pdsionline.org/login"><?php echo $text['nav_login']; ?></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <header class="app-bar header" id="header">
            <div class="container">
              <div class="header-content">
                <nav class="nav-menu">
                  <button class="btn-icon waves-effect sidenav-trigger hamburger hamburger--spin show-md-down" id="mobile_menu" type="button" data-target="slide_menu">
                    <span class="hamburger-box"><span class="bar hamburger-inner"></span></span>
                  </button>
                  <div class="logo">
                    <a href="index.php">
                      <span class="logo-main landscape medium"><img src="./assets/images/logo-medical.png" alt="logo" />PDSI</span>
                    </a>
                  </div>
                  <div class="scrollactive-nav show-lg-up multi-menu">
                    <ul class="main-menu">
                      <li>
                        <a class="btn btn-flat anchor-link waves-effect" href="index.php#facility"><?php echo $text['nav_news']; ?></a>
                      </li>
                      <li>
                        <a class="btn btn-flat anchor-link waves-effect" href="index.php#testimonials"><?php echo $text['nav_testimonial']; ?></a>
                      </li>
                      <li>
                        <a class="btn btn-flat anchor-link waves-effect" href="index.php#clinics"><?php echo $text['nav_partners']; ?></a>
                      </li>
                      <li>
                        <button class="btn btn-flat megamenu-trigger-click waves-effect" data-target="sample-page">
                          <?php echo $text['nav_profile']; ?>
                          <i class="material-icons right icon">keyboard_arrow_down</i>
                        </button>
                        <div class="mega-menu-root dropdown-content" id="sample-page">
                          <div class="mega-menu">
                            <div class="container max-md">
                              <div class="row">
                                <div class="col-sm-3 mb-6">
                                  <div class="title-mega"><?php echo $text['mega_about_us']; ?></div>
                                  <img class="thumb-menu" src="./assets/images/medical/menu_marketing@2x.jpg" alt="thumbnail" />
                                  <ul>
                                    <li class="waves-effect"><a class="menu-list" href="about.php"><?php echo $text['mega_about_overview']; ?></a></li>
                                    <li class="waves-effect"><a class="menu-list" href="visi-misi.php"><?php echo $text['mega_vision_mission']; ?></a></li>
                                    <li class="waves-effect"><a class="menu-list" href="about-team.php"><?php echo $text['mega_honorary_members']; ?></a></li>
                                    <li class="waves-effect"><a class="menu-list" href="news.php"><?php echo $text['mega_news']; ?></a></li>
                                  </ul>
                                </div>
                                <div class="col-sm-3 mb-6">
                                  <div class="title-mega"><?php echo $text['mega_activities']; ?></div>
                                  <img class="thumb-menu" src="./assets/images/medical/menu_other@2x.jpg" alt="thumbnail" />
                                  <ul>
                                    <li class="waves-effect"><a class="menu-list" href="program-kerja.php"><?php echo $text['mega_work_program']; ?></a></li>
                                    <li class="waves-effect"><a class="menu-list current" href="agenda.php"><?php echo $text['mega_agenda']; ?></a></li>
                                    <li class="waves-effect"><a class="menu-list" href="struktur.php"><?php echo $text['mega_struktur']; ?></a></li>
                                  </ul>
                                </div>
                                <div class="col-sm-3 mb-6">
                                  <div class="title-mega"><?php echo $text['mega_faq']; ?></div>
                                  <img class="thumb-menu" src="./assets/images/medical/menu_saas2@2x.jpg" alt="thumbnail" />
                                  <ul>
                                    <li class="waves-effect"><a class="menu-list" href="faq.php"><?php echo $text['mega_faq_full']; ?></a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <nav class="user-menu">
                    <a class="btn waves-effect primary show-sm-up" href="https://www.platform.pdsionline.org/login"><?php echo $text['nav_login']; ?></a>
                    <span class="spacer vertical-divider show-lg-up"></span>
                    <div class="menu-setting">
                      <div class="setting">
                        <button class="btn btn-icon waves-effect btn-small dropdown-trigger ma-1" data-target="dropdown_config" data-align="left" type="button">
                          <i class="icon material-icons" id="setting_icon">settings</i>
                        </button>
                        <div class="dropdown-content setting" id="dropdown_config">
                          <ul class="collection with-header">
                            <li class="collection-header"><?php echo $text['theme_mode']; ?></li>
                            <li class="collection-item no-hover pl-4">
                              <div class="flex-menu">
                                <div class="switch">
                                  <label>
                                    <?php echo $text['light']; ?>
                                    <input id="theme_switcher" type="checkbox"><span class="lever"></span>
                                    <?php echo $text['dark']; ?>
                                  </label>
                                </div>
                              </div>
                            </li>
                          </ul>
                          <div class="dropdown-divider"></div>
                          <ul class="collection with-header lang-menu" id="lang_menu">
                            <li class="collection-header"><?php echo $text['language']; ?></li>
                            <li class="collection-item lang-list waves-effect avatar">
                              <a href="?id=<?php echo $articleId; ?>&lang=en">
                                <div class="flag circle"><i class="en"></i></div>
                                <span class="content lang-opt text-truncate"><?php echo $text['lang_english']; ?></span>
                              </a>
                            </li>
                            <li class="collection-item lang-list waves-effect avatar">
                              <a href="?id=<?php echo $articleId; ?>&lang=id">
                                <div class="flag circle"><i class="id"></i></div>
                                <span class="content lang-opt text-truncate"><?php echo $text['lang_indonesian']; ?></span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </nav>
                </nav>
                <div id="container_menu"></div>
              </div>
            </div>
          </header>
          <!-- #### END HEADER ####-->

          <div class="container-general pt-12">
            <div class="container pt-3">
              <div class="row">

                <?php if ($articleNotFound): ?>
                  <!-- ##### ERROR MESSAGE #####-->
                  <div class="col-12">
                    <div class="alert alert-danger text-center">
                      <h4><?php echo $text['article_not_found']; ?></h4>
                      <a href="agenda.php?lang=<?php echo $currentLang; ?>" class="btn btn-primary waves-effect">
                        <?php echo $text['mega_agenda']; ?>
                      </a>
                    </div>
                  </div>
                <?php else: ?>
                  <!-- ##### ARTICLE #####-->
                  <div class="col-md-8 col-sm-12 px-0 px-sm-3">
                    <div class="blog-style">
                      <article class="blog-content">
                        <h4 class="text-h4 title-blog"><?php echo htmlspecialchars($article['title']); ?></h4>
                        <span class="caption"><?php echo $articleDate; ?> <?php echo $text['published_by']; ?> <?php echo htmlspecialchars($article['author']); ?></span>

                        <?php if (!empty($article['attachment'])): ?>
                          <figure class="image-blog">
                            <img src="https://www.platform.pdsionline.org/storage/articles/<?php echo htmlspecialchars($article['attachment']); ?>" alt="<?php echo htmlspecialchars($article['title']); ?>" />
                          </figure>
                        <?php endif; ?>

                        <div class="article-content">
                          <?php
                          // Output the full description (contains HTML from API)
                          // Note: Only do this if you trust the API content
                          echo $article['description'];
                          ?>
                        </div>
                      </article>
                    </div>
                  </div>
                  <!-- ##### END ARTICLE #####-->
                <?php endif; ?>

                <!-- ##### SIDEBAR #####-->
                <div class="col-md-4 col-sm-12 px-0 px-sm-3">
                  <div class="blog-style">
                    <div class="sidebar">
                      <div class="py-3"></div>
                      <div class="card paper">
                        <header>
                          <div class="icon"><i class="material-icons small">account_circle</i></div>
                          <div class="card-content">
                            <span class="card-title"><?php echo $text['sidebar_about_title']; ?></span>
                            <p><?php echo $text['sidebar_about_description']; ?></p>
                          </div>
                        </header>
                        <div class="content">
                          <div>
                            <ul class="collection">
                              <li class="collection-item avatar">
                                <i class="circle icon primary material-icons grey lighten-3">date_range</i>
                                <span class="use-text-medium"><?php echo $text['sidebar_established']; ?></span>
                                <p>27 April 2025</p>
                              </li>
                              <li class="collection-item avatar">
                                <i class="circle icon primary material-icons grey lighten-3">local_phone</i>
                                <span class="use-text-medium"><?php echo $text['sidebar_chairman']; ?></span>
                                <p>Brigjen TNI (Purn) dr. Jajang Edi Priyanto. SpB,. MARS</p>
                              </li>
                              <li class="collection-item avatar">
                                <i class="circle icon primary material-icons grey lighten-3">location_on</i>
                                <span class="use-text-medium"><?php echo $text['sidebar_headquarters']; ?></span>
                                <p><?php echo $text['sidebar_headquarters_location']; ?></p>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="py-3"></div>
                      <div class="card paper">
                        <header>
                          <div class="icon"><i class="material-icons small">bookmark</i></div>
                          <div class="card-content">
                            <span class="card-title"><?php echo $text['sidebar_latest_articles']; ?></span>
                          </div>
                        </header>
                        <div class="content">
                          <div>
                            <div class="collection">
                              <?php foreach ($latestPosts as $latest):
                                $latestDate = date($text['date_format'], strtotime($latest['created_at']));
                              ?>
                                <a class="waves-effect collection-item" href="detail-agenda.php?id=<?php echo $latest['id']; ?>&lang=<?php echo $currentLang; ?>">
                                  <span class="d-block"><?php echo htmlspecialchars($latest['title']); ?></span>
                                  <span class="caption"><?php echo $latestDate; ?></span>
                                </a>
                              <?php endforeach; ?>
                            </div>
                            <a class="btn waves-effect btn-flat primary-text block" href="agenda.php?lang=<?php echo $currentLang; ?>"><?php echo $text['sidebar_see_all']; ?></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ##### END SIDEBAR #####-->
              </div>
            </div>
          </div>

          <!-- ##### FOOTER #####-->
          <div class="space-top-short" id="footer">
            <footer class="footer-sitemap">
              <div class="footer-deco">
                <div class="left-deco"></div>
                <div class="right-deco">
                  <img class="img-2d3d" src="./assets/images/medical/footer_3d@2x.png" data-3d="./assets" data-2d="./assets/images/medical/footer_3d@2x.png" alt="speciality 3d" />
                </div>
              </div>
              <div class="container mq-sm-down" data-class="fixed-width">
                <div class="row">
                  <div class="col-md-6 col-sm-12 pa-lg-6 logo-area">
                    <div class="logo">
                      <span class="logo-main landscape medium"><img src="./assets/images/logo-medical.png" alt="logo" />PDSI</span>
                    </div>
                    <div class="row">
                      <div class="col">
                        <p class="body-2"><?php echo $text['footer_description']; ?></p>
                        <p class="body-2 hidden-sm-down"><?php echo $text['footer_copyright']; ?></p>
                      </div>
                      <div class="col text-right">
                        <p class="body-2"><?php echo $text['footer_address']; ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-12 pa-4">
                    <ul class="show-sm-down collapsible">
                      <li class="accordion-content">
                        <div class="collapsible-header">
                          <h6 class="title"><?php echo $text['footer_legal']; ?></h6><i class="material-icons right arrow">expand_more</i>
                        </div>
                        <ul>
                          <li><a href="#privacy-policy"><?php echo $text['footer_privacy']; ?></a></li>
                          <li><a href="#terms-of-use"><?php echo $text['footer_terms']; ?></a></li>
                        </ul>
                      </li>
                    </ul>
                    <div class="row show-md-up justify-content-around">
                      <div class="col pa-4 site-map-item">
                      </div>
                      <div class="col pa-4 site-map-item">
                      </div>
                      <div class="col pa-4 site-map-item">
                        <h6 class="title mb-4"><?php echo $text['footer_legal']; ?></h6>
                        <ul>
                          <li><a href="#privacy-policy"><?php echo $text['footer_privacy']; ?></a></li>
                          <li><a href="#terms-of-use"><?php echo $text['footer_terms']; ?></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-12 pa-4">
                    <div class="socmed">
                      <a href="https://www.facebook.com/officialpdsi" target="_blank" class="btn btn-icon waves-effect"><span class="ion-social-facebook icon"></span></a>
                      <a href="https://x.com/PP_PDSI" target="_blank" class="btn btn-icon waves-effect"><span class="ion-social-twitter icon"></span></a>
                      <a href="https://www.instagram.com/dokterseluruhindonesia/" target="_blank" class="btn btn-icon waves-effect"><span class="ion-social-instagram icon"></span></a>
                      <a href="https://id.linkedin.com/company/perkumpulan-dokter-seluruh-indonesia" target="_blank" class="btn btn-icon waves-effect"><span class="ion-social-linkedin icon"></span></a>
                    </div>
                    <p class="body-2 mt-5 text-center hidden-md-up">&copy; ICT PDSI</p>
                  </div>
                </div>
              </div>
            </footer>
          </div>
          <!-- ##### END FOOTER #####-->

        </div>
      </div>
    </div>
  </div>
  <!-- Scripts-->
  <script src="./assets/js/vendors/jquery.min.js"></script>
  <script src="./assets/js/vendors/bootstrap.min.js"></script>
  <script src="./assets/js/vendors/enquire.min.js"></script>
  <script src="./assets/js/vendors/jquery.form-validator.min.js"></script>
  <script src="./assets/js/vendors/jquery.touchSwipe.min.js"></script>
  <script src="./assets/js/vendors/jquery.magnific-popup.min.js"></script>
  <script src="./assets/js/vendors/pace.min.js"></script>
  <script src="./assets/js/vendors/slick.min.js"></script>
  <script src="./assets/js/vendors/wow.min.js"></script>
  <script src="./assets/js/vendors/jquery.navScroll.min.js"></script>
  <script src="./assets/js/vendors/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  <script src="./assets/js/vendors/materialize.js"></script>
  <script src="./assets/js/scripts.js"></script>
  <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>
</body>

</html>