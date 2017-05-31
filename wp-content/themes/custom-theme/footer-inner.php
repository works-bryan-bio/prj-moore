<section class="footer clear">
    <div class="col-md-12 footer-content footer-content-inner" style="background-image: url('<?php echo get_template_directory_uri() . "/assets/images/inner/footer-inner-min.png"; ?>');background-size: cover;background-position: center;">
        <br/>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('page-1') ) : ?>
        <?php endif; ?>
        <br/>
        <div class="col-md-12 no-space">
            <div class="container">
                <div class="col-sm-12 col-md-9 left footer-copyright c-section">
                    <p class="" style="color: white;font-weight: 400;font-size: 15px;position: relative;top: 5px;">Copyright © 2017 Home Contractors -  All rights reserved. Disclaimer</p>
                </div>
                <div class="col-sm-12 col-md-3 right footer-copyright social-section" style="position: relative;bottom: 5px;">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-3') ) : ?>
                    <?php endif; ?>
                </div>
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
      autoHeight: false
    });
  })
</script>
</body>
</html>