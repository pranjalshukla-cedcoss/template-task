<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package abc-blog
 */

?>

	<!-- <footer id="colophon" class="site-footer">
		<div class="site-info"> -->
			<a href="<?php ///echo esc_url( __( 'https://wordpress.org/', 'abc-blog' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				///printf( esc_html__( 'Proudly powered by %s', 'abc-blog' ), 'WordPress' );
				?>
			</a>
			<!-- <span class="sep"> | </span> -->
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				//printf( esc_html__( 'Theme: %1$s by %2$s.', 'abc-blog' ), 'abc-blog', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="social-icons">
							<li><a href="http://www.facebook.com">Facebook</a></li>
							<li><a href="http://www.twitter.com">Twitter</a></li>
							<li><a href="http://www.behance.com">Behance</a></li>
							<li><a href="http://www.linkedin.com">Linkedin</a></li>
							<li><a href="http://www.dribble.com">Dribbble</a></li>
						</ul>
					</div>
					<div class="col-lg-12">
						<div class="copyright-text">
							<p>Copyright 2020 Stand Blog Co.
										
								 | Design: <a rel="nofollow" href="https://templatemo.com" target="_parent">TemplateMo</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
