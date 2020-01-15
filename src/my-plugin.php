<?php
/**
 * Plugin Name: My Plugin
 * Plugin URI: https://bwawwp.com/my-plugin/
 * Description: This is my plugin description.
 * Author: Yassine
 * Version: 1.0.0
 * Author URI: https://bwawwp.com
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

    function my_plugin_wp_footer() {
        echo 'I read Building Web Apps with WordPress
        and now I am a WordPress Genius!';
    }
    add_action( 'wp_footer', 'my_plugin_wp_footer' );
?>