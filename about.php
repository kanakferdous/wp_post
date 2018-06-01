<?php 
/**
 * Template Name: About Page
 */
?>
<?php get_header();?>
    <section class="page-section about-heading">
      <div class="container">
        <?php
        $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
        $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'about',
        'posts_per_page' => 1,
        'paged' => $paged,
        );
        $arr_posts = new WP_Query( $args );
        if ( $arr_posts->have_posts() ) :
        while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="<?php echo get_the_post_thumbnail();?>" alt="">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper"><?php the_title();?></span>
                  <span class="section-heading-lower"><?php the_title();?></span>
                </h2>
                <p><?php the_content();?></p>
              </div>
            </div>
          </div>
        </div>
        <?php
        endwhile;
        endif;
        ?>
      </div>
    </section>
<?php get_footer(); ?>