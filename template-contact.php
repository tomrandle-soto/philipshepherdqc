<?php
/** Template Name: Contact Template
* @package understrap
*/
if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}?>
<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-12 mb-5 mb-md-4">
      <h1 class="sr-only">Contact Us</h1>
      <h2 class="underline my-5"><?php the_field( 'general_contact_title' ); ?></h2>
      <h3 class="underline">Address</h3>
      <p class="contact mb-5"><?php the_field( 'address' ); ?></p>
      <h3 class="underline">Contact</h3>
      <a href="tel:<?php the_field( 'phone', 'option' ); ?>" class="contact d-block mb-1"><i class="fal fa-phone blue"></i> <?php the_field( 'phone', 'option' ); ?></a>
      <a href="mailto:<?php the_field( 'email', 'option' ); ?>" class="contact d-block"><i class="fal fa-envelope blue"></i> <?php the_field( 'email', 'option' ); ?></a>
    </div>
  </div>
</div>
<section class="bkg-lighterBlue pt-5 mt-0 mt-md-5">
  <div class="container">
    <div class="row">
    <? if( have_rows( 'contacts' ) ): ?>
    <?php while( have_rows( 'contacts' ) ): the_row(); ?>
      <div class="col-sm-6 mb-5">
        <? $image = get_sub_field('profile_image');?>
        <? if( !empty( $image ) ): ?>
        <h3 class="underline"><?php the_sub_field( 'title' ); ?></h3>
        <img class="rounded-image w-50 mt-4" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php if(get_sub_field('office')) : ?>
          <a class="contact d-block mb-1 mt-4" href="tel:<?php the_sub_field( 'office' ); ?>"><i class="fal fa-fw fa-phone blue"></i> <?php the_sub_field( 'office' ); ?></a>
        <? endif; ?>
        <?php if(get_sub_field('mobile')) : ?>
          <a class="contact d-block mb-1 mt-2" href="tel:<?php the_sub_field( 'mobile' ); ?>"><i class="fal fa-fw fa-mobile blue"></i> <?php the_sub_field( 'mobile' ); ?></a>
        <? endif; ?>
        <?php if(get_sub_field('email')) : ?>
          <a class="contact d-block mb-1 mt-2" href="tel:<?php the_sub_field( 'email' ); ?>"><i class="fal fa-fw fa-envelope blue"></i> <?php the_sub_field( 'email' ); ?></a>
        <? endif; ?>
        <hr class=" w-100 mt-3 mt-md-5">
        <?php if(get_sub_field('linkedin')) : ?>
          <a class="contact d-block mb-1 mt-0 mt-md-1" href="tel:<?php the_sub_field( 'linkedin' ); ?>"><i class="fab fa-linkedin-in blue  fa-fw mt-1 mt-md-3"></i><span class="sr-only">View <?php the_sub_field( 'title' ); ?> on LinkedIN</span></a>
        <? endif; ?>
      </div>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif;?>
</div>
</div>
</section>
<div class="container">
  <div class="row">
<div class="col-12 mb-5">
    <h2 class="underline my-4 my-md-5">Find Us</h2>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.9365974959933!2d-0.11309958422976546!3d51.51437917963638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b350409bfb%3A0x5855d35fd8a20a47!2s5%20Chancery%20Ln%2C%20Holborn%2C%20London%20EC4A%201BL!5e0!3m2!1sen!2suk!4v1616435491222!5m2!1sen!2suk" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
</div>
</div>
<?php get_footer(); ?>
