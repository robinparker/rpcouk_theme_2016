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

			<header class="section-heading"><h2>My work</h2></header>

			<div class="projects">
		<?php
		$args = array( 'post_type' => 'project', 'posts_per_page' => 10 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
			echo '<div class="project">';
			echo '<a href="' .get_permalink() .'">';
		  // the_title();
			the_post_thumbnail();
		  // the_content();
			// the_permalink();
		  // echo '</div>';
			echo '</a>';
			echo '</div>';
		endwhile;

		?>
	</div>

		</main><!-- #main -->


<?php
get_footer();
