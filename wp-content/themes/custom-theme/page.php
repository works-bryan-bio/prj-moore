<?php get_header('inner'); ?>
<section class="slider bg-black clear" style="position: relative;bottom: 6px;background-color: white;">
    <div class="large-12 columns">
        <div class="item slider-bg" style="position: relative;bottom: 0px;height:270px;display: block;background-image: url('<?php echo get_template_directory_uri() . "/assets/images/inner/inner-header-min.png"; ?>');background-size: cover;background-position: center;">
            <div class="container sl-inner">
                <?php 
                    $cf_header_text_a = get_post_meta($post->ID, 'header_text_a', true);                    
                    $cf_header_text_b = get_post_meta($post->ID, 'header_text_b', true);                      
                ?>  
                <h1 class="slider-h1-inner"><?php echo $cf_header_text_a;?></h1>
                <h1 class="page-description bold" style=" margin-top: 5px;color: #e6e6e6;"><?php echo $cf_header_text_b;?></h1>
            </div>
        </div>
    </div>
</section>  
<br class="clear" /><br/> 
<section class="services-section" style="background: url('<?php echo get_template_directory_uri() . "/assets/images/inner/background-inner.png"; ?>') no-repeat;background-size: cover;padding-bottom: 50px;">
    <div class="row">
        <div class="container">
            <h1><?php the_title();?></h1>
            <br>
            <div class="col-xs-12 col-md-8 form-container left inner" style="padding-left: 0px !important">
                <?php
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/page/content', 'page' );
                        the_content();
                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                ?>
            </div>
            <div class="col-xs-12 col-md-4 left form-container">
                <div class="form-1" style="background-color: #3d3d3d;height: 100%;">
                    <div class="form-title" style="background-color: #3d3d3d !important;">
                        <h3 class="text-white center text-about-form bold left">FREE QUOTE <i class="fa color-white fa-pencil-square-o" aria-hidden="true"></i></h3>
                    </div>
                    <div style="padding-left: 20px;padding-right: 20px;text-align: center;">
                        <?php echo do_shortcode( '[contact-form-7 id="46" title="Contact form 1"]' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
<?php get_footer('inner'); ?>