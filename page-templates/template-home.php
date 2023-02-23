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
                'post_type' => 'post',
                'posts_per_page' => 3,
                'order' => 'ASC',
                'category_name' => 'Proyectos'
            ];

            $queryWelcome = new WP_Query($args);

            while ($queryWelcome->have_posts()) : $queryWelcome->the_post();
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

<?php
$args = [
    'post_type' => 'post',
    'posts_per_page' => 1,
    'order' => 'DESC',
    'category_name' => 'institucional'
];

$queryWelcome = new WP_Query($args);

while ($queryWelcome->have_posts()) : $queryWelcome->the_post();
?>

    <div class="home-welcome">
        <div class="title-holder">
            <div class="container">
                <h2 class="animate__animated animate__fadeInUp">
                    <span>Bienvenidos</span><?php the_title() ?>
                </h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-8">
                    <p class="tagline animate__animated animate__fadeInDown">
                        <?php the_post_summary() ?>
                    </p>
                    <p class="animate__animated animate__fadeInDown">
                        <?php the_post_summary() ?>
                    </p>
                </div>
                <div class="col-lg-3">
                    <a href="<?php the_permalink() ?>">
                        <div class="button animate__animated animate__fadeInRight">Leer más...
                            <i class="fa fa-chevron-right"></i>
                        </div>
                    </a>
                </div>

            </div>
        </div>

    </div>

<?php
endwhile;
wp_reset_query()
?>

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
    <div class="home-news">
        <div class="bg-image"></div>
        <div class="container">
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
        </div>
    </div>
<?php
endwhile;
wp_reset_query()
?>
<!-- <div class="home-about">
        <div class="bg-image">
            <div class="top-overlay animate__animated animate__slideInDown">
                <img src="<?php echo get_template_directory_uri(); ?>/img/top-home-about-decoration.svg" alt="Cutout Top" width="100%">
            </div>
            <div class="bottom-overlay animate__animated animate__slideInUp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/bottom-home-about-decoration.svg" alt="Cutout Top" width="100%">
            </div>
        </div>
        <div class="title-holder">
            <div class="container">
                <h2 class="animate__animated animate__fadeInUp">
                    <span>Bienvenidos</span>Viva Latinoamérica
                </h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-8">
                    <p class="tagline animate__animated animate__fadeInUp">
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.
                    <p>
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock.
                    </p>

                </div>
                <div class="col-lg-3">
                    <a href="">
                        <div class="button animate__animated animate__fadeInRight">Leer más...
                            <i class="fa fa-chevron-right"></i>
                        </div>
                    </a>
                </div>

            </div>
        </div>

    </div>
    <div class="home-about-images">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="#" class="call-to-action animate__animated animate__zoomIn animate__delay-2s">
                        <div class="image"></div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="call-to-action second animate__animated animate__zoomIn animate__delay-1s">
                        <div class="image"></div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="call-to-action third animate__animated animate__zoomIn">
                        <div class="image"></div>
                    </a>
                </div>
            </div>
        </div>
    </div> -->

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
    <div class="home-testimonials">
        <!-- <div class="bg-overlay"></div> -->
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
    </div>
<?php
endwhile;
wp_reset_query()
?>
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
