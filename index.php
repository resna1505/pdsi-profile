<?php
session_start();

// Language configuration
$languages = [
  'id' => [
    'site_title' => 'PDSI - Homepage',
    'meta_description' => 'Platform Perkumpulan Dokter Seluruh Indonesia & Lembaga Pendidikan dan Pelatihan Dokter Seluruh Indonesia',

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
    'speciality_title' => 'Keanggotaan dokter PDSI',
    'speciality_desc' => 'Semua dokter di Platform PDSI adalah berlisensi dan ahli dibidangnya masing-masing. Daftar Sekarang !',

    // Testimonial Section
    'testimonial_title' => 'Pengakuan',
    'testimonial_subtitle' => 'Apa kata dokter tentang Perkumpulan Dokter Seluruh Indonesia.',

    // Partners Section
    'partners_title' => 'Mitra Kami',
    'partners_subtitle' => 'Kami telah menjalin kerja sama dengan berbagai institusi dan perusahaan terkemuka di Indonesia.',

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
    'mega_agenda' => 'Agenda PDSI',
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
    'speciality_title' => 'PDSI doctor membership',
    'speciality_desc' => 'All doctors on the PDSI platform are licensed and experts in their respective fields. Register Now.',

    // Testimonial Section
    'testimonial_title' => 'Confession',
    'testimonial_subtitle' => 'What do doctors say about the Indonesian Doctors Association?',

    // Partners Section
    'partners_title' => 'Our Partners',
    'partners_subtitle' => 'We have established partnerships with various leading institutions and companies in Indonesia.',

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
$dataAgenda = $data->data->agenda;
$dataTestimonial = $data->data->testimonials;
$dataBanner = $data->data->banner;
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
    /* Agenda Card Styling */
    .agenda-card {
      height: 100%;
      display: flex;
      flex-direction: column;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border-radius: 8px;
      overflow: hidden;
      background: white;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .agenda-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .agenda-card figure {
      margin: 0;
      height: 200px;
      overflow: hidden;
      position: relative;
    }

    .agenda-card figure img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s ease;
    }

    .agenda-card:hover figure img {
      transform: scale(1.1);
    }

    .agenda-card .text {
      padding: 20px;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
    }

    .agenda-card .text h6 {
      margin: 0 0 12px 0;
      font-size: 16px;
      font-weight: 600;
      line-height: 1.4;
      color: #333;
      display: -webkit-box;
      -webkit-box-orient: vertical;
      overflow: hidden;
      min-height: 40px;
    }

    .agenda-card .text p {
      margin: 0 0 12px 0;
      font-size: 14px;
      line-height: 1.5;
      color: #666;
      display: -webkit-box;
      -webkit-box-orient: vertical;
      overflow: hidden;
      flex-grow: 1;
    }

    .agenda-card .author-info {
      display: flex;
      align-items: center;
      gap: 4px;
      font-size: 12px;
      margin-top: auto;
    }

    .agenda-card .card-action {
      padding: 15px 20px;
      background: #f8f9fa;
      border-top: 1px solid #e9ecef;
      text-align: right;
    }

    .agenda-card .card-action .btn {
      margin: 0;
      padding: 8px 16px;
      font-size: 14px;
      border-radius: 4px;
    }

    /* Filter Styling - Keep Original */
    .side-filter {
      background: white;
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .collection-item.filter {
      border-radius: 0;
      border: none;
      border-bottom: 1px solid #e0e0e0;
      margin-bottom: 0;
    }

    .collection-item.filter:last-child {
      border-bottom: none;
    }

    .collection-item.filter a {
      padding: 12px 0;
      display: block;
      color: #666;
      font-weight: 500;
      text-transform: capitalize;
    }

    .collection-item.filter.active {
      background: transparent;
    }

    .collection-item.filter.active a {
      color: #2196f3;
      font-weight: 600;
    }

    .collection-item.filter:hover a {
      color: #2196f3;
    }

    /* WhatsApp Floating Button */
    .whatsapp-float {
      position: fixed;
      bottom: 35px;
      right: 130px;
      width: 60px;
      height: 60px;
      background-color: #25D366;
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 30px;
      box-shadow: 0 4px 20px rgba(37, 211, 102, 0.4);
      z-index: 1000;
      transition: all 0.3s ease;
      text-decoration: none;
      cursor: pointer;
    }

    .whatsapp-float:hover {
      background-color: #20BA5A;
      color: white;
      transform: scale(1.1);
      box-shadow: 0 6px 25px rgba(37, 211, 102, 0.6);
      text-decoration: none;
    }

    .whatsapp-float:active {
      transform: scale(0.95);
    }

    /* Animation pulse effect */
    .whatsapp-float::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      border-radius: 50%;
      border: 2px solid #25D366;
      animation: pulse 2s infinite;
      opacity: 0;
    }

    @keyframes pulse {
      0% {
        transform: scale(1);
        opacity: 1;
      }

      50% {
        transform: scale(1.2);
        opacity: 0.5;
      }

      100% {
        transform: scale(1.4);
        opacity: 0;
      }
    }

    /* WhatsApp icon using CSS (alternative to Font Awesome) */
    .whatsapp-icon {
      font-family: 'Font Awesome 5 Brands', FontAwesome;
      font-weight: 400;
    }

    .whatsapp-icon::before {
      content: "\f232";
      /* Font Awesome WhatsApp icon */
    }

    /* If you don't have Font Awesome, use this SVG approach */
    .whatsapp-svg {
      width: 32px;
      height: 32px;
      fill: currentColor;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .agenda-card figure {
        height: 180px;
      }

      .agenda-card .text {
        padding: 15px;
      }

      .agenda-card .card-action {
        padding: 12px 15px;
      }

      .whatsapp-float {
        bottom: 38px;
        right: 110px;
        width: 55px;
        height: 55px;
        font-size: 26px;
      }
    }

    /* Loading and No Data States */
    .agenda-loading {
      text-align: center;
      padding: 40px 20px;
      color: #666;
    }

    .agenda-no-data {
      text-align: center;
      padding: 40px 20px;
      color: #999;
    }

    .agenda-no-data i {
      font-size: 48px;
      margin-bottom: 16px;
      opacity: 0.5;
    }

    /* Smooth transitions for filtering */
    .agenda-item {
      transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .agenda-item.hidden {
      opacity: 0;
      transform: scale(0.9);
      pointer-events: none;
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
                                    <li class="waves-effect"><a class="menu-list" href="struktur.php">Struktur</a></li>
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
                          <!-- <div class="img background-banner">
                            <img class="img-2d3d" src="./assets/images/medical/background_3d@2x.png" data-2d="./assets" data-3d="./assets/images/medical/background_3d@2x.png" alt="background" />
                          </div> -->
                          <div class="container">
                            <div class="row">
                              <div class="col-md-7 col-lg-6 col-sm-12 px-sm-6 px-0 d-flex align-items-center">
                                <div class="text">
                                  <h4 class="use-text-title"><?php echo $dataBanner[0]->title; ?></h4>
                                  <h5 class="use-text-subtitle"><?php echo $dataBanner[0]->sub_title; ?></h5>
                                </div>
                              </div>
                              <div class="col-md-5 col-lg-6 col-sm-12">
                                <div class="img">
                                  <img class="img-2d3d" src="https://www.platform.pdsionline.org/storage/sliders/<?= htmlspecialchars($dataBanner[0]->image) ?>" alt="banner 1 3D">
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
                                  <h4 class="use-text-title"><?php echo $dataBanner[1]->title; ?></h4>
                                  <h5 class="use-text-subtitle"><?php echo $dataBanner[1]->title; ?></h5>
                                </div>
                              </div>
                              <div class="col-md-5 col-lg-6 col-sm-12 order-lg-0">
                                <div class="img">
                                  <img class="img-2d3d mq-lg-up" src="https://www.platform.pdsionline.org/storage/sliders/<?= htmlspecialchars($dataBanner[1]->image) ?>" alt="banner 2 3D" data-class="float-right mr-sm-12" />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- <div class="slide center-content" id="slide3">
                        <div class="inner">
                          <div class="container max-md">
                            <div class="row justify-content-center">
                              <div class="col-xs-12 px-md-12">
                                <div class="text text-center">
                                  <h4 class="use-text-title"><?php echo $dataBanner[2]->title; ?></h4>
                                  <h5 class="use-text-subtitle"><?php echo $dataBanner[2]->title; ?></h5>
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="img h-banner">
                                  <img class="img-2d3d" src="https://www.platform.pdsionline.org/storage/sliders/<?= htmlspecialchars($dataBanner[2]->image) ?>" alt="banner 3 3D" />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> -->
                      <div class="slide" id="slide3">
                        <div class="inner">
                          <div class="container">
                            <div class="row">
                              <div class="col-md-7 col-lg-6 col-sm-12 px-sm-6 px-0 d-flex align-items-center">
                                <div class="text">
                                  <h4 class="use-text-title"><?php echo $dataBanner[2]->title; ?></h4>
                                  <h5 class="use-text-subtitle"><?php echo $dataBanner[2]->sub_title; ?></h5>
                                </div>
                              </div>
                              <div class="col-md-5 col-lg-6 col-sm-12">
                                <div class="img">
                                  <img class="img-2d3d" src="https://www.platform.pdsionline.org/storage/sliders/<?= htmlspecialchars($dataBanner[2]->image) ?>" alt="banner 1 3D">
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
                            <strong><?php echo $dataBanner[0]->title_banner; ?></strong>
                            <?php echo $dataBanner[0]->sub_title_banner; ?>
                          </span>
                        </a>
                        <hr class="divider">
                        <a data-slide="1">
                          <span class="waves-effect">
                            <strong><?php echo $dataBanner[1]->title_banner; ?></strong>
                            <?php echo $dataBanner[1]->sub_title_banner; ?>
                          </span>
                        </a>
                        <hr class="divider">
                        <a data-slide="2">
                          <span class="waves-effect">
                            <strong><?php echo $dataBanner[2]->title_banner; ?></strong>
                            <?php echo $dataBanner[2]->sub_title_banner; ?>
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

            <!-- ##### FACILITY (BERITA) ##### tetap sama -->
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

            <!-- ##### ASK DOCTORS #####-->
            <section class="space-top-short" id="ask-doctors">
              <div class="root">
                <div class="container">
                  <div class="deco">
                    <img class="img-2d3d" src="./assets/images/medical/footer_3d@2x.png" data-3d="./assets" data-2d="./assets/images/medical/footer_3d@2x.png" alt="speciality 3d" />
                  </div>
                  <div class="row">
                    <div class="col-md-3 col-sm-12 px-sm-6 px-0">
                      <div class="wow fadeInLeftShort" data-offset="-100" data-delay="0.2s" data-duration="0.3s">
                        <div class="side-filter">
                          <h4 class="use-text-title">Agenda PDSI</h4>
                          <ul class="collection nav" id="case_categories">
                            <li class="collection-item filter active" data-category="all">
                              <a class="waves-effect">All</a>
                            </li>
                            <!-- Categories akan diisi dari API -->
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-9 col-sm-12 pa-sm-6 pa-0">
                      <div class="massonry">
                        <div class="row" id="agenda-container">
                          <?php foreach ($dataAgenda as $item): ?>
                            <div class="col-sm-4 px-lg-4 px-3 py-3 agenda-item" data-category="<?= $item->category_id ?>">
                              <div class="wow fadeInUpShort" data-wow-delay="0s" data-wow-duration="0.4s">
                                <div class="card facility-card agenda-card">
                                  <figure>
                                    <img src="https://www.platform.pdsionline.org/storage/articles/<?= htmlspecialchars($item->attachment) ?>" alt="<?= htmlspecialchars($item->title) ?>">
                                  </figure>
                                  <div class="text">
                                    <h6><?= htmlspecialchars(substr($item->title, 0, 30)) ?>...</h6>
                                    <p><?= strip_tags(substr($item->description, 0, 80)) ?>...</p>
                                    <small class="author-info use-text-primary-color">
                                      <i class="material-icons tiny">person</i>
                                      <?= htmlspecialchars($item->author) ?>
                                    </small>
                                  </div>
                                  <div class="card-action">
                                    <a class="btn waves-effect secondary button" href="detail-agenda.php?id=<?= $item->id ?>">
                                      <?php echo $text['see_detail']; ?>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          <?php endforeach; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <!-- ##### SPECIALITY #####-->
            <section class="space-top" id="speciality">
              <div class="root">
                <div class="container">
                  <div class="row spacing8">
                    <div class="col-md-6 col-sm-12 px-sm-12">
                      <h4 class="use-text-title"><?php echo $text['speciality_title']; ?></h4>
                      <p class="desc use-text-subtitle2"><?php echo $text['speciality_desc']; ?> <br>
                        <svg class="whatsapp-svg" viewBox="0 0 24 24">
                          <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                        </svg>
                        081170012422
                      </p>
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
                              <h6><?= htmlspecialchars(mb_strimwidth($item->anggota->nama, 0, 25, "...")) ?></h6>
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

  <a href="#" id="whatsapp-link" target="_blank" class="whatsapp-float" title="Chat via WhatsApp">
    <!-- Using SVG for WhatsApp icon -->
    <svg class="whatsapp-svg" viewBox="0 0 24 24">
      <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
    </svg>
  </a>

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
      class AgendaManager {
        constructor() {
          this.currentCategory = 'all';
          this.categories = [];
          this.agendas = [];
          this.apiData = <?= json_encode($dataAgenda) ?>;

          this.init();
        }

        init() {
          this.extractCategories();
          this.renderCategories();
          this.bindEvents();
        }

        extractCategories() {
          // Extract unique categories from agenda data
          const categoryMap = new Map();

          this.apiData.forEach(item => {
            if (item.category && !categoryMap.has(item.category.id)) {
              categoryMap.set(item.category.id, {
                id: item.category.id,
                name: item.category.name
              });
            }
          });

          this.categories = Array.from(categoryMap.values());
        }

        renderCategories() {
          const container = document.getElementById('case_categories');

          // Keep the "All" item
          const allItem = container.querySelector('[data-category="all"]');
          container.innerHTML = '';
          container.appendChild(allItem);

          // Add dynamic categories
          this.categories.forEach(category => {
            const li = document.createElement('li');
            li.className = 'collection-item filter';
            li.setAttribute('data-category', category.id);
            li.innerHTML = `<a class="waves-effect">${category.name}</a>`;
            container.appendChild(li);
          });
        }

        bindEvents() {
          const categoryContainer = document.getElementById('case_categories');

          categoryContainer.addEventListener('click', (e) => {
            if (e.target.tagName === 'A') {
              e.preventDefault();

              const filterItem = e.target.closest('.filter');
              const category = filterItem.getAttribute('data-category');

              this.setActiveCategory(category);
              this.filterAgendas(category);
            }
          });
        }

        setActiveCategory(category) {
          // Remove active class from all items
          document.querySelectorAll('.collection-item.filter').forEach(item => {
            item.classList.remove('active');
          });

          // Add active class to selected item
          const activeItem = document.querySelector(`[data-category="${category}"]`);
          if (activeItem) {
            activeItem.classList.add('active');
          }

          this.currentCategory = category;
        }

        filterAgendas(category) {
          const agendaItems = document.querySelectorAll('.agenda-item');

          agendaItems.forEach(item => {
            const itemCategory = item.getAttribute('data-category');

            if (category === 'all' || itemCategory === category) {
              item.style.display = 'block';
              item.classList.remove('hidden');

              // Re-trigger animation
              setTimeout(() => {
                const card = item.querySelector('.wow');
                if (card) {
                  card.classList.remove('animated', 'fadeInUpShort');
                  setTimeout(() => {
                    card.classList.add('animated', 'fadeInUpShort');
                  }, 50);
                }
              }, 100);
            } else {
              item.classList.add('hidden');
              setTimeout(() => {
                item.style.display = 'none';
              }, 300);
            }
          });
        }
      }

      // Initialize
      new AgendaManager();
    });
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // WhatsApp message content
      const whatsappMessage = `*Selamat Datang di Layanan Bantuan PDSI*

Yth./Salam, Bapak/Ibu/Sejawat Dokter,

Selamat datang di Layanan Bantuan (Help Desk) resmi Perkumpulan Dokter Seluruh Indonesia (PDSI) via WhatsApp.

Kami siap membantu Anda terkait informasi seputar keanggotaan, agenda kegiatan, advokasi, atau layanan lainnya dari PDSI.

Untuk mempercepat proses, mohon informasikan:
• *Nama Lengkap:*
• *Nomor Anggota PDSI (jika ada):*
• *Pertanyaan atau Keperluan Anda:*

Pesan Anda akan kami balas pada jam operasional:
*Senin - Jumat, pukul 09.00 - 17.00 WIB.*

Terima kasih telah menjadi bagian dari "Pelopor Reformasi Kedokteran Indonesia"`;

      // Generate WhatsApp URL with message
      const phoneNumber = '6281170012422';
      const encodedMessage = encodeURIComponent(whatsappMessage);
      const whatsappURL = `https://wa.me/${phoneNumber}?text=${encodedMessage}`;

      // Set the href attribute
      const whatsappButton = document.getElementById('whatsapp-link');
      whatsappButton.href = whatsappURL;

      // Optional: Add click tracking
      whatsappButton.addEventListener('click', function() {
        console.log('WhatsApp button clicked');
        // You can add analytics tracking here if needed
      });

      // Optional: Show/hide based on scroll position
      let lastScrollTop = 0;
      window.addEventListener('scroll', function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > 300) {
          whatsappButton.style.opacity = '1';
          whatsappButton.style.visibility = 'visible';
        } else {
          whatsappButton.style.opacity = '0.7';
        }

        lastScrollTop = scrollTop;
      });
    });
  </script>
</body>

</html>