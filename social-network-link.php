<?php
/**
 * @package Social_Network_Link
 * @version 1.0.0
 */

/**
 * Plugin Name: Social Network Link
 * Plugin URI: https://github.com/leondemate/social-network-link
 * Description: This plugin generates a social network link.
 * Author: Carlos E. Alvarez
 * Version: 1.0.0
 * Requires at least: 6.8.2
 * License: GPL v3 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Powered by: https://www.aomath.com
 */

if ( ! defined( 'ABSPATH' ) ) {
    die();
}

/**
 * The [social_network_link] shortcode.
 *
 * Accepts a link, an icon, a title and a button class and will display a link.
 *
 * @param array  $atts    Shortcode attributes. Default empty.
 * @param string $content Shortcode content. Default null.
 * @param string $tag     Shortcode tag (name). Default empty.
 * @return string Shortcode output.
 */
function social_network_link( $atts = [], $content = null , $tag = '' ) {
    $attr_link   = isset( $atts['link'] ) ? $atts['link'] : '';
    $attr_icon   = isset( $atts['icon'] ) ? $atts['icon'] : 'bi-exclamation-octagon-fill';
    $attr_title  = isset( $atts['title'] ) ? $atts['title'] : '';
    $attr_target = isset( $atts['target'] ) ? $atts['target'] : '_blank';
    $attr_button_class = isset( $atts['button_class'] ) ? $atts['button_class'] : 'btn-primary';
    $image  = '';
    $image .= '<a href="' . $attr_link . '" target="' . $attr_target . '" class="btn ' . $attr_button_class . '">';
    $image .=     '<i class="bi ' . $attr_icon . '"></i> ' . $attr_title;
    $image .= '</a>';
    return $image . $content;
}

/**
 * Central location to create all shortcodes.
 */
function social_network_link_init() {
    add_shortcode( 'social_network_link', 'social_network_link' );
}

add_action( 'init', 'social_network_link_init' );
