<?php
/**
Template Name: Services
 */
?>
<style>
.entry-content p{
    text-align: left !important;
}
</style>
<?php get_header(); ?>
<section class="banner-section bg-black">
    <div class="row banner" style="padding: 0px !important;background: url('<?php echo get_template_directory_uri() . "/assets/images/service/img-service-banner.jpg"; ?>') no-repeat; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
        <div class="row banner-content" style="padding-top: 50px;padding-bottom: 50px;">
            <div class="container center">
                <h1 class="txt-slider color-white uppercase bold">this is just a dummy text</h1>
                <p class="color-white banner-p">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>
            </div>
        </div>  
    </div>
</section>
<br class="clear" /><br/>
<section class="services-section">
    <div class="row">
        <div class="container">
        <div class="col-md-8 left" style="margin-top: 20px; padding-left: 0px !important;">
        <h1 class="header-text" style="font-size: 30px; font-weight: bold;"><span style="color: #386b08;">Services</span></h1><br/>
            <?php
                while ( have_posts() ) : the_post();
                    $image = "";
                    
                    if (has_post_thumbnail( $post->ID ) ){
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
                    }

                    if( $image != "" ){
                        echo "<div style='margin-bottom:80px;'><img class='post-featured-image' src='" .  $image[0] . "' /></div>";
                    }
                    get_template_part( 'template-parts/page/content', 'page' );
                    the_content();
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
            ?>

            <?php $loop = new WP_Query( array( 'post_type' => 'services', 'posts_per_page' => 10 ) ); ?>

            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                <?php the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); ?>

                <div class="entry-content" style="text-align:left;">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
            </div>
           
                <div class="col-md-4 left form-container"  style="margin-top:20px;">
                    <div class="form-1" style="height: 100%;border: 1px solid #b9b9b9;">
                        <div class="form-title bg-green" style="background-color:#386b08 !important;">
                            <h3 class="text-white text-about-form bold">ENTER YOUR INFO BELOW</h3> 
                        </div>
                        <div style="padding:20px;text-align: center;">
                            <?php echo do_shortcode( '[contact-form-7 id="10" title="Contact form 1"]' ); ?>
                        </div>
                    </div>
                    <br/>
                    <div class="service-section">
                        <?php    
                            $args = array(
                            'post_type' => 'services',
                            'posts_per_page' => 6,
                            'order' => 'ASC'
                            );
                             
                            $the_query = new WP_Query( $args );
                             
                            if ( $the_query->have_posts() ) {
                            while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                        ?>
                        <a href="<?php echo get_permalink(); ?>">
                            <div class="service-page-block" style="">
                                <h4 class="green left"><?php echo get_the_title(); ?></h4><span class="right green arrow-right"><i class="fa fa-angle-right r-icon" aria-hidden="true"></i></span>
                            </div>
                        </a>
                        <?php
                            }
                            } else {
                            // no posts found
                            }
                            /* Restore original Post Data */
                            wp_reset_postdata();         
                        ?>                        
                    </div>


        </div>
    </div>
 </section>
<br class="clear" /><br/><br/>
<?php get_footer(); ?>