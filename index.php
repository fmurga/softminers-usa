<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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
    <title>SoftMiners: make it happen</title>
</head>

<body>

    <header>
        <?php include "./components/header.php" ?>
    </header>
    <main>
        <div id="box" class="box"></div>
        <section id="hero" class="container-custom hero bg-gray">

            <div class="hero-info-container">
                <div class="hero-content">
                    <h1 class="hero-title">SoftMiners</h1>
                    <h3 class="hero-title">make it happen</h3>
                    <p class="hero-text">The process of digital transformation poses significant daily obstacles that
                        must be tackled with agility, efficiency, and scalability. It is crucial to recognize that this
                        process is in a perpetual state of flux and evolution.</p>
                </div>
                <div class="hero-icons-container">
                    <p class="hero-subtitle">Bussines Partners</p>
                    <div class="hero-icons">
                        <!-- <i class="fa-brands fa-facebook"></i> -->
                        <a href=""><img width="123px" src="./assets/logos/ibm.gif" alt="IBM Partner"></a>
                        <!-- <i class="fa-brands fa-linkedin"></i> -->
                        <a href=""><img width="123px" src="./assets/logos/softexpert.png" alt="SoftExpert"></a>
                        <!-- <i class="fa-brands fa-youtube"></i> -->
                        <a href=""><img width="123px" src="./assets/logos/sap partner.png"
                                alt="SAP Partner Open Ecosystem"></a>
                        <!-- <i class="fa-brands fa-youtube"></i> -->
                        <a href=""><img width="123px" src="./assets/logos/softland.webp" alt="Softland"></a>
                    </div>
                </div>
            </div>
            <div class="hero-image-container hide-on-small-only">
                <img src="./assets/sliders/7.jpg" alt="" />
            </div>
        </section>
        <section id="services" class="container-custom services">
            <div class="services info">
                <h3 class="services title">Servicios</h3>
                <p class="services text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente cupiditate,
                    atque
                    culpa eligendi, molestias ut placeat fuga iusto odio quos mollitia maiores! Dolores rem porro
                    suscipit
                    maiores, id autem enim.</p>
            </div>
            <div class="splide hide-on-med-and-up" id="services-carousel" aria-labelledby="carousel-heading ">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="services-card">
                                <img width="406px" height="256px" src="./assets/sliders/1.jpg" alt="Service 1">
                                <div class="services-info">
                                    <h3 class="services-title">Business Process Automation</h3>
                                    <p class="services-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Dolores at fugiat molestias aliquam exercitationem assumenda animi.</p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="services-card">
                                <img width="406px" height="256px" src="./assets/sliders/1.jpg" alt="Service 1">
                                <div class="services-info">
                                    <h3 class="services-title">SAP consulting</h3>
                                    <p class="services-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Dolores at fugiat molestias aliquam exercitationem assumenda animi.</p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="services-card">
                                <img width="406px" height="256px" src="./assets/sliders/1.jpg" alt="Service 1">
                                <div class="services-info">
                                    <h3 class="services-title">Cloud</h3>
                                    <p class="services-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Dolores at fugiat molestias aliquam exercitationem assumenda animi.</p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="services-card">
                                <img width="406px" height="256px" src="./assets/sliders/1.jpg" alt="Service 1">
                                <div class="services-info">
                                    <h3 class="services-title">Infraestrcture</h3>
                                    <p class="services-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Dolores at fugiat molestias aliquam exercitationem assumenda animi.</p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="services-card">
                                <img width="406px" height="256px" src="./assets/sliders/1.jpg" alt="Service 1">
                                <div class="services-info">
                                    <h3 class="services-title">Business Solutions</h3>
                                    <p class="services-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Dolores at fugiat molestias aliquam exercitationem assumenda animi.</p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="services-card">
                                <img width="406px" height="256px" src="./assets/sliders/1.jpg" alt="Service 1">
                                <div class="services-info">
                                    <h3 class="services-title">Heading</h3>
                                    <p class="services-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Dolores at fugiat
                                        molestias aliquam exercitationem assumenda animi.</p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="services-card">
                                <img width="406px" height="256px" src="./assets/sliders/1.jpg" alt="Service 1">
                                <div class="services-info">
                                    <h3 class="services-title">Heading</h3>
                                    <p class="services-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Dolores at fugiat
                                        molestias aliquam exercitationem assumenda animi.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="services-grid hide-on-med-and-down">
                <div class="services-card">
                    <img width="406px" height="256px" src="./assets/sliders/1.jpg" alt="Service 1">
                    <div class="services-info">
                        <h3 class="services-title">Business Process Automation</h3>
                        <p class="services-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores at
                            fugiat molestias aliquam exercitationem assumenda animi.</p>
                    </div>
                </div>
                <div class="services-card">
                    <img width="406px" height="256px" src="./assets/sliders/1.jpg" alt="Service 1">
                    <div class="services-info">
                        <h3 class="services-title">Business Solutions</h3>
                        <p class="services-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores at
                            fugiat molestias aliquam exercitationem assumenda animi.</p>
                    </div>
                </div>
                <div class="services-card">
                    <img width="406px" height="256px" src="./assets/sliders/1.jpg" alt="Service 1">
                    <div class="services-info">
                        <h3 class="services-title">Infraestrcture</h3>
                        <p class="services-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores at
                            fugiat molestias aliquam exercitationem assumenda animi.</p>
                    </div>
                </div>
                <div class="services-card">
                    <img width="406px" height="256px" src="./assets/sliders/1.jpg" alt="Service 1">
                    <div class="services-info">
                        <h3 class="services-title">Cloud</h3>
                        <p class="services-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores at
                            fugiat molestias aliquam exercitationem assumenda animi.</p>
                    </div>
                </div>
                <div class="services-card">
                    <img width="406px" height="256px" src="./assets/sliders/1.jpg" alt="Service 1">
                    <div class="services-info">
                        <h3 class="services-title">Software Integration</h3>
                        <p class="services-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores at
                            fugiat molestias aliquam exercitationem assumenda animi.</p>
                    </div>
                </div>
                <div class="services-card">
                    <img width="406px" height="256px" src="./assets/sliders/1.jpg" alt="Service 1">
                    <div class="services-info">
                        <h3 class="services-title">SAP consulting</h3>
                        <p class="services-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores at
                            fugiat molestias aliquam exercitationem assumenda animi.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="map" class="py-3 map bg-gray">
            <div class="background hide-on-med-and-down" style="background-image: url(./assets/img/worldmap.png)">

            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-5 offset-md-7 map-info">
                        <div class="col-12 mobile-map hide-on-med-and-up">
                            <img src="./assets/img/worldmap-mob.png" alt="World map mobile" width="100%" height="100%">
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

        <section id="diferentials" class="container-fluid px-5 py-5 diferentials">
            <div class="diferentials-info">
                <h4 class="diferentials-title">Our values</h4>
                <p class="diferentials-text">These values ​​are part of our identity and reason for being and we share
                    and project them inside and outside the organization.</p>
            </div>
            <div class="diferentials-cards">
                <div class="diferentials-card">
                    <div class="card-image">
                        <img src="./assets/icons/1.png" alt="" srcset="">
                    </div>
                    <div class="card-content">
                        <p class="card-title">Honesty</p>
                        <p class="card-description">Commitment to transparency and authenticity in all customer
                            interactions. It involves telling the truth, even when it's difficult, and being accountable
                            for mistakes. Honesty builds trust and credibility with customers, and is essential for
                            building strong long-term relationships.</p>
                    </div>
                </div>
                <div class="diferentials-card">
                    <div class="card-image">
                        <img src="./assets/icons/2.png" alt="" srcset="">
                    </div>
                    <div class="card-content">
                        <p class="card-title">Customer Empathy</p>
                        <p class="card-description">Involves the ability to put ourself in the customer's shoes and to
                            understand their needs, desires, and pain points. It involves treating our customers with
                            kindness and respect, and making an effort to anticipate their needs and exceed their
                            expectations.</p>
                    </div>
                </div>
                <div class="diferentials-card">
                    <div class="card-image">
                        <img src="./assets/icons/3.png" alt="" srcset="">
                    </div>
                    <div class="card-content">
                        <p class="card-title">Continuous improvement</p>
                        <p class="card-description">This value involves our commitment to ongoing learning and growth,
                            seeking out ways to improve products, services, and customer experiences. It involves a
                            willingness to listen to feedback and to embrace change in the pursuit of excellence.</p>
                    </div>
                </div>
                <div class="diferentials-card">
                    <div class="card-image">
                        <img src="./assets/icons/3.png" alt="" srcset="">
                    </div>
                    <div class="card-content">
                        <p class="card-title">Inverted pyramid</p>
                        <p class="card-description">It involves flipping the traditional hierarchical structure of
                            organizations on its head, putting customers at the top and executives at the bottom. This
                            approach involves empowering front-line employees to make decisions and take action in
                            service of the customer, rather than requiring all decisions to come from the top.</p>
                    </div>
                </div>
                <div class="diferentials-card">
                    <div class="card-image">
                        <img src="./assets/icons/4.png" alt="" srcset="">
                    </div>
                    <div class="card-content">
                        <p class="card-title">Long term relationships</p>
                        <p class="card-description">This value involves prioritizing the development of enduring
                            relationships with customers. This means cultivating trust, establishing loyalty, and making
                            a commitment to supporting customers over the long haul.</p>
                    </div>
                </div>
                <div class="diferentials-card">
                    <div class="card-image">
                        <img src="./assets/icons/5.png" alt="" srcset="">
                    </div>
                    <div class="card-content">
                        <p class="card-title">Personalized attention</p>
                        <p class="card-description">We provide individualized and customized service to each customer,
                            recognizing their unique needs and preferences. It involves a willingness to listen and
                            respond to customers' feedback and to offer tailored solutions.</p>
                    </div>
                </div>
            </div>
        </section>


        <section id="clients" class="m-auto py-5 bg-gray splide skyblue" aria-labelledby="carousel-heading">
            <div class="container">
                <div class="clients info">
                    <h3 class="clients title">Clientes</h3>
                    <p class="clients text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente
                        cupiditate, atque
                        culpa eligendi, molestias ut placeat fuga iusto odio quos mollitia maiores! Dolores rem porro
                        suscipit
                        maiores, id autem enim.</p>
                </div>
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img width="144px" src="./assets/clients/logo01.png" alt="Logo Aguas Cordobesas" />
                        </li>
                        <li class="splide__slide">
                            <img width="144px" src="./assets/clients/logo02.png" alt="Logo Allus" />
                        </li>
                        <li class="splide__slide">
                            <img width="144px" src="./assets/clients/logo03.png" alt="Logo Arauco" />
                        </li>
                        <li class="splide__slide">
                            <img width="144px" src="./assets/clients/logo04.jpg" alt="Logo Bancor" />
                        </li>
                        <li class="splide__slide">
                            <img width="144px" src="./assets/clients/logo05.png" alt="Logo cargo" />
                        </li>
                        <li class="splide__slide">
                            <img width="144px" src="./assets/clients/logo06.png" alt="Logo Cerro Vanguardia" />
                        </li>
                        <li class="splide__slide">
                            <img width="144px" src="./assets/clients/logo07.png" alt="Logo Correo argentino" />
                        </li>
                        <li class="splide__slide">
                            <img width="144px" src="./assets/clients/logo08.png" alt="Logo Coca cola Andina" />
                        </li>
                        <li class="splide__slide">
                            <img width="144px" src="./assets/clients/logo09.png" alt="Logo Fono Bus" />
                        </li>
                        <li class="splide__slide">
                            <img width="144px" src="./assets/clients/logo10.gif" alt="Logo Gema Biotech" />
                        </li>
                        <li class="splide__slide">
                            <img width="144px" src="./assets/clients/logo11.jpg" alt="Logo Gestamp" />
                        </li>
                        <li class="splide__slide">
                            <img width="144px" src="./assets/clients/logo12.png" alt="Logo Holcim" />
                        </li>
                        <li class="splide__slide">
                            <img width="144px" src="./assets/clients/logo13.png" alt="Logo IPH" />
                        </li>
                        <li class="splide__slide">
                            <img width="144px" src="./assets/clients/logo14.png" alt="Logo Jhon M Phillips" />
                        </li>
                        <li class="splide__slide">
                            <img width="144px" src="./assets/clients/logo15.png" alt="Logo Konecta" />
                        </li>
                        <li class="splide__slide">
                            <img width="144px" src="./assets/clients/logo16.png" alt="Logo LDC" />
                        </li>
                        <li class="splide__slide">
                            <img width="144px" src="./assets/clients/logo17.png" alt="Logo Lheritier" />
                        </li>
                        <li class="splide__slide">
                            <img width="144px" src="./assets/clients/logo18.jpg" alt="Logo Libertad" />
                        </li>
                        <li class="splide__slide">
                            <img width="144px" src="./assets/clients/logo19.png" alt="Logo Loma Negra" />
                        </li>
                        <li class="splide__slide">
                            <img width="144px" src="./assets/clients/logo20.jpg" alt="Logo Microvqz" />
                        </li>
                        <li class="splide__slide">
                            <img width="144px" src="./assets/clients/logo21.jpg" alt="Logo NCA" />
                        </li>
                        <li class="splide__slide">
                            <img width="144px" src="./assets/clients/logo22.jpg" alt="Logo ParexKlaucol" />
                        </li>
                        <li class="splide__slide">
                            <img width="144px" src="./assets/clients/logo23.png" alt="Logo Pernod Ricard" />
                        </li>
                        <li class="splide__slide">
                            <img width="144px" src="./assets/clients/logo24.jpg" alt="Logo Quickfood" />
                        </li>
                        <li class="splide__slide">
                            <img width="144px" src="./assets/clients/logo25.jpg" alt="Logo Reydel Automotive" />
                        </li>
                        <li class="splide__slide">
                            <img width="144px" src="./assets/clients/logo26.jpg" alt="Logo Arca continental" />
                        </li>
                        <li class="splide__slide">
                            <img width="144px" src="./assets/clients/logo27.png" alt="Logo ScJohnson" />
                        </li>
                        <li class="splide__slide">
                            <img width="144px" src="./assets/clients/logo28.jpg" alt="Logo Scania" />
                        </li>
                        <li class="splide__slide">
                            <img width="144px" src="./assets/clients/logo29.jpg" alt="Logo U Siglo 21" />
                        </li>
                        <li class="splide__slide">
                            <img width="144px" src="./assets/clients/logo30.png" alt="Logo SoftExpert" />
                        </li>
                        <li class="splide__slide">
                            <img width="144px" src="./assets/clients/logo31.png" alt="Logo Weg" />
                        </li>
                        <li class="splide__slide">
                            <img width="144px" src="./assets/clients/logo32.jpg" alt="Logo Zelteck" />
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="contact">

        </section>
    </main>
    <?php include "./components/footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="
    https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
    "></script>
    <script src="./js/app.js" type="text/javascript"></script>
</body>

</html>