<?php
function getMenuRender() 
{
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

<?php
}
?>