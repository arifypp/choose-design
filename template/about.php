<?php
/**
* Template Name: About Page Template
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
$cb_options					= get_option( '_choose-design' );
$cb_about_page_title        = $cb_options['about_page_title'];
$cb_about_page_breadcrumbs  = $cb_options['about_page_breadcrumbs']['url'];
$cb_about_page_left_title   = $cb_options['about_page_left_title'];
$cb_about_page_left_items   = $cb_options['about_page_left_all_item'];
$cb_about_page_middle_desc  = $cb_options['about_page_middle_desc'];
$cb_about_page_right_img    = $cb_options['about_page_right_img']['url'];

get_header();
?>

<main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>
                    <?php if( !empty($cb_about_page_title) ) {echo esc_html__($cb_about_page_title, 'choose-design');}else{ echo esc_html__(the_title(), 'choose-design'); }; ?>
                </h2>
                <ol>
                    <li><a href="<?php echo site_url(); ?>"><?php echo esc_html__('HJEM', 'choose-design'); ?></a></li>
                    <li><?php if( !empty($cb_about_page_title) ) {echo esc_html__($cb_about_page_title, 'choose-design');}else{ echo esc_html__(the_title(), 'choose-design'); }; ?></li>
                </ol>
            </div>
        </div>
    </section><!-- End Breadcrumbs -->

    <div class="page-top-image" data-background-image="<?php if( !empty($cb_about_page_breadcrumbs)){echo esc_url($cb_about_page_breadcrumbs); }else{ echo "https://via.placeholder.com/1600x330"; };?>">
        <h2><?php if( !empty($cb_about_page_title) ) {echo esc_html__($cb_about_page_title, 'choose-design');}else{ echo esc_html__(the_title(), 'choose-design'); }; ?></h2>
    </div>
    
    <!-- ======= About content ======= -->
    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="about-left">
                        <h2><?php echo esc_html__( $cb_about_page_left_title, 'choose-design' ); ?></h2>
                        <div class="about-left-item">
                            <ul>
                                <?php foreach ($cb_about_page_left_items as $key => $leftitems) {
                                   echo '<li>'.$leftitems["about_page_left_items"].'</li>';
                                } ?>                               
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-content">
                        <?php echo '<p>'.$cb_about_page_middle_desc.'</p>'; ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="about-content-img">
                        <img src="<?php if( !empty($cb_about_page_right_img)){echo esc_url($cb_about_page_right_img); }else{ echo "https://via.placeholder.com/280x500"; };?>" alt="<?php bloginfo('title'); ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= End content ======= -->
    

</main>








<?php get_footer(); ?>
