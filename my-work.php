<?php
/* Template Name: My Work */
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
 * @package RobinParker.co.uk
 */

get_header(); ?>

		<main id="main" class="site-main" role="main">

		<div class="full-width-3 work">
		<?php
		$args = array( 'post_type' => 'project', 'posts_per_page' => 10 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
			echo '<a class="work-three--item fw-3-col" href="' .get_permalink() .'">';
		  // the_title();
			?>
			<!-- <img src="<?php the_field('main_image'); ?>" /> -->
			<?php
			the_post_thumbnail();
		  // echo '<div class="entry-content">';
		  // the_content();
			// the_permalink();
		  // echo '</div>';
			echo '</a>';
		endwhile;

		?>
	</div>



		</main><!-- #main -->


<?php
get_footer();
