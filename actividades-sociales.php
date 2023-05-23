<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/css/style.css">
    <link rel="stylesheet" href="./styles/css/fe.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />

    <!-- FONT FAMILY -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- ICON -->
    <link rel="shortcut icon" href="assets/icon/favicon.webp" type="image/svg+xml">

    <!-- HTML Meta Tags -->
    <title>Actividades Sociales</title>
    <meta name="description" content="Traperos de Emaús - Manos Solidarias">
    <meta name="keywords" content="">
</head>
<body class="body">

    <!-- Agregando componente header -->
    <?php include('components/header.php') ?>
    <!-- FIN -->

    <main class="main">
        <section class="banner">
            <div class="container f-elements f-elements--responsive gap-sm">
                <div class="banner__container">
                    <h1 class="banner__title">NUESTRAS ACTIVIDADES SOCIALES</h1>
                    <h2 class="banner__subtitle">¿A QUIÉN AYUDARÁS?</h2>
                    <p class="banner__description">
                        Gracias a tus donaciones podemos seguir ayudando a mas familias que necesitan de nosotros como ollas comunes, comedores, asentamientos humanos, entre otros; en Lima y Provincias.
                    </p>
                    <a class="button button--primary" href="#contact"><i class="bi bi-balloon-heart"></i> Ayudanos a Donar</a>
                </div>
            </div>
        </section>

        <!-- plantilla

        <section class="section" id="projects">
            <div class="container f-elements f-col gap-md">
                <h2 class="section__title">Tu donacion se convierte en Actividades Sociales</h2>
                <div class="f-elements f-col f-elements--center">
                    <div class="swiper mySwiper4"">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="assets/img/cbazan-th (2).webp" alt="cineverse" class="card__img">
                                    <div class="card__body f-elements f-col f-elements--center gap-sm">
                                        <h3 class="card__title">Cbazan</h3>
                                        <p class="card__text">
                                            Ilustración de personajes, diseño y desarrollo de página web con formulario para obtención de leads.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="assets/img/recomendacion-th (2).webp" alt="cineverse" class="card__img">
                                    <div class="card__body f-elements f-col f-elements--center gap-sm">
                                        <h3 class="card__title">Recomendaciones Banahosting</h3>
                                        <p class="card__text">
                                            Diseño y desarrollo de Landing pages
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="assets/img/reservacanchita-th (2).webp" alt="cineverse" class="card__img">
                                    <div class="card__body f-elements f-col f-elements--center gap-sm">
                                        <h3 class="card__title">Reserva tu canchita</h3>
                                        <p class="card__text">
                                            Diseño y desarrollo de página web especializa en reserva de canchitas deportivas.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="assets/img/cbazan-th (2).webp" alt="cineverse" class="card__img">
                                    <div class="card__body f-elements f-col f-elements--center gap-sm">
                                        <h3 class="card__title">Cbazan</h3>
                                        <p class="card__text">
                                            Ilustración de personajes, diseño y desarrollo de página web con formulario para obtención de leads.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="assets/img/recomendacion-th (2).webp" alt="cineverse" class="card__img">
                                    <div class="card__body f-elements f-col f-elements--center gap-sm">
                                        <h3 class="card__title">Recomendaciones Banahosting</h3>
                                        <p class="card__text">
                                            Diseño y desarrollo de Landing pages
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="assets/img/reservacanchita-th (2).webp" alt="cineverse" class="card__img">
                                    <div class="card__body f-elements f-col f-elements--center gap-sm">
                                        <h3 class="card__title">Reserva tu canchita</h3>
                                        <p class="card__text">
                                            Diseño y desarrollo de página web especializa en reserva de canchitas deportivas.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="assets/img/cbazan-th (2).webp" alt="cineverse" class="card__img">
                                    <div class="card__body f-elements f-col f-elements--center gap-sm">
                                        <h3 class="card__title">Cbazan</h3>
                                        <p class="card__text">
                                            Ilustración de personajes, diseño y desarrollo de página web con formulario para obtención de leads.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="assets/img/recomendacion-th (2).webp" alt="cineverse" class="card__img">
                                    <div class="card__body f-elements f-col f-elements--center gap-sm">
                                        <h3 class="card__title">Recomendaciones Banahosting</h3>
                                        <p class="card__text">
                                            Diseño y desarrollo de Landing pages
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="assets/img/reservacanchita-th (2).webp" alt="cineverse" class="card__img">
                                    <div class="card__body f-elements f-col f-elements--center gap-sm">
                                        <h3 class="card__title">Reserva tu canchita</h3>
                                        <p class="card__text">
                                            Diseño y desarrollo de página web especializa en reserva de canchitas deportivas.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination mt-auto"></div>
                    </div>
                </div>
            </div>
        </section>

        -->

        <!--  Actividades Sociales  -->

        <section class="section" id="projects">
            <div class="container f-elements f-col">
              <p class="section__description">Tu donacion se convierte en</p>
              <h3 class="section__title">Actividades Sociales</h3>
              <div class="f-elements f-col f-elements--center gap-md py-md">
                    <div class="swiper mySwiper4">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-sociales/actividades-sociales-1.webp" alt="" class="card__img">
                                    <div class="card__body f-elements f-col f-elements--center gap-sm">
                                        <h3 class="card__title">Cbazan</h3>
                                        <p class="card__text">
                                            Olla común em el distrito de Villa María del Triunfo, en el AA.HH Divino Niño Jesus
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-sociales/actividades-sociales-2.webp" alt="" class="card__img">
                                    <div class="card__body f-elements f-col f-elements--center gap-sm">
                                        <h3 class="card__title">Cbazan</h3>
                                        <p class="card__text">
                                            Donación en el asentamiento Humano asociación de viviendas y jardines del valle - Villa María del Triunfo
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-sociales/actividades-sociales-3.webp" alt="" class="card__img">
                                    <div class="card__body f-elements f-col f-elements--center gap-sm">
                                        <h3 class="card__title">Cbazan</h3>
                                        <p class="card__text">
                                            Olla común em el distrito de Villa María del Triunfo, en el AA.HH Divino Niño Jesus
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-sociales/actividades-sociales-4.webp" alt="" class="card__img">
                                    <div class="card__body f-elements f-col f-elements--center gap-sm">
                                        <h3 class="card__title">Cbazan</h3>
                                        <p class="card__text">
                                            Asentamiento Humano 12 de Abril Olla Común José Gálvez - Villa María del Triunfo
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-sociales/actividades-sociales-5.webp" alt="" class="card__img">
                                    <div class="card__body f-elements f-col f-elements--center gap-sm">
                                        <h3 class="card__title">Cbazan</h3>
                                        <p class="card__text">
                                            Asentamiento Humano 10 de Octubre San Gabriel Alto - Villa María del Triunfo
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-sociales/actividades-sociales-6.webp" alt="" class="card__img">
                                    <div class="card__body f-elements f-col f-elements--center gap-sm">
                                        <h3 class="card__title">Cbazan</h3>
                                        <p class="card__text">
                                            Donaciones de canastas familiares (viveres) en el AA. HH. Circunvalación
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-sociales/actividades-sociales-7.webp" alt="" class="card__img">
                                    <div class="card__body f-elements f-col f-elements--center gap-sm">
                                        <h3 class="card__title">Cbazan</h3>
                                        <p class="card__text">
                                            Programa Virgen del Chapi de Villa Ciclo I. Loma de corvina Villa el Salvador
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-sociales/actividades-sociales-8.webp" alt="" class="card__img">
                                    <div class="card__body f-elements f-col f-elements--center gap-sm">
                                        <h3 class="card__title">Cbazan</h3>
                                        <p class="card__text">
                                            Olla común en el distrito de Villa Maria del Triunfo, en el AA. HH. Cristo Salvador
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-sociales/actividades-sociales-9.webp" alt="" class="card__img">
                                    <div class="card__body f-elements f-col f-elements--center gap-sm">
                                        <h3 class="card__title">Cbazan</h3>
                                        <p class="card__text">
                                            Donaciones de Víveres - A.A.H.H. 10 de Octubre San Gabriel Alto VMT
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-sociales/actividades-sociales-10.webp" alt="" class="card__img">
                                    <div class="card__body f-elements f-col f-elements--center gap-sm">
                                        <h3 class="card__title">Cbazan</h3>
                                        <p class="card__text">
                                            Donación de Víveres - Olla Común Los resilentes S.J.L.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-sociales/actividades-sociales-11.webp" alt="" class="card__img">
                                    <div class="card__body f-elements f-col f-elements--center gap-sm">
                                        <h3 class="card__title">Cbazan</h3>
                                        <p class="card__text">
                                            Donación de Víveres - Olla Común Villa María
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-sociales/actividades-sociales-12.webp" alt="" class="card__img">
                                    <div class="card__body f-elements f-col f-elements--center gap-sm">
                                        <h3 class="card__title">Cbazan</h3>
                                        <p class="card__text">
                                            Donación Navideña - Ayacucho Veracruz
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-sociales/actividades-sociales-13.webp" alt="" class="card__img">
                                    <div class="card__body f-elements f-col f-elements--center gap-sm">
                                        <h3 class="card__title">Cbazan</h3>
                                        <p class="card__text">
                                            Donación Navideña - Olla Común Dios es Amor V.M.T.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-sociales/actividades-sociales-14.webp" alt="" class="card__img">
                                    <div class="card__body f-elements f-col f-elements--center gap-sm">
                                        <h3 class="card__title">Cbazan</h3>
                                        <p class="card__text">
                                            Donación Navideña - Olla Común Los Resilentes S.J.L.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-sociales/actividades-sociales-15.webp" alt="" class="card__img">
                                    <div class="card__body f-elements f-col f-elements--center gap-sm">
                                        <h3 class="card__title">Cbazan</h3>
                                        <p class="card__text">
                                            Donación Navideña - Olla Común 8 de Octubre Nueva esperanza V.M.T.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-sociales/actividades-sociales-16.webp" alt="" class="card__img">
                                    <div class="card__body f-elements f-col f-elements--center gap-sm">
                                        <h3 class="card__title">Cbazan</h3>
                                        <p class="card__text">
                                            Donación Olla Común Vallecito Alto V.M.T. - Colchas y Kits Escolares
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--
                        <div class="swiper-pagination mt-auto"></div>
                        -->
                    </div>
                    <a class="button button--primary" href=""><i class="bi bi-balloon-heart"></i> Ver más</a>
                </div>
            </div>
        </section>

        <!-- Agregando componente footer -->
        <?php include('components/contact.php') ?>
        <!-- FIN -->
    </main>

    <!-- Agregando componente footer -->
    <?php include('components/footer.php') ?>
    <!-- FIN -->

    <script src="./js/swiper.js" type="module"></script>
    <script src="./js/header.js"></script>
</body>
</html>
