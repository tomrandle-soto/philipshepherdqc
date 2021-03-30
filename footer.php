<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after
*
* @package understrap
*/
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit; ?>
<? if (!is_page( 83 )): ?>
<section class="footer_contact mb-5">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-12">
				<h2 class="mb-5"><?php the_field( 'contact_title', 'option' ); ?></h2>
			</div>
			<div class="col-10 col-md-4 col-lg-3 mx-auto mx-md-0 mb-5 mb-md-0">
				<? $contact_image = get_field('contact_image', 'option');
				if( !empty( $contact_image ) ): ?>
				<img class="rounded-image w-100" src="<?php echo esc_url($contact_image['url']); ?>" alt="<?php echo esc_attr($contact_image['alt']); ?>" />
			<?php endif;?>
		</div>
		<div class="col-md-8 col-lg-8">
			<div class="mb-5"><?php the_field( 'contact_intro', 'option' ); ?></div>
			<a href="tel:<?php the_field( 'phone', 'option' ); ?>" class="contact d-block mb-1"><i class="fal fa-phone blue"></i> <?php the_field( 'phone', 'option' ); ?></a>
			<a href="mailto:<?php the_field( 'email', 'option' ); ?>" class="contact d-block"><i class="fal fa-envelope blue"></i> <?php the_field( 'email', 'option' ); ?></a>
		</div>
	</div>
</div>
</section>
<? endif; ?>
<footer class="white bkg-darkGrey py-5">


	<div class="site-footer mt-10 container" id="colophon">
		<div class="site-info row">
			<div class="col-12">
				<h2 class="logo small white mb-4"><?php the_field( 'logo_text', 'option' ); ?></h2>
				<a href="tel:<?php the_field( 'phone', 'option' ); ?>" class="white contact small d-block"><i class="fal fa-phone lightBlue mr-1"></i> <?php the_field( 'phone', 'option' ); ?></a>
				<a href="mailto:<?php the_field( 'email', 'option' ); ?>" class="white contact small d-block"><i class="fal fa-envelope lightBlue mr-1"></i> <?php the_field( 'email', 'option' ); ?></a>
			</div>
			<div class="col-12 mt-4">
				<hr class="lightBlue"></hr/>
		</div>
		<div class="col-sm-6">
			<p>
				<?php the_field( 'copyright', 'option' ); ?>
			</p>
		</div>
		<div class="col-sm-6 text-md-right">
			<?php wp_nav_menu(
												array(
													'theme_location'  => 'footer',
													'container_class' => 'footer_menu'
												)
			); ?>
		</div>
	</div><!-- .site-info -->
</div><!-- #colophon -->
</footer>
</div><!-- #page we need this extra closing tag here -->
<?php wp_footer(); ?>
</body>
</html>
