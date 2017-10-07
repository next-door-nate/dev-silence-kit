<?php /* Template Name: Blah Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<a href="/" title='Silence Kit Band Logo - Winnipeg, Canada'>
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Silence Kit Band Logo - Winnipeg, Canada" class="logo">
			</a>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
