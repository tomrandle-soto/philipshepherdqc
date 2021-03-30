<section class="hero_home">
<div class="container pt-4 py-md-0">
	<div class="row  pb-md-0 pt-4">
		<div class="col-6 col-lg-7 mt-md-4 pt-md-4 mt-xl-5 pt-xl-5 pr-0 mr-0 quote_padding">
			<figure class="mt-4">
	    <blockquote>
	        <p class="quote large white"><?php if (get_sub_field('quote')) : the_sub_field( 'quote' ); endif;?></p>
	    </blockquote>
	    <figcaption class="quoteauthor lightBlue mt-2 mt-md-4 pt-2">- <?php if (get_sub_field('quote_author')) : the_sub_field( 'quote_author' ); endif;?></figcaption>
	  </figure>
		</div>
			<? $desktop_image = get_sub_field('desktop_image');
			if( !empty( $desktop_image ) ): ?>
			<div class="d-none d-sm-block mt-md-4 mt-lg-0 profile_image">
				<img class="" src="<?php echo esc_url($desktop_image['url']); ?>" alt="<?php echo esc_attr($desktop_image['alt']); ?>" />
			</div>
			<?php endif;?>
</div>
</div>
</section>
