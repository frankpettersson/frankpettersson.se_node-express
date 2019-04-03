window.outerWidth = window.innerWidth;
//Hide & Show Function_________________________________________________________
//Stores state of arrow direction/hidden or shown
let arrows = new Map();
for (let i = 0; i <= 10; i++) {
    arrows.set(`arrow${i}`, 0);
}
//Listens for click
let selectedArrow = document.getElementsByClassName('arrows');
for (let i = 0; i <= 7; i++) {
    selectedArrow[i].addEventListener('click', function arrow() {
        let id = event.target.getAttribute('id');
        let target = event.target.parentElement.nextElementSibling.getAttribute('id');
        if(arrows.has(id) === true) {
            if(arrows.get(id) === 1) {
                document.getElementById(id).setAttribute('src', 'resources/images/arrow_open.svg');
                arrows.set(id, 0);
                document.getElementById(target).style.display = 'grid';
            } else if(arrows.get(id) === 0) {
                document.getElementById(id).setAttribute('src', 'resources/images/arrow_closed.svg');
                arrows.set(id, 1);
                document.getElementById(target).style.display = 'none';
            }
        }
    });
}
//_____________________________________________________________________________

//Dark Mode____________________________________________________________________
let state = 0;
document.getElementById('darkMode').addEventListener('click', function darkMode() {
    if (state < 3) {
        document.getElementById('wrap').style.background = 'rgb(40, 40, 40)';
        document.getElementById('bg').style.background = 'rgb(20, 20, 20)';
        document.getElementById('background').src = 'projects/graphics/js_canvas/faded_bubbles_dark/index.html';
        state++;
    } else if (state >= 3) {
        document.getElementById('wrap').style.background = 'rgb(255, 255, 255)';
        document.getElementById('bg').style.background = 'rgb(255, 255, 255)';
        document.getElementById('background').src = 'projects/graphics/js_canvas/faded_bubbles/index.html';
        state = 0;
    }
});
//_____________________________________________________________________________