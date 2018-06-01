<?php 
/**
 * Template Name: Store Page
 */
?>
<?php get_header();?>
    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">Come On In</span>
                <span class="section-heading-lower">We're Open</span>
              </h2>
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                <li class="list-unstyled-item list-hours-item d-flex">
                  Sunday
                  <span class="ml-auto">Closed</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Monday
                  <span class="ml-auto">7:00 AM to 8:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Tuesday
                  <span class="ml-auto">7:00 AM to 8:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Wednesday
                  <span class="ml-auto">7:00 AM to 8:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Thursday
                  <span class="ml-auto">7:00 AM to 8:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Friday
                  <span class="ml-auto">7:00 AM to 8:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Saturday
                  <span class="ml-auto">9:00 AM to 5:00 PM</span>
                </li>
              </ul>
              <p class="address mb-5">
                <em>
                  <strong>1116 Orchard Street</strong>
                  <br>
                  Golden Valley, Minnesota
                </em>
              </p>
              <p class="mb-0">
                <small>
                  <em>Call Anytime</em>
                </small>
                <br>
                (317) 585-8468
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section about-heading">
      <div class="container">
        <?php
        $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
        $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'store',
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