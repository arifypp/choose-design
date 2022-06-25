<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Choose_Design
 */
$prefix 		= WP_PAP_META_PREFIX;

$gallery_imgs 	= get_post_meta( $post->ID, $prefix.'gallery_id', true );

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="page-top-image" data-background-image="<?php echo the_post_thumbnail_url(); ?>">
        <h2><?php echo esc_html__(the_title(), 'choose-design'); ?></h2>
    </div>


	<section class="inner-page">
		<div class="container">
			<div class="row">
				<div class="col-8">
					<div class="post-content">
						<ul class="row">
							<?php 
							if( !empty($gallery_imgs) ) :
							foreach ($gallery_imgs as $img_key => $img_data) {
								$gallery_img_src 	= wp_pap_get_image_src( $img_data,'full'); ?>
								
							<li class="col-4 mb-3">
								<a href="<?php echo esc_url($gallery_img_src); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox"> <img src="<?php echo esc_url($gallery_img_src); ?>" alt="img"> </a>
							</li>
							<?php } endif; ?>
						</ul>
					</div>
				</div>
				<div class="col-4">
					<div class="post-content">
					<?php
						the_content(
							sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'choose-design' ),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								wp_kses_post( get_the_title() )
							)
						);

						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'choose-design' ),
								'after'  => '</div>',
							)
						);
					?>
					</div>
				</div>
				<footer class="entry-footer py-3">
					<?php choose_design_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</div>
		</div>
	</section><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
