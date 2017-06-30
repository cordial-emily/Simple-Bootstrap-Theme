<?php
/*  Template Name: Full-Width  */

  get_header();
 ?>

   <div class="bs-docs-featurette main-content-width-wrapper">
    <div class="container">
      <h2 class="bs-docs-featurette-title"><?php echo get_the_title(); ?></h2>

      <hr class="half-rule">

      <div class="row">
        <div class="col-sm-12 main-content">

            <?php
            // Start the loop
                if (have_posts())  :
                    while (have_posts()):
                      the_post();
                          the_content();
                    endwhile;
                endif;
            ?>

        </div>
      </div>
      <hr class="half-rule">
      <p class="lead">Bootstrap is open source. It's hosted, developed, and maintained on GitHub.</p> <a href="https://github.com/twbs/bootstrap" class="btn btn-outline btn-lg">View the GitHub project</a> </div>
  </div>
</div>

<?php get_footer(); ?>
