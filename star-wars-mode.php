<?php
/* Template Name: Star Wars mode */
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

<article class="starwars">
		<audio preload="auto" class="theme">
				<source src="<?php bloginfo( 'template_directory' ); ?>/assets/audio/Star_Wars_original_opening_crawl_1977.ogg" type="audio/ogg" />
				<source src="<?php bloginfo( 'template_directory' ); ?>/assets/audio/Star_Wars_original_opening_crawl_1977.mp3" type="audio/mpeg" />
		</audio>

		<a href="<?php echo site_url(); ?>" class="exit-btn"><span>Exit Star Wars mode</span>
			<div class="toggle-icon">
		    <span class="bar"></span>
		    <span class="bar"></span>
		  </div><!-- /toggle-icon -->
		</a>

		<div class="the-els animation">

				<section class="intro">
						A long time ago, in a galaxy far, far away....
				</section>

				<section class="titles">
						<div>
								<p>I’ve been involved in building (and occasionally designing) websites for ten years now, gaining valuable experience with a variety of clients of all shapes and sizes, from small startups to established international brands. The technologies
										I use day to day include HTML(5), CSS(3) and JavaScript. I also have experience with a variety of other technologies and platforms including LESS, Sass, jQuery, AngularJS, Grunt, SVN, Git, WordPress, Twitter Bootstrap and others.</p>
								<p>When I’m not building websites, I’m generally building Lego with my son, or watching Harry Potter movies with my daughter. Or on the rare occasion I get some time to myself I’ll be playing drums in the shed, trying not to annoy the
										neighbours...</p>
						</div>
				</section>

				<section class="logo">
						<svg width="701" height="266" viewBox="0 0 701 266" xmlns="http://www.w3.org/2000/svg">
								<path d="M162.217 144.584H114.61c-10.11 0-20.865-4.76-32.267-14.282-1.41-1.175-10.05-9.697-25.92-25.566v39.848H0V0h102.267c13.518 0 25.42 4.878 35.705 14.635 10.286 9.756 15.43 21.335 15.43 34.735 0 9.522-2.705 18.308-8.112 26.36-5.408 8.053-12.46 14.077-21.16 18.074 1.764 2.115 3.88 3.173 6.35 3.173h31.737v47.607zm-5.29-5.29v-37.027H130.48c-5.526 0-10.228-3.703-14.107-11.108 9.52-3.645 17.103-8.935 22.745-15.87 5.995-7.523 8.993-16.163 8.993-25.92 0-11.99-4.642-22.334-13.93-31.032-9.285-8.7-19.923-13.048-31.913-13.048H5.29v134.005h45.844V92.04l30.856 30.504c11.285 11.167 22.158 16.75 32.62 16.75h42.317zm-54.66-88.16c0 3.76-1.41 7.052-4.232 9.874-2.82 2.82-6.112 4.23-9.874 4.23H51.135V37.03H88.16c3.763 0 7.054 1.41 9.875 4.23 2.82 2.823 4.232 6.114 4.232 9.876zm-5.29 0c0-2.35-.88-4.41-2.645-6.172-1.763-1.763-3.82-2.645-6.17-2.645H56.42V59.95h31.74c2.35 0 4.407-.882 6.17-2.645 1.764-1.763 2.645-3.82 2.645-6.17zm223.93 21.158c0 20.22-7.817 37.44-23.45 51.663-15.047 13.753-32.797 20.63-53.25 20.63-20.454 0-38.204-6.877-53.25-20.63-15.634-14.224-23.45-31.444-23.45-51.663 0-20.218 7.816-37.44 23.45-51.662C206.003 6.877 223.753 0 244.207 0c20.453 0 38.203 6.877 53.25 20.63 15.633 14.223 23.45 31.444 23.45 51.662zm-5.29 0c0-18.808-7.288-34.735-21.864-47.783-14.106-12.814-30.62-19.22-49.546-19.22s-35.44 6.406-49.547 19.22c-14.576 13.047-21.864 28.974-21.864 47.782 0 18.808 7.288 34.736 21.864 47.784 14.106 12.812 30.62 19.22 49.547 19.22 18.925 0 35.44-6.408 49.546-19.22 14.576-13.048 21.864-28.976 21.864-47.784zm-40.554 0c0 8.11-3.086 15.135-9.257 21.07-6.17 5.937-13.37 8.905-21.6 8.905-8.228 0-15.428-2.94-21.6-8.816-6.17-5.877-9.256-12.93-9.256-21.158 0-8.11 3.086-15.134 9.257-21.07 6.17-5.937 13.37-8.905 21.6-8.905 8.11 0 15.28 2.968 21.51 8.905 6.23 5.936 9.346 12.96 9.346 21.07zm-5.29 0c0-6.583-2.586-12.342-7.758-17.28-5.172-4.936-11.108-7.405-17.808-7.405-6.7 0-12.637 2.44-17.81 7.317-5.17 4.88-7.757 10.668-7.757 17.368 0 6.7 2.586 12.49 7.758 17.368 5.172 4.878 11.108 7.317 17.81 7.317 6.7 0 12.635-2.44 17.807-7.317 5.172-4.878 7.758-10.668 7.758-17.368zm209.824 29.446c0 12.578-5.525 23.04-16.574 31.385-10.11 7.64-21.63 11.46-34.56 11.46H326.196V0h93.45c13.05 0 24.628 3.88 34.737 11.637C465.315 20.1 470.78 30.62 470.78 43.2c0 8.933-2.644 17.16-7.934 24.684 11.167 8.58 16.75 19.866 16.75 33.854zm-5.29 0c0-13.283-6.347-24.215-19.043-32.796 6.818-8.463 10.227-17.044 10.227-25.743 0-11.168-4.995-20.454-14.986-27.86-9.05-6.7-19.337-10.05-30.857-10.05h-88.16v134.005h96.976c11.403 0 21.688-3.35 30.857-10.05 9.992-7.29 14.987-16.457 14.987-27.507zM426.7 47.608c0 3.76-1.41 7.052-4.23 9.873-2.823 2.822-6.114 4.233-9.876 4.233h-38.79V33.5h38.79c3.762 0 7.053 1.412 9.875 4.233 2.82 2.82 4.23 6.112 4.23 9.874zm1.763 49.37c0 3.76-1.41 7.052-4.23 9.873-2.822 2.823-6.114 4.233-9.875 4.233h-40.554v-28.21h40.554c3.76 0 7.053 1.41 9.874 4.23 2.82 2.82 4.23 6.113 4.23 9.874zm-7.052-49.37c0-2.352-.88-4.41-2.644-6.172-1.763-1.763-3.82-2.645-6.172-2.645h-33.5v17.633h33.5c2.35 0 4.41-.88 6.172-2.645 1.763-1.763 2.645-3.82 2.645-6.17zm1.764 49.37c0-2.352-.882-4.41-2.645-6.172-1.764-1.763-3.82-2.645-6.172-2.645h-35.265v17.633h35.265c2.35 0 4.408-.88 6.17-2.644 1.764-1.765 2.646-3.822 2.646-6.173zm118.136 47.606h-56.423V0h56.423v144.584zm-5.29-5.29V5.29h-45.844v134.005h45.844zm163.98 5.29h-55.542L603.023 91.51v53.074H546.6V0h55.54l41.437 53.073V0H700v144.584zm-5.29-5.29V5.29h-45.844v63.3l-49.193-63.3H551.89v134.005h45.843v-63.3l49.194 63.3h47.783zm-578.99 57.072c0 9.93-3.777 18.675-11.334 26.232-7.556 7.557-16.3 11.335-26.232 11.335h-33.68v31.09H3.018V158.798h75.134c9.932 0 18.676 3.778 26.232 11.335 7.557 7.557 11.335 16.3 11.335 26.233zm-3.885 0c0-8.81-3.41-16.625-10.234-23.448-6.82-6.822-14.637-10.234-23.446-10.234H6.904v98.453h33.683v-31.09h37.567c8.81 0 16.625-3.41 23.447-10.234 6.824-6.823 10.235-14.638 10.235-23.447zm-33.68 0c0 2.763-1.037 5.18-3.11 7.254-2.073 2.073-4.49 3.11-7.254 3.11H40.588V186H67.79c2.764 0 5.182 1.036 7.255 3.11 2.073 2.072 3.11 4.49 3.11 7.254zm-3.887 0c0-1.728-.648-3.24-1.943-4.534-1.296-1.296-2.807-1.944-4.534-1.944H44.474v12.955H67.79c1.728 0 3.24-.648 4.535-1.943 1.295-1.296 1.943-2.807 1.943-4.534zm150.27 68.657h-42.88l-3.367-12.954H150.83l-3.368 12.953h-42.88l27.853-106.225h64.253l27.852 106.225zm-4.923-3.886l-26.038-98.453h-58.035l-26.04 98.453h34.848l3.37-12.954h33.68l3.368 12.954h34.847zm-43.915-33.68h-22.282l11.14-43.14 11.142 43.14zm-4.923-3.887l-6.218-23.707-6.22 23.707h12.437zm176.438 41.453h-34.977c-7.427 0-15.33-3.497-23.706-10.493-1.037-.863-7.384-7.124-19.043-18.783v29.276h-41.455V158.798h75.135c9.932 0 18.676 3.584 26.233 10.752 7.556 7.168 11.335 15.675 11.335 25.52 0 6.996-1.987 13.45-5.96 19.367-3.972 5.916-9.154 10.342-15.544 13.278 1.295 1.555 2.85 2.332 4.663 2.332h23.318v34.976zm-3.886-3.886v-27.204h-19.433c-4.06 0-7.513-2.72-10.363-8.16 6.995-2.678 12.565-6.565 16.71-11.66 4.405-5.527 6.607-11.875 6.607-19.043 0-8.81-3.41-16.41-10.233-22.8-6.822-6.39-14.638-9.586-23.447-9.586h-71.248v98.453h33.68V226.42l22.67 22.41c8.292 8.205 16.28 12.307 23.966 12.307h31.09zm-40.16-64.77c0 2.762-1.036 5.18-3.11 7.253-2.072 2.073-4.49 3.11-7.253 3.11h-27.204V186h27.204c2.763 0 5.18 1.036 7.254 3.11 2.074 2.072 3.11 4.49 3.11 7.254zm-3.886 0c0-1.73-.648-3.24-1.943-4.535-1.295-1.296-2.806-1.944-4.533-1.944H269.49v12.955h23.317c1.727 0 3.238-.648 4.534-1.943 1.296-1.296 1.944-2.807 1.944-4.534zm165.685-37.57l-38.604 55.316 14.768 14.768c.777.778 2.46 1.167 5.052 1.167h17.618v34.976h-28.5c-7.427 0-15.33-3.497-23.706-10.493-.778-.69-7.125-6.952-19.043-18.783v29.276H351.1V158.798h41.455v31.22l21.893-31.22h50.52zm-5.053 102.34v-27.204h-13.343c-4.06 0-6.822-.734-8.29-2.202l-16.84-17.1 36.012-51.946H416.52l-27.85 39.51v-39.51h-33.683v98.453h33.682V226.42l22.67 22.41c8.29 8.205 16.278 12.307 23.964 12.307h24.613zm113.998 3.886H467.69V158.798h106.225v34.977h-64.77v3.238h38.86v29.795h-38.86v3.24h64.77v34.975zm-3.886-3.886v-27.204h-64.773v-11.01h38.863V200.9h-38.863v-11.012h64.772v-27.204h-98.454v98.453h98.453zm126.95 3.886h-34.976c-7.427 0-15.33-3.497-23.706-10.493-1.036-.863-7.384-7.124-19.043-18.783v29.276H577.8V158.798h75.136c9.932 0 18.676 3.584 26.233 10.752 7.555 7.168 11.334 15.675 11.334 25.52 0 6.996-1.987 13.45-5.96 19.367-3.972 5.916-9.154 10.342-15.544 13.278 1.295 1.555 2.85 2.332 4.663 2.332h23.318v34.976zm-3.885-3.886v-27.204h-19.432c-4.06 0-7.513-2.72-10.363-8.16 6.995-2.678 12.565-6.565 16.71-11.66 4.405-5.527 6.607-11.875 6.607-19.043 0-8.81-3.41-16.41-10.233-22.8-6.823-6.39-14.64-9.586-23.448-9.586h-71.248v98.453h33.68V226.42l22.67 22.41c8.292 8.205 16.28 12.307 23.966 12.307h31.09zm-40.16-64.77c0 2.762-1.035 5.18-3.108 7.253-2.072 2.073-4.49 3.11-7.254 3.11H615.37V186h27.203c2.763 0 5.182 1.036 7.254 3.11 2.073 2.072 3.11 4.49 3.11 7.254zm-3.885 0c0-1.73-.648-3.24-1.943-4.535-1.296-1.296-2.807-1.944-4.534-1.944h-23.318v12.955h23.318c1.727 0 3.238-.648 4.534-1.943 1.295-1.296 1.943-2.807 1.943-4.534z"
										fill="#F8E81C" fill-rule="evenodd" />
						</svg>
				</section>

				<div class="end-msg">
					<p>the end. thanks to Tim whatshisface</p>
				</div>
		</div>
</article>


<?php
get_footer();
