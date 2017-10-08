<?php /* Template Name: Main Template */ get_header(); ?>

<main role="main">
	<!-- section -->
	<section>

		<a class="logo" href="" title=''>
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Silence Kit Band Logo - Winnipeg, Canada">
		</a>

	</section>
	<!-- /section -->

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

</main>
