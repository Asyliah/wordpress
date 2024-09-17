<?php
/**
 * @package Hello_Dolly
 * @version 1.7.2
 */
/*
Plugin Name: CursorSwitch
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: Ceci est le plugin pour changer de curseur.
Author: Moi-même
Version: 1.7.2
Author URI: http://ma.tt/
*/

function asyginStyle() {
    wp_enqueue_style('asygin-css', plugin_dir_url(__FILE__) . 'styles/asyliah.css');
}
 function asyginScript(){

     wp_enqueue_script('asy-js', plugin_dir_url(__FILE__) . 'scripts/ascrypt.js', array(), null, true);
 }

add_action('wp_enqueue_scripts', 'asyginStyle');
add_action('wp_enqueue_scripts', 'asyginScript',1);

function get_sub(){

}