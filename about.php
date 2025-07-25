<?php
session_start();

// Language configuration
$languages = [
  'id' => [
    'site_title' => 'PDSI - Sekilas',
    'meta_description' => 'Sekilas tentang PDSI - Lembaga pelatihan kedokteran berakreditasi terpercaya di Indonesia',

    // Navigation
    'nav_news' => 'berita',
    'nav_testimonial' => 'Pengakuan',
    'nav_partners' => 'mitra',
    'nav_profile' => 'Profil PDSI',
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

    // Banner
    'banner_title' => 'Lembaga Pelatihan Kedokteran Berakreditasi',
    'banner_subtitle' => 'Sebagai pionir dalam pelatihan kedokteran, kami menyediakan kurikulum berbasis kompetensi dan fasilitas simulasi canggih untuk mempersiapkan tenaga medis profesional',

    // Counter Section
    'counter_certified_doctors' => 'Dokter Tersertifikasi',
    'counter_partners' => 'Mitra',
    'counter_evaluation' => 'Evaluasi',

    // Video Section
    'video_section_title' => 'Metode Pembelajaran Kami',
    'video_section_subtitle' => 'Kami memadukan keahlian medis dengan teknologi terkini untuk pengalaman pelatihan yang optimal:',

    // Gallery Section
    'gallery_title' => 'Galeri Kegiatan & Fasilitas',
    'gallery_subtitle' => 'Lihat langsung suasana pelatihan, fasilitas modern, dan momen penting dari program sertifikasi kami. Setiap gambar mencerminkan komitmen kami dalam menyediakan pendidikan kedokteran berkualitas tinggi.',
    'gallery_no_data' => 'Tidak ada data galeri.',
    'gallery_activity' => 'Kegiatan',

    // Footer
    'footer_description' => 'Platform Perkumpulan Dokter Seluruh Indonesia & Lembaga Pendidikan dan Pelatihan Dokter Seluruh Indonesia',
    'footer_copyright' => 'Copyright 2025©Ict-Pekumpulan Dokter Seluruh Indonesia-PDSI-LPDSI',
    'footer_address' => 'KTC Mall Kelapa Gading Lt.3 - Vinski Tower: 
Jl.Ciputat Raya No.22A, Pd.Pinang, 
Kec.Kby.Lama, Kota Jakarta Selatan, 
Daerah Khusus Ibukota Jakarta 12310',
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
    'site_title' => 'PDSI - Overview',
    'meta_description' => 'Overview of PDSI - Trusted accredited medical training institution in Indonesia',

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

    // Banner
    'banner_title' => 'Accredited Medical Training Institution',
    'banner_subtitle' => 'As a pioneer in medical training, we provide competency-based curriculum and advanced simulation facilities to prepare professional medical personnel',

    // Counter Section
    'counter_certified_doctors' => 'Certified Doctors',
    'counter_partners' => 'Partners',
    'counter_evaluation' => 'Evaluation',

    // Video Section
    'video_section_title' => 'Our Learning Methods',
    'video_section_subtitle' => 'We combine medical expertise with cutting-edge technology for an optimal training experience:',

    // Gallery Section
    'gallery_title' => 'Activity & Facility Gallery',
    'gallery_subtitle' => 'See firsthand the training atmosphere, modern facilities, and important moments from our certification programs. Each image reflects our commitment to providing high-quality medical education.',
    'gallery_no_data' => 'No gallery data available.',
    'gallery_activity' => 'Activity',

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

// API Data fetching
$response = file_get_contents('https://www.platform.pdsionline.org/api/about');
$data = json_decode($response);
$totalDokter = $data->data->dokter;
$totalMitra = $data->data->mitra;
$totalEvaluasi = $data->data->evaluasi;
$video = $data->data->videos[0];
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
  <link rel="icon" type="image/png" sizes="192x192" href="./assets/favicons/favicon.png">
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
  <meta property="og:title" content="PDSI">
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

  <style>
    .custom-modal {
      display: none;
      position: fixed;
      z-index: 10000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
    }

    .modal-backdrop {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      /* Remove or comment out the background-color line below to remove blur effect */
      /* background-color: rgba(0, 0, 0, 0.5); */

      /* Alternative: Use a very light background or transparent */
      background-color: transparent;

      /* Or if you want a subtle background without blur, use: */
      /* background-color: rgba(0, 0, 0, 0.1); */
    }

    .modal-container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background: white;
      border-radius: 8px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
      max-width: 600px;
      width: 90%;
      max-height: 80vh;
      overflow-y: auto;
      animation: modalFadeIn 0.3s ease-out;
      /* Add a stronger shadow to make modal stand out without backdrop */
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.4);
    }

    @keyframes modalFadeIn {
      from {
        opacity: 0;
        transform: translate(-50%, -60%);
      }

      to {
        opacity: 1;
        transform: translate(-50%, -50%);
      }
    }

    .modal-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
      border-bottom: 1px solid #eee;
    }

    .modal-header h4 {
      margin: 0;
      color: #333;
      font-size: 1.5rem;
      font-weight: 600;
    }

    .close-btn {
      background: none;
      border: none;
      font-size: 2rem;
      color: #999;
      cursor: pointer;
      padding: 0;
      width: 30px;
      height: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      transition: all 0.3s ease;
    }

    .close-btn:hover {
      background-color: #f5f5f5;
      color: #333;
    }

    .modal-body {
      padding: 20px;
    }

    .modal-body p {
      margin-bottom: 15px;
      line-height: 1.6;
      color: #555;
      text-align: justify;
    }

    .modal-body p:last-child {
      margin-bottom: 0;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .modal-container {
        width: 95%;
        max-height: 90vh;
      }

      .modal-header h4 {
        font-size: 1.2rem;
      }

      .modal-header,
      .modal-body {
        padding: 15px;
      }
    }
  </style>
</head>

<body>
  <div id="preloader" style="position: fixed; z-index: 10000; background: #fafafa; width: 100%; height: 100%">
    <img style="opacity: 0.2; position: fixed; top: calc(50% - 50px); left: calc(50% - 50px)" src="./assets/images/loading.gif" alt="loading">
  </div>
  <div class="m-application theme--light transition-page" id="app">
    <div class="loading"></div>
    <div class="m-content fresh fresh-var" id="main-wrap">
      <div id="about-page">
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
                            <a class="waves-effect text-truncate menu-list current" href="about.php"><?php echo $text['mega_about_overview']; ?></a>
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
                            <a class="waves-effect text-truncate menu-list" href="agenda.php"><?php echo $text['mega_agenda']; ?></a>
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
                                    <li class="waves-effect"><a class="menu-list current" href="about.php"><?php echo $text['mega_about_overview']; ?></a></li>
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
                                    <li class="waves-effect"><a class="menu-list" href="agenda.php"><?php echo $text['mega_agenda']; ?></a></li>
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
                              <a href="?lang=en">
                                <div class="flag circle"><i class="en"></i></div>
                                <span class="content lang-opt text-truncate"><?php echo $text['lang_english']; ?></span>
                              </a>
                            </li>
                            <li class="collection-item lang-list waves-effect avatar">
                              <a href="?lang=id">
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

          <!-- ##### BANNER #####-->
          <div class="hero-banner-wrap">
            <div class="deco-wrap">
              <div class="deco bottom s1">&nbsp;</div>
              <div class="deco top s1">&nbsp;</div>
            </div>
            <div class="container">
              <div class="banner-basic">
                <div class="banner-wrap">
                  <div class="inner">
                    <div class="row d-flex justify-content-center align-items-center">
                      <div class="col-md-6 px-sm-5 px-0 py-4">
                        <div class="text">
                          <h4 class="use-text-title"><?php echo $text['banner_title']; ?></h4>
                          <h5 class="use-text-subtitle2">Sekilas tentang Perkumpulan Dokter Seluruh Indonesia
                            Adalah organisasi profesi Dokter Indonesia yang lahir dari kesadaran dan pentingnya Reformasi sistem kedokteran Nasional yang lebih adil, profesional, terbuka, dan berpihak pada rakyat serta membela Negara kesatuan Republik Indonesia.</h5>
                          <button id="openModal" class="btn waves-effect primary">see detail</button>
                        </div>
                      </div>
                      <div class="col-md-6 px-sm-5 py-4">
                        <div class="img">
                          <img class="img-2d3d" src="./assets/images/medical/about_3d@2x.png" data-2d="./assets" data-3d="./assets/images/medical/about_3d@2x.png" alt="services 3d" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Custom Modal -->
          <div id="customModal" class="custom-modal">
            <div class="modal-backdrop"></div>
            <div class="modal-container">
              <div class="modal-header">
                <h4>Sekilas tentang Perkumpulan Dokter Seluruh Indonesia</h4>
                <button id="closeModal" class="close-btn">&times;</button>
              </div>
              <div class="modal-body">
                <p>
                  Sekilas tentang Perkumpulan Dokter Seluruh Indonesia adalah organisasi profesi Dokter Indonesia yang lahir dari kesadaran dan pentingnya Reformasi sistem kedokteran Nasional yang lebih adil, profesional, terbuka, dan berpihak pada rakyat serta membela Negara kesatuan Republik Indonesia.
                </p>
                <p>
                  Perkumpulan Dokter Seluruh Indonesia hadir untuk mewadahi semangat para dokter indonesia yang menginginkan perubahan dalam dunia kedokteran, dengan menjunjung tinggi nilai kesejawatan sejati, Profesionalisme dan pengabdian kepada bangsa.
                </p>
                <p>
                  Perkumpulan Dokter Seluruh Indonesia secara resmi disahkan sebagai badan hukum oleh kementerian hukum dan hak asasi manusia Republik Indonesia melalui surat keputusan Nomor. AHU-0003638.AH.01.07 Tahun 2022, selanjutnya Perkumpulan Dokter Seluruh Indonesia di deklerasikan kepada publik secara resmi pada tanggal 27 April 2022, sebagai tunggak awal pergerakan kedokteran inklusif dan berorientasi pada pelayanan serta inovasi.
                </p>
                <p>
                  Perkumpulan Dokter Seluruh Indonesia bukan sekedar profesi organisasi tetapi gerakan moral dan profesional para dokter indonesia untuk menciptakan sistem kedokteran berkualitas, transparan, inklusif dan berpihak kepada rakyat.
                </p>
                <p>
                  Dengan semangat kolaborasi, inovasi, dan kesejawatan, Perkumpulan Dokter Seluruh Indonesia membuka lembaran baru bagi masa depan dunia kedokteran.
                </p>
              </div>
            </div>
          </div>
          <!-- ##### BANNER #####-->

          <!-- ##### COUNTER #####-->
          <div class="space-top-short">
            <div class="counter-style" id="counter_target">
              <div class="container max-md">
                <div class="row justify-content-center align-items-center">

                  <!-- Dokter Counter -->
                  <div class="col py-4">
                    <div class="counter-item">
                      <span class="icon ion-flag use-text-primary-color"></span>
                      <div class="text">
                        <!-- <h4 class="display-1">+ <span class="numscroller" data-min="0" data-delay="5" data-increment="8">&nbsp;<?= htmlspecialchars($totalDokter) ?></span></h4> -->
                        <h6 class="use-text-subtitle2"><?php echo $text['counter_certified_doctors']; ?></h6>
                      </div>
                    </div>
                  </div>

                  <!-- Mitra Counter -->
                  <div class="col py-4">
                    <div class="counter-item">
                      <span class="icon ion-android-people use-text-secondary-color"></span>
                      <div class="text">
                        <!-- <h4 class="display-1">+ <span class="numscroller" data-min="0" data-delay="5" data-increment="8">&nbsp;<?= htmlspecialchars($totalMitra) ?></span></h4> -->
                        <h6 class="use-text-subtitle2"><?php echo $text['counter_partners']; ?></h6>
                      </div>
                    </div>
                  </div>

                  <!-- Evaluasi Counter -->
                  <div class="col py-4">
                    <div class="counter-item">
                      <span class="icon ion-android-globe use-text-accent-color"></span>
                      <div class="text">
                        <h4 class="display-1"><span class="numscroller" data-min="0" data-delay="5" data-increment="8">&nbsp;<?= htmlspecialchars($totalEvaluasi) ?></span> %</h4>
                        <h6 class="use-text-subtitle2"><?php echo $text['counter_evaluation']; ?></h6>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- ##### END COUNTER #####-->

          <!-- ##### VIDEO PROGRESS #####-->
          <div class="container">
            <div class="row justify-content-center">

              <!-- Kolom Video -->
              <div class="col-md-6 col-sm-8 px-0 px-sm-4 px-lg-12">
                <div class="about-style">
                  <div class="video-root">
                    <div class="modal video-popup" id="video_modal">
                      <div class="modal-content">
                        <h4 class="use-text-subtitle mb-3"><?= $video->title ?></h4>
                        <button class="btn-icon modal-close close-btn waves-effect"><i class="material-icons">close</i></button>
                        <div class="text-center">
                          <div id="video_iframe">
                            <iframe width="100%" height="300" src="<?= $video->url ?>" frameborder="0" allowfullscreen></iframe>
                          </div>
                        </div>
                      </div>
                    </div>

                    <h4 class="use-text-title2 mb-3 use-text-primary"><?php echo $text['video_section_title']; ?></h4>
                    <p class="pb-2 use-text-subtitle2"><?php echo $text['video_section_subtitle']; ?></p>
                    <div class="video-wrap">
                      <div class="modal-trigger" data-target="video_modal" data-video="<?= $video->url ?>">
                        <div class="card media-card landscape video">
                          <span class="badge grey darken-4"><?= $video->duration ?></span>
                          <figure><img src="./assets/images/medical/metode-pembelajaran-1.jpg" alt="cover" /></figure>
                          <div class="property">
                            <a class="btn play-btn waves-effect"><span class="ion-ios-play"></span></a>
                            <div class="card-title media-title"><?= $video->title ?></div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <!-- Kolom Progress -->
              <div class="col-md-6 col-sm-8 px-0 px-sm-4 px-lg-12">
                <div class="about-style">
                  <div class="progress-wrap">
                    <ul class="zero" id="progress">

                      <?php foreach ($video->learning_methods as $method): ?>
                        <li>
                          <div class="text-icon"><i class="ion-wand use-text-primary-color"></i>
                            <h5 class="use-text-subtitle2"><?= $method->name ?></h5>
                          </div>
                          <div class="progress">
                            <div class="determinate progress-linear primary" style="width: <?= $method->pivot->progress ?>%"></div>
                          </div>
                        </li>
                      <?php endforeach; ?>

                    </ul>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- ##### END VIDEO PROGRESS #####-->

          <!-- ##### PHOTO SLIDER #####-->
          <div class="space-bottom-short">
            <div class="about-style">
              <div class="container gallery-root">
                <h4 class="use-text-title2 mb-3"><?php echo $text['gallery_title']; ?></h4>
                <p class="use-text-subtitle2">
                  <?php echo $text['gallery_subtitle']; ?>
                </p>
                <div class="carousel">
                  <button class="btn btn-icon waves-effect btn-small nav prev" id="team_prev">
                    <i class="icon material-icons">arrow_back</i>
                  </button>

                  <div class="photo-carousel" id="about_photo_carousel">
                    <?php
                    if (!empty($data->data->activities)) {
                      $counter = 0;
                      foreach ($data->data->activities as $activity) {
                        if (!empty($activity->photos)) {
                          foreach ($activity->photos as $photo) {
                            $imgSrc = './assets/images/medical/' . $photo->image;
                            $title = $activity->title ?? $text['gallery_activity'];
                    ?>
                            <div class="item px-sm-3 px-1 showImg" data-index="<?= $counter ?>">
                              <div class="showimg">
                                <a class="waves-effect" href="<?= $imgSrc ?>"><img src="<?= $imgSrc ?>" alt="photo" /></a>
                              </div>
                              <div class="card media-card portrait photo">
                                <a class="cover-link waves-effect" href="<?= $imgSrc ?>"></a>
                                <figure><img src="<?= $imgSrc ?>" alt="cover" /></figure>
                                <div class="property">
                                  <div class="card-title media-title"><?= $title ?></div>
                                </div>
                              </div>
                            </div>
                    <?php
                            $counter++;
                          }
                        }
                      }
                    } else {
                      echo "<p>" . $text['gallery_no_data'] . "</p>";
                    }
                    ?>
                  </div>

                  <button class="btn btn-icon waves-effect btn-small nav next" id="team_next">
                    <i class="icon material-icons">arrow_forward</i>
                  </button>
                </div>
              </div>
            </div>
          </div>

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
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const openModalBtn = document.getElementById('openModal');
      const closeModalBtn = document.getElementById('closeModal');
      const modal = document.getElementById('customModal');
      const modalBackdrop = document.querySelector('.modal-backdrop');

      // Open modal
      openModalBtn.addEventListener('click', function() {
        modal.style.display = 'block';
        document.body.style.overflow = 'hidden'; // Prevent background scroll
      });

      // Close modal
      function closeModal() {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto'; // Restore background scroll
      }

      closeModalBtn.addEventListener('click', closeModal);
      modalBackdrop.addEventListener('click', closeModal);

      // Close modal with Escape key
      document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.style.display === 'block') {
          closeModal();
        }
      });
    });
  </script>
</body>

</html>