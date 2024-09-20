document.addEventListener('DOMContentLoaded', function() {
    const burgerIcon = document.getElementById('burgerIcon');
    const burgerMenu = document.getElementById('burgerMenu');

    // Icône du menu burger pour afficher/masquer le menu
    burgerIcon.addEventListener('click', function() {
        burgerMenu.classList.toggle('show');
    });

    // Variable pour stocker le curseur sélectionné
    let selectedCursor = '';

    // Écouter les clics sur les éléments du menu pour changer le curseur
    const menuItems = burgerMenu.querySelectorAll('li');
    menuItems.forEach(item => {
        item.addEventListener('click', function() {
            // Retirer les anciennes classes de curseur
            document.body.classList.remove(
                'cursor-amongus', 'cursor-jotaro', 'cursor-dragon', 'cursor-kirby'
            );

            // Appliquer la classe de curseur en fonction de l'option sélectionnée
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
            } else {
                // Si "defaultcursor" est sélectionné, retirer toutes les classes de curseur
                document.body.classList.remove('cursor-amongus', 'cursor-jotaro', 'cursor-dragon', 'cursor-kirby');
            }

            burgerMenu.classList.remove('show');
        });
    });

    // Gérer le changement du curseur sur les éléments interactifs
    const clickableElements = document.querySelectorAll('a, button, .clickable');

    clickableElements.forEach(element => {
        element.addEventListener('mouseenter', function() {
            if (selectedCursor) {
                this.classList.add(`${selectedCursor}-pointer`);
            }
        });

        element.addEventListener('mouseleave', function() {
            this.classList.remove('cursor-amongus-pointer', 'cursor-jotaro-pointer', 'cursor-dragon-pointer', 'cursor-kirby-pointer');
        });
    });
});