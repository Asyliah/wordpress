alert("Test");
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('myForm');
    
    if (form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault(); 
            
           
            const activeButton = document.activeElement;
            
            
            let cursorUrl = '';
            switch (activeButton.id) {
                case 'button1':
                    cursorUrl = '../images/amongustwerk.cur'; 
                    break;
                case 'button2':
                    cursorUrl = '../images/jotaro.cur'; 
                    break;
                case 'button3':
                    cursorUrl = '../images/drag.cur'; 
                    break;
            }           
            // Appliquer le curseur
            if (cursorUrl) {
                document.body.style.cursor = `url(${cursorUrl}), auto`;
                alert('clique valable');
            }
        });
    }
});