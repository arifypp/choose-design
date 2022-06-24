<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Choose_Design
 */
$cb_options					= get_option( '_choose-design' );
$cb_slider_items 			= $cb_options['hero_slider_image'];
$content_title	 			= $cb_options['content_title'];
$content_description		= $cb_options['content_description'];
$project_title				= $cb_options['project_title'];
$project_sub_title			= $cb_options['project_sub_title'];
$project_description		= $cb_options['project_description'];
$about_title				= $cb_options['about_title'];
$about_description			= $cb_options['about_description'];
$about_image				= $cb_options['about_image'];
$social_icon_left_switch	= $cb_options['social_icon_left_switch'];
$social_left_icons			= $cb_options['social_left_icons'];
$social_icons_left_link		= $cb_options['social_icons_left_link'];
$social_icon_right_switch	= $cb_options['social_icon_right_switch'];
$social_right_icons			= $cb_options['social_right_icons'];
$social_icons_right_link	= $cb_options['social_icons_right_link'];
get_header();
?>

	<main id="main">
		<!-- ======= Hero Section ======= -->
		<section class="d-flex align-items-center p-0 m-0">
			<div class="hero-slider swiper">
				<div class="swiper-wrapper align-items-center">
				<?php foreach ($cb_slider_items as $key => $items) { ?>
					<div class="swiper-slide">
						<img src="<?php echo esc_url($items['hero_slider_image_items']['url']); ?>" alt="<?php bloginfo('title')?>">
					</div>
				<?php }; ?>
				

				</div>
				<div class="swiper-pagination"></div>
			</div>			
		</section><!-- End Hero -->

		<!-- ======= About Section ======= -->
		<section id="about" class="about">
			<div class="container" data-aos="fade-up">
				<div class="section-title">
					<h3><?php echo $content_title; ?></h3>
					<?php echo $content_description; ?>
				</div>
			</div>
		</section><!-- End About Section -->

		<!-- ======= Project Section ======= -->
		<section id="content-section" class="content-section">
			<div class="container" data-aos="fade-up">
				<div class="section-title">
					<h3><?php echo esc_html__($project_title, 'choose-design'); ?></h3>
					<p><?php echo esc_html__($project_sub_title, 'choose-design'); ?></p>
				</div>
				<div class="section-content text-left">
					<?php echo do_shortcode('[pap_portfolio]')?>
				</div>
			</div>
		</section><!-- End Project Section -->

		<!-- ======= Content Two Section ======= -->
		<section id="content-sectiontwo" class="content-sectiontwo">
			<div class="container" data-aos="fade-up">
				<div class="section-description">
					<?php echo $project_description; ?>
				</div>
			</div>
		</section><!-- End Content Two Section -->

		<!-- ======= Contact Section ======= -->
		<section id="content-sectionthree" class="content-sectionthree">
			<div class="container" data-aos="fade-up">
				<div class="row">
					<div class="col-md-6">
						<div class="author-image text-md-end">
							<img src="<?php echo esc_url($about_image['url'], 'choose-design'); ?>" alt="<?php echo bloginfo('title'); ?>" class="img-fluid img-responsive">
						</div>
					</div>
					<div class="col-md-6">
						<div class="author-content text-md-left text-left">
							<div class="section-title" style="text-align:left;">
								<h3 class="text-md-left"><?php echo $about_title; ?></h3>
							</div>
							<?php echo $about_description; ?>
						</div>
					</div>
				</div>
			</div>
		</section><!-- End Contact Section -->

		<!-- ======= Contact Section ======= -->
		<section id="content-sectionthree" class="content-sectionthree">
			<div class="container" data-aos="fade-up">
				<div class="row">
					<div class="col-md-6">
						<?php if( $social_icon_left_switch == true ): ?>
						<div class="social-icons text-md-end">
							<a href="<?php echo esc_url($social_icons_left_link, 'choose-design'); ?>" class="text-dark"> <?php echo $social_left_icons; ?> </a>
						</div>
						<?php endif; ?>
					</div>
					<div class="col-md-6">
					<?php if( $social_icon_right_switch == true ): ?>
						<div class="social-icons text-md-left text-left">
						<a href="<?php echo esc_url($social_icons_right_link, 'choose-design'); ?>" class="text-dark"> <?php echo $social_right_icons; ?> </a>
						</div>
					<?php endif; ?>
					</div>
					<div class="col-12 instagram-feed">
						<?php echo do_shortcode('[instagram-feed feed=1]'); ?>
					</div>
				</div>
			</div>
		</section><!-- End Contact Section -->		

	</main><!-- #main -->

<?php
get_footer();
