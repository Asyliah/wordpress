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

    wp_enqueue_script('asy-js', get_template_directory_uri() . '/script.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'asyginStyle');
  
?>



<script>

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('myForm');
    
    if (form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault(); 
            
           
            const activeButton = document.activeElement;
            
            
            let cursorUrl = '';
            switch (activeButton.id) {
                case 'button1':
                    cursorUrl = 'images/amongustwerk.cur'; 
                    break;
                case 'button2':
                    cursorUrl = 'images/jotaro.cur'; 
                    break;
                case 'button3':
                    cursorUrl = 'images/drag.cur'; 
                    break;
            }
            
            // Appliquer le curseur
            if (cursorUrl) {
                document.body.style.cursor = `url(${cursorUrl}), pointer`;
            }
        });
    }
});
</script>