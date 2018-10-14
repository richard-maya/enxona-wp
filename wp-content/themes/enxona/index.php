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
<?php the_content(); ?>
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
                <a href="privacy-policy.html">Aviso de privacidad</a>
            </div>
        </div>
    </div>

<?php get_footer(); ?>