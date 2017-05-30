<section class="footer" style="background-color:#272727;">
    <div class="container footer-container" style="padding-top: 45px;padding-bottom: 45px;">
        <div class="col-md-6 left">
            <h4 class="color-blue bold uppercase title">OUR SERVICES</h4>
            <h5 class="title">Web Design</h4>
            <h5 class="title">Pay Per Click Ads</h4>
            <h5 class="title">Custom Content</h4>
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