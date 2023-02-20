<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');

?>

<header class="page-header entry-header">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
			</div>

			<div class="col-md-6 page-img d-flex justify-content-center">
				<?php echo get_the_post_thumbnail(); ?>
			</div>
		</div>
	</div>
</header>
<div class="wrapper" id="page-wrapper">
	<div class="container" id="content" tabindex="-1">
		<div class="row">
			<?php get_template_part('global-templates/left-sidebar-check'); ?>
			<main class="site-main" id="main">
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
			</main><!-- #main -->
		</div>
		<!--.row -->
	</div>
</div><!-- .row -->



<?php
get_footer();
