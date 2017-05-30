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
            <h4 class="color-blue bold uppercase title">LOCATION</h4>
            <h5>Address goes here</h4>
            <h5>Dummy Text</h4>
            <h5>Dummy Text</h4>
            <h5>Dummy Text</h4>
        </div>
        <div class="col-md-4 footer-content left">
            <img style="max-height: 190px;" class="cover" src="<?php echo get_template_directory_uri() . "/assets/images/footer/map.png"; ?>">
        </div>
    </div>
</section>
<section class="social-media" style="background-color: #5455ce;">
  <div class="container" style="padding-top: 20px;padding-bottom: 10px;">
    <div class="col-sm-12 col-md-9 left footer-copyright" style="    padding-top: 5px;">
          <p class="" style="color: white;font-weight: 400;font-size: 15px;">All Rights Reserved 2017 © Moore Brothers Marketing</p>
    </div>
    <div class="col-sm-12 col-md-3 right footer-copyright" style="position: relative;bottom: 5px;">
        <div class="col-md-3 left no-space social-mobile"> 
          <a href="#">
            <img style="width: 100%;height: 100%;max-height: 38px;max-width: 38px;" class="cover" src="<?php echo get_template_directory_uri() . "/assets/images/footer/facebook.png"; ?>">
          </a>
        </div>
        <div class="col-md-3 left no-space social-mobile"> 
          <a href="#">
            <img style="width: 100%;height: 100%;max-height: 38px;max-width: 38px;" class="cover" src="<?php echo get_template_directory_uri() . "/assets/images/footer/twitter.png"; ?>">
          </a>
        </div>
        <div class="col-md-3 left no-space social-mobile"> 
          <a href="#">
            <img style="width: 100%;height: 100%;max-height: 38px;max-width: 38px;" class="cover" src="<?php echo get_template_directory_uri() . "/assets/images/footer/linkedin.png"; ?>">
          </a>
        </div>
        <div class="col-md-3 left no-space social-mobile"> 
          <a href="#">
            <img style="width: 100%;height: 100%;max-height: 38px;max-width: 38px;" class="cover" src="<?php echo get_template_directory_uri() . "/assets/images/footer/google.png"; ?>">
          </a>
        </div>
    </div>
  </div>
</section>
<?php wp_footer();?>
<!-- jQuery -->
<script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/owl.carousel.js"></script>
<script>
  $(document).ready(function() {
    $('.owl-1').owlCarousel({
      items: 1,
      loop: true,
      autoplay: true,
      margin: 10,
      dots: true,
      autoHeight: false
    });
  })
</script>
</body>
</html> 