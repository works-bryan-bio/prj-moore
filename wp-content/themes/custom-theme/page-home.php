<?php
/**
Template Name: Homepage
 */
?>
<?php get_header(); ?>
<br class="clear" />
<section class="slider clear" style="position: relative;bottom: 0px;">
    <div class="large-12 columns">
        <?php 
            $slider_data = $wpdb->get_results("SELECT  meta_value FROM wp_postmeta WHERE post_id =28 AND meta_key ='nivo_settings' LIMIT 1"); 
            $slider_settings   = unserialize($slider_data[0]->meta_value);
            $slider_images_ids = $slider_settings['manual_image_ids'];
            $slider_images     = $wpdb->get_results("SELECT  guid, post_excerpt FROM wp_posts WHERE id IN(" . $slider_images_ids . ")");                
        ?>
        <div class="owl-carousel owl-1 owl-theme">
            <?php foreach( $slider_images as $i ){ ?>
               <div class="item slider-bg" style="height:615px;display: block;background-size:cover;background-image: url('<?php echo $i->guid; ?>')">   
                    <div class="container owl-slider owl-content">
                       <div class="col-xs-6 left">
                            <div class="col-xs-12 center banner">
                                <img class="cover" style="max-width: 220px;margin: 0 auto;margin-bottom: 20px;" src="<?php echo get_template_directory_uri() . "/assets/images/homepage/banner-icon.png"; ?>">
                                <h2 class="b-2">Get a Free Moving Estimate</h2>
                                <a class="color-white" href="#">CLICK HERE</a>
                            </div>
                       </div>
                       <div class="col-xs-6 left">
                            <div class="col-xs-12 center banner">
                                <img class="cover" style="max-width: 220px;margin: 0 auto;margin-bottom: 20px;" src="<?php echo get_template_directory_uri() . "/assets/images/homepage/banner-icon-2.png"; ?>">
                                <h2>Setup an In-House Home Estimate</h2>
                                <a class="color-white" href="#">CLICK HERE</a>
                            </div>
                       </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>  
<section class="partners clear" style="background-color: #fbfbfb;position: relative;bottom: 0px;border-bottom: 2px solid #e5e5e5;">
    <div class="container partners" style="padding-top: 20px;padding-bottom: 20px;">
        <?php    
            $args = array(
            'post_type' => 'clients',
            'posts_per_page' => 6,
            'order' => 'ASC'
            );
             
            $the_query = new WP_Query( $args );
             
            if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
            $the_query->the_post();            
        ?>

            <?php 
                $image = "";
                if (has_post_thumbnail( $post->ID ) ){
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                }
            ?>
            <div class="col-xs-12 col-sm-6 col-md-3 center left">
                 <img class="cover padding-img" src="<?php echo $image[0]; ?>">
            </div>
        <?php
            }
            } else {
            // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata();         
        ?>
    </div>
</section>
<section class="services clear" style="padding-top:60px;padding-bottom:60px;background-color: #fbfbfb;">
    <div class="container content service-container">
       <h1 class="uppercase center">Moving Services</h1>
       <hr/>
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
            $cf_excerpt = get_post_meta($post->ID, 'services_excerpt', $single);            
        ?>

            <?php 
                $image = "";
                if (has_post_thumbnail( $post->ID ) ){
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                }
            ?>
            <div class="col-xs-12 col-sm-5 col-md-4 center service-block left">
            <a href="<?php echo $post->guid; ?>">
                 <img class="cover-service" style="margin-bottom:30px;" src="<?php echo $image[0]; ?>">
                 <h2><?php echo get_the_title(); ?></h2>
                 <p><?php echo $cf_excerpt; ?></p>
            </a>
            </div>
        <?php
            }
            } else {
            // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata();         
        ?>
    </div>
</section>
<section class="testimonial clear" style="padding-top:60px;padding-bottom:30px;background-color: #fbfbfb;">
    <div class="container content">
       <h1 class="uppercase center">Our happy customers</h1>
       <hr/>
        <div class="row" style="margin-top:80px !important;padding-bottom:60px;">
        <div class="owl-carousel owl-2 owl-theme">
            <?php $testimonials = $wpdb->get_results("SELECT  ID, post_content, post_title FROM wp_posts WHERE post_type = 'wpm-testimonial' LIMIT 5");  ?>
            <?php foreach( $testimonials as $t ){ $client_name = ""; $company_name = ""; ?>
                <div class="item testimonial-container">                            
                    <?php 
                        //Get Post Meta
                        $testimonial_meta  = $wpdb->get_results("SELECT  meta_key, meta_value, post_id FROM wp_postmeta WHERE post_id =" . $t->ID . " AND (meta_key ='client_name' OR meta_key ='company_name' OR meta_key ='email' OR meta_key ='company_website' OR meta_key ='_thumbnail_id')");         
                        $uploads           = wp_upload_dir(); 
                        $testimonial_image = "";

                    ?>
                    <?php foreach( $testimonial_meta as $tm ){  ?>
                        <?php 
                            if( $tm->meta_key == 'client_name' ){
                                $client_name = $tm->meta_value;
                            }elseif( $tm->meta_key == 'email'  ){
                                
                            }elseif( $tm->meta_key == 'company_name' ){
                                $company_name = $tm->meta_value;
                            }elseif( $tm->meta_key == 'company_website' ){
                            
                            }elseif( $tm->meta_key == '_thumbnail_id' ){
                                $thumb_meta_id = $tm->meta_value;
                                $testimonial_thumb_meta = $wpdb->get_results("SELECT  post_id, meta_key, meta_value FROM wp_postmeta WHERE post_id =" . $thumb_meta_id );
                                foreach( $testimonial_thumb_meta as $thumb ){
                                    if( $thumb->meta_key == '_wp_attached_file' ){
                                        $testimonial_image = $uploads['baseurl'] . "/" . $thumb->meta_value;        
                                    }
                                }
                                
                            }
                        ?>
                    <?php } ?> 

                    <img class="circular" style="margin: 0px auto;margin-bottom:30px;max-width: 180px;" src="<?php echo $testimonial_image; ?>">
                    <br/>
                    <i class="fa fa-quote-left" style="color:#c42026;text-align: center;font-size: 28px;width: 100%;" aria-hidden="true"></i>
                    <p class="center"><?php echo $t->post_content;?></p>
                    <h3 class="uppercase"><?php echo $client_name; ?></h3> 

                </div>
            <?php } ?>
         </div>
         </div>
         <a class="view-more" href="<?php echo get_permalink(80); ?>">View more user reviews >></a>
    </div>
</section>
<section class="banner-2 clear" style="padding-top:60px;padding-bottom:30px;background-color: #fbfbfb;">
   <div class="row banner inner-banner" style="padding: 0px !important;background: url('<?php echo get_template_directory_uri() . "/assets/images/homepage/service-area.png"; ?>') no-repeat; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
        <div class="row banner-content" style="padding-top: 45px;padding-bottom: 50px;">
            <div class="container content center">
                <h1 class="uppercase center color-white">Service Areas</h1>
                <hr style="border-top: 7px solid #ffd602; margin-bottom: 45px !important;" />
                <div class="col-md-12 no-space">
                    <ul class="service-area">
                    <?php    
                        $args = array(
                        'post_type' => 'services_areas',
                        'posts_per_page' => 6,
                        'order' => 'ASC'
                        );
                         
                        $the_query = new WP_Query( $args );
                         
                        if ( $the_query->have_posts() ) {
                        while ( $the_query->have_posts() ) {
                        $the_query->the_post();                        
                    ?>

                        <?php 
                            $image = "";
                            if (has_post_thumbnail( $post->ID ) ){
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                            }
                        ?>
                        <li><a href="<?php echo $post->guid; ?>"><?php echo get_the_title(); ?></a></li>
                    <?php
                        }
                        } else {
                        // no posts found
                        }
                        /* Restore original Post Data */
                        wp_reset_postdata();         
                    ?>
                    </ul>
                </div>
            </div>
        </div>  
    </div>
</section>
<?php get_footer(); ?>