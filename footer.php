<?php
/* Footer template */
 ?>

    <div class="bottom">
        <div class="container">
            <div class="col-md-4">
                <br></br>
                <h4>cordial.emily@gmail.com</h4>
                <p><a href="https://twitter.com/cordial_emily">
                  <img src="<?php bloginfo('template_url') ?>/images/icons/twitter-icon.png" width="50" height="50" /></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.facebook.com/CordialEmily"> <img src="<?php bloginfo('template_url') ?>/images/icons/fb2.png" width="50" height="50" /></a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="https://knownhabits.wordpress.com/"> <img src="<?php bloginfo('template_url') ?>/images/icons/rss-feed.png" width="50" height="50" /></a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.goodreads.com/user/show/8744-emily"> <img src="<?php bloginfo('template_url') ?>/images/icons/goodreads-icon1.png" width="50" height="50" /></a></p>
            </div>
            <div class="col-md-4">
              /*<!--<?php wp_nav_menu( $args = array(
                'menu_class' => 'navbar-nav nav',
                'theme_location' => 'footer'
              )); ?>-->*/
              <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="glyphicon glyphicon-align-justify"></span>
              </button>
              <div class="navbar-collapse collapse" role="navigation">
                  <?php wp_nav_menu( $args = array(
                    'menu_class' => 'navbar-nav nav',
                    'theme_location' => 'footer'
                  )); ?>

              </div>
                <!--<h3><span class="glyphicon glyphicon-star"></span> Footer section 2</h3>
                <p>Content for the second footer section.</p>-->
            </div>
            <div class="col-md-4">

                <!--<h3><span class="glyphicon glyphicon-music"></span> Footer section 3</h3>
                <p>Content for the third footer section.</p>-->
            </div>
        </div>
    </div>
  </div> <!-- #wrap -->
<footer id="footer">
<div>
<p>&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?></p>
</div>
</footer>

  </div><!--end gradient_container-->
  <?php wp_footer(); ?>
</body>
</html>
