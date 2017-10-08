			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<section class="social-media">
					<nav>
						<a class="social-media__facebook" href="https://facebook.com"><i class="fa fa-facebook"></i></a>
						<a class="social-media__twitter" href="https://twitter.com"><i class="fa fa-twitter"></i></a>
						<a class="social-media__instagram" href="https://instagram.com"><i class="fa fa-instagram"></i></a>
						<a class="social-media__spotify" href="https://spotify.com"><i class="fa fa-spotify"></i></a>
						<a class="social-media__apple" href="https://apple.com"><i class="fa fa-apple"></i></a>
						<a class="social-media__google" href="https://google.com"><i class="fa fa-google"></i></a>
					</nav>
				</section>

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> - <?php bloginfo('name'); ?> - All rights reserved -
					Site by <a href="//slowjams.co" title="A Slowjams Joint">slow jams</a>.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- super fresh analytics -->
		<script>
			!function(t,r,k,S,T,A,R){t.GoogleAnalyticsObject=k;t[k]||(t[k]=function(){
			(t[k].q=t[k].q||[]).push(arguments)});t[k].l=+new Date;A=r.createElement(S);
			R=r.getElementsByTagName(S)[0];A.src=T;R.parentNode.insertBefore(A,R)}
			(window,document,'ga','script','//www.google-analytics.com/analytics.js');

			ga('create', 'UA-29923838-10', 'auto');
			ga('send', 'pageview');
		</script>

	</body>
</html>
