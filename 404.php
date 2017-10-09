<?php get_header(); ?>

<main role="main">

	<!-- article -->
	<article class="post-404" id="post-404">

		<h2>404</h2>
		<h1><?php _e( 'Page not found', 'html5blank' ); ?></h1>
		<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>

	</article>
	<!-- /article -->

	<!-- banner -->
	<section class="banner">
		<?php
			$args = array(
				'post_type' => 'banners',
				'orderby'   => 'rand',
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

	<?php get_footer(); ?>

</main>
