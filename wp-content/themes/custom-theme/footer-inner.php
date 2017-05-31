<section class="footer" style="background-color:#272727;">
    <div class="container footer-container" style="padding-top: 45px;padding-bottom: 45px;">
        <div class="col-md-5 footer-content left">
            <h4 class="color-blue bold uppercase title">OUR SERVICES</h4>
            <?php 
              $menuargs = array(
                "theme_location" => "primary",
                "menu_class" => "s-menu",
                "menu_id" => "footer-a",
              );
              $footer_items = wp_get_nav_menu_items( 'footer-a', $menuargs); 
            ?>
            <ul class="footer-services-ul">
                <?php foreach( $footer_items as $i ){ ?>
                  <li><a href="<?php echo $i->url; ?>"><?php echo $i->title; ?></a></li>
                <?php } ?>      
            </ul>
        </div>
        <div class="col-md-3 footer-content left">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?>
            <?php endif; ?>
        </div>
        <div class="col-md-4 footer-content left">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) : ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<section class="social-media" style="background-color: #5455ce;">
  <div class="container" style="padding-top: 10px;padding-bottom: 4px;">
    <div class="col-sm-12 col-md-9 left footer-copyright" style="    padding-top: 5px;">
          <p class="" style="color: white;font-weight: 400;font-size: 15px;">All Rights Reserved 2017 © Moore Brothers Marketing</p>
    </div>
    <div class="col-sm-12 col-md-3 right footer-copyright" style="position: relative;bottom: 0px;top:3px;">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-3') ) : ?>
        <?php endif; ?>
    </div>
  </div>
</section>
<?php wp_footer();?>
<!-- jQuery -->
<script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html> 