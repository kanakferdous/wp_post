<?php get_header();?>
    <section class="page-section clearfix">
      <div class="container">
        <?php
        while(have_posts()){
            the_post();
        ?>
        <div class="intro">
          <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="<?php echo get_the_post_thumbnail(); ?>" alt=""/>
          <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper"><?php echo get_the_title(); ?></span>
              <span class="section-heading-lower"><?php echo get_the_title(); ?></span>
            </h2>
            <p class="mb-3"><?php echo get_the_content(); ?>
            </p>
            <div class="intro-button mx-auto">
              <a class="btn btn-primary btn-xl" href="<?php echo get_site_url(); ?>">Go back</a>
            </div>
          </div>
        </div>
        <?php
        }
        ?>
      </div>
    </section>
<?php get_footer(); ?>
