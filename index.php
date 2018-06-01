<?php get_header();?>
    <section class="page-section clearfix">
      <div class="container">

       <?php
          $type = 'book';
          $args = array(
            'post_type' => $type,
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'ignore_sticky_posts'=> true
          );
            $my_query = null;
            $my_query = new WP_Query($args);
          ?>

          <?php if( $my_query->have_posts() ):?>
            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
            
            <?php endwhile; ?>
          <?php
          endif;
          wp_reset_query();
        ?>
        <?php if( $my_query->have_posts() ):?>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <div class="intro">
          <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" <?php echo get_the_post_thumbnail(); ?> 
          <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper"><?php echo get_the_title(); ?></span>
              <span class="section-heading-lower"><?php echo get_the_title(); ?></span>
            </h2>
            <p class="mb-3"><?php echo get_the_excerpt(); ?>
            </p>
            <div class="intro-button mx-auto">
              <a class="btn btn-primary btn-xl" href="<?php echo get_permalink( $post->ID ); ?>">Visit Us Today!</a>
            </div>
          </div>
        </div>
          <?php endwhile; ?>
        <?php
        endif;
        wp_reset_query();
        ?>
      </div>
    </section>

    <section class="page-section cta">
      <div class="container">
        <?php
          $type = 'book2';
          $args = array(
            'post_type' => $type,
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'ignore_sticky_posts'=> true
          );
            $my_query = null;
            $my_query = new WP_Query($args);
          ?>

          <?php if( $my_query->have_posts() ):?>
            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
            
            <?php endwhile; ?>
          <?php
          endif;
          wp_reset_query();
        ?>
        <?php if( $my_query->have_posts() ):?>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper"><?php echo get_the_title(); ?></span>
                <span class="section-heading-lower"><?php echo get_the_title(); ?></span>
              </h2>
              <p class="mb-0"><?php echo get_the_content(); ?></p>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
        <?php
        endif;
        wp_reset_query();
        ?>
      </div>
    </section>


    
<?php get_footer(); ?>

