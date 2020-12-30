<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package abc-blog
 * 
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><br><br><center><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'abc-blog' ); ?></center></h1><br><br>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'abc-blog' ); ?></p>



			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

<?php
get_footer();
