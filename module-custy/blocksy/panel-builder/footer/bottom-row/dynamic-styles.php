<?php

blocksy_get_variables_from_file(
	BLOCKSY_DIR . '/panel-builder/footer/middle-row/dynamic-styles.php',
	[],
	[
		'css' => $css,
		'tablet_css' => $tablet_css,
		'mobile_css' => $mobile_css,
		'atts' => $atts,
		'selector' => '.site-footer [data-row="bottom"]',
		'primary_item' => $primary_item,

		'default_background' => blocksy_background_default_value([
			'backgroundColor' => [
				'default' => [
					'color' => '#eef0f4',
				],
			],
		]),

		'default_top_bottom_spacing' => [
			'mobile' => '15px',
			'tablet' => '25px',
			'desktop' => '25px',
		]

	]
);
