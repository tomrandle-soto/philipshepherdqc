<section class="text_content_with_case_specialisms">
	<div class="container">
		<div class="row mt-3 mt-md-5 mb-5">
			<div class="col-md-4 pr-5 mt-2 mb-4 mb-md-0">
				<nav id="practice-nav" class="navbar navbar-practice-nav navbar-expand-md">
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdownPractice" aria-controls="navbarNavDropdownPractice" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle Practice navigation', 'understrap' ); ?>">
				</button>

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'practice',
						'container_class' => 'collapse navbar-collapse navbar-expand-sm ',
						'container_id'    => 'navbarNavDropdownPractice',
						'menu_class'      => 'practice-menu',
						'fallback_cb'     => '',
						'menu_id'         => 'practice-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
					</nav>
			</div>
			<div class="col-md-8 mb-4 mb-md-0">
			<h1 class="d-none d-sm-block mb-4 pb-2 mt-0 lowercase"><?php the_title(); ?></h1>
			<div class="text_content ">
				<?php the_sub_field( 'text_content' ); ?>
			</div>
			</div>
<? if (get_sub_field('case_specialisms_title')) : ?>

			<? endif; ?>

		</div>
	</div>
</section>
