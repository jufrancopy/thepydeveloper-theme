<?php

/**
 * Template Name: Template - Contact
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');

if (is_front_page()) {
    get_template_part('global-templates/hero');
}
?>

<div class="pensa_grande_about_us">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-6 pensa_grande">
                <img src="<?php echo get_template_directory_uri(); ?>/img/pensa-en-grande.png">

            </div>
            <div class="col-md-6 col-sm-6 col-6 vota_lista_9">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Vota-lista-9.png">
            </div>
        </div>
    </div>
</div>

<header class="page-header entry-header">
    <div class="container">
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
    </div>
</header>

<div class="wrapper" id="full-width-page-wrapper">
    <div class="<?php echo esc_attr($container); ?>" id="content">
        <main class="site-main" id="main" role="main">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <?php
                    while (have_posts()) {
                        the_post();
                        get_template_part('loop-templates/content', 'page');

                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) {
                            comments_template();
                        }
                    }
                    ?>
                </div>
            </div>
        </main>
    </div>
</div>

<div class="contact-us-holder">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <?php echo do_shortcode('[contact-form-7 id="32" title="Subscipción"]'); ?>
            </div>
            <div class="col-lg-6">
                <div class="contact-us-hours">
                    <div class="content line-bottom">
                        <h3>Horarios de Contacto</h3>
                    </div>
                    <div class="content">
                        <div class="hours">
                            <div class="hour">
                                <div>Lunes</div>
                                <div>07:00hs a 17:00 hs </div>
                                <div>Sábados y Domingos</div>
                            </div>
                            <div class="hour">
                                <div>Martes</div>
                                <div>07:00hs a 17:00 hs </div>
                                <div>Sábados y Domingos</div>
                            </div>
                            <div class="hour">
                                <div>Viernes</div>
                                <div>07:00hs a 17:00 hs </div>
                                <div>Sábados y Domingos</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="wrapper" id="wrapper-footer">
    <div class="bg-image"></div>
    <div class="title-holder">
        <div class="container">
            <h2 class="<?php if (is_front_page()) { ?> animate__animated animate__backInRight
								<?php } ?>">
                <span>Contactanos</span> Envienos sus susgerencias...
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-11">
                <div class="<?php if (is_front_page()) { ?> animate__animated animate__backInRight
								<?php } ?>">
                    <?php echo do_shortcode('[contact-form-7 id="55" title="Footer Form"]') ?>
                </div>

                <div class="copyright">@ Copyright - Todos los derechos reservados</div>
            </div>

        </div>
    </div>
</div> -->

<!-- <div class="contact-us-image">
    <div class="container">
        <div class="entry-content">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="img-widescreen">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/bg-contact-us.svg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<?php
get_footer();
