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

			<div class="about-me">
				<section>
			<h2> About me</h2>
			<?php
			while ( have_posts() ) : the_post();
				the_content();
			endwhile; // End of the loop.
			?>
		</section>
		</div>

		<div class="full-width-3 work">
			<div class="title-block">
				<h2>My work</h2>
			</div>
		<?php
		$args = array( 'post_type' => 'project', 'posts_per_page' => 3 );
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

	<div class="row">
		<a href="my-work" class="ghost-btn">See more of my work
			<svg role="img">
  			<use xlink:href="#chevronright"></use>
			</svg>
		</a>
	</div>


	<div class="full-width-3 blog">
		<div class="title-block">
			<h2>Blog</h2>
		</div>
		<?php
		$args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
		echo '<a class="blog-three--item fw-3-col" href="' .get_permalink() .'">';
		  // the_title();
			the_post_thumbnail();
		  // echo '<div class="entry-content">';
		  // the_content();
		  // echo '</div>';
			echo '</a>';
		endwhile;
		?>

	</div>

	<div class="row">
		<a href="blog" class="ghost-btn">See all blog posts
			<svg role="img">
  			<use xlink:href="#chevronright"></use>
			</svg>
		</a>
	</div>


		</main><!-- #main -->


<?php
get_footer();
