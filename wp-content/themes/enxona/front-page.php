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
                <img src="<?php the_field('logo_principal'); ?>" alt="enxona-logo-directorio-comercial" class="img-fluid wow fadeIn">
            </div>
        </div>
        <div class="row justify-content-center d-none">
            <h1 class="wow fadeInUp text-white">EnXona Directorio Digital</h1>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-md-8">
                <h2 class="text-center wow fadeInUp text-white" data-wow-delay="0.5s"><?php the_field('texto_principal'); ?></h2>
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
                <h2 class="wow fadeInUp"><?php the_field('tag_line'); ?></h2>
                <p class="wow fadeInUp" data-wow-delay="0.2s"><?php the_field('descripcion'); ?></p>
            </div>
            <div class="col-12 col-md-6 text-center">
                <h3 class="mb-4 wow fadeInUp" data-wow-delay="0.4s">Descarga gratis la app</h3>
                <div class="row justify-content-around">
                    <a href="<?php the_field('enlace_android'); ?>">
                        <button class="btn btn-outline-white btn-circle wow fadeIn" data-wow-delay="0.6s"><i class="fab fa-android fa-4x mx-2 my-2"></i></button>
                    </a>
                    <a href="<?php the_field('enlace_ios'); ?>">
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
                <h2 class="text-green wow fadeInUp"><?php the_field('caracteristicas_titulo'); ?></h2>
            </div>
        </div>
        <div class="row justify-content-center mb-3">
            <div class="col-12 col-md-6 text-center">
                <p class="text-green wow fadeInUp" data-wow-delay="0.2s"><?php the_field('caracteristicas_descripcion'); ?></p>
            </div>
        </div>
        <div class="row justify-content-center mb-3">
            <div class="col-12 col-md-4 text-center">
                <p class="text-green wow fadeIn" style="font-size: 5rem;"><?php the_field('caracteristica_1_icono'); ?></p>
                <h6 class="text-green wow fadeInUp" data-wow-delay="0.2s"><?php the_field('caracteristica_1_texto'); ?></h6>
            </div>
            <div class="col-12 col-md-4 text-center">
                <p class="text-green wow fadeIn" style="font-size: 5rem;"><?php the_field('caracteristica_2_icono'); ?></p>
                <h6 class="text-green wow fadeInUp" data-wow-delay="0.2s"><?php the_field('caracteristica_2_texto'); ?></h6>
            </div>
            <div class="col-12 col-md-4 text-center">
                <p class="text-green wow fadeIn" style="font-size: 5rem;"><?php the_field('caracteristica_3_icono'); ?></p>
                <h6 class="text-green wow fadeInUp" data-wow-delay="0.2s"><?php the_field('caracteristica_3_texto'); ?></h6>
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
                            <img src="<?php the_field('categoria_1_imagen'); ?>" alt="restaurantes-cafeterias-xona" class="w-50">
                            <h6><?php the_field('categoria_1_texto'); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-aqua mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php the_field('categoria_2_imagen'); ?>" alt="salones-banquetes-xona" class="w-50">
                            <h6><?php the_field('categoria_2_texto'); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-blue mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php the_field('categoria_3_imagen'); ?>" alt="centros-educativos" class="w-50">
                            <h6><?php the_field('categoria_3_texto'); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-pink mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php the_field('categoria_4_imagen'); ?>" alt="gimnasios-xona" class="w-50">
                            <h6><?php the_field('categoria_4_texto'); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-orange mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php the_field('categoria_5_imagen'); ?>" alt="servicios-profesionales-xona" class="w-50 mb-2">
                            <h6><?php the_field('categoria_5_texto'); ?></h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-12 d-none d-xl-flex"></div>

            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-green mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php the_field('categoria_6_imagen'); ?>" alt="servicios-medicos-xona" class="w-50 mb-2">
                            <h6><?php the_field('categoria_6_texto'); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-aqua mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php the_field('categoria_7_imagen'); ?>" alt="odontologo-xona" class="w-50 mb-2">
                            <h6><?php the_field('categoria_7_texto'); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-blue mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php the_field('categoria_8_imagen'); ?>" alt="centros-comerciales" class="w-50 mb-2">
                            <h6><?php the_field('categoria_8_texto'); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-pink mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php the_field('categoria_9_imagen'); ?>" alt="servicio-automotriz-xona" class="w-50">
                            <h6><?php the_field('categoria_9_texto'); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-orange mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php the_field('categoria_10_imagen'); ?>" alt="tiendas-peluche-xona" class="w-50 mb-2">
                            <h6><?php the_field('categoria_10_texto'); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-12 d-none d-xl-flex"></div>

            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-green mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php the_field('categoria_11_imagen'); ?>" alt="telas-para-peluches-xona" class="w-50">
                            <h6><?php the_field('categoria_11_texto'); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-aqua mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php the_field('categoria_12_imagen'); ?>" alt="pasteleria-xona" class="w-50 mb-2">
                            <h6><?php the_field('categoria_12_texto'); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-blue mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php the_field('categoria_13_imagen'); ?>" alt="papeleria-xona" class="w-50 mb-2">
                            <h6><?php the_field('categoria_13_texto'); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-pink mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php the_field('categoria_14_imagen'); ?>" alt="veterinaria-xona" class="w-50 mb-2">
                            <h6><?php the_field('categoria_14_texto'); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-orange mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php the_field('categoria_15_imagen'); ?>" alt="estetica-canina" class="w-50">
                            <h6><?php the_field('categoria_15_texto'); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-12 d-none d-xl-flex"></div>

            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-green mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php the_field('categoria_16_imagen'); ?>" alt="telas-para-peluches-xona" class="w-50">
                            <h6><?php the_field('categoria_16_texto'); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-aqua mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php the_field('categoria_17_imagen'); ?>" alt="pasteleria-xona" class="w-50 mb-2">
                            <h6><?php the_field('categoria_17_texto'); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-blue mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php the_field('categoria_18_imagen'); ?>" alt="papeleria-xona" class="w-50 mb-2">
                            <h6><?php the_field('categoria_18_texto'); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-pink mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php the_field('categoria_19_imagen'); ?>" alt="veterinaria-xona" class="w-50 mb-2">
                            <h6><?php the_field('categoria_19_texto'); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="category-square category-square-orange mb-3">
                    <div class="content d-flex align-items-center wow fadeIn">
                        <div class="text-center">
                            <img src="<?php the_field('categoria_20_imagen'); ?>" alt="estetica-canina" class="w-50">
                            <h6><?php the_field('categoria_20_texto'); ?></h6>
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
                <h2 class="text-blue mb-2 wow fadeInUp"><?php the_field('clientes_titulo'); ?></h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6 col-md-4 col-lg-3">
                <img src="<?php the_field('cliente_1'); ?>" alt="enxona-logo-directorio-comercial" class="img-fluid mb-4 wow fadeIn">
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <img src="<?php the_field('cliente_2'); ?>" alt="enxona-logo-directorio-comercial" class="img-fluid mb-4 wow fadeIn">
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <img src="<?php the_field('cliente_3'); ?>" alt="enxona-logo-directorio-comercial" class="img-fluid mb-4 wow fadeIn">
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <img src="<?php the_field('cliente_4'); ?>" alt="enxona-logo-directorio-comercial" class="img-fluid mb-4 wow fadeIn">
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <img src="<?php the_field('cliente_5'); ?>" alt="enxona-logo-directorio-comercial" class="img-fluid mb-4 wow fadeIn">
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <img src="<?php the_field('cliente_6'); ?>" alt="enxona-logo-directorio-comercial" class="img-fluid mb-4 wow fadeIn">
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <img src="<?php the_field('cliente_7'); ?>" alt="enxona-logo-directorio-comercial" class="img-fluid mb-4 wow fadeIn">
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <img src="<?php the_field('cliente_8'); ?>" alt="enxona-logo-directorio-comercial" class="img-fluid mb-4 wow fadeIn">
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
                <h2 class="text-blue wow fadeInUp"><?php the_field('contacto_titulo'); ?></h2>
                <p class="text-blue wow fadeInUp" data-wow-delay="0.2s"><?php the_field('contacto_descripcion'); ?></p>
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
                        <a href="tel:<?php the_field('telefono'); ?>">
                            &nbsp; <?php the_field('telefono'); ?>
                        </a>
                    </li>
                    <li class="mb-2"><span class="fa-li"><i class="fas fa-envelope fa-lg"></i></span>
                        <a href="mailto:<?php the_field('correo'); ?>">
                            &nbsp; <?php the_field('correo'); ?>
                        </a>
                    </li>
                    <li class="mb-2"><span class="fa-li"><i class="fas fa-map-marker-alt fa-lg"></i></span>
                        <a href="<?php the_field('enlace_de_google_maps'); ?>" target="_blank">
                            &nbsp; <?php the_field('direccion'); ?>
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

// PARALLAX
// ------------------------------->
$('#download-section').parallax({
    imageSrc: '<?php the_field('descarga_imagen'); ?>',
    position: 'center'
});
</script>

<?php get_footer(); ?>