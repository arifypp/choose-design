<?php
/**
* Template Name: Media Page Template
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
$cb_options					        =   get_option( '_choose-design' );
$cb_media_page_title                =   $cb_options['media_page_title'];
$cb_media_page_breadcrumbs          =   $cb_options['media_page_breadcrumbs']['url'];
$cb_media_page_left_title           =   $cb_options['media_page_left_title'];
$cb_media_page_left_all_item        =   $cb_options['media_page_left_all_item']; 
$cb_meddia_right_image              =   $cb_options['meddia_right_image']['url']; 
get_header();
?>

<main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>
                    <?php if( !empty($cb_media_page_title) ) {echo esc_html__($cb_media_page_title, 'choose-design');}else{ echo esc_html__(the_title(), 'choose-design'); }; ?>
                </h2>
                <ol>
                    <li><a href="<?php echo site_url(); ?>"><?php echo esc_html__('HJEM', 'choose-design'); ?></a></li>
                    <li><?php if( !empty($cb_media_page_title) ) {echo esc_html__($cb_media_page_title, 'choose-design');}else{ echo esc_html__(the_title(), 'choose-design'); }; ?></li>
                </ol>
            </div>
        </div>
    </section><!-- End Breadcrumbs -->

    <div class="page-top-image" data-background-image="<?php if( !empty($cb_media_page_breadcrumbs)){echo esc_url($cb_media_page_breadcrumbs); }else{ echo "https://via.placeholder.com/1600x330"; };?>">
        <h2><?php if( !empty($cb_media_page_title) ) {echo esc_html__($cb_media_page_title, 'choose-design');}else{ echo esc_html__(the_title(), 'choose-design'); }; ?></h2>
    </div>
    
    <!-- ======= About content ======= -->
    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="about-left">
                        <h2><?php echo esc_html__($cb_media_page_left_title, 'choose-design'); ?></h2>
                        <div class="about-left-item">
                            <ul>
                                <?php foreach ($cb_media_page_left_all_item as $key => $leftitems) {
                                   echo '<li>'.$leftitems["media_page_left_items"].'</li>';
                                } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="about-content-img">
                        <img src="<?php if( !empty($cb_meddia_right_image)){echo esc_url($cb_meddia_right_image); }else{ echo "https://via.placeholder.com/800x500"; };?>" alt="<?php bloginfo('title')?>" class="img-fluid img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= End content ======= -->
    

</main>








<?php get_footer(); ?>
