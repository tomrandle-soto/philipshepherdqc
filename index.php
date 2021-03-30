<?php
/**
* The main template file
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
* Learn more: http://codex.wordpress.org/Template_Hierarchy
*
* @package understrap
*/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>



<main class="site-main" id="main">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="my-5">News</h1>
			</div>
		</div>
	</div>
	<div class="container news-items mb-5">
		<div class="row">
	<?php
	if ( have_posts() ) {
		// Start the Loop.
		while ( have_posts() ) {
			the_post();?>
<a class="col-sm-6 mb-5" href="<? the_permalink();?>">
	<div class="news-item-link pb-4">
	<? the_post_thumbnail();?>
	<h2 class="my-4"><?php the_title(); ?></h2>
<? the_excerpt();?>
</div>
</a>

	<?	}
	} else {
		get_template_part( 'loop-templates/content', 'none' );
	}
	?>
</div>
</div>

</main><!-- #main -->


<?php
get_footer();
