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

<!-- <main id="primary" class="site-main"> -->

<?php
// while ( have_posts() ) :
//     the_post();
    

//     get_template_part( 'template-parts/content', 'page' );

//     // If comments are open or we have at least one comment, load up the comment template.
//     if ( comments_open() || get_comments_number() ) :
//         comments_template();
//     endif;
    
//     echo "dsgfdrgdrgd";
    

// endwhile; // End of the loop.
?>

<!-- </main>#main -->
    <?php get_header();

    
    ?>

<div class="main-banner header-text">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">
        <?php
        $blog_posts1 = new WP_Query( array( 'post_type' => 'post', 'post_status’' => 'publish') );
                       if($blog_posts1->have_posts()) :
                          while($blog_posts1->have_posts()) :
                             $blog_posts1->the_post();
        ?>
          <div class="item">
            <!-- <img src="http://localhost:10014/wp-content/themes/abc-blog/images/banner-item-01.jpg" alt=""> -->
            <?php 
                      if ( has_post_thumbnail() ) {
                        the_post_thumbnail( get_the_ID(), 'full' );
                      }
            ?>
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                <span style="color:red;"><?php the_category(); ?></span>
                </div>
                <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                <ul class="post-info">
                  <li><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"><?php the_author(); ?></a></li>
                  <li><a href="<?php the_permalink(); ?>"><?php the_date(); ?></a></li>
                  <li><a href="<?php the_permalink(); ?>"><?php comments_number(); ?></a></li>
                </ul>
              </div>
            </div>
          </div>

          <?php
          endwhile;
        endif;
        ?>
          
          
          
          
         
        </div>
      </div>
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
                       $blog_posts = new WP_Query( array( 'post_type' => 'post', 'post_status’' => 'publish', 'posts_per_page' => 3 ) );
                       if($blog_posts->have_posts()) :
                          while($blog_posts->have_posts()) :
                             $blog_posts->the_post();
                        
                    ?>
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <!-- <img src="http://localhost:10014/wp-content/themes/abc-blog/images/blog-post-01.jpg" alt=""> -->
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
                        <li><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"><?php the_author(); ?></a></li>
                        <li><a href="<?php the_permalink(); ?>"><?php the_date(); ?></a></li>
                        <li><a href="<?php the_permalink(); ?>"><?php comments_number(); ?></a></li>
                      </ul>
                      
                      <?php 
                           //$blog_posts->get_template_part( 'template-parts/content', get_post_type() );
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
                <!-- <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="http://localhost:10014/wp-content/themes/abc-blog/images/blog-post-02.jpg" alt="">
                    </div>
                    <div class="down-content">
                      <span>Healthy</span>
                      <a href="post-details.html"><h4>Etiam id diam vitae lorem dictum</h4></a>
                      <ul class="post-info">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">May 24, 2020</a></li>
                        <li><a href="#">36 Comments</a></li>
                      </ul>
                      <p>You can support us by contributing a little via PayPal. Please contact <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">TemplateMo</a> via Live Chat or Email. If you have any question or feedback about this template, feel free to talk to us. Also, you may check other CSS templates such as <a rel="nofollow" href="https://templatemo.com/tag/multi-page" target="_parent">multi-page</a>, <a rel="nofollow" href="https://templatemo.com/tag/resume" target="_parent">resume</a>, <a rel="nofollow" href="https://templatemo.com/tag/video" target="_parent">video</a>, etc.</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><a href="#">Best Templates</a>,</li>
                              <li><a href="#">TemplateMo</a></li>
                            </ul>
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Facebook</a>,</li>
                              <li><a href="#">Twitter</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="http://localhost:10014/wp-content/themes/abc-blog/images/blog-post-03.jpg" alt="">
                    </div>
                    <div class="down-content">
                      <span>Fashion</span>
                      <a href="post-details.html"><h4>Donec tincidunt leo nec magna</h4></a>
                      <ul class="post-info">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">May 14, 2020</a></li>
                        <li><a href="#">48 Comments</a></li>
                      </ul>
                      <p>Nullam at quam ut lacus aliquam tempor vel sed ipsum. Donec pellentesque tincidunt imperdiet. Mauris sit amet justo vulputate, cursus massa congue, vestibulum odio. Aenean elit nunc, gravida in erat sit amet, feugiat viverra leo. Phasellus interdum, diam commodo egestas rhoncus, turpis nisi consectetur nibh, in vehicula eros orci vel neque.</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><a href="#">HTML CSS</a>,</li>
                              <li><a href="#">Photoshop</a></li>
                            </ul>
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Facebook</a>,</li>
                              <li><a href="#">Twitter</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
                <div class="col-lg-12">
                  <div class="main-button">
                    <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">View All Posts</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <?php get_sidebar(); ?>
                <!-- <div class="col-lg-12">
                  <div class="sidebar-item search">
                    <form id="search_form" name="gs" method="GET" action="#">
                      <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                    </form>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2>Recent Posts</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="post-details.html">
                          <h5>Vestibulum id turpis porttitor sapien facilisis scelerisque</h5>
                          <span>May 31, 2020</span>
                        </a></li>
                        <li><a href="post-details.html">
                          <h5>Suspendisse et metus nec libero ultrices varius eget in risus</h5>
                          <span>May 28, 2020</span>
                        </a></li>
                        <li><a href="post-details.html">
                          <h5>Swag hella echo park leggings, shaman cornhole ethical coloring</h5>
                          <span>May 14, 2020</span>
                        </a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                      <h2>Categories</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="#">- Nature Lifestyle</a></li>
                        <li><a href="#">- Awesome Layouts</a></li>
                        <li><a href="#">- Creative Ideas</a></li>
                        <li><a href="#">- Responsive Templates</a></li>
                        <li><a href="#">- HTML5 / CSS3 Templates</a></li>
                        <li><a href="#">- Creative &amp; Unique</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item tags">
                    <div class="sidebar-heading">
                      <h2>Tag Clouds</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Creative</a></li>
                        <li><a href="#">HTML5</a></li>
                        <li><a href="#">Inspiration</a></li>
                        <li><a href="#">Motivation</a></li>
                        <li><a href="#">PSD</a></li>
                        <li><a href="#">Responsive</a></li>
                      </ul>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

 
<?php

get_footer();
