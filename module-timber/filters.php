<?php


/**
 * Add extra functionality to Twig module
 */
class H_TimberFilters {
  function __construct() {
    add_filter( 'get_twig', [$this, 'add_to_twig'] );
  }


  /**
   * Add default filter to Twig
   * @filter get_twig
   */
  function add_to_twig( $twig ) {
    // @deprecated - use h_markdown instead
    $twig->addFilter( new Twig_SimpleFilter( 'markdown', [$this, '_filter_markdown'] ) );
    $twig->addFilter( new Twig_SimpleFilter( 'h_markdown', [$this, '_filter_markdown'] ) );

    // only if set to Debug mode
    if( defined('WP_DEBUG') && WP_DEBUG === true ) {
      $twig->addFilter( new Twig_SimpleFilter( 'dump', [$this, '_filter_dump'] ) );
      $twig->addFilter( new Twig_SimpleFilter( 'methods', [$this, '_filter_methods'] ) );
    }

    return $twig;
  }

  //


  /**
   * Parse Markdown
   *  
   * `{{ post.custom_field | markdown }}`
   */
  function _filter_markdown( $text ) {
    $pd = new \Parsedown();
    $text_compiled = $pd->text( $text );
    return do_shortcode( $text_compiled );
  }


  /////

  /**
   * Echo the data
   *   
   * `{{ post | dump }}`
   */
  function _filter_dump( $anything ) {
    var_dump( $anything );
  }

  /**
   * Echo all the methods of an object
   *   
   * `{{ post | methods }}`
   */
  function _filter_methods( $object ) {
    var_dump( get_class_methods( $object ) );
  }
}
