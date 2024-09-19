<style>
.cursor-amongus {
    cursor: url('wp-content/plugins/asygin/images/amongustwerk.cur'), auto;
}

.cursor-jotaro {
    cursor: url('wp-content/plugins/asygin/images/jotaro.cur'), auto;
}

.cursor-dragon {
    cursor: url('wp-content/plugins/asygin/images/drag.cur'), auto;
}
.cursor-kirby {
    cursor: url('wp-content/plugins/asygin/images/kirbyc.cur'), auto;
}

.cursor-amongus-pointer {
    cursor: url('wp-content/plugins/asygin/images/amongustwerk-pointer.cur'), pointer;
}

.cursor-jotaro-pointer {
    cursor: url('wp-content/plugins/asygin/images/jotaro-pointer.cur'), pointer;
}

.cursor-dragon-pointer {
    cursor: url('wp-content/plugins/asygin/images/drag-pointer.cur'), pointer;
}

.cursor-kirby-pointer {
    cursor: url('wp-content/plugins/asygin/images/kirbyp.cur'), pointer;
}

/* Style du menu burger */
.menu-burger-container {
    position: absolute;
    top: 10px;
    right: 10px;
}

.burger-icon {
    width: 40px;
    height: 30px;
    cursor: pointer;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    /* margin-top: 30px; */
}

.burger-icon div {
    background-color: #3498db;
    height: 4px;
    width: 100%;
    transition: all 0.3s;
}

/* Styles pour le menu déroulant */
.burger-menu {
    display: none;
    position: absolute;
    top: 50px;
    right: 10px;
    background-color: white;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    z-index: 100;
    width: 200px;
}

.burger-menu.show {
    display: block;
}

.burger-menu ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.burger-menu ul li {
    display: flex;
    align-items: center;
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.burger-menu ul li img {
    width: 20px;
    height: 20px;
    margin-right: 10px;
}

.burger-menu ul li:last-child {
    border-bottom: none;
}

.burger-menu ul li:hover {
    background-color: #3498db;
    color: white;
    cursor: pointer;
}
</style>