function colorLinks(hex) {
    let links = document.getElementsByTagName("a");
    for (let i = 0; i < links.length; i++) {
        if (links[i].href) {
            links[i].style.color = hex;
        }
    }
}
let state = 0;
document.getElementById('darkMode').addEventListener('click', function darkMode() {
    if (state < 3) {
        document.getElementById('background').src = 'projects/graphics/js_canvas/faded_bubbles_dark/index.php';
        for (let i = 0; i < document.querySelectorAll('div.box').length; i++) {
            document.querySelectorAll('div.box')[i].style.background = 'rgba(50, 50, 50, 0.8)';
        }
        for (let i = 0; i < document.querySelectorAll('a.thumbnail').length; i++) {
            document.querySelectorAll('.thumbnail')[i].style.border = '3px ridge #696969';
            document.querySelectorAll('.thumbnail img')[i].onmouseover = () => event.target.parentElement.style.border = '3px ridge #1bc600';
            document.querySelectorAll('.thumbnail img')[i].onmouseout = () => event.target.parentElement.style.border = '3px ridge #696969';
            document.querySelectorAll('.thumbnail img')[i].onmousedown  = () => event.target.parentElement.style.border = '3px groove #1bc600';
            document.querySelectorAll('.thumbnail img')[i].onmouseup  = () => event.target.parentElement.style.border = '3px ridge #1bc600';
        }
        document.getElementById('wrap').style.background = 'rgba(60, 60, 60, 0.5)';
        document.getElementById('titleImage').style.background = 'rgba(60, 60, 60, 0.5)';
        document.body.style.color = 'white';
        colorLinks("#FFFFFF");
        state++;
    } else if (state >= 3) {
        document.getElementById('background').src = 'projects/graphics/js_canvas/faded_bubbles/index.php';
        for (let i = 0; i < document.querySelectorAll('div.box').length; i++) {
            document.querySelectorAll('div.box')[i].style.background = 'rgba(255, 255, 255, 0.8)';
        }
        for (let i = 0; i < document.querySelectorAll('a.thumbnail').length; i++) {
            document.querySelectorAll('a.thumbnail')[i].style.border = '3px ridge #CCCCCC';
            document.querySelectorAll('.thumbnail img')[i].onmouseover = () => event.target.parentElement.style.border = '3px ridge #1bc600';
            document.querySelectorAll('.thumbnail img')[i].onmouseout = () => event.target.parentElement.style.border = '3px ridge #CCCCCC';
            document.querySelectorAll('.thumbnail img')[i].onmousedown  = () => event.target.parentElement.style.border = '3px groove #1bc600';
            document.querySelectorAll('.thumbnail img')[i].onmouseup  = () => event.target.parentElement.style.border = '3px ridge #1bc600';
        }
        document.getElementById('wrap').style.background = 'rgba(200, 200, 200, 0.5)';
        document.getElementById('titleImage').style.background = 'rgba(235, 235, 235, 0.6)'
        document.body.style.color = 'black';
        colorLinks("#000000");
        state = 0;
    }
    document.getElementById('titleImage').style.backgroundImage = 'url("assets/images/icons/fp_green_512x512.png")';
    document.getElementById('titleImage').style.backgroundSize = '100% 100%';
});