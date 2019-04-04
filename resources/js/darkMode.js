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
        document.getElementById('titleImage').style.background = 'rgba(235, 235, 235, 0.6)'
        document.querySelectorAll('div.box')[0].style.background = 'rgba(255, 255, 255, 0.8)';
        document.querySelectorAll('div.box')[1].style.background = 'rgba(255, 255, 255, 0.8)';
        document.querySelectorAll('div.box')[2].style.background = 'rgba(255, 255, 255, 0.8)';
        document.querySelectorAll('div.box')[3].style.background = 'rgba(255, 255, 255, 0.8)';
        document.getElementById('titleImage').style.border = '2px dashed black';
        document.body.style.color = 'black';
        colorLinks("#000000");
        state = 0;
    }
    document.getElementById('titleImage').style.backgroundImage = 'url("resources/images/icon/fp_green_512x512.png")';
    document.getElementById('titleImage').style.backgroundSize = '100% 100%';
});