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



	<!-- shows -->
	<section id="shows" class="shows modal mfp-hide zoom-anim-dialog">
		<h3>Shows</h3>

		<?php
			$args = array(
				'post_type' => 'shows',
				'orderby' => 'DESC',
			 	'posts_per_page' => 100
			);

			$loop = new WP_Query( $args );

			while ( $loop->have_posts() ) : $loop->the_post();

			$show_date = get_post_meta( $post->ID, 'show-date', true );
 		 	$show_venue = get_post_meta( $post->ID, 'show-venue', true );
 		 	$show_city = get_post_meta( $post->ID, 'show-city', true );
 		 	$show_link = get_post_meta( $post->ID, 'show-link', true );


 		 	echo '<div class="shows__indv">
	 		 				<div class="shows__column shows__column__date"><h4>'.$show_date.'</h4></div>
	 						<div class="shows__column shows__column__venue"><h4>'.$show_venue.'</h4></div>
	 		 				<div class="shows__column shows__column__city"><h4>'.$show_city.'</h4></div>
							<div class="shows__column shows__column__link">';
								if (!empty($show_link)) {
								  echo '<a class="btn" href="'.$show_link.'">Info</a>';
								}
	 		echo '</div></div>';

			endwhile;
		?>
	</section>
	<!-- /shows -->


	<!-- music -->
	<section id="music" class="music modal mfp-hide zoom-anim-dialog">
		<h3>Music</h3>

		<iframe style="border: 0; width: 100%; height: 120px;" src="https://bandcamp.com/EmbeddedPlayer/album=2497081197/size=large/bgcol=ffffff/linkcol=333333/tracklist=false/artwork=small/transparent=true/" seamless><a href="http://silencekitwpg.bandcamp.com/album/started-as-a-whisper">Started as a Whisper by Silence Kit</a></iframe>

		<?php
			// $args = array(
			// 	'post_type' => 'music',
			//  	'posts_per_page' => 100
			// );
			//
			// $loop = new WP_Query( $args );
			//
			// while ( $loop->have_posts() ) : $loop->the_post();
			//
			// echo '<div class="music__indv"><h4>';
			// the_title();
			// echo '</h4></div>';
			// endwhile;
		?>
	</section>
	<!-- /music -->

	<!-- video -->
	<section id="video" class="video modal mfp-hide zoom-anim-dialog">
		<h3>Video</h3>

		<?php
			// $args = array(
			// 	'post_type' => 'music',
			//  	'posts_per_page' => 100
			// );
			//
			// $loop = new WP_Query( $args );
			//
			// while ( $loop->have_posts() ) : $loop->the_post();
			//
			// echo '<div class="music__indv"><h4>';
			// the_title();
			// echo '</h4></div>';
			// endwhile;
		?>
	</section>
	<!-- /video -->


	<?php get_footer(); ?>

</main>
