document.addEventListener('DOMContentLoaded', function() {
    const cursorDropdown = document.getElementById('cursorDropdown');
    
    // Vérifie si le dropdown existe avant d'ajouter l'écouteur d'événements
    if (cursorDropdown) {
        cursorDropdown.addEventListener('change', function() {
            let cursorUrl = '';
            switch (this.value) {
                case 'cursor1':
                    cursorUrl = '../images/amongustwerk.cur';
                    break;
                case 'cursor2':
                    cursorUrl = '../images/jotaro.cur';
                    break;
                case 'cursor3':
                    cursorUrl = '../images/drag.cur';
                    break;
            }
            
            // Appliquer le curseur s'il est défini
            if (cursorUrl) {
                document.body.className = `url(${cursorUrl}), auto`;
                alert('Curseur changé !');
            }
        });
    }
});
