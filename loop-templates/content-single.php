<?php

/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<div class="container">
	<div class="row">
		<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

			<header class="entry-header">

				<div class="entry-meta text-sm">
					<!-- <?php echo get_the_post_thumbnail($post->ID, 'large'); ?> -->
				</div><!-- .entry-meta -->

			</header><!-- .entry-header -->
			<div class="entry-content">
				<?php
				the_content();
				understrap_link_pages();
				understrap_posted_on();
				?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">

				<?php understrap_entry_footer(); ?>

			</footer><!-- .entry-footer -->

		</article><!-- #post-## -->
	</div>
</div>