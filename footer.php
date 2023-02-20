<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<!-- wrapper end -->
<!-- <div class="footer-warning">
    <div class="row align-items-center">
        <div class="container">
            <div class="col-md-2 col-lg-2 col-xl-1">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Viva-logo-white.svg" width="80%">
            </div>

            <div class="col-md-2 col-lg-2 col-xl-1">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Viva-logo-white.svg" width="80%">
            </div>

            <div class="col-md-10 col-lg-10 col-lx-11">
                <h3>Cuidado</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur praesentium dicta voluptatibus eveniet quia pariatur nihil officiis amet facere ipsum asperiores consequuntur eum distinctio provident animi reprehenderit, earum quibusdam dolor.
                </p>
            </div>
        </div>
    </div>
</div> -->

<!-- Footer -->

<footer class="text-center text-lg-start text-muted home-footer-detail">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom social-media-footer">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
            <span>Nuestras Redes</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div class="social-media-footer-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>

        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section>
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->

                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpeg">
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Proyectos
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Programa I</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Programa II</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Buen Trato</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Partners
                    </h6>
                    <p>
                        <a href="https://www.facebook.com/PartidoEncuentroNacional/?locale=es_LA" class="text-reset">Encuentro Nacional</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Contactos
                    </h6>
                    
                    <p><i class="fa fa-phone"> +506 4030 471</i></p>
                    <p><i class="fa fa-map"> 54 Marston Street, Oxford, OX4 1LF, UK</i></p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4 copyright">
        © 2022 Copyright -
        <a class="text-reset fw-bold" href="#">hernancodas.com.py</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
<?php wp_footer(); ?>

</body>

</html>