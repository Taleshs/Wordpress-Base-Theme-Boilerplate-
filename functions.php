<?php
/**************************************************************************************/
// Title Otimizado para SEO
/**************************************************************************************/
add_filter( 'wp_title', 'site_titlee' );
    
function site_titlee( $title ) {
    global $page, $paged;
    if ( is_feed() )
    return $title;
    
    $site_description = get_bloginfo( 'description' );
    $filtered_title = $title . get_bloginfo( 'name' );
    $filtered_title .= ( ! empty( $site_description ) && ( is_home() || is_front_page() ) ) ? ' | ' . $site_description: '';
    $filtered_title .= ( 2 <= $paged || 2 <= $page ) ? ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) ) : '';

    return $filtered_title;
}

/**************************************************************************************/
// Custom Menus
/**************************************************************************************/
register_nav_menus( array(
    'main_menu' => 'Main Menu',
    'footer_menu' => 'Footer Menu',
) );

/**************************************************************************************/
// SVG Support
/**************************************************************************************/
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');





?>