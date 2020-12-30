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

get_header();
?>

  

    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Post Detail</h4>
                <h2>Single blog post</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->

    <section class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-content">
              <div class="row">
                <div class="col-lg-8">
                  <span>Stand Blog HTML5 Template</span>
                  <h4>Creative HTML Template For Bloggers!</h4>
                </div>
                <div class="col-lg-4">
                  <div class="main-button">
                    <a rel="nofollow noopener" href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-12">
        <main id="primary" class="site-main">

    <?php
    get_header();
    while ( have_posts() ) :
      the_post();
      //echo "kfhuidfshudsrfh";
      

      //get_template_part( 'template-parts/content', 'page' );

      ?>
                  <div class="blog-post">
                    <div class="blog-thumb">
          <?php
          if ( has_post_thumbnail() ) {
                        the_post_thumbnail( get_the_ID(), 'full' );
            }
            ?>
                    </div>
                    <div class="down-content">
                      <span><?php the_category(); ?></span>
                      <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                      <ul class="post-info">
                        <li><a href="<?php  echo get_permalink( get_option( 'page_for_posts' ) );  ?>"><?php the_author(); ?></a></li>
                        <li><a href="<?php ?>"><?php the_date(); ?></a></li>
                        <li><a href="<?php ?>"><?php comments_number(); ?></a></li>
                      </ul>
                      <p><?php the_content(); ?></p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><?php the_tags(); ?>,</li>
                            </ul>
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="http://facebook.com">Facebook</a>,</li>
                              <li><a href="http://twitter.com"> Twitter</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
          <?php
          // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
        comments_number();
        comments_template();
        
      
        
      endif;
      

    endwhile; // End of the loop.
    ?>

  </main><!-- #main -->
                </div>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
              <?php get_sidebar(); ?>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <?php  ?>


<?php

get_footer();
