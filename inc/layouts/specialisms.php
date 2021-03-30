<section class="specialisms mt-3 mt-md-5 mb-md-5 mb-3">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="mb-4 underline square"><? the_sub_field('title');?></h2>
				<div class="row d-none d-md-flex">
					<? if( have_rows( 'specialisms' ) ): ?>
					<?php while( have_rows( 'specialisms' ) ): the_row(); ?>
						<a class="col-md-6 col-lg-6 mb-4 specialism_desktop" href="<?php the_sub_field( 'page_link' ); ?>">
							<h3 class="underline"><?php if (get_sub_field('specialism_title')) : the_sub_field( 'specialism_title' ); endif;?></h3>

							<? $image = get_sub_field('image');?>
							<? if( !empty( $image ) ): ?>
							<img class="w-100" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
						<p>
							<?php if (get_sub_field('text')) : the_sub_field( 'text' ); endif;?>
						</p>
					</a>
				<?php endwhile; ?>
			<?php endif;?>
		</div>
		<div class="row d-block d-md-none mb-4">
			<div class="col-12">
				<div class="specialismsAccordion" id="accordionExample2">
					<? if( have_rows( 'specialisms' ) ): ?>
					<?php while( have_rows( 'specialisms' ) ): the_row(); ?>
						<div class="specialism mt-2">
							<h3 class="faq_question collapsed mb-2" type="button" data-toggle="collapse" data-target="#collapse<? echo $a;?>" aria-expanded="false" aria-controls="collapseOne">
								<?php if (get_sub_field('specialism_title')) : the_sub_field( 'specialism_title' ); endif;?>
							</h3>
							<div id="collapse<? echo $a;?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample2">
								<? $image = get_sub_field('image');?>
								<? if( !empty( $image ) ): ?>
								<img class="w-100" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
							<p>
								<?php if (get_sub_field('text')) : the_sub_field( 'text' ); endif;?>
							</p>
							<a class="cta small mb-4" href="<?php the_sub_field( 'page_link' ); ?>">Read more <span class="sr-only">about <?php the_sub_field( 'specialism_title' ); ?></span></a>
						</div>
					</div>
					<? $a++; ?>
				<? endwhile; ?>
			<?php endif;?>
		</div>

	</div>

</div>
</div>
</div>
</div>
</section>
