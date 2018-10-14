<?php get_header(); ?>

<!-- NAVBAR
================================================== -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/enxona-logo-navbar.png" height="30" alt="enxona-logo-directorio-comercial"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <div class="container">
            <div class="row justify-content-center">
                <span class="mr-auto d-none d-md-block"></span>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#download-section" title="renta-drones-cdmx">
                            <button class="btn btn-outline-white px-2 btn-sm">Descarga gratis la app</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>


<main>
<!-- INTRO
================================================== -->
<section class="hero d-flex align-items-center intro">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-12 col-md-5">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/enxona-logo-white.png" alt="enxona-logo-directorio-comercial" class="img-fluid wow fadeIn">
            </div>
        </div>
        <div class="row justify-content-center d-none">
            <h1 class="wow fadeInUp text-white">EnXona Directorio Digital</h1>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-md-8">
                <h2 class="text-center wow fadeInUp text-white" data-wow-delay="0.5s">Directorio de productos y servicios oficial de Xonacatlán.</h2>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-md-4">
                <a href="#contact-form">
                    <button class="btn btn-outline-white btn-block mb-3 wow fadeIn" data-wow-delay="1s">Únete a la comunidad</button>
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="#download-section">
                    <button class="btn btn-outline-white btn-block mb-3 wow fadeIn" data-wow-delay="1s">Descarga la app</button>
                </a>
            </div>
        </div>
        <div class="row justify-content-center arrow-row">
            <a data-scroll href="#download-section">
                <i class="fas fa-chevron-down arrow-animation fa-3x"></i>
            </a>
        </div>
    </div>
</section>


<!-- DOWNLOAD
================================================== -->
<section class="download d-flex align-items-center" id="download-section">
    <div class="black-overlay"></div>
    <div class="container">
        <div class="row justify-content-center d-flex align-items-center">
            <div class="col-12 col-md-6 text-center text-md-left">
                <h2 class="wow fadeInUp">Todo lo que estás buscando en un sólo lugar</h2>
                <p class="wow fadeInUp" data-wow-delay="0.2s">Formamos la comunidad más grande de Xonacatlán con más de XX,XXX empresas y negocios afiliados.</p>
            </div>
            <div class="col-12 col-md-6 text-center">
                <h3 class="mb-4 wow fadeInUp" data-wow-delay="0.4s">Descarga gratis la app</h3>
                <div class="row justify-content-around">
                    <a href="#">
                        <button class="btn btn-outline-white btn-circle wow fadeIn" data-wow-delay="0.6s"><i class="fab fa-android fa-4x mx-2 my-2"></i></button>
                    </a>
                    <a href="#">
                        <button class="btn btn-outline-white btn-circle px-3 wow fadeIn" data-wow-delay="0.6s"><i class="fab fa-apple fa-4x mx-2 my-2"></i></button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- BENEFITS
================================================== -->
<section class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="text-green wow fadeInUp">AUMENTA TUS VENTAS</h2>
            </div>
        </div>
        <div class="row justify-content-center mb-3">
            <div class="col-12 col-md-6 text-center">
                <p class="text-green wow fadeInUp" data-wow-delay="0.2s">Únete a la comunidad EnXona y aumenta tus ventas con posicionamiento en internet y redes sociales.</p>
            </div>
        </div>
        <div class="row justify-content-center mb-3">
            <div class="col-12 col-md-4 text-center">
                <i class="fas fa-map-marker-alt fa-5x text-green mb-3 wow fadeIn"></i>
                <h6 class="text-green wow fadeInUp" data-wow-delay="0.2s">Posicionamiento en internet</h6>
            </div>
            <div class="col-12 col-md-4 text-center">
                <i class="fas fa-mobile-alt fa-5x text-green mb-3 wow fadeIn"></i>
                <h6 class="text-green wow fadeInUp" data-wow-delay="0.2s">Publicidad en medios digitales</h6>
            </div>
            <div class="col-12 col-md-4 text-center">
                <i class="fas fa-users fa-5x text-green mb-3 wow fadeIn"></i>
                <h6 class="text-green wow fadeInUp" data-wow-delay="0.2s">Más de XXX usuarios diarios</h6>
            </div>
        </div>
        <div class="row justify-content-center">
            <a href="#contact-form">
                <button class="btn btn-outline-green wow fadeIn">Únete a la comunidad</button>
            </a>
        </div>
    </div>
</section>


<!-- CATEGORIES
================================================== -->
<section class="pt-5 categories">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="text-green wow fadeInUp">CATEGORÍAS</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-green mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/restaurantes-cafeterias-xona.png" alt="restaurantes-cafeterias-xona" class="w-50">
                            <h6>RESTAURANTES Y CAFETERÍAS</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-aqua mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/salones-banquetes-xona.png" alt="salones-banquetes-xona" class="w-50">
                            <h6>SALONES Y BANQUETES</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-blue mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/centros-educativos.png" alt="centros-educativos" class="w-50">
                            <h6>CENTROS EDUCATIVOS</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-pink mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/gimnasios-xona.png" alt="gimnasios-xona" class="w-50">
                            <h6>GIMNASIOS</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-orange mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/servicios-profesionales-xona.png" alt="servicios-profesionales-xona" class="w-50 mb-2">
                            <h6>SERVICIOS PROFESIONALES</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-12 d-none d-xl-flex"></div>

            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-green mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/servicios-medicos-xona.png" alt="servicios-medicos-xona" class="w-50 mb-2">
                            <h6>SERVICIOS MÉDICOS</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-aqua mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/odontologo-xona.png" alt="odontologo-xona" class="w-50 mb-2">
                            <h6>ODONTÓLOGOS</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-blue mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/centros-comerciales.png" alt="centros-comerciales" class="w-50 mb-2">
                            <h6>CENTROS COMERCIALES</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-pink mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/servicio-automotriz-xona.png" alt="servicio-automotriz-xona" class="w-50">
                            <h6>SERVICIO AUTOMOTRÍZ</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-orange mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/tiendas-peluche-xona.png" alt="tiendas-peluche-xona" class="w-50 mb-2">
                            <h6>TIENDAS DE PELUCHES</h6>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-12 d-none d-xl-flex"></div>

            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-green mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/telas-para-peluches-xona.png" alt="telas-para-peluches-xona" class="w-50">
                            <h6>TELAS PARA PELUCHES</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-aqua mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/pasteleria-xona.png" alt="pasteleria-xona" class="w-50 mb-2">
                            <h6>PASTELERÍAS</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-blue mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/papeleria-xona.png" alt="papeleria-xona" class="w-50 mb-2">
                            <h6>PAPELERÍAS</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-pink mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/veterinaria-xona.png" alt="veterinaria-xona" class="w-50 mb-2">
                            <h6>VETERINARÍAS</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-orange mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/estetica-canina.png" alt="estetica-canina" class="w-50">
                            <h6>ESTÉTICA CANINA</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- CLIENTS
================================================== -->
<section class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="text-blue mb-2 wow fadeInUp">EMPRESAS ENXONA</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6 col-md-4 col-lg-3">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/enxona-logo.png" alt="enxona-logo-directorio-comercial" class="img-fluid mb-4 wow fadeIn">
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/enxona-logo.png" alt="enxona-logo-directorio-comercial" class="img-fluid mb-4 wow fadeIn">
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/enxona-logo.png" alt="enxona-logo-directorio-comercial" class="img-fluid mb-4 wow fadeIn">
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/enxona-logo.png" alt="enxona-logo-directorio-comercial" class="img-fluid mb-4 wow fadeIn">
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/enxona-logo.png" alt="enxona-logo-directorio-comercial" class="img-fluid mb-4 wow fadeIn">
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/enxona-logo.png" alt="enxona-logo-directorio-comercial" class="img-fluid mb-4 wow fadeIn">
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/enxona-logo.png" alt="enxona-logo-directorio-comercial" class="img-fluid mb-4 wow fadeIn">
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/enxona-logo.png" alt="enxona-logo-directorio-comercial" class="img-fluid mb-4 wow fadeIn">
            </div>
        </div>
    </div>
</section>


<!-- CONTACT FORM
================================================== -->
<section class="py-5" id="contact-form">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="text-blue wow fadeInUp">CONTÁCTANOS</h2>
                <p class="text-blue wow fadeInUp" data-wow-delay="0.2s">¿Te interesa formar parte de la comunidad EnXona? <br>Déjanos tus datos y nos comunicaremos contigo.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-6">
                <div id="mc_embed_signup">
                    <form action="https://enxona.us17.list-manage.com/subscribe/post?u=4f4bdc97c1da5cc68289c2430&amp;id=1f6c891c31" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate wow fadeIn" novalidate>
                        <div id="mc_embed_signup_scroll">
                            <div class="mc-field-group form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="mce-FNAME">Nombre de Contacto <span class="asterisk">*</span>
                                        </label>
                                        <input type="text" value="" name="FNAME" class="required form-control" id="mce-FNAME">
                                    </div>
                                </div>
                            </div>

                            <div class="mc-field-group form-row">
                                <div class="col col-md-6">
                                    <div class="form-group">
                                        <label for="mce-EMAIL">Correo <span class="asterisk">*</span>
                                        </label>
                                        <input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL">
                                    </div>
                                </div>
                                <div class="col col-md-6">
                                    <div class="mc-field-group size1of2">
                                        <label for="mce-PHONE">Teléfono </label>
                                        <input type="text" name="PHONE" class="form-control" value="" id="mce-PHONE">
                                    </div>
                                </div>
                            </div>

                            <div class="mc-field-group form-row">
                                <div class="col col-md-6">
                                    <div class="form-group">
                                        <label for="mce-CATEGORY">Categoría <span class="asterisk">*</span>
                                        </label>
                                        <select name="CATEGORY" class="required form-control" id="mce-CATEGORY">
                                            <option value=""></option>
                                            <option value="Barberías y Estéticas">Barberías y Estéticas</option>
                                            <option value="Boutiques">Boutiques</option>
                                            <option value="Centros Comerciales">Centros Comerciales</option>
                                            <option value="Centros Educativos">Centros Educativos</option>
                                            <option value="Construcción y Mantenimiento">Construcción y Mantenimiento</option>
                                            <option value="Estéticas Caninas">Estéticas Caninas</option>
                                            <option value="Gimnasios">Gimnasios</option>
                                            <option value="Hoteles">Hoteles</option>
                                            <option value="Números de Emergencias">Números de Emergencias</option>
                                            <option value="Odontólogos">Odontólogos</option>
                                            <option value="Papelerías">Papelerías</option>
                                            <option value="Pastelerías">Pastelerías</option>
                                            <option value="Restaurantes y Cafeterías">Restaurantes y Cafeterías</option>
                                            <option value="Salones y Banquetes">Salones y Banquetes</option>
                                            <option value="Servicio Automotriz">Servicio Automotriz</option>
                                            <option value="Servicios Médicos">Servicios Médicos</option>
                                            <option value="Servicios Profesionales">Servicios Profesionales</option>
                                            <option value="Telas para Peluche">Telas para Peluche</option>
                                            <option value="Tiendas de Peluches">Tiendas de Peluches</option>
                                            <option value="Veterinarias">Veterinarias</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col col-md-6">
                                    <div class="mc-field-group">
                                        <label for="mce-SERVICE">Nombre del Negocio o Servicio <span class="asterisk">*</span>
                                        </label>
                                        <input type="text" value="" name="SERVICE" class="required form-control" id="mce-SERVICE">
                                    </div>
                                </div>
                            </div>

                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>

                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_4f4bdc97c1da5cc68289c2430_1f6c891c31" tabindex="-1" value=""></div>

                            <div class="clear">
                                <!-- <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"> -->
                                <button type="submit" name="subscribe" class="btn btn-xona btn-block" id="mc-embedded-subscribe">ENVIAR</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</main>


<!-- FOOTER
================================================== -->
<footer class="mx-0 px-0 mt-5">    
    <div class="container-fluid mx-0 px-0">
        <div class="row">
            <div class="col">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/xona-lugares-turisticos.jpg" alt="xona-lugares-turisticos" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="container py-3">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h6>Contacto</h6>
                <ul class="fa-ul">
                    <li class="mb-2"><span class="fa-li"><i class="fas fa-phone fa-lg"></i></span>
                        <a href="tel:7222678310">
                            &nbsp; 722-267-8310
                        </a>
                    </li>
                    <li class="mb-2"><span class="fa-li"><i class="fas fa-envelope fa-lg"></i></span>
                        <a href="mailto:contacto@enxona.mx">
                            &nbsp; contacto@enxona.mx
                        </a>
                    </li>
                    <li class="mb-2"><span class="fa-li"><i class="fas fa-map-marker-alt fa-lg"></i></span>
                        <a href="https://goo.gl/maps/RuhPDs4WUuR2" target="_blank">
                            &nbsp; Gustavo A. Vivencio #22, Col. Centro Xonacatlán <br>&nbsp; Estado de México. CP. 52060
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-4">
                <h6>EnXona</h6>
                <a href="#contact-form">Únete a la comunidad</a> <br>
                <a href="#download-section">Descarga gratis la app</a> <br>
                <a href="<?php echo esc_url(home_url()); ?>/privacy-policy">Aviso de privacidad</a>
            </div>
        </div>
    </div>

<script type="text/javascript">
// HEADER
// ------------------------------->
$(document).on("scroll", function () {
    "use strict";
    if ($(document).scrollTop() > 500) {
        $(".navbar").addClass("navbar-down");
    } else {
        $(".navbar").removeClass("navbar-down");
    }
});
</script>

<?php get_footer(); ?>