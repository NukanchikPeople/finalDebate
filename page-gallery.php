<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package midterm
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_title(); ?>
				<?php the_content(); ?>

			<?php endwhile; // End of the loop. ?>


			<?php rewind_posts(); ?>

			<?php
				$args = array( 'post_type' => 'debate_club', 'posts_per_page' => 10 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				
				echo '<div class="dc-entry-content">';
				the_title();
				the_content();
				echo '</div>';
				endwhile;
			?>
			

		</main><!-- #main -->
	</div><!-- #primary -->

