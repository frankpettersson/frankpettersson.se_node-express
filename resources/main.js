//Hide & Show Function_________________________________________________________
//Stores state of arrow direction/hidden or shown
let arrows = new Map();
for (let i = 0; i <= 10; i++) {
    arrows.set(`arrow${i}`, 0);
}
//Listens for click
let selectedArrow = document.getElementsByClassName('arrows');
for (let i = 0; i <= 6; i++) {
    selectedArrow[i].addEventListener('click', function unitBuy() {
        let id = event.target.getAttribute('id');
        let target = event.target.parentElement.nextElementSibling.getAttribute('id');
        if(arrows.has(id) === true) {
            if(arrows.get(id) === 1) {
                document.getElementById(id).setAttribute('src', 'resources/images/arrow_open.svg');
                arrows.set(id, 0);
                document.getElementById(target).style.display = 'block';
            } else if(arrows.get(id) === 0) {
                document.getElementById(id).setAttribute('src', 'resources/images/arrow_closed.svg');
                arrows.set(id, 1);
                document.getElementById(target).style.display = 'none';
            }
        }
    });
}
//_____________________________________________________________________________