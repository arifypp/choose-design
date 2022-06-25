<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Choose_Design
 */

get_header();
?>

	<main id="primary" class="site-main">
		<!-- ======= Breadcrumbs ======= -->
		<section class="breadcrumbs">
			<div class="container">
				<div class="d-flex justify-content-between align-items-center">
					<h2>
						<?php echo esc_html__(the_title(), 'choose-design'); ?>
					</h2>
					<ol>
						<li><a href="<?php echo site_url(); ?>"><?php echo esc_html__('HJEM', 'choose-design'); ?></a></li>
						<li><?php echo esc_html__(the_title(), 'choose-design'); ?></li>
					</ol>
				</div>
			</div>
		</section><!-- End Breadcrumbs --> 
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			echo "<section class='inner-page'>";
				echo "<div class='container'>";
					echo "<div class='row'>";
						the_post_navigation(
							array(
								'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'choose-design' ) . '</span> <span class="nav-title">%title</span>',
								'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'choose-design' ) . '</span> <span class="nav-title">%title</span>',
							)
						);
					echo "</div>";
				echo "</div>";
			echo "</section>";

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php

get_footer();
