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
<div class="home-banner animate__animated animate__fadeIn animate__delay-2s">
    <div class="container">
        <h1 class="animate__animated animate__fadeInUp animate__delay-800ms">Paraguay, pensá en grande...

        </h1>
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
                'category_name' => 'programas'
            ];

            $queryWelcome = new WP_Query($args);

            while ($queryWelcome->have_posts()) : $queryWelcome->the_post();
            ?>
                <div class="col-md-4">
                
                    <a href="<?php the_permalink() ?>" class="call-to-action animate__animated animate__zoomIn">
                        <div class="image" <?php if (has_post_thumbnail()) { ?> style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);" <?php } ?>></div>
                        <!-- <div class="image"></div> -->
                        
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

</div> -->
<!-- <div class="home-about-images">
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
                <span>Subscribete</span>Subscribete para recibir novedades
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-11">
                <div class="animate__animated animate__fadeInUp">
                    <?php echo do_shortcode('[contact-form-7 id="54" title="Subscripción"]') ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="home-socials">
    <div class="title-holder">
        <div class="container">
            <h2 class="animate__animated animate__fadeInUp">
                <span>Redes Sociales</span> Puedes seguirnos en las redes...
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-11">
                <div class="facebook-holder animate__animated animate__fadeIn">
                    <div class="title">Que hay de nuevo en facebook
                        <i class="fa fa-facebook-square"></i>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="https://picsum.photos/200/300" alt="Cutout Top" width="100%">
                        </div>
                        <div class="col-lg-6">
                            <div class="content">
                                <div class="meta-data">
                                    <div class="date"><i class="fa fa-calendar"></i> Publicado el 31 de octubre</div>
                                    <div class="likes"><i class="fa fa-thumbs-up"></i> 24 likes</div>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima natus porro, quasi quaerat fugiat quisquam velit, nulla laborum, modi maiores non placeat veniam quos incidunt suscipit magni consequatur animi eligendi?
                                </p>
                                <div class="button animate__animated animate__shakeY">Leer en Facebook</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="instagram-holder animate__animated animate__fadeIn">
                    <div class="title">
                        <i class="fa fa-instagram"></i>@jucfra

                    </div>
                </div> 
            </div>

        </div>
    </div>
</div> -->

<?php
get_footer();