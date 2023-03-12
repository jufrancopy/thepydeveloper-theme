<?php

/**
 * Template Name: Template About Us
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

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

<div class="home-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-8">
            <?php
            $args = [
                'post_type' => 'post_type_about_us',
                'posts_per_page' => 1,
                'order' => 'DESC',
            ];

            $queryAboutUs = new WP_Query($args);

            while ($queryAboutUs->have_posts()) : $queryAboutUs->the_post();
            ?>
                <p class="tagline animate__animated animate__fadeInUp">
                    <?php the_post_summary() ?>
                </p>
            </div>
            <?php
            endwhile;
            wp_reset_query()
            ?>
        </div>
    </div>
</div>

<div class="home-subscribe">
    <div class="title-holder">
        <div class="container">
            <h2>
                <span class="home-subscribe-title">Subscribete</span>
                <div class="home-subscribe-sub-title">Subscribete para recibir novedades</div>
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-11">
                <div class="animate__animated animate__fadeInUp">
                    <?php echo do_shortcode('[contact-form-7 id="32" title="Subscipción"]') ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();
