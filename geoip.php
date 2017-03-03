<?php
/*
* Plugin Name: WP Engine Geo-IP redirect
* Description: Redirecting visitor traffic based on geo-location using the WPEngine GEO IP feature
* Author:      Matt Radford at 10°
* Author URI:  https://www.10degrees.uk
* Version: 1.1.0
* License: GPLv2
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit; 

// Check if WPE Geo-IP plugin is enabled
if ( class_exists( 'GeoIP' ) ) {

    function country_geo_redirect() {

        $country = getenv( 'HTTP_GEOIP_COUNTRY_CODE' );

        // Checks if visitor is from the UK, otherwise exit
        if ( $country == "UK" ) {

            wp_redirect( 'https://en.wikipedia.org/wiki/United_States', 301 );
            exit;

        }

    }

    add_action( 'init', 'country_geo_redirect' );

}