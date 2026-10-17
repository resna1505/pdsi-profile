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
    'testimonials' => 'Pengakuan',
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
    'page_title' => 'Perhimpunan',
    'vision' => 'Visi',
    'mission' => 'Misi',
    'values' => 'Value',
    'motto' => 'Motto',
    'spirit' => 'SPIRIT',
    'loading_error' => 'Gagal memuat data perhimpunan. Silakan coba lagi nanti.',
    'no_data' => 'Data perhimpunan belum tersedia.',
    'mega_struktur' => 'Struktur',

    // Footer
    'footer_description' => 'Platform Perkumpulan Dokter Seluruh Indonesia & Lembaga Pendidikan dan Pelatihan Dokter Seluruh Indonesia',
    'copyright' => 'Copyright 2025©Ict-Pekumpulan Dokter Seluruh Indonesia-PDSI-LPDSI',
    'legal' => 'Legal',
    'privacy_policy' => 'Privacy policy',
    'terms_of_use' => 'Terms of use',
    'address' => 'KTC Mall Kelapa Gading Lt.3 - Vinski Tower: 
Jl.Ciputat Raya No.22A, Pd.Pinang, 
Kec.Kby.Lama, Kota Jakarta Selatan, 
Daerah Khusus Ibukota Jakarta 12310',
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
    'page_title' => 'Perhimpunan',
    'vision' => 'Vision',
    'mission' => 'Mission',
    'values' => 'Values',
    'motto' => 'Motto',
    'spirit' => 'SPIRIT',
    'loading_error' => 'Gagal memuat data perhimpunan. Silakan coba lagi nanti.',
    'no_data' => 'Data perhimpunan belum tersedia.',
    'mega_struktur' => 'Structure',

    // Footer
    'footer_description' => 'Training and competency development platform for doctors in Indonesia, with standardized curriculum and trusted partner support.',
    'copyright' => 'Copyright 2025©Ict-Pekumpulan Dokter Seluruh Indonesia-PDSI-LPDSI',
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
  <meta property="og:title" content="PDSI">
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

    /* Perhimpunan */
    .perhimpunan-lead {
      font-size: 16px;
      opacity: .75;
    }

    .perhimpunan-card {
      height: 100%;
      padding: 32px 24px;
      border-radius: 16px;
      background: #fff;
      box-shadow: 0 6px 24px rgba(0, 0, 0, .08);
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .perhimpunan-logo {
      width: 120px;
      height: 120px;
      object-fit: contain;
      margin-bottom: 16px;
    }

    .perhimpunan-abbr {
      display: inline-block;
      padding: 2px 12px;
      border-radius: 20px;
      background: rgba(3, 172, 242, .12);
      color: #0288c2;
      font-weight: 700;
      font-size: 13px;
      letter-spacing: .5px;
      margin-bottom: 8px;
    }

    .perhimpunan-name {
      font-weight: 700;
      font-size: 17px;
      line-height: 1.4;
      margin-bottom: 12px;
    }

    .perhimpunan-summary {
      font-size: 14px;
      opacity: .75;
      flex-grow: 1;
    }

    .perhimpunan-btn {
      margin-top: 8px;
    }

    .perhimpunan-hero {
      display: flex;
      align-items: center;
      gap: 32px;
      padding: 32px;
      border-radius: 16px;
      background: #fff;
      box-shadow: 0 6px 24px rgba(0, 0, 0, .08);
    }

    .perhimpunan-hero-logo {
      width: 160px;
      height: 160px;
      object-fit: contain;
      flex-shrink: 0;
    }

    .perhimpunan-hero-title {
      font-weight: 700;
      font-size: 1.6rem;
      line-height: 1.3;
      margin-bottom: 8px;
    }

    .perhimpunan-slogan {
      font-style: italic;
      font-weight: 700;
      color: #2e7d32;
      margin-bottom: 16px;
    }

    .perhimpunan-section {
      margin-bottom: 40px;
    }

    .perhimpunan-section p {
      font-size: 15px;
      line-height: 1.8;
    }

    .perhimpunan-lambang {
      display: flex;
      align-items: flex-start;
      gap: 24px;
    }

    .perhimpunan-lambang img {
      width: 140px;
      height: 140px;
      object-fit: contain;
      flex-shrink: 0;
    }

    .perhimpunan-values {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
    }

    .perhimpunan-value {
      padding: 8px 18px;
      border-radius: 24px;
      border: 1px solid rgba(3, 172, 242, .4);
      color: #0288c2;
      font-weight: 600;
    }

    .perhimpunan-join {
      padding: 28px;
      border-radius: 16px;
      background: rgba(3, 172, 242, .06);
    }

    .perhimpunan-syarat {
      margin: 0 0 20px;
      padding-left: 20px;
    }

    .perhimpunan-syarat li {
      list-style: disc;
      margin-bottom: 6px;
    }

    .perhimpunan-section .plus-icon {
      font-size: 11px;
    }

    @media (max-width: 767px) {
      .perhimpunan-hero,
      .perhimpunan-lambang {
        flex-direction: column;
        text-align: center;
        align-items: center;
      }

      .perhimpunan-hero-title {
        font-size: 1.25rem;
      }
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
                            <a class="waves-effect text-truncate menu-list" href="visi-misi.php?lang=<?php echo $lang; ?>"><?php echo $text['vision_mission']; ?></a>
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
                          <li class="collection-item side-group-link">
                            <a class="waves-effect text-truncate menu-list" href="struktur.php"><?php echo $text['mega_struktur']; ?></a>
                          </li>
                        </ul>
                        <ul class="group-child">
                          <li class="collection-header">
                            <div class="title-mega">Perhimpunan</div>
                          </li>
                          <li class="collection-item side-group-link">
                            <a class="waves-effect text-truncate menu-list current" href="perhimpunan.php">Daftar Perhimpunan</a>
                          </li>
                          <li class="collection-item side-group-link">
                            <a class="waves-effect text-truncate menu-list" href="https://www.platform.pdsionline.org/register">Daftar Anggota</a>
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
                                    <li class="waves-effect"><a class="menu-list" href="visi-misi.php?lang=<?php echo $lang; ?>"><?php echo $text['vision_mission']; ?></a></li>
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
                                    <li class="waves-effect"><a class="menu-list" href="struktur.php"><?php echo $text['mega_struktur']; ?></a></li>
                                  </ul>
                                </div>
                                <div class="col-sm-3 mb-6">
                                <div class="title-mega">Perhimpunan</div>
                                <img class="thumb-menu" src="./assets/images/medical/menu_medical@2x.jpg" alt="thumbnail" />
                                <ul>
                                  <li class="waves-effect"><a class="menu-list current" href="perhimpunan.php">Daftar Perhimpunan</a></li>
                                  <li class="waves-effect"><a class="menu-list" href="https://www.platform.pdsionline.org/register">Daftar Anggota</a></li>
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
          $apiBase = getenv('PDSI_API_BASE') ?: 'https://www.platform.pdsionline.org';
          $perhimpunanId = isset($_GET['id']) ? (int) $_GET['id'] : 0;
          $response = $perhimpunanId > 0
            ? @file_get_contents($apiBase . '/api/perhimpunan/' . $perhimpunanId, false, stream_context_create(['http' => ['timeout' => 10, 'ignore_errors' => true]]))
            : false;
          $json = $response !== false ? json_decode($response, true) : null;
          $p = $json['data'] ?? null;
          $e = fn ($value) => htmlspecialchars((string) $value);
          ?>

          <div class="space-top-short container py-5">
            <?php if (!$p): ?>
              <div class="alert alert-info"><?php echo $text['no_data']; ?></div>
              <a class="btn waves-effect primary" href="perhimpunan.php">Lihat Daftar Perhimpunan</a>
            <?php else: ?>
              <!-- Hero -->
              <div class="perhimpunan-hero mb-5">
                <?php if (!empty($p['logo'])): ?>
                  <img class="perhimpunan-hero-logo" src="<?= $e($p['logo']) ?>" alt="Logo <?= $e($p['singkatan']) ?>">
                <?php endif; ?>
                <div class="perhimpunan-hero-text">
                  <div class="perhimpunan-abbr"><?= $e($p['singkatan']) ?></div>
                  <h4 class="perhimpunan-hero-title"><?= $e($p['nama']) ?></h4>
                  <?php if (!empty($p['slogan'])): ?>
                    <p class="perhimpunan-slogan">&ldquo;<?= $e($p['slogan']) ?>&rdquo;</p>
                  <?php endif; ?>
                  <a class="btn waves-effect primary" href="<?= $e($p['register_url']) ?>">Daftar Anggota</a>
                </div>
              </div>

              <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                  <?php if (!empty($p['filosofi'])): ?>
                    <div class="perhimpunan-section">
                      <h4 class="section-title">Filosofi Organisasi</h4>
                      <p><?= nl2br($e($p['filosofi'])) ?></p>
                    </div>
                  <?php endif; ?>

                  <?php if (!empty($p['arti_lambang'])): ?>
                    <div class="perhimpunan-section">
                      <h4 class="section-title">Arti Lambang</h4>
                      <div class="perhimpunan-lambang">
                        <?php if (!empty($p['logo'])): ?>
                          <img src="<?= $e($p['logo']) ?>" alt="Lambang <?= $e($p['singkatan']) ?>">
                        <?php endif; ?>
                        <p><?= nl2br($e($p['arti_lambang'])) ?></p>
                      </div>
                    </div>
                  <?php endif; ?>

                  <?php if (!empty($p['visi'])): ?>
                    <div class="perhimpunan-section">
                      <h4 class="section-title">Visi</h4>
                      <div class="visi-item">
                        <div class="plus-icon">+</div>
                        <div class="visi-text"><?= nl2br($e($p['visi'])) ?></div>
                      </div>
                    </div>
                  <?php endif; ?>

                  <?php if (!empty($p['misi'])): ?>
                    <div class="perhimpunan-section">
                      <h4 class="section-title">Misi</h4>
                      <?php foreach ($p['misi'] as $i => $misi): ?>
                        <div class="visi-item">
                          <div class="plus-icon"><?= $i + 1 ?></div>
                          <div class="visi-text"><?= $e($misi) ?></div>
                        </div>
                      <?php endforeach; ?>
                    </div>
                  <?php endif; ?>

                  <?php if (!empty($p['tujuan'])): ?>
                    <div class="perhimpunan-section">
                      <h4 class="section-title">Tujuan</h4>
                      <p><?= nl2br($e($p['tujuan'])) ?></p>
                    </div>
                  <?php endif; ?>

                  <?php if (!empty($p['nilai_dasar'])): ?>
                    <div class="perhimpunan-section">
                      <h4 class="section-title">Nilai Dasar</h4>
                      <div class="perhimpunan-values">
                        <?php foreach ($p['nilai_dasar'] as $nilai): ?>
                          <span class="perhimpunan-value"><?= $e($nilai) ?></span>
                        <?php endforeach; ?>
                      </div>
                    </div>
                  <?php endif; ?>

                  <div class="perhimpunan-section perhimpunan-join">
                    <h4 class="section-title">Bergabung Menjadi Anggota <?= $e($p['singkatan']) ?></h4>
                    <p>Daftar melalui platform PDSI dengan memilih <strong>Anggota Perhimpunan</strong>. Siapkan dokumen berikut:</p>
                    <ul class="perhimpunan-syarat browser-default">
                      <?php foreach ($p['syarat'] ?? [] as $syarat): ?>
                        <li><?= $e($syarat) ?></li>
                      <?php endforeach; ?>
                    </ul>
                    <a class="btn waves-effect primary" href="<?= $e($p['register_url']) ?>">Daftar Sekarang</a>
                  </div>
                </div>
              </div>
            <?php endif; ?>
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