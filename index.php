<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="noindex">
  <meta name="googlebot" content="noindex">
  <meta name="description" content="SoftMiners is one of the leading companies in SAP solutions and SAP support and consulting services in Argentina, with international presence in the United States, Chile, and Spain.">

  <!--====== Favicon Icon ======-->
  <link rel="shortcut icon" href="../assets/images/favicon/favicon.png" type="image/png">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="
    https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
    " rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Shadows+Into+Light&display=swap"
    rel="stylesheet">
  <script src="https://kit.fontawesome.com/98cbb78275.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://kit.fontawesome.com/98cbb78275.css" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/normlize.css" />
  <link rel="stylesheet" href="./css/styles.css" />
  <title>SoftMiners - Experts in SAP Consulting Services and SAP ABAP Developments</title>
  </head>

<body>

  <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets"; include $IPATH."/components/header-en.php"; ?>
  <main style="margin-top: 90px;">
    <section id="hero" class="hero bg-blue">
      <div class="hover_color_bubble"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="hero-info-container">
              <div class="hero-content">
                <h1 class="hero-title">SoftMiners</h1>
                <h3 class="hero-title">make it happen</h3>
                <p class="hero-text">The process of digital transformation poses significant daily
                  obstacles
                  that
                  must be tackled with agility, efficiency, and scalability. It is crucial to
                  recognize
                  that
                  this
                  process is in a perpetual state of flux and evolution.</p>
              </div>
            </div>
            <div class="hero-icons-container">
              <div class="hero-icons">
                <img loading="lazy" width="200px" src="./assets/logos/sap-light.png" alt="SAP Partner Open Ecosystem">
              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex justify-content-end">
            <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets"; include $IPATH."/components/contact/contact-en.php"; ?>
          </div>
        </div>
      </div>

    </section>
    <section id="services" class="container-custom services">
      <div class="services info">
        <h3 class="services title">SAP Services</h3>
        <p class="services text">We help you improve and maximize the use of SAP in your company, generating the best return on your investment in your processes.</p>
      </div>
      <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets"; include $IPATH."/components/services/services.php"; ?>
    </section>

    <section id="map" class="py-3 map bg-gray">
      <div class="background hide-on-med-and-down" style="background-image: url(./assets/img/worldmap.png)">

      </div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-5 offset-md-7 map-info my-5">
            <div class="col-12 mobile-map hide-on-med-and-up">
              <img loading="lazy" src="./assets/img/worldmap-mob.png" alt="World map mobile" width="100%" height="100%">
            </div>
            <p class="map-subtitle">We innovate for companies in Latin America, the United States and Spain.
            </p>
            <h3 class="map-title">International coverage</h3>
            <p class="map-text">SoftMiners is one of the leading companies in SAP solutions and SAP support
              and
              consulting services in Argentina, with an international presence. We work in the business
              application software market, with a track record of more than 13 years alongside leading
              companies, helping organizations of all sizes and in all industries to achieve optimal
              performance.</p>
            <p class="map-text">SoftMiners contributes to giving people and organizations deep business
              insights
              and fosters collaboration that allows them to stay ahead of their competitors. We make
              technology simple for businesses so they can consume our solutions the way they want,
              without
              disruption.</p>
          </div>
        </div>

      </div>
    </section>

    <section id="diferentials" class="py-5 diferentials">
      <div class="diferentials-info mb-4">
        <h4 class="diferentials-title mb-3">SoftExpert Solutions</h4>
        <p class="diferentials-text">SoftExpert provides cutting-edge solutions that integrate the modeling, implementation, execution, control and monitoring of multiple business application demands.</p>
      </div>
      <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets"; include $IPATH."/components/diferentials/diferentials.php"; ?>
    </section>


    <section id="clients-carousel" class="m-auto py-5 bg-gray splide skyblue" aria-labelledby="carousel-heading">
      <div class="container">
        <div class="clients info">
          <h3 class="clients title">Clients</h3>
          <p class="clients text"></p>
        </div>
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="./assets/clients/logo03.png" alt="Logo Arauco" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="./assets/clients/logo04.jpg" alt="Logo Bancor" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="./assets/clients/logo05.png" alt="Logo cargo" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="./assets/clients/logo06.png" alt="Logo Cerro Vanguardia" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="./assets/clients/logo07.png" alt="Logo Correo argentino" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="./assets/clients/logo08.png" alt="Logo Coca cola Andina" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="./assets/clients/logo10.gif" alt="Logo Gema Biotech" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="./assets/clients/logo11.jpg" alt="Logo Gestamp" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="./assets/clients/logo12.png" alt="Logo Holcim" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="./assets/clients/logo13.png" alt="Logo IPH" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="./assets/clients/logo14.png" alt="Logo Jhon M Phillips" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="./assets/clients/logo16.png" alt="Logo LDC" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="./assets/clients/logo19.png" alt="Logo Loma Negra" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="./assets/clients/logo22.jpg" alt="Logo ParexKlaucol" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="./assets/clients/logo23.png" alt="Logo Pernod Ricard" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="./assets/clients/logo24.jpg" alt="Logo Quickfood" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="./assets/clients/logo25.jpg" alt="Logo Denso Manufacturing" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="./assets/clients/logo26.jpg" alt="Logo Arca continental" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="./assets/clients/logo27.png" alt="Logo ScJohnson" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="./assets/clients/logo28.jpg" alt="Logo Scania" />
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section id="contact">

    </section>
  </main>
  <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets"; include $IPATH."/components/footer-en.php"; ?>
  <script async src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
  <script async src="
    https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
    "></script>
  <script src='https://www.google.com/recaptcha/api.js?render=6Lfue6YZAAAAAEsvOi6e6yfj_MqKV0_77wEcREZK'>
  </script>
  <script>
  grecaptcha.ready(function() {
    grecaptcha.execute('6Lfue6YZAAAAAEsvOi6e6yfj_MqKV0_77wEcREZK', {
      action: 'submit'
    }).then(function(token) {
      var recaptchaResponse = document.getElementById('recaptchaResponse');
      recaptchaResponse.value = token;
    });
  });
  </script>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-F350NNR72Q"></script>
  <script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-F350NNR72Q');
  </script>
  <script src="./js/app.js" type="text/javascript"></script>
</body>

</html>