<?php
	$i_layouts = 0;
	while(has_sub_field('page_builder')) {
		$i_layouts++;
		$rows = get_row_layout();
		if($rows) {
			?>

			<?php include TEMPLATEPATH.'/inc/layouts/'.$rows.'.php'; ?>

			<?php
		}
	}
?>
