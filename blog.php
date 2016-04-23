<?php
/* Template Name: Blog */
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

			<header class="section-heading"><h2>Blog</h2></header>

		<?php
		$args = array( 'post_type' => 'post', 'posts_per_page' => 10 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
			echo '<div class="row post-summary">';

			?>
			<div class="post-summary_img">
				<?php
				echo '<a href="' .get_permalink() .'">';
				the_post_thumbnail();
				echo '</a>';
				?>
			</div>
			<div class="post-summary_text">
				<h3><a href="<?php get_permalink() ?>"><?php the_title(); ?></a></h3>
				<span><?php the_date(); ?></span>
				<p><?php the_excerpt(); ?></p>
			</div>
			<article>


			</article>
			<?php
			// the_post_thumbnail('large');
			// the_excerpt();
		  // echo '<div class="entry-content">';
		  // the_content();
			// the_permalink();
		  // echo '</div>';

			echo '</div>';
		endwhile;
		?>


		</main><!-- #main -->


<?php
get_footer();
