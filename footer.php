<?php
/* Footer template */
 ?>

    <div class="bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
                <br>
                </br>
                <h3>Get to know us</h3>
                <br>
                <ul class="nav nav-pills nav-stacked">
                  <li><p><a href="https://twitter.com/cordial_emily">
                  <img src="<?php bloginfo('template_url') ?>/images/icons/twitter-icon.png" width="50" height="50" /></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.facebook.com/CordialEmily"> <img src="<?php bloginfo('template_url') ?>/images/icons/fb2.png" width="50" height="50" /></a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="https://knownhabits.wordpress.com/"> <img src="<?php bloginfo('template_url') ?>/images/icons/rss-feed.png" width="50" height="50" /></a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.goodreads.com/user/show/8744-emily"> <img src="<?php bloginfo('template_url') ?>/images/icons/goodreads-icon1.png" width="50" height="50" /></a></p></li>
                </ul>
                <br>
                </br>
            </div>
            <div class="col-md-4">

              <br>
              <br>
              <h3>Menu</h3>
                  <?php wp_nav_menu( $args = array(
                    'container' => 'ul',
                    'menu_class'=> 'nav nav-pills nav-stacked',
                    'theme_location' => 'footer'
                  )); ?>
                  <br>
                  </br>
            </div>
            <div class="col-md-4">
              <br>
              </br>
              <h3>Contact us</h3>
              <ul class="nav nav-pills nav-stacked">
                <li><a href="mailto:cordial.emily@gmail.com?Subject=Hello%20ParallelDesign" target="_top">cordial.emily@gmail.com</a></li>
                <li><p><a href="https://twitter.com/cordial_emily">
              </ul>
              <br>
              </br>
            </div>
          </div>
        </div>
    </div>
  </div> <!-- #wrap -->
<footer id="footer">
  <div class="row">
    <div class="col-lg-12">
      <p class="text-center" style="position:relative;display: block;padding: 10px 15px;">&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?></li></p>
    </div>
 </div>

</footer>

  </div><!--end gradient_container-->
  <?php wp_footer(); ?>
</body>
</html>
