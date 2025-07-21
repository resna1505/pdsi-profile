<?php
// Language system
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'id';
if (!in_array($lang, ['id', 'en'])) {
  $lang = 'id';
}

// Translation arrays
$translations = [
  'id' => [
    // Navigation
    'news' => 'berita',
    'testimonials' => 'testimoni',
    'partners' => 'mitra',
    'institution_profile' => 'Profil PDSI',
    'about_us' => 'Tentang Kami',
    'overview' => 'Sekilas',
    'vision_mission' => 'Visi, Misi, Value',
    'honorary_members' => 'Anggota Kehormatan',
    'activities' => 'Kegiatan',
    'work_program' => 'Program Kerja',
    'agenda' => 'Agenda',
    'faq' => 'frequently answer & questions',
    'login' => 'Login',

    // Theme
    'theme_mode' => 'theme mode',
    'light' => 'light',
    'dark' => 'dark',
    'language' => 'Bahasa',
    'lang_english' => 'English',
    'lang_indonesian' => 'Bahasa Indonesia',

    // Page specific
    'page_title' => 'Visi Misi',
    'vision' => 'Visi',
    'mission' => 'Misi',
    'values' => 'Value',
    'motto' => 'Motto',
    'spirit' => 'SPIRIT',
    'loading_error' => 'Gagal memuat data visi misi. Silakan coba lagi nanti.',
    'no_data' => 'Data visi misi belum tersedia.',

    // Footer
    'footer_description' => 'Platform pelatihan dan pengembangan kompetensi dokter di Indonesia, dengan kurikulum terstandar dan dukungan mitra terpercaya.',
    'copyright' => '© Copyright 2025 PDSI',
    'legal' => 'Legal',
    'privacy_policy' => 'Privacy policy',
    'terms_of_use' => 'Terms of use',
    'address' => 'KTC Mall Lantai 3 Jl. Pulau Putri No.2, RW.9, Klp. Gading Bar., Kec. Klp. Gading, Kota Jkt Utara, Jakarta, Indonesia 14240.',
  ],
  'en' => [
    // Navigation
    'news' => 'news',
    'testimonials' => 'testimonials',
    'partners' => 'partners',
    'institution_profile' => 'Institution Profile',
    'about_us' => 'About Us',
    'overview' => 'Overview',
    'vision_mission' => 'Vision, Mission, Values',
    'honorary_members' => 'Honorary Members',
    'activities' => 'Activities',
    'work_program' => 'Work Program',
    'agenda' => 'Agenda',
    'faq' => 'frequently asked questions',
    'login' => 'Login',

    // Theme
    'theme_mode' => 'theme mode',
    'light' => 'light',
    'dark' => 'dark',
    'language' => 'Language',
    'lang_english' => 'English',
    'lang_indonesian' => 'Bahasa Indonesia',

    // Page specific
    'page_title' => 'Vision Mission',
    'vision' => 'Vision',
    'mission' => 'Mission',
    'values' => 'Values',
    'motto' => 'Motto',
    'spirit' => 'SPIRIT',
    'loading_error' => 'Failed to load vision mission data. Please try again later.',
    'no_data' => 'Vision mission data is not yet available.',

    // Footer
    'footer_description' => 'Training and competency development platform for doctors in Indonesia, with standardized curriculum and trusted partner support.',
    'copyright' => '© Copyright 2025 PDSI',
    'legal' => 'Legal',
    'privacy_policy' => 'Privacy policy',
    'terms_of_use' => 'Terms of use',
    'address' => 'KTC Mall 3rd Floor, Jl. Pulau Putri No.2, RW.9, Klp. Gading Bar., Kec. Klp. Gading, North Jakarta City, Jakarta, Indonesia 14240.',
  ]
];

$text = $translations[$lang];

// Function to get current URL with language parameter
function getCurrentUrl($newLang)
{
  $currentUrl = $_SERVER['REQUEST_URI'];
  $urlParts = parse_url($currentUrl);
  parse_str($urlParts['query'] ?? '', $params);
  $params['lang'] = $newLang;
  return $urlParts['path'] . '?' . http_build_query($params);
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="description" content="Nirwana Medical - HTML5 Bootstrap Template">
  <meta name="viewport" content="minimum-scale=1, initial-scale=1, width=device-width, shrink-to-fit=no"><!-- Favicon-->
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
  <meta name="msapplication-TileImage" content="./assets/favicons/ms-icon-144x144.png"><!-- PWA primary color-->
  <meta name="theme-color" content="#03ACF2">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,900&amp;display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"><!-- Facebook-->
  <meta property="author" content="nirwana">
  <meta property="og:site_name" content="alexstrap.ux-maestro.com">
  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="website"><!-- Twitter-->
  <meta property="twitter:site" content="nirwana.ux-maestro.com">
  <meta property="twitter:domain" content="nirwana.ux-maestro.com">
  <meta property="twitter:creator" content="nirwana">
  <meta property="twitter:card" content="summary">
  <meta property="twitter:image:src" content="./assets/images/logo-medical.png">
  <meta property="og:url" content="nirwana.indisains.com/medical">
  <meta property="og:title" content="Medical">
  <meta property="og:description" content="Nirwana Medical - HTML5 Bootstrap Template">
  <meta name="twitter:site" content="nirwana.indisains.com/medical">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:image" content="/images/logo-medical.png">
  <meta property="og:image" content="/images/logo-medical.png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <title>PDSI - <?php echo $text['page_title']; ?></title><!-- Styles-->
  <!-- Put the 3rd/plugins css here-->

  <style>
    .plus-icon {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 18px;
      height: 18px;
      border-radius: 50%;
      background-color: #ff0000;
      color: white;
      font-size: 14px;
      font-weight: bold;
      flex-shrink: 0;
      margin-top: 3px;
    }

    .value-item,
    .visi-item {
      display: flex;
      align-items: flex-start;
      margin-bottom: 1rem;
    }

    .value-text,
    .visi-text {
      margin-left: 10px;
      font-size: 15px;
    }

    .section-title {
      font-weight: 700;
      font-size: 1.5rem;
      margin-bottom: 1.5rem;
    }

    .motto-title {
      color: red;
      font-weight: bold;
      font-size: 1.75rem;
    }

    @media (max-width: 767px) {
      .section-title {
        font-size: 1.25rem;
      }
    }

    /* Language flag icons */
    .flag.circle {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #f5f5f5;
    }

    .flag i.en {
      background: url('https://flagcdn.com/w40/us.png') center/cover no-repeat;
      width: 24px;
      height: 24px;
      display: block;
    }

    .flag i.id {
      background: url('https://flagcdn.com/w40/id.png') center/cover no-repeat;
      width: 24px;
      height: 24px;
      display: block;
    }

    .lang-menu .lang-list {
      transition: background-color 0.3s ease;
    }

    .lang-menu .lang-list:hover {
      background-color: rgba(0, 0, 0, 0.05);
    }

    .lang-opt {
      margin-left: 10px;
      font-weight: 500;
    }
  </style>

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
  <div id="preloader" style="position: fixed; z-index: 10000; background: #fafafa; width: 100%; height: 100%"><img style="opacity: 0.2; position: fixed; top: calc(50% - 50px); left: calc(50% - 50px)" src="./assets/images/loading.gif" alt="loading"></div>
  <div class="m-application theme--light transition-page" id="app">
    <div class="loading"></div>
    <div class="m-content fresh fresh-var" id="main-wrap">
      <div id="pricing-page">
        <div class="main-wrap">

          <!-- #### HEADER ####-->
          <div class="sidenav mobile-nav" id="slide_menu">
            <div class="side-multilv">
              <div class="collection side-multilv">
                <ul class="collapsible expandable">
                  <li class="collection-item"><a class="sidenav-close waves-effect menu-list" href="index.php?lang=<?php echo $lang; ?>"><?php echo $text['news']; ?></a></li>
                  <li class="collection-item"><a class="sidenav-close waves-effect menu-list" href="index.php?lang=<?php echo $lang; ?>"><?php echo $text['testimonials']; ?></a></li>
                  <li class="collection-item"><a class="sidenav-close waves-effect menu-list" href="index.php?lang=<?php echo $lang; ?>"><?php echo $text['partners']; ?></a></li>
                  <li class="collection-item group-child has-child">
                    <div class="collapsible-header">
                      <a class="waves-effect text-truncate menu-list" href="#!">
                        <?php echo $text['institution_profile']; ?>
                        <i class="material-icons right">keyboard_arrow_down</i>
                      </a>
                    </div>
                    <div class="collapsible-body">
                      <div class="collection side-group">
                        <ul class="group-child">
                          <li class="collection-header">
                            <div class="title-mega"><?php echo $text['about_us']; ?></div>
                          </li>
                          <li class="collection-item side-group-link">
                            <a class="waves-effect text-truncate menu-list" href="about.php?lang=<?php echo $lang; ?>"><?php echo $text['overview']; ?></a>
                          </li>
                          <li class="collection-item side-group-link">
                            <a class="waves-effect text-truncate menu-list current" href="visi-misi.php?lang=<?php echo $lang; ?>"><?php echo $text['vision_mission']; ?></a>
                          </li>
                          <li class="collection-item side-group-link">
                            <a class="waves-effect text-truncate menu-list" href="about-team.php?lang=<?php echo $lang; ?>"><?php echo $text['honorary_members']; ?></a>
                          </li>
                          <li class="collection-item side-group-link">
                            <a class="waves-effect text-truncate menu-list" href="news.php?lang=<?php echo $lang; ?>">Berita</a>
                          </li>
                        </ul>
                        <ul class="group-child">
                          <li class="collection-header">
                            <div class="title-mega"><?php echo $text['activities']; ?></div>
                          </li>
                          <li class="collection-item side-group-link">
                            <a class="waves-effect text-truncate menu-list" href="program-kerja.php?lang=<?php echo $lang; ?>"><?php echo $text['work_program']; ?></a>
                          </li>
                          <li class="collection-item side-group-link">
                            <a class="waves-effect text-truncate menu-list" href="agenda.php?lang=<?php echo $lang; ?>"><?php echo $text['agenda']; ?></a>
                          </li>
                        </ul>
                        <ul class="group-child">
                          <li class="collection-header">
                            <div class="title-mega">FAQ</div>
                          </li>
                          <li class="collection-item side-group-link">
                            <a class="waves-effect text-truncate menu-list" href="faq.php?lang=<?php echo $lang; ?>"><?php echo $text['faq']; ?></a>
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
                    <a class="sidenav-close waves-effect menu-list" href="https://www.platform.pdsionline.org/login"><?php echo $text['login']; ?></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <header class="app-bar header" id="header">
            <div class="container">
              <div class="header-content">
                <nav class="nav-menu">
                  <button class="btn-icon waves-effect sidenav-trigger hamburger hamburger--spin show-md-down" id="mobile_menu" type="button" data-target="slide_menu"><span class="hamburger-box"><span class="bar hamburger-inner"></span></span></button>
                  <div class="logo">
                    <a href="index.php?lang=<?php echo $lang; ?>">
                      <span class="logo-main landscape medium"><img src="./assets/images/logo-medical.png" alt="logo" />PDSI</span>
                    </a>
                  </div>
                  <div class="scrollactive-nav show-lg-up multi-menu">
                    <ul class="main-menu">
                      <li>
                        <a class="btn btn-flat anchor-link waves-effect" href="index.php?lang=<?php echo $lang; ?>#facility"><?php echo $text['news']; ?></a>
                      </li>
                      <li>
                        <a class="btn btn-flat anchor-link waves-effect" href="index.php?lang=<?php echo $lang; ?>#testimonials"><?php echo $text['testimonials']; ?></a>
                      </li>
                      <li>
                        <a class="btn btn-flat anchor-link waves-effect" href="index.php?lang=<?php echo $lang; ?>#clinics"><?php echo $text['partners']; ?></a>
                      </li>
                      <li>
                        <button class="btn btn-flat megamenu-trigger-click waves-effect" data-target="sample-page">
                          <?php echo $text['institution_profile']; ?>
                          <i class="material-icons right icon">keyboard_arrow_down</i>
                        </button>
                        <div class="mega-menu-root dropdown-content" id="sample-page">
                          <div class="mega-menu">
                            <div class="container max-md">
                              <div class="row">
                                <div class="col-sm-3 mb-6">
                                  <div class="title-mega"><?php echo $text['about_us']; ?></div>
                                  <img class="thumb-menu" src="./assets/images/medical/menu_marketing@2x.jpg" alt="thumbnail" />
                                  <ul>
                                    <li class="waves-effect"><a class="menu-list" href="about.php?lang=<?php echo $lang; ?>"><?php echo $text['overview']; ?></a></li>
                                    <li class="waves-effect"><a class="menu-list current" href="visi-misi.php?lang=<?php echo $lang; ?>"><?php echo $text['vision_mission']; ?></a></li>
                                    <li class="waves-effect"><a class="menu-list" href="about-team.php?lang=<?php echo $lang; ?>"><?php echo $text['honorary_members']; ?></a></li>
                                    <li class="waves-effect"><a class="menu-list" href="news.php?lang=<?php echo $lang; ?>">Berita</a></li>
                                  </ul>
                                </div>
                                <div class="col-sm-3 mb-6">
                                  <div class="title-mega"><?php echo $text['activities']; ?></div>
                                  <img class="thumb-menu" src="./assets/images/medical/menu_other@2x.jpg" alt="thumbnail" />
                                  <ul>
                                    <li class="waves-effect"><a class="menu-list" href="program-kerja.php?lang=<?php echo $lang; ?>"><?php echo $text['work_program']; ?></a></li>
                                    <li class="waves-effect"><a class="menu-list" href="agenda.php?lang=<?php echo $lang; ?>"><?php echo $text['agenda']; ?></a></li>
                                  </ul>
                                </div>
                                <div class="col-sm-3 mb-6">
                                  <div class="title-mega">FAQ</div>
                                  <img class="thumb-menu" src="./assets/images/medical/menu_saas2@2x.jpg" alt="thumbnail" />
                                  <ul>
                                    <li class="waves-effect"><a class="menu-list" href="faq.php?lang=<?php echo $lang; ?>"><?php echo $text['faq']; ?></a></li>
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
                    <a class="btn waves-effect primary show-sm-up" href="https://www.platform.pdsionline.org/login"><?php echo $text['login']; ?></a>
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
                          <ul class="collection with-header lang-menu" id="lang_menu">
                            <li class="collection-header"><?php echo $text['language']; ?></li>
                            <li class="collection-item lang-list waves-effect avatar">
                              <a href="<?php echo getCurrentUrl('en'); ?>">
                                <div class="flag circle"><i class="en"></i></div>
                                <span class="content lang-opt text-truncate"><?php echo $text['lang_english']; ?></span>
                              </a>
                            </li>
                            <li class="collection-item lang-list waves-effect avatar">
                              <a href="<?php echo getCurrentUrl('id'); ?>">
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

          <?php
          $response = file_get_contents('https://www.platform.pdsionline.org/api/visimisi');

          if ($response === false) {
            echo '<div class="container py-5"><div class="alert alert-danger">' . $text['loading_error'] . '</div></div>';
          } else {
            $data = json_decode($response, true);

            if (!$data) {
              echo '<div class="container py-5"><div class="alert alert-danger">' . $text['loading_error'] . '</div></div>';
            } else {
          ?>

              <div class="space-top-short container py-5">
                <!-- Visi Section -->
                <div class="row justify-content-center mb-5">
                  <div class="col-lg-10 col-md-12">
                    <h4 class="section-title mb-4 text-center"><?php echo $text['vision']; ?></h4>

                    <?php if (!empty($data['visi'])): ?>
                      <?php foreach ($data['visi'] as $item): ?>
                        <div class="visi-item">
                          <div class="plus-icon">+</div>
                          <div class="visi-text"><?= htmlspecialchars($item) ?></div>
                        </div>
                      <?php endforeach; ?>
                    <?php else: ?>
                      <div class="alert alert-info"><?php echo $text['no_data']; ?></div>
                    <?php endif; ?>
                  </div>
                </div>

                <!-- Misi Section -->
                <div class="row justify-content-center mb-5">
                  <div class="col-lg-10 col-md-12">
                    <h4 class="section-title mb-4 text-center"><?php echo $text['mission']; ?></h4>

                    <?php if (!empty($data['misi'])): ?>
                      <?php foreach ($data['misi'] as $item): ?>
                        <div class="visi-item">
                          <div class="plus-icon">+</div>
                          <div class="visi-text"><?= htmlspecialchars($item) ?></div>
                        </div>
                      <?php endforeach; ?>
                    <?php else: ?>
                      <div class="alert alert-info"><?php echo $text['no_data']; ?></div>
                    <?php endif; ?>
                  </div>
                </div>

                <!-- Value Section -->
                <div class="row justify-content-center">
                  <div class="col-lg-10 col-md-12">
                    <h4 class="section-title mb-4 text-center"><?php echo $text['values']; ?></h4>

                    <?php if (!empty($data['value'])): ?>
                      <div class="row">
                        <?php foreach ($data['value'] as $val): ?>
                          <div class="col-lg-6 col-md-12 mb-3">
                            <div class="value-item">
                              <div class="plus-icon">+</div>
                              <div class="value-text">
                                <strong><?= htmlspecialchars($val['title']) ?></strong><br>
                                <?= htmlspecialchars($val['description']) ?>
                              </div>
                            </div>
                          </div>
                        <?php endforeach; ?>
                      </div>
                    <?php else: ?>
                      <div class="alert alert-info"><?php echo $text['no_data']; ?></div>
                    <?php endif; ?>
                  </div>
                </div>

                <div class="row mt-5">
                  <div class="col-lg-5 col-md-12">
                    <h4 class="section-title mb-4"><?php echo $text['motto']; ?></h4>
                    <p class="motto-title"><?php echo $text['spirit']; ?></p>
                    <p class="motto-list"><?= htmlspecialchars($data['motto'] ?? '') ?></p>
                  </div>
                </div>
              </div>

          <?php
            }
          }
          ?>

          <!-- ##### FOOTER #####-->
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
                      <p class="body-2 hidden-sm-down"><?php echo $text['copyright']; ?></p>
                    </div>
                    <div class="col text-right">
                      <p class="body-2"><?php echo $text['address']; ?></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-12 pa-4">
                  <ul class="show-sm-down collapsible">
                    <li class="accordion-content">
                      <div class="collapsible-header">
                        <h6 class="title"><?php echo $text['legal']; ?></h6><i class="material-icons right arrow">expand_more</i>
                      </div>
                      <ul>
                        <li><a href="#privacy-policy"><?php echo $text['privacy_policy']; ?></a></li>
                        <li><a href="#terms-of-use"><?php echo $text['terms_of_use']; ?></a></li>
                      </ul>
                    </li>
                  </ul>
                  <div class="row show-md-up justify-content-around">
                    <div class="col pa-4 site-map-item">
                    </div>
                    <div class="col pa-4 site-map-item">
                    </div>
                    <div class="col pa-4 site-map-item">
                      <h6 class="title mb-4"><?php echo $text['legal']; ?></h6>
                      <ul>
                        <li><a href="#privacy-policy"><?php echo $text['privacy_policy']; ?></a></li>
                        <li><a href="#terms-of-use"><?php echo $text['terms_of_use']; ?></a></li>
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
          <!-- ##### END FOOTER #####-->
        </div>
      </div>
    </div>
  </div><!-- Scripts-->
  <!-- Put the 3rd/plugins javascript here-->
  <script src="./assets/js/vendors/jquery.min.js"></script>
  <script src="./assets/js/vendors/bootstrap.min.js"></script>
  <script src="./assets/js/vendors/enquire.min.js"></script>
  <script src="./assets/js/vendors/jquery.form-validator.min.js"></script>
  <script src="./assets/js/vendors/jquery.touchSwipe.min.js"></script>
  <script src="./assets/js/vendors/jquery.magnific-popup.min.js"></script>
  <script src="./assets/js/vendors/pace.min.js"></script>
  <script src="./assets/js/vendors/slick.min.js"></script>
  <script src="./assets/js/vendors/wow.min.js"></script>
  <script src="./assets/js/vendors/jquery.navScroll.min.js"></script><!-- This assets are not avalaible in npm.js or it has been costumized-->
  <script src="./assets/js/vendors/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  <script src="./assets/js/vendors/materialize.js"></script>
  <script src="./assets/js/scripts.js"></script>
  <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>
</body>

</html>