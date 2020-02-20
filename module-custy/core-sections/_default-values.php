<?php

/**
 * Values for default options
 * 
 * @filter custy_default_values
 */
function _custy_core_default_values( $defaults ) {
  $defaults = wp_parse_args( [

    // CORE SETTINGS
    'colorPalette' => [
      'color1' => [ 'color' => '#1976d2' ],
      'color2' => [ 'color' => '#0d47a1' ],
      'color3' => [ 'color' => '#bbdefb' ],
      'color4' => [ 'color' => '#546e7a' ],
      'color5' => [ 'color' => '#cfd8dc' ],
    ],
    'textColor' => [
      'default' => [ 'color' => '#2c3e50' ],
      'invert' => [ 'color' => '#ffffff' ],
    ],
    'extraColor' => [
      'extra1' => [ 'color' => 'CT_CSS_SKIP_RULE' ],
      'extra2' => [ 'color' => 'CT_CSS_SKIP_RULE' ],
      'extra3' => [ 'color' => 'CT_CSS_SKIP_RULE' ],
      'extra4' => [ 'color' => 'CT_CSS_SKIP_RULE' ],
      'extra5' => [ 'color' => 'CT_CSS_SKIP_RULE' ],
    ],

    'mobile_media' => '480px',
    'tablet_media' => '767px',

    //
    'rootTypography' => blocksy_typography_default_values([
      'family' => 'System Default',
      'variation' => 'n4',
  
      'size' => '16px',
      'line-height' => '1.65',
      'letter-spacing' => '0em',
      'text-transform' => 'none',
      'text-decoration' => 'none',
    ]),
    'smallFontSize' => '14px',
    'mediumFontSize' => '18px',
    'largeFontSize' => '22px',
    'hugeFontSize' => '32px',

    'headingTypography' => blocksy_typography_default_values([
      'family' => 'System Default',
      'variation' => 'n7',
      'size' => '0',
      'line-height' => '1.25',
      'letter-spacing' => '0.05em',
    ] ),

    'h1Size' => [
      'mobile' => '32px',
      'tablet' => '40px',
      'desktop' => '46px',
    ],
    'h2Size' => [
      'mobile' => '26px',
      'tablet' => '30px',
      'desktop' => '36px',
    ],
    'h3Size' => [
      'mobile' => '22px',
      'tablet' => '26px',
      'desktop' => '30px',
    ],
    'h4Size' => [
      'mobile' => '20px',
      'tablet' => '22px',
      'desktop' => '26px',
    ],
    'h5Size' => [
      'mobile' => '18px',
      'tablet' => '20px',
      'desktop' => '20px',
    ],
    'h6Size' => [
      'mobile' => '16px',
      'tablet' => '18px',
      'desktop' => '18px',
    ],

    // SHADOW
    'shadow0' => [
      'enable' => true,
      'h_offset' => 0,
      'v_offset' => 1,
      'blur' => 2,
      'spread' => 0,
      'inset' => false,
      'color' => [ 'color' => 'rgba(0, 0, 0, 0.24)' ],
    ], // 0 1px 2px rgba(0,0,0,0.24);
  
    'shadow1' => [
      'enable' => true,
      'h_offset' => 0,
      'v_offset' => 3,
      'blur' => 6,
      'spread' => 0,
      'inset' => false,
      'color' => [ 'color' => 'rgba(0, 0, 0, 0.23)' ],
    ], // 0 3px 6px rgba(0, 0, 0, 0.23)
  
    'shadow2' => [
      'enable' => true,
      'h_offset' => 0,
      'v_offset' => 6,
      'blur' => 6,
      'spread' => 0,
      'inset' => false,
      'color' => [ 'color' => 'rgba(0, 0, 0, 0.23)' ],
    ], // 0 6px 6px rgba(0,0,0,0.23)
  
    'shadow3' => [
      'enable' => true,
      'h_offset' => 0,
      'v_offset' => 10,
      'blur' => 10,
      'spread' => 0,
      'inset' => false,
      'color' => [ 'color' => 'rgba(0, 0, 0, 0.22)' ],
    ], // 0 10px 10px rgba(0,0,0,0.22)
  
    'shadow4' => [
      'enable' => true,
      'h_offset' => 0,
      'v_offset' => 15,
      'blur' => 12,
      'spread' => 0,
      'inset' => false,
      'color' => [ 'color' => 'rgba(0, 0, 0, 0.22)' ],
    ],// 0 15px 12px rgba(0,0,0,0.22)

  ], $defaults );

  // SOCIAL ACCOUNTS
  $social_medias = custy_get_social_list();
  $social_defaults = [];
  foreach( $social_medias as $key => $value ) {
    $social_defaults[ $key ] = $value['default_value'] ?? '';
  }

  $defaults = wp_parse_args( $social_defaults, $defaults );

  return $defaults;
}