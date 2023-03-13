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
        'post_type' => 'post_type_videos',
        'posts_per_page' => 1,
    ];

    $queryVideo = new WP_Query($args);

    while ($queryVideo->have_posts()) : $queryVideo->the_post();
    ?>
        <video id="background-video" autoplay loop muted poster="data:image/jpeg;base64,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">
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
                    'post_type' => 'post_type_videos',
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
                                <h3 class="d-inline">Visitas</h3>
                            </div>
                            <div class="card-body">
                                <?php
                                $args = [
                                    'post_type' => 'post_type_visits',
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
                    'post_type' => 'post_type_tests',
                    'posts_per_page' => 1,
                    'order' => 'DESC',
                    'category_name' => 'testimonios'
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
