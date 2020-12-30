<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package abc-blog
 */

?>

	<main id="primary" class="site-main">

		<?php
		get_header();
		while ( have_posts() ) :
						the_post();



			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;


		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

	<div class="heading-page header-text">
			<section class="page-heading">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="text-content">
								<h4>about us</h4>
								<h2>more about us!</h2>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

		<!-- Banner Ends Here -->


		<section class="about-us">
			<div class="container">

				<div class="row">
					<div class="col-lg-12">
						<img src="http://localhost:10014/wp-content/themes/abc-blog/images/about-us.jpg" alt="">
						<p>Please tell your friends about TemplateMo website. Thank you. You can browse through different categories of templates such as <a rel="nofollow" href="https://templatemo.com/tag/business" target="_parent">business</a>, <a rel="nofollow" href="https://templatemo.com/tag/portfolio" target="_parent">portfolio</a>, <a rel="nofollow" href="https://templatemo.com/tag/restaurant" target="_parent">restaurant</a>, etc. Pellentesque quis luctus libero. Maecenas pretium molestie erat, ac tincidunt leo gravida ac. Cras ullamcorper eu ipsum eu sollicitudin. Fusce vitae commodo turpis. Integer ullamcorper purus nec justo mollis fermentum. Nunc imperdiet erat nec lacinia laoreet. <br><br>Maecenas faucibus ullamcorper felis vitae finibus. Nullam at quam ut lacus aliquam tempor vel sed ipsum. Donec pellentesque tincidunt imperdiet. Mauris sit amet justo vulputate, cursus massa congue, vestibulum odio. Aenean elit nunc, gravida in erat sit amet, feugiat viverra leo. Phasellus interdum, diam commodo egestas rhoncus, turpis nisi consectetur nibh, in vehicula eros orci vel neque.</p>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-6">
					<h4>Two-One Donec porttitor augue</h4>
						<p>Quisque bibendum cursus viverra. Mauris at ex ipsum. Aenean condimentum urna nisl, eget interdum ante euismod vel. Aliquam at metus sit amet nunc dapibus posuere.</p>
					</div>
					<div class="col-lg-6">
					<h4>Two-Two Donec porttitor augue</h4>
						<p>Maecenas et metus nisl. Morbi ac interdum metus. Aliquam erat volutpat. Donec posuere tortor vel volutpat consequat. Mauris sagittis magna vel tellus semper interdum et id sapien.</p>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-4 col-md-6">
					<h4>1-03 Donec porttitor augue</h4>
						<p>Quisque bibendum cursus viverra. Mauris at ex ipsum. Aenean condimentum urna nisl, eget interdum ante euismod vel. Aliquam at metus sit amet nunc dapibus posuere.</p>
					</div>
					<div class="col-lg-4 col-md-6">
					<h4>2-03 Donec porttitor augue</h4>
						<p>Maecenas et metus nisl. Morbi ac interdum metus. Aliquam erat volutpat. Donec posuere tortor vel volutpat consequat. Mauris sagittis magna vel tellus semper interdum et id sapien.</p>
					</div>
					<div class="col-lg-4">
					<h4>3-03 Donec porttitor augue</h4>
						<p>Maecenas et metus nisl. Morbi ac interdum metus. Aliquam erat volutpat. Donec posuere tortor vel volutpat consequat. Mauris sagittis magna vel tellus semper interdum et id sapien.</p>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-3 col-md-6">
					<h4>01 Four Columns</h4>
						<p>Mauris at ex ipsum. Aenean condimentum urna nisl, eget interdum ante euismod vel. Aliquam at metus sit amet nunc dapibus posuere.</p>
					</div>
					<div class="col-lg-3 col-md-6">
					<h4>02 Four Columns</h4>
						<p>Aliquam erat volutpat. Donec posuere tortor vel volutpat consequat. Mauris sagittis magna vel tellus semper interdum et id sapien.</p>
					</div>
					<div class="col-lg-3 col-md-6">
					<h4>03 Four Columns</h4>
						<p>Morbi ac interdum metus. Donec posuere tortor vel volutpat consequat. Mauris sagittis magna vel tellus semper interdum et id sapien.</p>
					</div>
					<div class="col-lg-3 col-md-6">
					<h4>04 Four Columns</h4>
						<p>Aliquam erat volutpat. Donec posuere tortor vel volutpat consequat. Mauris sagittis magna vel tellus semper interdum et id sapien.</p>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<ul class="social-icons">
							<li><a href="http://www.facebook.com"><i class="fa fa-facebook" style="margin-top:15px;"></i></a></li>
							<li><a href="http://www.twitter.com"><i class="fa fa-twitter" style="margin-top:15px;"></i></a></li>
							<li><a href="http://www.behance.com"><i class="fa fa-behance" style="margin-top:15px;"></i></a></li>
							<li><a href="http://www.linkedin.com"><i class="fa fa-linkedin" style="margin-top:15px;"></i></a></li>
						</ul>
					</div>
				</div>

			</div>
		</section>



<?php

get_footer();
