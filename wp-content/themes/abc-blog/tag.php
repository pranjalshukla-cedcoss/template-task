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



    <?php get_header();

    
    ?>


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
                    <a rel="nofollow" href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
              <?php
                       
                       if(have_posts()) :
                        echo __("<center><h1>These are the posts similar to the tag you want to see.</h1></center><br><br>");
                          while(have_posts()) :
                             the_post();
                        
                    ?>
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      
                      <?php 
                      if ( has_post_thumbnail() ) {
                        the_post_thumbnail( get_the_ID(), 'full' );
                      }
                      ?>
                    </div>
                    <div class="down-content">
                    <span style="color:red;"><?php the_category(); ?></span>
                      <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                      <ul class="post-info">
                        <li><a href="#"><?php the_author(); ?></a></li>
                        <li><a href="#"><?php the_date(); ?></a></li>
                        <li><a href="#"><?php comments_number(); ?></a></li>
                      </ul>
                      
                      <?php 
                           
                           the_content();
                      ?>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><?php the_tags(""); ?></li>
                            </ul>
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="http://www.facebook.com">Facebook</a>,</li>
                              <li><a href="http://www.twitter.com"> Twitter</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                  <?php endwhile;
                    endif;
                      ?>
                
                
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

   

<?php

get_footer();
