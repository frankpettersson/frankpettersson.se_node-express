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
                document.getElementById(id).setAttribute('src', 'resources/images/util/arrow_open.svg');
                arrows.set(id, 0);
                document.getElementById(target).style.display = 'grid';
            } else if(arrows.get(id) === 0) {
                document.getElementById(id).setAttribute('src', 'resources/images/util/arrow_closed.svg');
                arrows.set(id, 1);
                document.getElementById(target).style.display = 'none';
            }
        }
    });
}
//_____________________________________________________________________________

//Dark Mode____________________________________________________________________
function colorLinks(hex)
{
    var links = document.getElementsByTagName("a");
    for(var i=0;i<links.length;i++)
    {
        if(links[i].href)
        {
            links[i].style.color = hex;  
        }
    }  
}
let state = 0;
document.getElementById('darkMode').addEventListener('click', function darkMode() {
    let width = parseInt(document.getElementById('background').width, 10);
    if (state < 3) {
        document.getElementById('background').src = 'projects/graphics/js_canvas/faded_bubbles_dark/index.php';
        document.getElementById('titleImage').style.background = 'rgba(60, 60, 60, 0.5)';
        document.querySelectorAll('div.box')[0].style.background = 'rgba(50, 50, 50, 0.8)';
        document.querySelectorAll('div.box')[1].style.background = 'rgba(50, 50, 50, 0.8)';
        document.querySelectorAll('div.box')[2].style.background = 'rgba(50, 50, 50, 0.8)';
        document.querySelectorAll('div.box')[3].style.background = 'rgba(50, 50, 50, 0.8)';
        document.getElementById('wrap').style.background = 'rgba(60, 60, 60, 0.5)';
        document.getElementById('titleImage').style.border = '2px dashed white';
        document.body.style.color = 'white';
        colorLinks("#FFFFFF");
        state++;
    } else if (state >= 3) {
        document.getElementById('background').src = 'projects/graphics/js_canvas/faded_bubbles/index.php';
        document.getElementById('wrap').style.background = 'rgba(200, 200, 200, 0.5)';
        document.getElementById('titleImage').style.background = 'rgba(215, 215, 215, 0.6)'
        document.querySelectorAll('div.box')[0].style.background = 'rgba(235, 235, 235, 0.8)';
        document.querySelectorAll('div.box')[1].style.background = 'rgba(235, 235, 235, 0.8)';
        document.querySelectorAll('div.box')[2].style.background = 'rgba(235, 235, 235, 0.8)';
        document.querySelectorAll('div.box')[3].style.background = 'rgba(235, 235, 235, 0.8)';
        document.getElementById('titleImage').style.border = '2px dashed black';
        document.body.style.color = 'black';
        colorLinks("#000000");
        state = 0;
    }
    document.getElementById('titleImage').style.backgroundImage = 'url("resources/images/icon/fp_green_512x512.png")';
    document.getElementById('titleImage').style.backgroundSize = '100% 100%';
});
//_____________________________________________________________________________