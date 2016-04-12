<?php
/* Template Name: Project */
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

			<section>

			<?php
			while ( have_posts() ) : the_post();

			if(get_field('image_1'))
			{
				// echo '<p>' . get_field('image_1') . '</p>';
				?>
				<img src="<?php the_field('image_1'); ?>" alt="" />
				<img src="<?php the_field('image_2'); ?>" alt="" />
				<img src="<?php the_field('image_3'); ?>" alt="" />
				<?php
			}

				the_content();


			endwhile; // End of the loop.
			?>
		</section>


		</main><!-- #main -->


<?php
get_footer();
