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
		<aside>
			<ul class="social-links">
				<li>
					<a href="http://twitter.com/robin_parker" rel="external">
					<svg role="img">
		  			<use xlink:href="#twitter"></use>
					</svg>
					<span>robin_parker</span>
				</a>
				</li>
				<li>
					<a href="http://uk.linkedin.com/in/robinkparker" rel="external">
					<svg role="img">
		  			<use xlink:href="#linkedin"></use>
					</svg>
					<span>robinkparker</span>
				</a>
				</li>
			</ul>
			<h4>
				Availability</h4>
			<p>I'm available for UI/Front-end Development contract work from December 2016</p>
		</aside>
		</div>


		<div class="title-block">
			<h2>My work</h2>
		</div>
		<div class="full-width-3 work">
		<?php
		$args = array( 'post_type' => 'project', 'posts_per_page' => 3 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
			echo '<a class="fw-3-col project-block" href="' .get_permalink() .'">';
			the_post_thumbnail();
			?>
			<div class="project-info">
				<h3><?php the_title(); ?></h3>
				<p>See details</p>
			</div>
		</a>
			<?php
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


	<div class="title-block">
		<h2>Blog</h2>
	</div>
	<div class="full-width-3 blog">
		<?php
		$args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
		echo '<div><a class="blog-three--item fw-3-col" href="' .get_permalink() .'">';
			the_post_thumbnail();
			?>
			<div class="post-info">
				<h3><?php the_title(); ?></h3>
				<p><?php the_date(); ?></p>
			</div>
		</a></div>
			<?php
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

		<!-- twitter card img -->
		<!-- <img class="twitter-card-home-img" src="<?php bloginfo( 'template_directory' ); ?>/assets/imgs/twitter-card-img-lego.jpg" /> -->

<?php
get_footer();
