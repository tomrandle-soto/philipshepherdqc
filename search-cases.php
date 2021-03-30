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
		<div class="col-12 my-5">
			<h1>Recent, Notable & Leading Cases</h1>
		</div>
	</div>
</div>
<section class="bkg-lightBlue py-2">
	<div class="container">
		<?php echo do_shortcode('[searchandfilter id="239"]'); ?>
	</div>
</section>

<main class="site-main" id="main">
	<div class="container my-5 pb-5">
		<div class="row">
			<?php while ( have_posts() ) :
				the_post();?>
				<? $bkg_url = wp_get_attachment_url( get_post_thumbnail_id('') );?>
					<a class="col-md-4 col-sm-6 mb-5 mb-md-0 d-block" href="<?php echo get_the_permalink($post_object->ID); ?>">
					<img class="rounded-image w-50 mx-auto mb-4" src="<?php echo esc_url($bkg_url); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<h3 class="mb-3 lowercase blue"><?php echo get_the_title($post_object->ID); ?></h3>
					<p><?php echo get_the_excerpt($post_object->ID); ?></p>
				</a>
			<?	endwhile; ?>
		</div>
	</div>

</main><!-- #main -->


<?php
get_footer();
