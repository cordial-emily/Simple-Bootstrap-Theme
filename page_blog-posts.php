<?php
/*  Template Name: Show Blog Posts & Sidebar (right) */

  get_header();
 ?>

   <div class="bs-docs-featurette main-content-width-wrapper">
    <div class="container">
      <h2 class="bs-docs-featurette-title"><?php echo get_the_title(); ?></h2>

      <hr class="half-rule">

      <div class="row">
        <div class="col-sm-9 main-content">

          <?php wp_reset_query(); ?>
<?php

  $loop = new WP_Query(
      array(
          'post_type'      => 'post',
          'order_by'       => 'post_id',
          'order'          => 'ASC',
          'post_status'    => 'publish',
          'posts_per_page' => 100
      )
  );

?>

<?php while ($loop -> have_posts()): $loop -> the_post(); ?>
<div class="jumbotron">
  <h1><?php the_title(); ?></h1>
  <p><?php the_content(); ?></p>
</div>

<?php endwhile; ?>

        </div>
        <div class="col-sm-3">

            <?php get_sidebar("main-sidebar"); ?>

        </div>
      </div>
      <hr class="half-rule">
      <p class="lead">Bootstrap is open source. It's hosted, developed, and maintained on GitHub.</p> <a href="https://github.com/twbs/bootstrap" class="btn btn-outline btn-lg">View the GitHub project</a> </div>
    </div>
    <?php get_sidebar("main-sidebar"); ?>
  </div>

<?php get_footer(); ?>
