<?php
/* Template for Logo */
 ?>
<?php
 $args = array(
 'post_type'      => 'logos',
 'oderby'         => 'menu_order',
 'posts_per_page' => -1
 );

$logos = new WP_Query( $args );

if( $logos->have_posts() ): ?>

    <?php while( $logos->have_posts() ) : $logos->the_post(); $index++ ?>

      <?php if ( $index == 1 ): ?>
        <div class="item active">
      <?php else: ?>

      <?php endif; ?>
      <?php $url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo img-fluid" src="<?php echo $url; ?>" alt="<?php the_title(); ?>"> </a>
        </div>
  <?php endwhile; ?>
<?php endif; ?>
