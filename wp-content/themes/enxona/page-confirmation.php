<?php
/**
* Template Name: Confirmation Page
*/
get_header(); ?>

<!-- CONFIRMACIÓN
================================================== -->
<main>
<section class="hero d-flex align-items-center confirmacion">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-xl-6">
                <div class="jumbotron">
                    <div class="row justify-content-center">
                        <div class="col-6 col-lg-5 col-xl-4">
                            <div style="width:100%;height:0;padding-bottom:100%;position:relative;" class="wow fadeIn"><iframe src="https://giphy.com/embed/w79rCuhOPSLsgSt3hT" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>
                        </div>
                    </div>
                    <h1 class="display-4 wow fadeInUp" data-wow-delay="0.2s">Mensaje Enviado</h1>
                    <p class="lead wow fadeInUp" data-wow-delay="0.4s">Tu mensaje ha sido enviado satisfactoriamente.</p>
                    <hr class="my-4">
                    <p class="wow fadeInUp" data-wow-delay="0.6s">En breve nos comunicaremos contigo para darle seguimiento a tu solicitud.</p>
                    <div class="row wow fadeIn" data-wow-delay="1s">
                        <div class="col-12 col-md-6">
                            <a href="<?php echo esc_url(home_url()); ?>">
                                <button class="btn btn-xona btn-block" role="button">Volver al Inicio</button>
                            </a>
                        </div>
                        <div class="col-12 col-md-6">
                            <a href="<?php echo esc_url(home_url()); ?>#download-section">
                                <button class="btn btn-xona btn-block" role="button">Descargar Aplicación</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>


<script>
$(document).ready(function() {
	formFilled();
});
</script>


<!-- FOOTER
================================================== -->
<footer>

<?php get_footer(); ?>
