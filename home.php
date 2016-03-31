<?php
/* Template Name: Home */
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

	<div class="the-big-picture">
		<header>
			<h1>I'm Robin Parker, UI Developer<span>and I like to build stuff</h1>
		</header>
	</div>

		<main id="main" class="site-main" role="main">

			<section class="about-me">
			<h2> About me</h2>
			<?php
			while ( have_posts() ) : the_post();

				the_content();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</section>


		</main><!-- #main -->


<?php
get_footer();
