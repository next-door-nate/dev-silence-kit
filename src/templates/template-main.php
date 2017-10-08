<?php /* Template Name: Main Template */ get_header(); ?>

<main role="main">

	<!-- logo -->
	<a class="logo" href="" title=''>
		<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Silence Kit Band Logo - Winnipeg, Canada">
	</a>
	<!-- /logo -->

	<!-- banner -->
	<section class="banner">
		<?php
			$args = array(
				'post_type' => 'banners',
			 	'posts_per_page' => 5
			);

			$loop = new WP_Query( $args );

			while ( $loop->have_posts() ) : $loop->the_post();

			echo '<div class="banner__indv" style="background-image: url(';
			the_post_thumbnail_url();
			echo ');"></div>';
			endwhile;
		?>
	</section>
	<!-- banner -->



	<!-- shows -->
	<section id="shows" class="shows modal mfp-hide">
		<h3>Music</h3>

		<?php
			$args = array(
				'post_type' => 'shows',
			 	'posts_per_page' => 100
			);

			$loop = new WP_Query( $args );

			while ( $loop->have_posts() ) : $loop->the_post();

			echo '<div class="shows__indv"><h4>';
			the_title();
			echo '</h4></div>';
			endwhile;
		?>
	</section>

	<!-- /shows -->


	<?php get_footer(); ?>

</main>
