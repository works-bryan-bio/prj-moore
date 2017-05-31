<?php
/**
Template Name: Homepage
 */
?>
<?php get_header(); ?>
<section class="slider clear" style="position: relative;bottom: 0px;">
    <div class="large-12 columns">
        <?php 
            $slider_data = $wpdb->get_results("SELECT  meta_value FROM wp_postmeta WHERE post_id =38 AND meta_key ='nivo_settings' LIMIT 1"); 
            $slider_settings   = unserialize($slider_data[0]->meta_value);
            $slider_images_ids = $slider_settings['manual_image_ids'];
            $slider_images     = $wpdb->get_results("SELECT  guid, post_excerpt FROM wp_posts WHERE id IN(" . $slider_images_ids . ")");                
        ?>
        <div class="owl-carousel owl-1 owl-theme">
            <?php foreach( $slider_images as $i ){ ?>
               <div class="item slider-bg" style="height:615px;display: block;background-size:cover;background-image: url('<?php echo $i->guid; ?>')">   
                    <div class="container owl-slider owl-content">
                        <div class="row b-1 banner center">
                            <h1 class="color-white uppercase">Professional Marketing Service ... Helping You Build an Effective Online Presence ... that Helps You Grow Your Business</h1>
                        </div>
                    
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>  
<section class="services clear" style="padding-top:60px;padding-bottom:60px;background-color: white;">
    <div class="container content service-container">
       <h1 class="uppercase center"><u class="default">OUR SERVICES</u></h1>
       <br/>
       <?php    
            $args = array(
            'post_type' => 'services',
            'posts_per_page' => 8,
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
            <div class="col-xs-12 col-sm-6 col-md-3 center service-block left">
            <a href="<?php echo $post->guid; ?>">
                 <img class="cover-service" style="margin-bottom:10px;" src="<?php echo $image[0]; ?>">
                 <h2 class="uppercase"><?php echo get_the_title(); ?></h2>
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
<section class="banner-2 clear" style="background-color: white;">
    <div class="col-md-12 footer-content footer-content-inner" style="background-image: url('<?php echo get_template_directory_uri() . "/assets/images/home/banner-2-b.png"; ?>');background-size: cover;background-position: center;">
        <br/>
        <div class="banner-2b center" style="padding-top: 25px;padding-bottom:25px;position: relative;bottom: 20px;">
            <h2 class="uppercase">Are you looking for sales leads?</h2>
            <br/>
            <p>Don't Lose Business to your competitors..</p>
            <p>We can Help you grow your business in Today's marketplace</p>
            <br/>
            <p>Get the Results Your Business Needs...Start Winning Online Tod</p>
            <p class="uppercase">Call Moore Brothers Today</p>
            <br/>
            <a href="#" class="button-desktop">Generate More Sales with our New Platform to Show Case Your Services</a>
            <a href="#" class="button-mobile">Generate More Sales</a>
        </div>
    </div>
</section>





<section class="services clear" style="padding-top:60px;padding-bottom:60px;background-color: white;">
    <div class="container content">
       <h1 class="uppercase center"><u class="default">SPECIALIZING WEB DESIGN FOR</u></h1>
       <br class="clear"/><br class="clear"/>
       <?php    
            $args = array(
            'post_type' => 'web_design',
            'posts_per_page' => 4,
            'order' => 'ASC'
            );
             
            $the_query = new WP_Query( $args );
             
            if ( $the_query->have_posts() ) {
            $even_odd = 1;
            while ( $the_query->have_posts() ) {
            if( $even_odd > 2 ){
              $even_odd = 1;
            }
            $the_query->the_post();
            $cf_excerpt = get_post_meta($post->ID, 'web_design_excerpt', $single);            
        ?>

            <?php 
                $image = "";
                if (has_post_thumbnail( $post->ID ) ){                    
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                }
            ?>

            <?php if( $even_odd == 1 ){ ?>
              <div class="col-md-12 no-space project" style="">
                 <div class="col-sm-12 col-md-5 left">
                      <img class="cover" src="<?php echo $image[0]; ?>">
                 </div>
                 <div class="col-sm-12 col-md-7 left project-right">
                      <h2 class="uppercase"><?php echo get_the_title(); ?></h2>
                      <p><?php echo $cf_excerpt; ?></p>
                 </div>
              </div>
            <?php }else{ ?>
              <div class="col-md-12 no-space project" style="">
                  <div class="col-sm-12 col-md-7 left project-left">
                      <h2 class="uppercase"><?php echo get_the_title(); ?></h2>
                      <p><?php echo $cf_excerpt; ?></p>
                 </div>
                 <div class="col-sm-12 col-md-5 left">
                      <img class="cover" src="<?php echo $image[0]; ?>">
                 </div>
             </div>
            <?php } ?>
        <?php
            $even_odd++;}
            } else {
            // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata();         
        ?>
    </div>
</section>
<?php get_footer(); ?>