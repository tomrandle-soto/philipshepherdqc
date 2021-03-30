<section class="text_content_with_case_specialisms">
	<div class="container">
		<div class="row mt-3 mt-md-5 mb-5">
			<div class="col-md-8 mb-4 mb-md-0">
			<h1 class="d-none d-sm-block mb-4 pb-2 mt-0"><?php the_title(); ?></h1>
			<div class="text_content ">
				<?php the_sub_field( 'text_content' ); ?>
			</div>
			</div>
<? if (get_sub_field('case_specialisms_title')) : ?>
				<div class="col-md-4">
					<div class="bkg-lightBlue p-5">
<h3 class="underline mb-5"><?php the_sub_field( 'case_specialisms_title' ); ?></h3>
<p><?php the_sub_field( 'case_specialisms_intro' ); ?></p>
	<? if( have_rows( 'case_specialisms' ) ): ?>
	<ul class="case_specialisms">
     			    <?php while( have_rows( 'case_specialisms' ) ): the_row(); ?>
     						<li><? the_sub_field('case_specialism')?></li>
     			    <?php endwhile; ?>
						</ul>
								<?php endif;?>

					</div>
				</div>
			<? endif; ?>

		</div>
	</div>
</section>
