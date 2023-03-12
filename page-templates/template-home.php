<?php

/**
 * Template Name: Template Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

?>
<div class="pensa_grande_mobile">
    <img src="<?php echo get_template_directory_uri(); ?>/img/pensa-en-grande.png">
</div>

<div class="home-banner animate__animated animate__fadeIn animate__delay-1s" <?php if (has_post_thumbnail()) { ?> style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);" <?php } ?>>

    <div class="home-banner-sticker d-flex justify-content-center">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Vota-lista-9.png">
    </div>
</div>

<div class="home-call-to-action">
    <div class="container">
        <div class="row">
            <?php
            $args = [
                'post_type' => 'post_type_projects',
                'posts_per_page' => 3,
                'order' => 'ASC',
                'category_name' => 'Proyectos'
            ];

            $queryProject = new WP_Query($args);

            while ($queryProject->have_posts()) : $queryProject->the_post();
            ?>
                <div class="col-md-4">

                    <a href="<?php the_permalink() ?>" class="call-to-action animate__animated animate__zoomIn">
                        <div class="image" <?php if (has_post_thumbnail()) { ?> style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);" <?php } ?>></div>
                        <div class="title">
                            <?php the_title() ?>
                        </div>
                    </a>
                </div>
            <?php
            endwhile;
            wp_reset_query()
            ?>

        </div>
    </div>
</div>

<div class="home-network-updates">
    <?php
    $args = [
        'post_type' => 'videos',
        'posts_per_page' => 1,
    ];

    $queryVideo = new WP_Query($args);

    while ($queryVideo->have_posts()) : $queryVideo->the_post();
    ?>

        <video id="background-video" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
            <?php $key = "video";

            echo '<source src="';
            echo get_post_meta($post->ID, $key, true);
            echo '" type="video/mp4">';
            ?>
        </video>

    <?php
    endwhile;
    wp_reset_query()
    ?>
    <div class="main-section">
        <div class="container">
            <div class="row">
                <?php
                $args = [
                    'post_type' => 'videos',
                    'posts_per_page' => 1,

                ];

                $queryVideo = new WP_Query($args);

                while ($queryVideo->have_posts()) : $queryVideo->the_post();
                ?>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="content-left">
                            <h1><?php the_content() ?></h1>

                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_query()
                ?>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="content-right">
                        <div class="card text-center">
                            <div class="card-header">
                                <i class="fa fa-connectdevelop d-inline p-2" aria-hidden="true"></i>
                                <h3 class="d-inline">Caminata en los barrios.</h3>
                            </div>
                            <div class="card-body">
                                <?php
                                $args = [
                                    'post_type' => 'networkUpdate',
                                    'posts_per_page' => 3,
                                    'order' => 'DESC',
                                ];

                                $queryNetworkUpdate = new WP_Query($args);

                                while ($queryNetworkUpdate->have_posts()) : $queryNetworkUpdate->the_post();
                                ?>
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="col-md-4">
                                            <div class="img d-flex justify-content-center">

                                                <a href="#" class="image shadow animate__animated animate__zoomIn">
                                                    <div class="image shadow" <?php if (has_post_thumbnail()) { ?> style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);" <?php } ?>></div>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="col-md-8 detail">
                                            <div class="text-left"><?php the_content() ?></div>
                                        </div>
                                    </div>
                                <?php
                                endwhile;
                                wp_reset_query()
                                ?>
                            </div>
                            <!-- <div class="card-footer">
                                    <a href="#" class="btn btn-primary text-white">Ver más</a>
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-testimonials">
    <div class="bg-image"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6">
                <?php
                $args = [
                    'post_type' => 'testimonials',
                    'posts_per_page' => 1,
                    'order' => 'DESC',
                ];

                $queryTestimonial = new WP_Query($args);

                while ($queryTestimonial->have_posts()) : $queryTestimonial->the_post();
                ?>
                    <a href="#" class="news-img animate__animated animate__zoomIn">
                        <div class="image shadow" <?php if (has_post_thumbnail()) { ?> style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);" <?php } ?>></div>
                    </a>

                    <div class="home-testimonials-detail-profile align">
                        <h4 class="text-center"><?php the_title() ?></h4>
                    </div>
            </div>

            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6">
                <div class="home-testimonials-quote animate__animated animate__fadeInUp">
                    <blockquote>
                        <?php the_content() ?>
                    </blockquote>
                    <br>
                </div>
            </div>
        <?php
                endwhile;
                wp_reset_query()
        ?>

        </div>
    </div>
</div>

<div class="home-news">
    <div class="bg-image"></div>
    <div class="container">
        <?php
        $args = [
            'post_type' => 'post',
            'posts_per_page' => 1,
            'order' => 'DESC',
            'category_name' => 'noticias'
        ];

        $queryHomeNews = new WP_Query($args);

        while ($queryHomeNews->have_posts()) : $queryHomeNews->the_post();
        ?>
            <div class="row align-items-center">
                <div class="col-xl-5 col-md-6">
                    <a href="#" class="news-img animate__animated animate__zoomIn">
                        <div class="image" <?php if (has_post_thumbnail()) { ?> style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);" <?php } ?>></div>
                        <div class="date"><?php the_date('d.m.Y') ?></div>
                        <div class="category"><?php echo get_the_category()[0]->cat_name; ?></div>
                    </a>
                </div>
                <div class="col-xl-1 d-none d-xl-block">

                </div>

                <div class="col-md-6">
                    <h2 class="animate__animated animate__fadeInUp"><?php the_title() ?></h2>
                    <p class="animate__animated animate__fadeInUp">
                        <?php the_post_summary() ?>
                    </p>
                    <a href="<?php the_permalink() ?>" class="button animate__animated animate__fadeInRigth">Leer más...
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        <?php
        endwhile;
        wp_reset_query()
        ?>
    </div>
</div>
<div class="home-testimonials">
    <?php
    $args = [
        'post_type' => 'post',
        'posts_per_page' => 10,
        'order' => 'DESC',
        'category_name' => 'testimonios'
    ];

    $queryTestimonials = new WP_Query($args);

    while ($queryTestimonials->have_posts()) : $queryTestimonials->the_post();
    ?>
        <div class="bg-overlay" <?php if (has_post_thumbnail()) { ?> style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);" <?php } ?>></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5"></div>
                <div class="col-lg-7">
                    <h2 class="animate__animated animate__fadeInUp"><?php the_title() ?></h2>
                    <div class="testimonial-holder animate__animated animate__fadeInLeft">
                        <p><?php the_post_summary() ?></p>
                        <hr class="seperator">
                        <div class="author"><?php the_author(); ?></div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    endwhile;
    wp_reset_query()
    ?>
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
