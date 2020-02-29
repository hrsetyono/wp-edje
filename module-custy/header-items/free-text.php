<?php

$text_options = [
  'content' => [
    'label' => __( 'Content' ),
    'type' => 'wp-editor',
    'disableRevertButton' => true,
    'tinymce' => [
      'toolbar1' => 'bold,italic,link,bullist,numlist',
      'toolbar2' => ''
    ],
  ],

  custy_rand_id() => [ 'divider' => '' ],
  
  'textColor' => [
    'label' => __( 'Text Color' ),
    'type'  => 'ct-color-picker',
    'pickers' => [
      'default' => __( 'Default' ),
      'link' => __( 'Link' ),
    ],
    'css' => [
      '--textColor' => 'default',
      '--linkColor' => 'link'
    ]
  ],

  'textSize' => [
    'label' => __( 'Text Size' ),
    'type' => 'ct-select/text',
    'css' => '--textSize'
  ],

  'textMaxWidth' => [
    'label' => __( 'Max Width' ),
    'type' => 'ct-slider',
    'responsive' => [ 'tablet' => false ],
    'units' => [
      '%' => [ 'min' => 20, 'max' => 100 ],
      'px' => [ 'min' => 100, 'max' => 500 ],
    ],
    'css' => '--textMaxWidth'
  ]
];

$items = [
  'free-text' => [
    'title' => __( 'Free Text 1' ),
    'css_selector' => '[data-id="free-text"]',
    'options' => $text_options
  ],
  'free-text2' => [
    'title' => __( 'Free Text 2' ),
    'css_selector' => '[data-id="free-text2"]',
    'options' => $text_options
  ],
];