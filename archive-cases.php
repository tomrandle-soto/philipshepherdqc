<?php
/**
* The template for displaying archive pages
*
* Learn more: http://codex.wordpress.org/Template_Hierarchy
*
* @package understrap
*/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="container">
	<div class="row">
		<div class="col-12 mt-5 mb-4">
			<h1>Recent, Notable & Leading Cases</h1>
		</div>
	</div>
</div>
<section class="bkg-lightBlue py-md-3 py-2">
	<div class="container">
		<span class="d-none d-lg-block">
		<?php echo do_shortcode('[searchandfilter id="239"]'); ?>
		</span>
			<span class="d-block d-lg-none">
				<?php echo do_shortcode('[searchandfilter id="240"]'); ?>
			</span>
	</div>
</section>

<main class="site-main" id="main">
	<div class="container my-5 pb-0 pb-md-5">
		<div class="row">
			<?php while ( have_posts() ) :
				the_post();?>
				<? $bkg_url = wp_get_attachment_url( get_post_thumbnail_id('') );?>
					<div class="col-lg-4 col-sm-6 mb-5 mb-md-0 d-block">
					<img class="rounded-image w-50 mx-auto mb-4" src="<?php echo esc_url($bkg_url); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<h3 class="mb-3 lowercase blue"><?php echo get_the_title($post_object->ID); ?></h3>
					<p><?php echo get_the_excerpt($post_object->ID); ?></p>
					<? if( have_rows( 'further_reading') ): ?>
					     			    <?php while( have_rows( 'further_reading' ) ): the_row(); ?>
					     						<a class="blue further_reading d-block" href="<? the_sub_field('title')?>"><? the_sub_field('title')?></a>
					     			    <?php endwhile; ?>
					     			<?php endif;?>
				</div>
			<?	endwhile; ?>
		</div>
	</div>

</main><!-- #main -->


<?php
get_footer();
