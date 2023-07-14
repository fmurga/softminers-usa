<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="noindex">
  <meta name="googlebot" content="noindex">
  <meta name="description" content="SoftMiners is one of the leading companies in SAP solutions and SAP support and consulting services in Argentina, with international presence in the United States, Chile, and Spain.">

  <!--====== Favicon Icon ======-->
  <link rel="shortcut icon" href="/assets/img/favicon/favicon.png" type="image/png">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="
    https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
    " rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Shadows+Into+Light&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/98cbb78275.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://kit.fontawesome.com/98cbb78275.css" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/normlize.css" />
  <link rel="stylesheet" href="/css/styles.css" />
  <title>SoftMiners - Experts in SAP Consulting Services and SAP ABAP Developments</title>
</head>

<body>

  <?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/assets";
  include $IPATH . "/components/header-es.php"; ?>
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
                <p class="hero-text">El proceso de transformación digital plantea importantes obstáculos diarios que deben ser abordados con agilidad, eficiencia y escalabilidad. Es crucial reconocer que este proceso se encuentra en un perpetuo estado de flujo y evolución.</p>
              </div>
            </div>
            <div class="hero-icons-container">
              <div class="hero-icons">
                <img loading="lazy" width="200px" src="/assets/logos/sap-light.png" alt="SAP Partner Open Ecosystem">
              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex justify-content-end">
            <?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/assets";
            include $IPATH . "/components/contact/contact-es.php"; ?>
          </div>
        </div>
      </div>

    </section>
    <section id="services" class="container-custom services">
      <div class="services info">
        <h3 class="services title">Servicios SAP</h3>
        <p class="services text">Lo ayudamos a mejorar y maximizar el uso de SAP en su empresa, genere el mejor retorno de su inversión en sus procesos.</p>
      </div>
      <?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/assets";
      include $IPATH . "/components/services/services-es.php"; ?>
    </section>

    <section id="map" class="py-3 map bg-gray">
      <div class="background hide-on-med-and-down" style="background-image: url(/assets/img/worldmap.png)">

      </div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-5 offset-md-7 map-info my-5">
            <div class="col-12 mobile-map hide-on-med-and-up">
              <img loading="lazy" src="/assets/img/worldmap-mob.png" alt="World map mobile" width="100%" height="100%">
            </div>
            <p class="map-subtitle">Innovamos para empresas de Latinoamérica, Estados Unidos y España.
            </p>
            <h3 class="map-title">Cobertura Internacional</h3>
            <p class="map-text">SoftMiners es una de las empresas referente en soluciones SAP y en servicios de soporte y consultoría SAP en Argentina, con presencia internacional en Estados Unidos, Chile y España.
              Nos desempeñamos en el mercado de software de aplicación empresarial, con una trayectoria de más de 13 años a la par de empresas de primera línea, ayudando a organizaciones de todos los tamaños y en todas las industrias a alcanzar su funcionamiento óptimo.</p>
            <p class="map-text">SoftMiners contribuye a dar a las personas y a las organizaciones profundos conocimientos de negocio y promueve la colaboración que les permite mantenerse más adelante que sus competidores.
              Simplificamos la tecnología para las empresas, de modo que puedan consumir nuestras soluciones de la manera en que lo desean, sin interrupciones.</p>
          </div>
        </div>

      </div>
    </section>

    <section id="diferentials" class="py-5 diferentials">
      <div class="diferentials-info mb-4">
        <h4 class="diferentials-title mb-3">Soluciones SoftExpert</h4>
        <p class="diferentials-text">SoftExpert ofrece soluciones de primer nivel que integran modelado, implementación, ejecución, control y monitoreo de múltiples necesidades de aplicaciones de negocios.</p>
      </div>
      <?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/assets";
      include $IPATH . "/components/diferentials/diferentials-es.php"; ?>
    </section>


    <section id="clients-carousel" class="m-auto py-5 bg-gray splide skyblue" aria-labelledby="carousel-heading">
      <div class="container">
        <div class="clients info">
          <h3 class="clients title">Clientes</h3>
          <p class="clients text"></p>
        </div>
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="/assets/clients/logo03.png" alt="Logo Arauco" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="/assets/clients/logo04.jpg" alt="Logo Bancor" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="/assets/clients/logo05.png" alt="Logo cargo" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="/assets/clients/logo06.png" alt="Logo Cerro Vanguardia" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="/assets/clients/logo07.png" alt="Logo Correo argentino" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="/assets/clients/logo08.png" alt="Logo Coca cola Andina" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="/assets/clients/logo10.gif" alt="Logo Gema Biotech" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="/assets/clients/logo11.jpg" alt="Logo Gestamp" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="/assets/clients/logo12.png" alt="Logo Holcim" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="/assets/clients/logo13.png" alt="Logo IPH" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="/assets/clients/logo14.png" alt="Logo Jhon M Phillips" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="/assets/clients/logo16.png" alt="Logo LDC" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="/assets/clients/logo19.png" alt="Logo Loma Negra" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="/assets/clients/logo22.jpg" alt="Logo ParexKlaucol" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="/assets/clients/logo23.png" alt="Logo Pernod Ricard" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="/assets/clients/logo24.jpg" alt="Logo Quickfood" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="/assets/clients/logo25.jpg" alt="Logo Denso Manufacturing" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="/assets/clients/logo26.jpg" alt="Logo Arca continental" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="/assets/clients/logo27.png" alt="Logo ScJohnson" />
            </li>
            <li class="splide__slide">
              <img loading="lazy" width="110px" src="/assets/clients/logo28.jpg" alt="Logo Scania" />
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section id="contact">

    </section>
  </main>
  <?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/assets";
  include $IPATH . "/components/footer-es.php"; ?>
  <script async src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
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
  <script src="/js/app.js" type="text/javascript"></script>
</body>

</html>