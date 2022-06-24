<?php
/**
* Template Name: Tjenester Page Template
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
$cb_options					        = get_option( '_choose-design' );
$cb_service_page_title              =   $cb_options['service_page_title'];
$cb_service_page_breadcrumbs        =   $cb_options['service_page_breadcrumbs']['url'];
$cb_service_page_img_logo           =   $cb_options['service_page_img_logo']['url'];
$cb_service_page_left_all_item      =   $cb_options['service_page_left_all_item'];
$cb_service_page_middle_desc        =   $cb_options['service_page_middle_desc'];
$gallery_images_service             =   $cb_options['gallery_images_service'];
$gallery_ids                        = explode( ',', $gallery_images_service );
$cb_service_page_right_img          =   $cb_options['service_page_right_img']['url'];


get_header();
?>

<main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>
                    <?php if( !empty($cb_service_page_title) ) {echo esc_html__($cb_service_page_title, 'choose-design');}else{ echo esc_html__(the_title(), 'choose-design'); }; ?>
                </h2>
                <ol>
                    <li><a href="<?php echo site_url(); ?>"><?php echo esc_html__('HJEM', 'choose-design'); ?></a></li>
                    <li><?php if( !empty($cb_service_page_title) ) {echo esc_html__($cb_service_page_title, 'choose-design');}else{ echo esc_html__(the_title(), 'choose-design'); }; ?></li>
                </ol>
            </div>
        </div>
    </section><!-- End Breadcrumbs -->

    <div class="page-top-image" data-background-image="<?php if( !empty($cb_service_page_breadcrumbs)){echo esc_url($cb_service_page_breadcrumbs); }else{ echo "https://via.placeholder.com/1600x330"; };?>">
        <h2><?php if( !empty($cb_service_page_title) ) {echo esc_html__($cb_service_page_title, 'choose-design');}else{ echo esc_html__(the_title(), 'choose-design'); }; ?></h2>
    </div>
    
    <!-- ======= About content ======= -->
    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="about-left">
                        <h2><img src="<?php if( !empty($cb_service_page_img_logo)){echo esc_url($cb_service_page_img_logo); }else{ echo "https://via.placeholder.com/1600x330"; };?>" alt="img" class="img-fluid img-responsive"></h2>
                        <div class="about-left-item mb-3">
                            <ul>
                                <?php foreach ($cb_service_page_left_all_item as $key => $leftitems) {
                                   echo '<li>'.$leftitems["service_page_left_items"].'</li>';
                                } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-content mb-3">
                        <?php echo '<p>'.$cb_service_page_middle_desc.'</p>'; ?>
                    </div>
                    <div class="slider-small-img swiper">
                        <ul class="list-group list-group-horizontal swiper-wrapper">
                            <?php 
                                if ( ! empty( $gallery_ids ) ) {
                                    foreach ( $gallery_ids as $gallery_item_id ) {
                                      // echo wp_get_attachment_image( $gallery_item_id, 'full' );
                                      echo '<li class="list-group-item swiper-slide">'.
                                      wp_get_attachment_image( $gallery_item_id, 'full' )
                                      .'</li>';
                                    }
                                  }
                            ?>
                            <li class="list-group-item swiper-slide">
                                
                            </li>
                           
                        </ul>
                     <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="about-content-img mb-3">
                        <img src="<?php if( !empty($cb_service_page_right_img)){echo esc_url($cb_service_page_right_img); }else{ echo "https://via.placeholder.com/280x500"; };?>" alt="<?php bloginfo('title')?>" class="img-fluid img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= End content ======= -->  
</main>








<?php get_footer(); ?>
