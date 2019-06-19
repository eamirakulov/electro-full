<?php
/**
 * electro engine room
 *
 * @package electro
 */

/**
 * Initialize all the things.
 */
require get_template_directory() . '/inc/init.php';
add_filter( 'woocommerce_price_format', 'custom_price_format', 10, 2 );
function custom_price_format( $format, $curreny_pos ) {
 
    if( '&#107;&#114;' == get_woocommerce_currency_symbol() ) {
        return '%2$s&nbsp;%1$s';
    }
 
    return $format;
}
/**
 * Note: Do not add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * http://codex.wordpress.org/Child_Themes
 */