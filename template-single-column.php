<?php
/** Template Name: Single Column Template
* @package understrap
*/
if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}?>
<?php get_header(); ?>
<main id="content">
	<section class="single-column">
		<div class="container">
			<div class="col-md-9 m-auto">
				<? if (!is_front_page()) { ?>
				<h1 class="my-5"><? the_title(); ?></h1>
				<? } ?>
				<div class="text_content">
				<?php the_content(''); ?>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
