<?php
/**
 * The template for displaying all single posts
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">
<div class="container mb-5">
	<div class="row">
		<div class="col-md-9 m-auto single_news mb-5">
			<a class="blue uppercase" href="/news">< Back to News</a>
			<?php
			while ( have_posts() ) {
				the_post(); ?>

<h1 class="lowercase"><?php the_title(); ?></h1>
<div class=" mt-md-5 mt-4">
	<? the_post_thumbnail();?>
</div>
<div class="text_content mt-md-5 mt-4 mb-5">
	<? the_content();?>
</div>
		<?	} ?>

		</div>
	</div>
</div>



			</main><!-- #main -->

			<!-- Do the right sidebar check -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->
</div><!-- #need this -->
<?php
get_footer();
