<script>
document.addEventListener('DOMContentLoaded', function() {
    const burgerIcon = document.getElementById('burgerIcon');
    const burgerMenu = document.getElementById('burgerMenu');
    
    // Icône du menu burger pour afficher/masquer le menu
    burgerIcon.addEventListener('click', function() {
        burgerMenu.classList.toggle('show');
    });
    
    // Écouter les clics sur les éléments du menu pour changer le curseur
    const menuItems = burgerMenu.querySelectorAll('li');
    menuItems.forEach(item => {
        item.addEventListener('click', function() {
            // Retirer les anciennes classes de curseur
            document.body.classList.remove(
                'cursor-amongus', 'cursor-jotaro', 'cursor-dragon', 'cursor-kirby',
                'cursor-amongus-pointer', 'cursor-jotaro-pointer', 'cursor-dragon-pointer', 'cursor-kirby-pointer'
            );
            
            // Appliquer la classe de curseur en fonction de l'option sélectionnée
            let selectedCursor = '';
            switch (this.dataset.cursor) {
                case 'cursor1':
                    selectedCursor = 'cursor-amongus';
                    break;
                case 'cursor2':
                    selectedCursor = 'cursor-jotaro';
                    break;
                case 'cursor3':
                    selectedCursor = 'cursor-dragon';
                    break;
                case 'cursor4':
                    selectedCursor = 'cursor-kirby';
                    break;
                case 'defaultcursor':
                    selectedCursor = '';
                    break;
            }

            if (selectedCursor) {
                document.body.classList.add(selectedCursor);

                // Changer l'apparence du curseur en main sur les éléments interactifs comme les liens et boutons
                const clickableElements = document.querySelectorAll('a, button, .clickable');
                clickableElements.forEach(element => {
                    element.classList.add(`${selectedCursor}-pointer`);

                    // Supprimer la classe pointer lorsqu'on ne survole plus l'élément
                    element.addEventListener('mouseleave', function() {
                        element.classList.remove(`${selectedCursor}-pointer`);
                    });
                });
            }

            burgerMenu.classList.remove('show');
        });
    });
});
</script>