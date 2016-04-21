<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package RobinParker.co.uk
 */

get_header(); ?>

		<main id="main" class="site-main" role="main">

			<header class="section-heading"><h2>Blog</h2></header>

			<?php
			if(get_field('image_1'))
			{
				// echo '<p>' . get_field('image_1') . '</p>';
				?>
			<div class="full-width-3 project">
				<img class="fw-3-col" src="<?php the_field('image_1'); ?>" alt="" />
				<img class="fw-3-col" src="<?php the_field('image_2'); ?>" alt="" />
				<img class="fw-3-col" src="<?php the_field('image_3'); ?>" alt="" />
			</div>
				<?php
			}
			?>

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			// the_post_navigation();

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->

<?php
get_footer();
