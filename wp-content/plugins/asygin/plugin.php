<?php
/**
 * @package CursorSwitch
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
function cursor_settings_page() {
    ?>
    <div class="wrap">
        <h1>Paramètres du Plugin Cursor</h1>
        <p>Ajoutez vos paramètres ici.</p>
    </div>
    <?php
}   

function cursorMenu() {
    add_menu_page(
        'Paramètrage',                
        'Cursor Plugin',              
        'manage_options',             
        'cursor_settings',             
        'cursor_settings_page',         
        'dashicons-admin-generic',      
        30                              
    );
}
add_action('admin_menu', 'cursorMenu');

// function asyginHtml() {
//     wp_register_script(
//         'asy-html',  
//         plugins_url( 'html/menu.php', __FILE__),   
//     );

//     wp_enqueue_script('asy-html');
// }

// add_action('wp_enqueue_scripts', 'asyginHtml');


function asygin_enqueue_assets() {
    if ( ! is_admin() ) {
        wp_register_style(
            'asygin-css',
            plugins_url( 'styles/asyliah.css', __FILE__ )
        );
        wp_enqueue_style( 'asygin-css' );

        wp_register_script(
            'asy-js',
            plugins_url( 'scripts/ascrypt.js', __FILE__ ),
            array(),
            false,
            true // Charge le script dans le footer
        );
        wp_enqueue_script( 'asy-js' );
    }
}
add_action( 'wp_enqueue_scripts', 'asygin_enqueue_assets' );

// function getMenuRender() 
// {
//    

function asygin_menu_render() {
    ?>
    <form method="GET" action=""></form>
    <div class="menu-burger-container">
        <!-- Icône du menu burger -->
        <div id="burgerIcon" class="burger-icon">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <!-- Menu burger contenant les options de curseur -->
        <div id="burgerMenu" class="burger-menu cursor-kirby-pointer">
            <ul>
                <li data-cursor="cursor1">
                    <img src="<?php echo plugins_url('images/amongustwerk.cur', __FILE__); ?>" alt="Among Us Twerk">Among Us Twerk
                </li>
                <li data-cursor="cursor2">
                    <img src="<?php echo plugins_url('images/jotaro.cur', __FILE__); ?>" alt="Jotaro">Jotaro
                </li>
                <li data-cursor="cursor3">
                    <img src="<?php echo plugins_url('images/drag.cur', __FILE__); ?>" alt="Dragon">Dragon
                </li>
                <li data-cursor="cursor4">
                    <img src="<?php echo plugins_url('images/kirbyc.cur', __FILE__); ?>" alt="Kirby">Kirby
                </li>
                <li data-cursor="defaultcursor">
                    <img src="<?php echo plugins_url('images/cursor.cur', __FILE__); ?>" alt="Default">Default
                </li>
            </ul>
        </div>
    </div>
    <?php
}

// Ajouter le menu burger au footer des pages publiques
function asygin_enqueue_menu() {
    if ( ! is_admin() ) {
        add_action( 'wp_footer', 'asygin_menu_render' );
    }
}
add_action( 'init', 'asygin_enqueue_menu' );