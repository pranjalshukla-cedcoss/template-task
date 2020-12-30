<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#home
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
                <h4>Recent Posts</h4>
                <h2>Our Recent Blog Entries</h2>
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
                    <a href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
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
        <main id="primary" class="site-main">

<?php

$blog_posts1 = new WP_Query( array( 'post_type' => 'post', 'post_status’' => 'publish') );
                       if($blog_posts1->have_posts()) :
                          while($blog_posts1->have_posts()) :
                             $blog_posts1->the_post();
?>
  
  
                <div class="col-lg-6">
                  <div class="blog-post">
                    <div class="blog-thumb">
                    
                    </div>
                    <div class="down-content">
                      
                      
            <p><?php the_post();
            $a=get_the_excerpt();
            echo substr($a, 0, 100);
                //get_template_part( 'template-parts/content', get_post_type() );
            ?></p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-lg-12">
                          <span style="color:orange;"><?php echo the_category(); ?></span>
                      <a href="<?php the_permalink(); ?>"><h4><?php echo get_the_title(); ?></h4></a>
                      <ul class="post-info">
                        <li><a href="<?php the_permalink(); ?>"><?php echo get_the_author(); ?></a></li>
                        <li><a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a></li>
                        <li><a href="<?php the_permalink(); ?>"><?php comments_number(); ?></a></li>
                      </ul>
                      <?php
          if ( has_post_thumbnail() ) {
                        the_post_thumbnail(get_the_ID(), 'full');
            }
            ?>
                      
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><?php the_tags(); ?>,</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                

<?php
  

  

endwhile; // End of the loop.

endif;
?>

</main><!-- #main -->
                

                <div class="col-lg-12">
                
                        
                  
                  <ul class="page-numbers">
                  
                    <li><?php echo paginate_links(); ?></li>
                    <!-- <li class="active"><a href="#">2</a></li>
                    <li><a href="<?php //next_posts_link( 'Older posts' ); ?>"></a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li> -->
                  </ul>
                  
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

  

<?php

get_footer();
