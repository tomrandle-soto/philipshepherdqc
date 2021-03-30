<section class="quote_with_image <? if (get_sub_field('margin_bottom')) : ?>mb-5<? endif; ?>">
	<div class="quote_container">
		<div class="quote_image">
			<? $mobile_image = get_sub_field('mobile_image');
			if( !empty( $mobile_image ) ): ?>
			<img class="d-block d-sm-none w-100" src="<?php echo esc_url($mobile_image['url']); ?>" alt="<?php echo esc_attr($mobile_image['alt']); ?>" />
			<?php endif;?>
			<? $desktop_image = get_sub_field('desktop_image');
			if( !empty( $desktop_image ) ): ?>
			<img class="d-none d-sm-block w-100" src="<?php echo esc_url($desktop_image['url']); ?>" alt="<?php echo esc_attr($desktop_image['alt']); ?>" />
			<?php endif;?>
		</div>
		<?php $quote_placement = get_sub_field('quote_placement'); ?>
		<?php $quote_colour = get_sub_field('quote_colour'); ?>
		<div class="quote_text <? if ($quote_placement == 'top left') : { echo 'top_left';} elseif ($quote_placement == 'top centre') : {echo  'top_centre';} elseif ($quote_placement == 'top right') : {echo  'top_right';} elseif ($quote_placement == 'centre left') : { echo  'centre_left';} elseif ($quote_placement == 'centre right') : {echo  'centre_right';} elseif ($quote_placement == 'centre centre') : { echo  'centre_centre';} elseif ($quote_placement == 'bottom left') : { echo  'bottom_left';} elseif ($quote_placement == 'bottom centre') : { echo  'bottom_centre';} elseif ($quote_placement == 'bottom right') : { echo  'bottom_right';} endif; ?>">
			<figure>
	    <blockquote>
	        <p class="quote small <? if ($quote_colour == 'White') : { echo 'white';} elseif ($background_colour == 'Black') : {echo  'black';} endif;?>"><?php if (get_sub_field('quote')) : the_sub_field( 'quote' ); endif;?></p>
	    </blockquote>
	    <figcaption class="quoteauthor lightBlue">- <?php if (get_sub_field('quote_author')) : the_sub_field( 'quote_author' ); endif;?></figcaption>
	  </figure>
		</div>
	</div>
</section>
