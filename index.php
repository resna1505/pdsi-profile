<?php
session_start();

// Language configuration
$languages = [
  'id' => [
    'site_title' => 'PDSI - Homepage',
    'meta_description' => 'Platform pelatihan dan pengembangan kompetensi dokter di Indonesia',

    // Navigation
    'nav_news' => 'berita',
    'nav_testimonial' => 'testimoni',
    'nav_partners' => 'mitra',
    'nav_profile' => 'Profil Lembaga',
    'nav_login' => 'Login',

    // Mega Menu
    'mega_about_us' => 'Tentang Kami',
    'mega_about_overview' => 'Sekilas',
    'mega_vision_mission' => 'Visi, Misi, Value',
    'mega_honorary_members' => 'Anggota Kehormatan',
    'mega_news' => 'Berita',
    'mega_activities' => 'Kegiatan',
    'mega_work_program' => 'Program Kerja',
    'mega_agenda' => 'Agenda',
    'mega_faq' => 'FAQ',
    'mega_faq_full' => 'frequently answer & questions',

    // Banner
    'banner_title_1' => 'Kembangkan Kompetensi Medismu',
    'banner_subtitle_1' => 'Ikuti pelatihan medis berkualitas untuk meningkatkan kemampuan dan karier profesional Anda.',
    'banner_title_2' => 'Pelayanan Medis Online',
    'banner_subtitle_2' => 'Dapatkan diagnosis, rencana pengobatan, dan resep dari penyedia layanan medis berkualitas.',
    'banner_title_3' => 'Pelayanan Medis Online',
    'banner_subtitle_3' => 'Dapatkan diagnosis, rencana pengobatan, dan resep dari penyedia layanan medis berkualitas.',

    // Banner Navigation
    'banner_nav_1_title' => 'Pelatihan Berkualitas',
    'banner_nav_1_desc' => 'Sertifikasi dan kompetensi medis dari ahli terpercaya',
    'banner_nav_2_title' => 'Teknologi Terdepan',
    'banner_nav_2_desc' => 'Solusi medis digital untuk pelayanan kesehatan modern',
    'banner_nav_3_title' => 'Komunitas Dokter',
    'banner_nav_3_desc' => 'Jaringan profesional untuk pertumbuhan bersama',

    // Counter Section
    'counter_doctors' => 'dokter',
    'counter_doctors_desc' => 'Dokter-dokter yang telah mengikuti dan lulus pelatihan kami',
    'counter_partners' => 'mitra',
    'counter_partners_desc' => 'Institusi dan organisasi ternama yang mendukung peningkatan kompetensi medis',
    'counter_materials' => 'akses materi',
    'counter_materials_desc' => 'Materi pelatihan tersedia 24 jam untuk belajar fleksibel kapan saja.',

    // News Section
    'news_title' => 'Berita',
    'news_subtitle' => 'Tingkatkan pengetahuan dan keterampilan klinis Anda melalui modul pelatihan interaktif dan bersertifikat.',
    'see_all' => 'see all',
    'see_detail' => 'See Detail',

    // Speciality Section
    'speciality_title' => 'Spesialisasi Kami',
    'speciality_desc' => 'Semua instruktur di Platform Kursus Medis kami adalah dokter berlisensi dan ahli di bidangnya masing-masing.',

    // Testimonial Section
    'testimonial_title' => 'Testimoni Dokter',
    'testimonial_subtitle' => 'Apa kata para dokter tentang pengalaman mereka mengikuti kursus ini.',

    // Partners Section
    'partners_title' => 'Mitra Kami',
    'partners_subtitle' => 'Kami telah menjalin kerja sama dengan berbagai institusi dan perusahaan terkemuka di Indonesia.',

    // Footer
    'footer_description' => 'Platform pelatihan dan pengembangan kompetensi dokter di Indonesia, dengan kurikulum terstandar dan dukungan mitra terpercaya.',
    'footer_copyright' => '© Copyright 2025 PDSI',
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
    'lang_indonesian' => 'Bahasa Indonesia',

    // Navigation tooltips
    'tooltip_courses' => 'courses',
    'tooltip_doctors' => 'doctors',
    'tooltip_testimonials' => 'testimonials',
    'tooltip_partners' => 'mitra',
    'tooltip_to_top' => 'To Top'
  ],

  'en' => [
    'site_title' => 'PDSI - Homepage',
    'meta_description' => 'Medical training and competency development platform for doctors in Indonesia',

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
    'mega_agenda' => 'Agenda',
    'mega_faq' => 'FAQ',
    'mega_faq_full' => 'frequently asked questions',

    // Banner
    'banner_title_1' => 'Develop Your Medical Competence',
    'banner_subtitle_1' => 'Join quality medical training to enhance your professional skills and career.',
    'banner_title_2' => 'Online Medical Care',
    'banner_subtitle_2' => 'Get a diagnosis, treatment plan, and prescription from original provider of quality medical care.',
    'banner_title_3' => 'Online Medical Care',
    'banner_subtitle_3' => 'Get a diagnosis, treatment plan, and prescription from original provider of quality medical care.',

    // Banner Navigation
    'banner_nav_1_title' => 'Quality Training',
    'banner_nav_1_desc' => 'Medical certification and competency from trusted experts',
    'banner_nav_2_title' => 'Advanced Technology',
    'banner_nav_2_desc' => 'Digital medical solutions for modern healthcare',
    'banner_nav_3_title' => 'Doctor Community',
    'banner_nav_3_desc' => 'Professional network for mutual growth',

    // Counter Section
    'counter_doctors' => 'doctors',
    'counter_doctors_desc' => 'Doctors who have completed and passed our training programs',
    'counter_partners' => 'partners',
    'counter_partners_desc' => 'Renowned institutions and organizations supporting medical competency enhancement',
    'counter_materials' => 'material access',
    'counter_materials_desc' => 'Training materials available 24 hours for flexible learning anytime.',

    // News Section
    'news_title' => 'News',
    'news_subtitle' => 'Enhance your clinical knowledge and skills through interactive and certified training modules.',
    'see_all' => 'see all',
    'see_detail' => 'See Detail',

    // Speciality Section
    'speciality_title' => 'Our Specialities',
    'speciality_desc' => 'All instructors in our Medical Course Platform are licensed doctors and experts in their respective fields.',

    // Testimonial Section
    'testimonial_title' => 'Doctor Testimonials',
    'testimonial_subtitle' => 'What doctors say about their experience taking this course.',

    // Partners Section
    'partners_title' => 'Our Partners',
    'partners_subtitle' => 'We have established partnerships with various leading institutions and companies in Indonesia.',

    // Footer
    'footer_description' => 'Medical training and competency development platform for doctors in Indonesia, with standardized curriculum and trusted partner support.',
    'footer_copyright' => '© Copyright 2025 PDSI',
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
    'lang_indonesian' => 'Bahasa Indonesia',

    // Navigation tooltips
    'tooltip_courses' => 'courses',
    'tooltip_doctors' => 'doctors',
    'tooltip_testimonials' => 'testimonials',
    'tooltip_partners' => 'partners',
    'tooltip_to_top' => 'To Top'
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
$response = file_get_contents('https://www.platform.pdsionline.org/api/index');
$data = json_decode($response);

$totalDokter = $data->data->dokter;
$totalMitra = $data->data->mitra;
$dataMitra = $data->data->mitras;
$dataBerita = $data->data->articles;
$dataTestimonial = $data->data->testimonials;
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
      <div id="home">
        <div class="main-wrap">
          <!-- #### HEADER ####-->
          <div class="sidenav mobile-nav" id="slide_menu">
            <div class="side-multilv">
              <div class="collection side-multilv">
                <ul class="collapsible expandable">
                  <li class="collection-item"><a class="sidenav-close waves-effect menu-list" href="#facility"><?php echo $text['nav_news']; ?></a></li>
                  <li class="collection-item"><a class="sidenav-close waves-effect menu-list" href="#testimonials"><?php echo $text['nav_testimonial']; ?></a></li>
                  <li class="collection-item"><a class="sidenav-close waves-effect menu-list" href="#clinics"><?php echo $text['nav_partners']; ?></a></li>
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
                            <a class="waves-effect text-truncate menu-list" href="agenda.php"><?php echo $text['mega_agenda']; ?></a>
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
                  <div class="scrollactive-nav show-lg-up multi-menu scrollnav">
                    <ul class="main-menu">
                      <li>
                        <a class="btn btn-flat anchor-link waves-effect" href="#facility"><?php echo $text['nav_news']; ?></a>
                      </li>
                      <li>
                        <a class="btn btn-flat anchor-link waves-effect" href="#testimonials"><?php echo $text['nav_testimonial']; ?></a>
                      </li>
                      <li>
                        <a class="btn btn-flat anchor-link waves-effect" href="#clinics"><?php echo $text['nav_partners']; ?></a>
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
                                    <li class="waves-effect"><a class="menu-list" href="agenda.php"><?php echo $text['mega_agenda']; ?></a></li>
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

          <main class="container-wrap">
            <!-- ##### BANNER #####-->
            <section id="banner">
              <div class="banner-slider">
                <div class="banner-wrap">
                  <div class="carousel">
                    <div class="slider-deco" id="slider_deco">
                      <div class="slide">
                        <div class="inner">
                          <div class="deco-wrap">
                            <div class="deco bottom s1">&nbsp;</div>
                            <div class="deco top s1">&nbsp;</div>
                          </div>
                        </div>
                      </div>
                      <div class="slide">
                        <div class="inner">
                          <div class="deco-wrap">
                            <div class="deco bottom s2">&nbsp;</div>
                            <div class="deco top s2">&nbsp;</div>
                          </div>
                        </div>
                      </div>
                      <div class="slide">
                        <div class="inner">&nbsp;</div>
                      </div>
                    </div>
                    <div class="slider" id="banner_slider">
                      <div class="slide" id="slide1">
                        <div class="inner">
                          <div class="img background-banner">
                            <img class="img-2d3d" src="./assets/images/medical/background_3d@2x.png" data-2d="./assets" data-3d="./assets/images/medical/background_3d@2x.png" alt="background" />
                          </div>
                          <div class="container">
                            <div class="row">
                              <div class="col-md-7 col-lg-6 col-sm-12 px-sm-6 px-0 d-flex align-items-center">
                                <div class="text">
                                  <h4 class="use-text-title"><?php echo $text['banner_title_1']; ?></h4>
                                  <h5 class="use-text-subtitle"><?php echo $text['banner_subtitle_1']; ?></h5>
                                </div>
                              </div>
                              <div class="col-md-5 col-lg-6 col-sm-12">
                                <div class="img">
                                  <img class="img-2d3d" src="./assets/images/medical/banner1_3d@2x.png" data-2d="./assets" data-3d="./assets/images/medical/banner1_3d@2x.png" alt="banner 1 3D" />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="slide" id="slide2">
                        <div class="inner">
                          <div class="container">
                            <div class="row">
                              <div class="col-md-7 col-lg-6 col-sm-12 px-sm-6 px-0 d-flex align-items-center order-lg-1">
                                <div class="text">
                                  <h4 class="use-text-title"><?php echo $text['banner_title_2']; ?></h4>
                                  <h5 class="use-text-subtitle"><?php echo $text['banner_subtitle_2']; ?></h5>
                                </div>
                              </div>
                              <div class="col-md-5 col-lg-6 col-sm-12 order-lg-0">
                                <div class="img">
                                  <img class="img-2d3d mq-lg-up" src="./assets/images/medical/banner2_3d@2x.png" data-2d="./assets" data-3d="./assets/images/medical/banner2_3d@2x.png" alt="banner 2 3D" data-class="float-right mr-sm-12" />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="slide center-content" id="slide3">
                        <div class="inner">
                          <div class="container max-md">
                            <div class="row justify-content-center">
                              <div class="col-xs-12 px-md-12">
                                <div class="text text-center">
                                  <h4 class="use-text-title"><?php echo $text['banner_title_3']; ?></h4>
                                  <h5 class="use-text-subtitle"><?php echo $text['banner_subtitle_3']; ?></h5>
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="img h-banner">
                                  <img class="img-2d3d" src="./assets/images/medical/banner3_3d@2x.png" data-2d="./assets" data-3d="./assets/images/medical/banner3_3d@2x.png" alt="banner 3 3D" />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-sm-down">
                    <div class="container max-md">
                      <nav class="slide-nav" id="banner_nav">
                        <a class="active" data-slide="0">
                          <span class="waves-effect">
                            <strong><?php echo $text['banner_nav_1_title']; ?></strong>
                            <?php echo $text['banner_nav_1_desc']; ?>
                          </span>
                        </a>
                        <hr class="divider">
                        <a data-slide="1">
                          <span class="waves-effect">
                            <strong><?php echo $text['banner_nav_2_title']; ?></strong>
                            <?php echo $text['banner_nav_2_desc']; ?>
                          </span>
                        </a>
                        <hr class="divider">
                        <a data-slide="2">
                          <span class="waves-effect">
                            <strong><?php echo $text['banner_nav_3_title']; ?></strong>
                            <?php echo $text['banner_nav_3_desc']; ?>
                          </span>
                        </a>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- ##### END BANNER #####-->

            <!-- ##### COUNTER #####-->
            <section class="space-top space-top-short-xs" id="about">
              <div class="counter-wrap">
                <div class="container max-lg">
                  <div class="row justify-content-center align-items-center">
                    <!-- Dokter Counter -->
                    <div class="col-sm-4 col-lg-3 px-6">
                      <div class="counter-item">
                        <span class="icon ion-ios-people-outline use-text-primary-color"></span>
                        <div class="text">
                          <!-- <h4>+<span class="numscroller" data-min="0" data-delay="5" data-increment="8">&nbsp;<?= htmlspecialchars($totalDokter) ?></span></h4> -->
                          <h6 class="use-text-subtitle"><?php echo $text['counter_doctors']; ?></h6>
                        </div>
                      </div>
                      <p class="text-center"><?php echo $text['counter_doctors_desc']; ?></p>
                    </div>

                    <!-- Mitra Counter -->
                    <div class="col-sm-4 col-lg-3 px-6">
                      <div class="counter-item">
                        <span class="icon ion-ios-home-outline use-text-primary-color"></span>
                        <div class="text">
                          <!-- <h4>+<span id="data-mitra" class="numscroller" data-min="0" data-delay="5" data-increment="8">&nbsp;<?= htmlspecialchars($totalMitra) ?></span></h4> -->
                          <h6 class="use-text-subtitle"><?php echo $text['counter_partners']; ?></h6>
                        </div>
                      </div>
                      <p class="text-center"><?php echo $text['counter_partners_desc']; ?></p>
                    </div>

                    <!-- Materi Counter -->
                    <div class="col-sm-4 col-lg-3 px-6">
                      <div class="counter-item">
                        <span class="icon ion-ios-medkit-outline use-text-primary-color"></span>
                        <div class="text">
                          <h4>+<span class="numscroller" data-min="0" data-max="24" data-delay="5" data-increment="8">&nbsp;</span></h4>
                          <h6 class="use-text-subtitle"><?php echo $text['counter_materials']; ?></h6>
                        </div>
                      </div>
                      <p class="text-center"><?php echo $text['counter_materials_desc']; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- ##### END COUNTER #####-->

            <!-- ##### FACILITY #####-->
            <section class="space-top-short" id="facility">
              <div class="root">
                <div class="container carousel-header">
                  <div class="text">
                    <h4 class="use-text-title"><?php echo $text['news_title']; ?></h4>
                    <p class="use-text-subtitle2"><?php echo $text['news_subtitle']; ?></p>
                  </div>
                  <a class="btn-flat primary-text waves-effect view-all" href="news.php"><?php echo $text['see_all']; ?><i class="material-icons icon">arrow_forward</i></a>
                </div>
                <div class="carousel-handle">
                  <div class="carousel-wrap">
                    <div class="carousel" id="facilities_carousel" data-length="6">
                      <div class="item carousel-prop show-lg-up">
                        <div></div>
                      </div>
                      <?php foreach ($dataBerita as $item): ?>
                        <div class="item">
                          <div class="card facility-card">
                            <figure>
                              <img src="https://www.platform.pdsionline.org/storage/articles/<?= htmlspecialchars($item->attachment) ?>" alt="">
                            </figure>
                            <div class="text">
                              <h6><?= htmlspecialchars($item->title) ?></h6>
                              <p><?= strip_tags($item->description) ?></p>
                            </div>
                            <a class="btn waves-effect block secondary button" href="detail-news.php?id=<?= $item->id ?>"><?php echo $text['see_detail']; ?></a>
                          </div>
                        </div>
                      <?php endforeach; ?>
                    </div>
                  </div>
                </div>
                <div class="floating-artwork">
                  <div class="container fixed-width">
                    <div class="artwork">
                      <div class="slider-art">
                        <div class="deco">
                          <div class="figure show-lg-up" id="art_facilities">
                            <div class="wow fadeInLeftShort" data-wow-offset="250" data-wow-delay="0.3s" data-wow-duration="0.5s">
                              <div>
                                <img class="img-2d3d" src="./assets/images/medical/facility_3d@2x.png" data-2d="./assets" data-3d="./assets/images/medical/facility_3d@2x.png" alt="facilities" />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <nav class="arrow">
                        <button class="btn-floating margin" id="prev_facility"><i class="material-icons">arrow_back</i></button>
                        <button class="btn-floating margin" id="next_facility"><i class="material-icons">arrow_forward</i></button>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- ##### END FACILITY #####-->

            <!-- ##### SPECIALITY #####-->
            <section class="space-top" id="speciality">
              <div class="root">
                <div class="container">
                  <div class="row spacing8">
                    <div class="col-md-6 col-sm-12 px-sm-12">
                      <h4 class="use-text-title"><?php echo $text['speciality_title']; ?></h4>
                      <p class="desc use-text-subtitle2"><?php echo $text['speciality_desc']; ?></p>
                      <div class="running-tag">
                        <div class="slick-carousel" id="speciality_carousel">
                          <div class="tag-group">
                            <span class="tag-item">Reumatologi</span>
                            <span class="tag-item">Padriatic</span>
                            <span class="tag-item">Cardiology</span>
                          </div>
                          <div class="tag-group">
                            <span class="tag-item">Othopaedi</span>
                            <span class="tag-item">Traumatologi</span>
                            <span class="tag-item">Anestesiologi</span>
                          </div>
                          <div class="tag-group">
                            <span class="tag-item">Reumatologi</span>
                            <span class="tag-item">Andrologi</span>
                            <span class="tag-item">Cardiology</span>
                          </div>
                          <div class="tag-group">
                            <span class="tag-item">Reumatologi</span>
                            <span class="tag-item">Padriatic</span>
                            <span class="tag-item">Cardiology</span>
                          </div>
                          <div class="tag-group">
                            <span class="tag-item">Othopaedi</span>
                            <span class="tag-item">Traumatologi</span>
                            <span class="tag-item">Anestesiologi</span>
                          </div>
                          <div class="tag-group">
                            <span class="tag-item">Reumatologi</span>
                            <span class="tag-item">Andrologi</span>
                            <span class="tag-item">Cardiology</span>
                          </div>
                          <div class="tag-group">
                            <span class="tag-item">Reumatologi</span>
                            <span class="tag-item">Padriatic</span>
                            <span class="tag-item">Cardiology</span>
                          </div>
                          <div class="tag-group">
                            <span class="tag-item">Othopaedi</span>
                            <span class="tag-item">Traumatologi</span>
                            <span class="tag-item">Anestesiologi</span>
                          </div>
                          <div class="tag-group">
                            <span class="tag-item">Reumatologi</span>
                            <span class="tag-item">Andrologi</span>
                            <span class="tag-item">Cardiology</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-12 px-6 show-sm-up">
                      <div class="circle-wave">
                        <div class="ball">
                          <img class="img-2d3d" src="./assets/images/medical/speciality_3d@2x.png" data-2d="./assets" data-3d="./assets/images/medical/speciality_3d@2x.png" alt="speciality 3d" />
                        </div>
                      </div>
                      <div class="wow zoomInShort" data-wow-offset="0" data-wow-delay="0.3s" data-wow-duration="0.3s">
                        <div class="illustration-wrap">
                          <div><span class="icon-green"></span></div>
                          <div><span class="icon-red"></span></div>
                          <div><span class="icon-blue"></span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- ##### END SPECIALITY #####-->

            <!-- ##### TESTIMONIALS #####-->
            <section class="space-top-short" id="testimonials">
              <div class="root">
                <div class="container carousel-header">
                  <div class="px-3">
                    <h4 class="use-text-title text-capitalize"><?php echo $text['testimonial_title']; ?></h4>
                    <p class="use-text-subtitle2"><?php echo $text['testimonial_subtitle']; ?></p>
                  </div>
                </div>
                <div class="carousel">
                  <div class="slick-carousel" id="testimonial_carousel" data-length="9">
                    <?php foreach ($dataTestimonial as $item): ?>
                      <div class="item">
                        <div class="testimonial-card">
                          <div class="card paper">
                            <p><?= htmlspecialchars($item->testimonial_text) ?></p>
                            <div class="rating">
                              <?php for ($i = 1; $i <= 5; $i++): ?>
                                <?php if ($i <= $item->rating): ?>
                                  <i class="material-icons star-icon" title="<?= $i ?>">star</i>
                                <?php else: ?>
                                  <i class="material-icons star-icon-disable" title="<?= $i ?>">star</i>
                                <?php endif; ?>
                              <?php endfor; ?>
                            </div>
                          </div>
                          <div class="person">
                            <div class="name">
                              <h6><?= htmlspecialchars($item->anggota->nama) ?></h6>
                              <span class="caption"><?= htmlspecialchars($item->anggota->profesi) ?></span>
                            </div>
                            <div class="avatar-img avatar">
                              <img src="https://www.platform.pdsionline.org/storage/images/users/<?= htmlspecialchars($item->anggota->avatar) ?>" />
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endforeach; ?>
                    <div class="item show-lg-up">
                      <div class="item-props-last"></div>
                    </div>
                  </div>
                </div>
                <div class="floating-artwork">
                  <div class="container fixed-width">
                    <div class="artwork">
                      <div class="slider-art">
                        <div class="deco">
                          <div class="figure show-lg-up" id="art_testimonials">
                            <div class="wow fadeInLeftShort" data-wow-offset="100" data-wow-delay="0.3s" data-wow-duration="0.5s">
                              <img class="img-2d3d" src="./assets/images/medical/testimonial_3d@2x.png" data-2d="./assets" data-3d="./assets/images/medical/testimonial_3d@2x.png" alt="services 3d" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- ##### END TESTIMONIALS #####-->

            <!-- ##### CLINICS #####-->
            <section class="space-top-short space-bottom-short" id="clinics">
              <div class="root">
                <div class="container mq-md-up" data-class="fixed-width">
                  <div class="pa-3">
                    <h4 class="use-text-title text-capitalize"><?php echo $text['partners_title']; ?></h4>
                    <p class="use-text-subtitle2"><?php echo $text['partners_subtitle']; ?></p>
                  </div>
                  <div class="row">
                    <?php foreach ($dataMitra as $item): ?>
                      <div class="col-md-6 col-sm-12 px-3">
                        <div class="wow fadeInUpShort" data-wow-offset="-50" data-wow-delay="0.2s" data-wow-duration="0.4s">
                          <div class="card address-card">
                            <div class="paper">
                              <figure>
                                <img src="https://www.platform.pdsionline.org/storage/mitras/<?= htmlspecialchars($item->image) ?>" alt="clinic" />
                              </figure>
                              <div class="detail-info">
                                <h6 class="use-text-subtitle2"><?= htmlspecialchars($item->title) ?></h6>
                                <div class="row">
                                  <div class="col-lg-12 col-sm-12 px-sm-2 py-sm-1 pa-0">
                                    <i class="material-icons icon use-text-primary-color">local_phone</i>
                                    <?= htmlspecialchars($item->telephone) ?>
                                  </div>
                                  <div class="col-lg-12 col-sm-12 px-2 py-1">
                                    <div class="hidden-xs-down">
                                      <i class="material-icons icon use-text-secondary-color">email</i>
                                      <?= htmlspecialchars($item->email) ?>
                                    </div>
                                  </div>
                                  <div class="col-md-12 px-sm-2 px-0 py-1">
                                    <div class="text-truncate">
                                      <i class="material-icons icon use-text-accent-color">location_on</i>
                                      <?= htmlspecialchars($item->address) ?>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <a class="mobile-link waves-effect" href="contact-map.html"></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </section>
            <!-- ##### END CLINICS #####-->

          </main>
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
                <div class="col-md-3 col-sm-12">
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

          <div class="page-nav" id="page_nav">
            <nav class="section-nav">
              <div class="scrollnav">
                <ul>
                  <li style="top: 120px"><a class="tooltipped" href="#facility" data-position="left" data-tooltip="<?php echo $text['tooltip_courses']; ?>"></a></li>
                  <li style="top: 90px"><a class="tooltipped" href="#speciality" data-position="left" data-tooltip="<?php echo $text['tooltip_doctors']; ?>"></a></li>
                  <li style="top: 60px"><a class="tooltipped" href="#testimonials" data-position="left" data-tooltip="<?php echo $text['tooltip_testimonials']; ?>"></a></li>
                  <li style="top: 30px"><a class="tooltipped" href="#clinics" data-position="left" data-tooltip="<?php echo $text['tooltip_partners']; ?>"></a></li>
                </ul>
              </div>
            </nav>
            <div class="scrollnav"><a class="btn-floating btn-large primary tooltipped waves-effect waves-light" href="#home" data-position="left" data-tooltip="<?php echo $text['tooltip_to_top']; ?>">
                <div class="icon material-icons">arrow_upward</div>
              </a></div>
          </div>
        </div>
      </div>
    </div>
  </div>

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
    $(document).ready(function() {
      let currentSlide = 0;
      let totalSlides = 3;
      let autoplayInterval;
      let isAutoplayActive = true;

      function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        $('#banner_nav a').removeClass('active');
        $('#banner_nav a[data-slide="' + currentSlide + '"]').addClass('active');
        $('#banner_nav a[data-slide="' + currentSlide + '"]').trigger('click');
      }

      function startAutoplay() {
        if (isAutoplayActive) {
          autoplayInterval = setInterval(nextSlide, 5000);
        }
      }

      function stopAutoplay() {
        clearInterval(autoplayInterval);
      }

      function restartAutoplay() {
        stopAutoplay();
        startAutoplay();
      }

      $('#banner_nav a').on('click', function(e) {
        e.preventDefault();
        currentSlide = parseInt($(this).data('slide'));
        $('#banner_nav a').removeClass('active');
        $(this).addClass('active');
        restartAutoplay();
      });

      $('#banner').hover(
        function() {
          stopAutoplay();
        },
        function() {
          if (isAutoplayActive) {
            startAutoplay();
          }
        }
      );

      $(document).on('click', '#autoplay-toggle', function() {
        if (isAutoplayActive) {
          stopAutoplay();
          isAutoplayActive = false;
          $(this).text('▶ Play');
        } else {
          isAutoplayActive = true;
          startAutoplay();
          $(this).text('⏸ Pause');
        }
      });

      startAutoplay();

      document.addEventListener('visibilitychange', function() {
        if (document.hidden) {
          stopAutoplay();
        } else if (isAutoplayActive) {
          startAutoplay();
        }
      });
    });
  </script>
</body>

</html>