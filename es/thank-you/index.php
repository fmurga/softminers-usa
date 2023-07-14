<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="noindex">
  <meta name="googlebot" content="noindex">

  <!--====== Favicon Icon ======-->
  <link rel="shortcut icon" href="/assets/img/favicon/favicon.png" type="image/png">

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
  <link rel="stylesheet" href="/css/normlize.css" />
  <link rel="stylesheet" href="/css/styles.css" />
  <title>SoftMiners: make it happen</title>
</head>

<body>

    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets"; include $IPATH."/components/header-es.php"; ?>    
  <main style="margin-top: 90px;">
  <section id="thank-you" class="thank-you p-100">
      <div class="vh-50 d-flex justify-content-center align-items-center">
        <div class="col-md-4 bg-white shadow-md p-5">
          <div class="mb-4 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="75" height="75" fill="currentColor"
              class="bi bi-check-circle" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
              <path
                d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
            </svg>
          </div>
          <div class="text-center">
            <h1 class="mb-3">¡Gracias por contactarnos!</h1>
            <p class="mb-3">Estaremos entrando en contacto contigo en las próximas horas.</p>
            <a class="btn btn-primary" href="/es/index.php">Volver a Inicio</a>
          </div>
        </div>
    </section>
  </main>
  <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets"; include $IPATH."/components/footer-es.php"; ?>

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
  <script src="../js/app.js" type="text/javascript"></script>
</body>

</html>