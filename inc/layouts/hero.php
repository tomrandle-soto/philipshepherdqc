<section class="hero position-relative">
	<div class="container position-relative d-none d-sm-flex">
		<div class="row">
			<div class="col-9 col-lg-8 hero_quote_padding position-absolute">
				<figure class="mt-4">
					<blockquote>
						<p class="quote large white"><?php if (get_sub_field('quote')) : the_sub_field( 'quote' ); endif;?></p>
					</blockquote>
					<figcaption class="quoteauthor lightBlue mt-2 mt-md-4 pt-2">- <?php if (get_sub_field('quote_author')) : the_sub_field( 'quote_author' ); endif;?></figcaption>
				</figure>
			</div>
		</div>
	</div>
	<? $desktop_image = get_sub_field('desktop_image');
	if( !empty( $desktop_image ) ): ?>
	<div class="d-none d-sm-flex">
		<img class="" src="<?php echo esc_url($desktop_image['url']); ?>" alt="<?php echo esc_attr($desktop_image['alt']); ?>" />
	</div>
<?php endif;?>
<div class="hero_overlay d-none d-sm-flex">

</div>

<div class="d-block d-sm-none">
	<? $mobile_image = get_sub_field('image');
	if( !empty( $mobile_image ) ): ?>
	<img class="mb-4" src="<?php echo esc_url($mobile_image['url']); ?>" alt="<?php echo esc_attr($mobile_image['alt']); ?>" />
<?php endif;?>
<div class="container">
<div class="row">
	<div class="col-12">
		<h1 class="mb-4"><? the_title(); ?></h1>
		<figure class="mt-4">
		<blockquote>
				<p class="quote large blue_quote"><?php if (get_sub_field('quote')) : the_sub_field( 'quote' ); endif;?></p>
		</blockquote>
		<figcaption class="quoteauthor blue mt-2 mt-md-4 pt-2">- <?php if (get_sub_field('quote_author')) : the_sub_field( 'quote_author' ); endif;?></figcaption>
	</figure>
	</div>
</div>
</div>

</section>
