<?php get_header(); ?>
<section class="slider bg-black clear" style="position: relative;bottom: 6px;background-color: white;">
    <div class="large-12 columns">
        <div class="item slider-bg" style="position: relative;bottom: 0px;height:280px;display: block;background-image: url('<?php echo get_template_directory_uri() . "/assets/images/inner/banner-inner-min.png"; ?>');background-size: cover;">
            <div class="container sl-inner">
                <?php 
                    $cf_header_text_a = get_post_meta($post->ID, 'cf_header_text_a', true);                    
                    $cf_header_text_b = get_post_meta($post->ID, 'cf_header_text_b', true);                      
                ?>  
                <h1 class="slider-h1-inner"><?php echo $cf_header_text_a; ?></h1>
                <h1 class="slider-h1-inner"><?php echo $cf_header_text_b; ?></h1>
            </div>
        </div>
    </div>
</section>  
<br class="clear" /><br/>
<section class="services-section" style="background: url('<?php echo get_template_directory_uri() . "/assets/images/inner/background-inner.png"; ?>') no-repeat;background-size: cover;padding-bottom: 50px;">
    <div class="row">
        <div class="container">
            <div class="col-md-6 form-container form-home left inner">
            <h1><?php the_title();?></h1>
            <br>
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
            <div class="col-md-6 form-container form-home left">
                <div class="form-1" style="background-color: #1d2f5d;height: 100%;width: 80%;padding-top: 1px;margin-top: 35px;float: right;">
                    <div class="form-title" style="background-color: #1d2f5d !important;background-color: #1d2f5d !important;padding-bottom: 15px;border-bottom: 1px solid #3f61b9;">
                        <h3 class="text-white center text-form-title uppercase">Sign up to receive</h3> 
                        <h3 class="text-white center text-form-title-2 uppercase">special offer</h3>
                    </div>
                    <div style="padding:20px;text-align: center;">
                        <?php echo do_shortcode( '[contact-form-7 id="66" title="Contact form 1"]' ); ?>
                    </div>
                </div>
            </div>



        </div>
    </div>
 </section>

<?php get_footer('inner'); ?>