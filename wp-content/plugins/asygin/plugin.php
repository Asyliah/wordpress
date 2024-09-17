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

/*function asyginStyle() {
    wp_enqueue_style('asygin-css', plugin_dir_url(__FILE__) . 'styles/asyliah.css');
}
function asyginScript(){
    wp_enqueue_script('asy-js', plugin_dir_url(__FILE__) . 'scripts/ascrypt.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'asyginStyle');
add_action('wp_enqueue_scripts', 'asyginScript', 1);
*/
?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const cursorDropdown = document.getElementById('cursorDropdown');

    // Vérifie si le dropdown existe avant d'ajouter l'écouteur d'événements
    if (cursorDropdown) {
        cursorDropdown.addEventListener('change', function() {
            // Retirer les classes de curseur existantes
            document.body.classList.remove('cursor-amongus', 'cursor-jotaro', 'cursor-dragon');

            // Ajouter la nouvelle classe de curseur en fonction de la sélection
            switch (this.value) {
                case 'cursor1':
                    document.body.classList.add('cursor-amongus');
                    break;
                case 'cursor2':
                    document.body.classList.add('cursor-jotaro');
                    break;
                case 'cursor3':
                    document.body.classList.add('cursor-dragon');
                    break;
            }

            // Facultatif : afficher un message de confirmation
            alert('Curseur changé !');
        });
    }
});
</script>

<style>

/* Curseurs personnalisés */
.cursor-amongus {
    cursor: url('../images/amongustwerk.cur'), auto;
}

.cursor-jotaro {
    cursor: url('../images/jotaro.cur'), auto;
}

.cursor-dragon {
    cursor: url('../images/drag.cur'), auto;
}

/* Style du menu dropdown */
.menu-container {
    position: absolute;
    top: 10px;
    right: 10px;
}

.menu-dropdown {
    padding: 10px;
    background-color: #3498db;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 18px;
}

.menu-dropdown:hover {
    background-color: #2980b9;
    cursor: pointer;
}
</style>

<div class="menu-container">
    <select id="cursorDropdown" class="menu-dropdown">
        <option value="" disabled selected>Select Cursor</option>
        <option value="cursor1">Among Us Twerk</option>
        <option value="cursor2">Jotaro</option>
        <option value="cursor3">Dragon</option>
    </select>
</div>
