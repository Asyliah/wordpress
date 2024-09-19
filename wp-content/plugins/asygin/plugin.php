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
include(plugin_dir_path(__FILE__) . 'scripts/ascrypt.php');
include(plugin_dir_path(__FILE__) . 'styles/asyliah.php');

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
        'Paramètrage',                // 1. Le titre qui apparaîtra dans l'onglet du navigateur
        'Cursor Plugin',              // 2. Le nom qui apparaîtra dans le menu admin WordPress
        'manage_options',             // 3. La capacité requise pour voir et accéder à cette page (ici "manage_options" signifie que seuls les administrateurs peuvent accéder)
        'cursor_settings',             // 4. Le slug (identifiant unique) de la page d'options
        'cursor_settings_page',         // 5. La fonction de rappel qui affiche le contenu de la page
        'dashicons-admin-generic',      // 6. L'icône Dashicons à afficher dans le menu admin
        30                              // 7. (Facultatif) La position relative dans le menu admin (ici, position 30)
    );
}
add_action('admin_menu', 'cursorMenu');



// function asyginScript(){
//     wp_enqueue_script('asy-js', plugin_dir_url(__FILE__) . 'scripts/ascrypt.js', array(), null, true);
// }


// add_action('wp_enqueue_scripts', 'asyginScript');

// function asyginStyle() {
//     wp_enqueue_style('asygin-css', plugin_dir_url(__FILE__) . 'styles/asyliah.css');
// }

// function asyginScript() {
//     wp_enqueue_script('asy-js', plugin_dir_url(__FILE__) . 'scripts/ascrypt.js', array('jquery'), null, true);
// }

// add_action('wp_enqueue_scripts', 'asyginStyle', 20); // Priorité ajustée
// add_action('wp_enqueue_scripts', 'asyginScript', 20); // Priorité ajustée

?>

<form method="GET" action="">
    <div class="menu-burger-container">
        <!-- Icône du menu burger -->
        <div id="burgerIcon" class="burger-icon">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <!-- Menu burger contenant les options de curseur -->
        <div id="burgerMenu" class="burger-menu">
            <ul>
                <li data-cursor="cursor1">
                    <img src="wp-content/plugins/asygin/images/amongustwerk.cur" alt="Among Us Twerk">Among Us Twerk
                </li>
                <li data-cursor="cursor2">
                    <img src="wp-content/plugins/asygin/images/jotaro.cur" alt="Jotaro">Jotaro
                </li>
                <li data-cursor="cursor3">
                    <img src="wp-content/plugins/asygin/images/drag.cur" alt="Dragon">Dragon
                </li>
                <li data-cursor="cursor4">
                    <img src="wp-content/plugins/asygin/images/kirbyc.cur" alt="Kirby">Kirby
                </li>
                <li data-cursor="defaultcursor">
                    <img src="wp-content/plugins/asygin/images/cursor.cur" alt="Default">Default
                </li>
            </ul>
        </div>
    </div>
</form>


