<? $background_colour = get_sub_field('background_colour');?>
<section class="py-5 cases mb-5 <? if ($background_colour == 'Black') : { echo 'bkg-darkGrey';} elseif ($background_colour == 'White') : {echo  'bkg-white';}  endif; ?>
">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="mb-5"><? the_sub_field('title');?></h2>
			</div>
			<?php $post_objects = get_sub_field('cases');
			if( $post_objects ): ?>
			<?php foreach( $post_objects as $post_object): ?>
		  <? $bkg_url = wp_get_attachment_url( get_post_thumbnail_id($post_object->ID) );?>
					<div class="col-md-4 col-sm-6 mb-5 mb-md-0 d-block">
					<img class="rounded-image w-50 mx-auto mb-4" src="<?php echo esc_url($bkg_url); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<h3 class="mb-3 lowercase lightBlue"><?php echo get_the_title($post_object->ID); ?></h3>
					<p><?php echo get_the_excerpt($post_object->ID); ?></p>
					<? if( have_rows( 'further_reading', $post_object->ID ) ): ?>
					     			    <?php while( have_rows( 'further_reading', $post_object->ID ) ): the_row(); ?>
					     						<a class="lightBlue further_reading d-block" href="<? the_sub_field('title')?>"><? the_sub_field('title')?></a>
					     			    <?php endwhile; ?>
					     			<?php endif;?>
				</div>
			<?php endforeach; ?>
			<div class="col-md-12">
				<a class="cta mt-5 mb-4" href="/cases">See all cases</a>
			</div>

		</div>
		<?php endif; ?>
		</div>
	</div>
</section>
