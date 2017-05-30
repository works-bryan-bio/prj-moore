<section class="footer">
    <div class="container footer-container" style="padding-top: 45px;padding-bottom: 45px;">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-1') ) : ?>
        <?php endif; ?>
        <div class="col-sm-4 no-space left">
            <h4 class="color-black bold uppercase title">Services</h4>
            <?php 
                $menuargs = array(
                    "theme_location" => "primary",
                    "menu_class" => "s-menu",
                    "menu_id" => "service-menu",
                );
                $footer_items = wp_get_nav_menu_items( 'service-menu', $menuargs); 
            ?>
            <?php foreach( $footer_items as $i ){ ?>
                <h4 class="color-gray uppercase"><a href="<?php echo $i->url; ?>" class="color-gray"><?php echo $i->title; ?></a></h4>
            <?php } ?>  
          
        </div>
        <div class="col-sm-4 no-space left">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-2') ) : ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<section class="logo-footer" style="background-color: black;">
    <div class="container bottom-footer" style="padding-top: 45px;padding-bottom: 45px;"> 
        <div class="col-sm-6 left footer" style="border-right: 2px solid white;">
            <a href="<?php echo get_option('home'); ?>" style="width: 100%; display: block;text-align: right;">
                <?php the_custom_logo(); ?>
            </a>
        </div>
        <div class="col-sm-6 left contact-footer" style="padding-left: 30px;padding-top: 20px;">
            <?php                   
                $header_number    = $GLOBALS['cgv']['default-contact-number'];
                $cf_header_number = get_post_meta($post->ID, 'header_contact_number', true);                    
                if( $cf_header_number != "" ){
                    $header_number = $cf_header_number;
                }
            ?>
            <i style="margin-top: 4px;margin-right: 10px;font-size: 29px;" class="fa fa-phone color-white left contact-icon" aria-hidden="true"></i>
            <p class="left" style="font-size: 32px;color: white;font-weight: bold;margin-top: 6px;"><a style="color:white;" class="contact" href="tel:+<?php echo str_replace("-", "", $header_number); ?>" style="font-size: 16px;color:white;"><?php echo $header_number; ?></a></p>
                    
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
      autoHeight: false
    });
    if ($(window).width() > 700) {
        $('.owl-2').owlCarousel({
          items: 2,
          loop: true,
          autoplay: true,
          margin: 10,
          dots: false,
          autoHeight: true
        });
    }
    else{
        $('.owl-2').owlCarousel({
          items: 1,
          loop: true,
          autoplay: true,
          margin: 10,
          dots: false,
          autoHeight: true
        }); 
    }
  })
</script>
</body>
</html>