<?php

blocksy_get_variables_from_file(
	BLOCKSY_DIR . '/inc/panel-builder/footer/widget-area-1/dynamic-styles.php',
	[],
	[
		'css' => $css,
		'tablet_css' => $tablet_css,
		'mobile_css' => $mobile_css,
		'atts' => $atts,
		'selector' => '[data-column="widget-area-2"]',
	]
);

