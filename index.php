<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Sola Chemicals - Home</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="title" content="Sola Chemical Company"/>
    <meta name="description" content="Making your home sparkle and your life easier! We offer high-quality cleaning chemicals, washing powders & liquids, air fresheners, hand washes, and dish wash"/>
    <meta name="keywords" content="cleaning products, washing powders, dish wash, air fresheners, hand washes, home cleaning, Sola Chemical Company"/>
    <!--
    <meta name="robots" content="index, follow"/>
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
    <link rel="canonical" href="https://hashcoders.alwaysdata.net/"/>
    -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://hashcoders.alwaysdata.net/"/>
    <meta property="og:title" content="Sola Chemical Company"/>
    <meta property="og:description" content="Making your home sparkle and your life easier! We offer high-quality cleaning chemicals, washing powders & liquids, air fresheners, hand washes, and dish wash"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:site_name" content="Sola Chemical Company"/>
    <meta property="og:image" content="https://hashcoders.alwaysdata.net/public/web-app-manifest.webp"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:url" content="https://hashcoders.alwaysdata.net/"/>
    <meta name="twitter:title" content="Sola Chemical Company"/>
    <meta name="twitter:description" content="Making your home sparkle and your life easier! We offer high-quality cleaning chemicals, washing powders & liquids, air fresheners, hand washes, and dish wash"/>
    <meta name="twitter:image" content="https://hashcoders.alwaysdata.net/public/web-app-manifest.webp"/>
    <link rel="icon" type="image/webp" href="./public/favicon-96x96.webp" sizes="96x96"/>
    <link rel="icon" type="image/svg+xml" href="./public/favicon.svg"/>
    <link rel="shortcut icon" href="./public/favicon.ico"/>
    <link rel="apple-touch-icon" sizes="180x180" href="./public/apple-touch-icon.webp"/>
    <link rel="manifest" href="./public/site.webmanifest"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link rel="canonical" href="https://hashcoders.alwaysdata.net/"/>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Sola Chemical Company",
      "url": "https://hashcoders.alwaysdata.net/",
      "logo": "./public/web-app-manifest.svg",
      "sameAs": [
        "https://www.facebook.com/SolaChemicalCompany/",
        "https://www.instagram.com/sola_chem/"
      ],
      "description": "Making your home sparkle and your life easier! We offer high-quality cleaning chemicals, washing powders & liquids, air fresheners, hand washes, and dish wash."
    }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
  </head>
  <body>
    <!-- navbar -->
    <?php include './components/header.html'; ?>
    <!-- Dynamic Content -->
    <div class="content">
      <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';
        if ($page == 'about') {
          include './pages/about.php';
        } elseif ($page == 'product') {
          include './pages/product.php';
        } else {
          include './pages/home.php';
        }
      ?>
    </div>
    <!-- navbar -->
    <?php include './components/hp-footer.html'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/script.js"></script>
  </body>
</html>
