<?php

function blocksy_image_picker_file( $path ) {
	$svgs = [
		'cart-1' => '<svg viewBox="0 0 100 70"><path d="M62.5,44.8l-0.9-19.8c0-1.3-1.1-2.6-2.6-2.6H41c-1.5,0-2.7,1.2-2.7,2.6l-0.8,19.8l0,0c0,1.5,1.1,2.7,2.7,2.7h19.8C61.4,47.5,62.5,46.4,62.5,44.8L62.5,44.8z M59.8,45.2H40.2c-0.2,0-0.4-0.2-0.4-0.4l0.8-19.8l0,0c0-0.2,0.2-0.3,0.4-0.3h18.1c0.2,0,0.4,0.1,0.4,0.3l0,0l0.8,19.8C60.2,45.2,60.2,45.2,59.8,45.2z M53.8,26.8c-0.7,0-1.1,0.5-1.1,1.2v3.2c0,1.4-1.1,2.7-2.7,2.7c-1.4,0-2.7-1.2-2.7-2.7v-3.3c0-0.7-0.5-1.2-1.1-1.2s-1.1,0.5-1.1,1.2v3.3c0,2.7,2.1,4.8,4.8,4.8s4.8-2.1,4.8-4.8v-3.3C54.8,27.4,54.3,26.8,53.8,26.8z"/></svg>
		',

		'cart-2' => '<svg viewBox="0 0 100 70"><path d="M38.4,23.5c-0.5,0-0.9,0.4-0.9,0.9s0.4,0.9,0.9,0.9l0,0h1.7c0.2,0,0.4,0.2,0.4,0.3L44.5,39c0.3,1.2,1.4,2,2.7,2h10.1c1.2,0,2.3-0.8,2.7-2.1l2.5-8.7c0.2-0.5-0.2-1-0.7-1.2c-0.1,0-0.2,0-0.2,0H43.5l-1.2-3.9l0,0c-0.2-1-1.2-1.7-2.2-1.7C40.1,23.5,38.4,23.5,38.4,23.5z M47.6,42.9c-1,0-1.8,0.8-1.8,1.8c0,1,0.8,1.8,1.8,1.8s1.8-0.8,1.8-1.8C49.6,43.7,48.7,42.9,47.6,42.9zM56.9,42.9c-1,0-1.8,0.8-1.8,1.8c0,1,0.8,1.8,1.8,1.8s1.8-0.8,1.8-1.8C58.8,43.7,58,42.9,56.9,42.9z"/></svg>
		',

		'cart-3' => '<svg viewBox="0 0 100 70"><path d="M45.1,24.2c-0.9,0-1.7,0.5-2.1,1.4l-2.8,6.6h-1.5c-0.4,0-0.7,0.2-0.9,0.4c-0.2,0.3-0.3,0.6-0.2,1l2.9,10.5c0.3,1,1.2,1.7,2.2,1.7h14.7c1,0,1.9-0.7,2.2-1.7l2.9-10.5c0.1-0.3,0-0.7-0.2-1c-0.2-0.3-0.6-0.4-0.9-0.4h-1.5L57,25.6h0c-0.4-0.8-1.2-1.4-2.1-1.4H45.1z M45.1,26.5h9.9l2.4,5.7H42.6L45.1,26.5zM45.5,35.6c0.6,0,1.1,0.5,1.1,1.1v4.5c0,0.6-0.5,1.1-1.1,1.1c-0.6,0-1.1-0.5-1.1-1.1v-4.5C44.3,36.1,44.8,35.6,45.5,35.6z M50,35.6c0.6,0,1.1,0.5,1.1,1.1v4.5c0,0.6-0.5,1.1-1.1,1.1c-0.6,0-1.1-0.5-1.1-1.1v-4.5C48.9,36.1,49.4,35.6,50,35.6zM54.5,35.6c0.6,0,1.1,0.5,1.1,1.1v4.5c0,0.6-0.5,1.1-1.1,1.1c-0.6,0-1.1-0.5-1.1-1.1v-4.5C53.4,36.1,53.9,35.6,54.5,35.6z"/></svg>
		',

		'trigger-1' => '<svg viewBox="0 0 100 70"><path d="M61.2,36.2H38.8c-0.7,0-1.2-0.6-1.2-1.2l0,0c0-0.7,0.6-1.2,1.2-1.2h22.5c0.7,0,1.2,0.6,1.2,1.2l0,0C62.5,35.7,61.9,36.2,61.2,36.2z M62.5,44L62.5,44c0-0.7-0.6-1.2-1.2-1.2H38.8c-0.7,0-1.2,0.6-1.2,1.2l0,0c0,0.7,0.6,1.2,1.2,1.2h22.5C61.9,45.3,62.5,44.7,62.5,44z M62.5,26L62.5,26c0-0.7-0.6-1.3-1.2-1.3H38.8c-0.7,0-1.2,0.6-1.2,1.2v0c0,0.7,0.6,1.2,1.2,1.2h22.5C61.9,27.2,62.5,26.7,62.5,26z"/></svg>
		',

		'trigger-2' => '<svg viewBox="0 0 100 70"><path d="M61.2,36.2H38.8c-0.7,0-1.2-0.6-1.2-1.2l0,0c0-0.7,0.6-1.2,1.2-1.2h22.5c0.7,0,1.2,0.6,1.2,1.2l0,0C62.5,35.7,61.9,36.2,61.2,36.2z M56.3,43L56.3,43c0-0.7-0.6-1.3-1.2-1.3H38.8c-0.7,0-1.2,0.6-1.2,1.2v0c0,0.7,0.6,1.2,1.2,1.2H55C55.7,44.3,56.3,43.7,56.3,43z M50,27L50,27c0-0.7-0.6-1.2-1.2-1.2h-10c-0.7,0-1.2,0.6-1.2,1.2v0c0,0.7,0.6,1.2,1.2,1.2h10C49.4,28.2,50,27.7,50,27z"/></svg>
		',

		'trigger-3' => '<svg viewBox="0 0 100 70"><path d="M61.2,36.2H38.8c-0.7,0-1.2-0.6-1.2-1.2l0,0c0-0.7,0.6-1.2,1.2-1.2h22.5c0.7,0,1.2,0.6,1.2,1.2l0,0C62.5,35.7,61.9,36.2,61.2,36.2z M57.9,43L57.9,43c0-0.7-0.6-1.3-1.2-1.3H40.8c-0.7,0-1.2,0.6-1.2,1.2v0c0,0.7,0.6,1.2,1.2,1.2h15.9C57.4,44.3,57.9,43.7,57.9,43z M60.5,27L60.5,27c0-0.7-0.6-1.2-1.2-1.2H44.9c-0.7,0-1.2,0.6-1.2,1.2v0c0,0.7,0.6,1.2,1.2,1.2h14.3C59.9,28.2,60.5,27.7,60.5,27z"/></svg>
		',

		'top-1' => '<svg viewBox="0 0 100 70"><path d="M50,22.5l-0.8,0.7L38.6,33.9l1.5,1.5l8.8-8.8v20.9h2.1V26.6l8.8,8.8l1.5-1.5L50.8,23.2L50,22.5z"/></svg>
		',

		'top-2' => '<svg viewBox="0 0 100 70"><path d="M60.2,34.2C59.9,34.8,59.5,35,59,35h-4.6c0,0-0.8,10.9-1.1,11.4c-0.5,0.6-1.9,1.1-3.3,1.1c-1.2,0-2.9-0.4-3.4-1.1c-0.4-0.5-1-11.4-1-11.4H41c-0.5,0-0.9-0.2-1.2-0.8c-0.1-0.5-0.1-1,0.1-1.4c3.5-5.1,9-10,9.3-10.1c0.2-0.1,0.6-0.2,0.9-0.2s0.6,0.1,0.8,0.2c0.2,0.1,5.7,4.9,9.2,10.1C60.3,33.4,60.4,33.9,60.2,34.2z"/></svg>
		',

		'top-3' => '<svg viewBox="0 0 100 70"><path d="M50,21c0,0-6.2,4.1-6.2,13.5c0,0.2,0,0.3,0,0.5c-1.1,0.9-3.1,2.7-3.1,4.2c0,1.9,1.9,5.7,1.9,5.7l3.4-4.3l0.9,2.2h6.2l0.9-2.2l3.4,4.3c0,0,1.9-3.8,1.9-5.7c0-1.5-2.1-3.4-3.1-4.2c0-0.2,0-0.3,0-0.5C56.2,25.1,50,21,50,21zM50,28.3c1.1,0,2.1,0.9,2.1,2.1s-0.9,2.1-2.1,2.1s-2.1-0.9-2.1-2.1S48.9,28.3,50,28.3zM47.3,43.8c-0.3,0.3-0.4,0.7-0.4,1.2c0,2,3.1,4,3.1,4s3.1-2,3.1-4c0-0.4-0.2-0.8-0.4-1.2h-0.9c0,0.1,0.1,0.2,0.1,0.2c0,1.4-1.9,2.1-1.9,2.1s-1.9-0.7-1.9-2.1c0-0.1,0-0.2,0.1-0.2H47.3z"/></svg>
		',

		'button-1' => '<svg viewBox="0 0 100 70"><path d="M59.3,35c0,1.2-0.6,1.9-1.5,1.9c-0.9,0-1.5-0.7-1.5-1.9c0-1.1,0.6-1.9,1.5-1.9C58.7,33.1,59.3,33.8,59.3,35z M35.8,35.3h-1v1.6h1c0.6,0,1-0.3,1-0.8S36.4,35.3,35.8,35.3zM36.6,33.8c0-0.5-0.3-0.7-0.9-0.7h-1v1.5h0.8C36.2,34.5,36.6,34.2,36.6,33.8zM80,26.5v17c0,2.2-1.8,4-4,4H24c-2.2,0-4-1.8-4-4v-17c0-2.2,1.8-4,4-4h52C78.2,22.5,80,24.3,80,26.5z M38,36.2c0-0.7-0.6-1.3-1.3-1.4c0.6-0.1,1.1-0.6,1.1-1.2c0-0.9-0.7-1.4-1.7-1.4h-2.5v5.6h2.5C37.3,37.8,38,37.2,38,36.2z M43.8,32.2h-1.2v3.5c0,0.7-0.4,1.2-1.2,1.2c-0.8,0-1.2-0.5-1.2-1.2v-3.5H39v3.6c0,1.2,0.9,2.1,2.4,2.1c1.4,0,2.4-0.8,2.4-2.1V32.2z M49.3,32.2h-4.4v1h1.6v4.7h1.2v-4.7h1.6V32.2zM54.5,32.2h-4.4v1h1.6v4.7h1.2v-4.7h1.6V32.2z M60.5,35c0-1.8-1.1-2.9-2.7-2.9c-1.7,0-2.7,1.1-2.7,2.9s1,2.9,2.7,2.9S60.5,36.8,60.5,35z M66.4,32.2h-1.1v3.7l-2.6-3.7h-1v5.6h1.1v-3.7l2.6,3.7h1V32.2z"/></svg>
		',

		'button-2' => '<svg viewBox="0 0 100 70"><path d="M76,24.5c1.1,0,2,0.9,2,2v17c0,1.1-0.9,2-2,2H24c-1.1,0-2-0.9-2-2v-17c0-1.1,0.9-2,2-2H76 M76,22.5H24c-2.2,0-4,1.8-4,4v17c0,2.2,1.8,4,4,4h52c2.2,0,4-1.8,4-4v-17C80,24.3,78.2,22.5,76,22.5L76,22.5zM36.7,34.8c0.6-0.1,1.1-0.6,1.1-1.3c0-0.9-0.7-1.4-1.7-1.4h-2.5v5.6h2.5c1.2,0,1.9-0.6,1.9-1.6C38,35.5,37.4,34.9,36.7,34.8z M35.7,33.1c0.6,0,0.9,0.3,0.9,0.7c0,0.5-0.4,0.8-1,0.8h-0.8v-1.5H35.7z M35.8,36.9h-1v-1.6h1c0.7,0,1.1,0.3,1.1,0.8C36.8,36.7,36.4,36.9,35.8,36.9zM42.6,32.2h1.2v3.6c0,1.2-0.9,2.1-2.4,2.1c-1.4,0-2.4-0.8-2.4-2.1v-3.6h1.2v3.5c0,0.7,0.4,1.2,1.2,1.2s1.2-0.5,1.2-1.2V32.2z M44.9,32.2h4.4v1h-1.6v4.7h-1.2v-4.7h-1.6C44.9,33.2,44.9,32.2,44.9,32.2zM50.1,32.2h4.4v1h-1.6v4.7h-1.2v-4.7h-1.6C50.1,33.2,50.1,32.2,50.1,32.2zM57.8,32.1c-1.7,0-2.7,1.1-2.7,2.9s1,2.9,2.7,2.9s2.7-1.1,2.7-2.9S59.5,32.1,57.8,32.1zM57.8,36.9c-0.9,0-1.5-0.7-1.5-1.9s0.6-1.9,1.5-1.9c0.9,0,1.5,0.8,1.5,1.9C59.3,36.2,58.7,36.9,57.8,36.9zM66.4,32.2v5.6h-1l-2.6-3.7l0,0v3.7h-1.1v-5.6h1l2.6,3.7l0,0v-3.7H66.4z"/></svg>
		',

		'norepeat' => '<svg viewBox="0 0 16 16"><rect x="6" y="6" width="4" height="4"/></svg>
		',

		'repeat' => '<svg viewBox="0 0 16 16"><path d="M0,0h4v4H0V0z M6,0h4v4H6V0z M12,0h4v4h-4V0z M0,6h4v4H0V6z M6,6h4v4H6V6z M12,6h4v4h-4V6z M0,12h4v4H0V12z M6,12h4v4H6V12zM12,12h4v4h-4V12z"/></svg>
		',

		'repeat_h' => '<svg viewBox="0 0 16 16"><rect y="6" width="4" height="4"/><rect x="6" y="6" width="4" height="4"/><rect x="12" y="6" width="4" height="4"/></svg>
		',

		'repeat_v' => '<svg viewBox="0 0 16 16"><rect x="6" width="4" height="4"/><rect x="6" y="6" width="4" height="4"/><rect x="6" y="12" width="4" height="4"/></svg>
		',

		// 2 columns layout
		'1-1' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M48.1,0H1.9C0.9,0,0,0.9,0,2v22c0,1.1,0.9,2,1.9,2h46.2c1.1,0,1.9-0.9,1.9-2V2C50,0.9,49.1,0,48.1,0zM48.1,24H1.9V2h46.2V24z M24,2h2v22h-2V2z"/></svg>
		',

		'2-1' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M48.1,0H1.9C0.9,0,0,0.9,0,2v22c0,1.1,0.9,2,1.9,2h46.2c1.1,0,1.9-0.9,1.9-2V2C50,0.9,49.1,0,48.1,0zM48.1,24H1.9V2h46.2V24z M32,2h2v22h-2V2z"/></svg>
		',

		'1-2' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M48.1,0H1.9C0.9,0,0,0.9,0,2v22c0,1.1,0.9,2,1.9,2h46.2c1.1,0,1.9-0.9,1.9-2V2C50,0.9,49.1,0,48.1,0zM48.1,24H1.9V2h46.2V24z M16,2h2v22h-2V2z"/></svg>
		',

		'3-1' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M48.1,0H1.9C0.9,0,0,0.9,0,2v22c0,1.1,0.9,2,1.9,2h46.2c1.1,0,1.9-0.9,1.9-2V2C50,0.9,49.1,0,48.1,0zM48.1,24H1.9V2h46.2V24z M34,2h2v22h-2V2z"/></svg>
		',

		'1-3' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M48.1,0H1.9C0.9,0,0,0.9,0,2v22c0,1.1,0.9,2,1.9,2h46.2c1.1,0,1.9-0.9,1.9-2V2C50,0.9,49.1,0,48.1,0zM48.1,24H1.9V2h46.2V24z M14,2h2v22h-2V2z"/></svg>
		',

		// 3 columns layout
		'1-1-1' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M48.1,0H1.9C0.9,0,0,0.9,0,2v22c0,1.1,0.9,2,1.9,2h46.2c1.1,0,1.9-0.9,1.9-2V2C50,0.9,49.1,0,48.1,0zM48.1,24H1.9V2h46.2V24z M32,2h2v22h-2V2z M16,2h2v22h-2V2z"/></svg>
		',

		'1-2-1' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M48.1,0H1.9C0.9,0,0,0.9,0,2v22c0,1.1,0.9,2,1.9,2h46.2c1.1,0,1.9-0.9,1.9-2V2C50,0.9,49.1,0,48.1,0zM48.1,24H1.9V2h46.2V24z M11,2h2v22h-2V2z M37,2h2v22h-2V2z"/></svg>
		',

		'2-1-1' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M48.1,0H1.9C0.9,0,0,0.9,0,2v22c0,1.1,0.9,2,1.9,2h46.2c1.1,0,1.9-0.9,1.9-2V2C50,0.9,49.1,0,48.1,0zM48.1,24H1.9V2h46.2V24z M36,2h2v22h-2V2z M24,2h2v22h-2V2z"/></svg>
		',

		'1-1-2' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M48.1,0H1.9C0.9,0,0,0.9,0,2v22c0,1.1,0.9,2,1.9,2h46.2c1.1,0,1.9-0.9,1.9-2V2C50,0.9,49.1,0,48.1,0zM48.1,24H1.9V2h46.2V24z M11,2h2v22h-2V2z M24,2h2v22h-2V2z"/></svg>
		',

		// 4 columns layout
		'1-1-1-1' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M48.1,0H1.9C0.9,0,0,0.9,0,2v22c0,1.1,0.9,2,1.9,2h46.2c1.1,0,1.9-0.9,1.9-2V2C50,0.9,49.1,0,48.1,0zM48.1,24H1.9V2h46.2V24z M12,2h2v22h-2V2z M24,2h2v22h-2V2z M36,2h2v22h-2V2z"/></svg>
		',

		'2-1-1-1' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M48.1,0H1.9C0.9,0,0,0.9,0,2v22c0,1.1,0.9,2,1.9,2h46.2c1.1,0,1.9-0.9,1.9-2V2C50,0.9,49.1,0,48.1,0zM48.1,24H1.9V2h46.2V24z M18,2h2v22h-2V2z M28,2h2v22h-2V2z M38,2h2v22h-2V2z"/></svg>
		',

		'1-1-1-2' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M1.9,26h46.2c1.1,0,1.9-0.9,1.9-2V2c0-1.1-0.9-2-1.9-2H1.9C0.9,0,0,0.9,0,2v22C0,25.1,0.9,26,1.9,26zM1.9,2h46.2v22H1.9V2zM11,24H9V2h2V24z M20,24h-2V2h2V24z M30,24h-2V2h2V24z"/></svg>
		',

		'stacked' => '<svg width="50" height="26" viewBox="0 0 50 26"><path d="M48.1,0H1.9C0.9,0,0,0.9,0,2v10v2v10c0,1.1,0.9,2,1.9,2h46.2c1.1,0,1.9-0.9,1.9-2V14v-2V2C50,0.9,49.1,0,48.1,0z M48.1,24H1.9V14h46.2V24z M1.9,12V2h46.2v10H1.9z"/></svg>
		',
	];

	if (! isset($svgs[$path])) {
		return '';
	}

	return $svgs[$path];
}
