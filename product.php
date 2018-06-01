<?php 
/**
 * Template Name: Product Page
 */
?>
<?php get_header();?>
    <section class="page-section">
      <div class="container">
        <?php
        $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
        $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'product',
        'posts_per_page' => 3,
        'paged' => $paged,
        );
        $arr_posts = new WP_Query( $args );
        if ( $arr_posts->have_posts() ) :
        while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
        <div class="product-item">
          <div class="product-item-title d-flex">
            <div class="bg-faded p-5 d-flex ml-auto rounded">
              <h2 class="section-heading mb-0">
                <span class="section-heading-upper"><?php the_title();?></span>
                <span class="section-heading-lower"><?php the_title();?></span>
              </h2>
            </div>
          </div>
          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="<?php echo get_the_post_thumbnail(); ?>" alt=""/>
          <div class="product-item-description d-flex mr-auto">
            <div class="bg-faded p-5 rounded">
              <p class="mb-0"><?php echo get_the_content(); ?></p>
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