window.outerWidth = window.innerWidth;
window.onload = function() {
    var iframe = document.createElement('iframe');
    iframe.title = 'Background Animation';
    iframe.id = 'background';
    iframe.scrolling = 'no';
    iframe.src = 'projects/graphics/js_canvas/faded_bubbles/';
    iframe.style = 'z-index: -1';
    document.body.appendChild(iframe);
    var width = Math.max(
        document.documentElement["clientWidth"],
        document.body["scrollWidth"],
        document.documentElement["scrollWidth"],
        document.body["offsetWidth"],
        document.documentElement["offsetWidth"]
    );
    var height = Math.max(
        document.documentElement["clientHeight"],
        document.body["scrollHeight"],
        document.documentElement["scrollHeight"],
        document.body["offsetHeight"],
        document.documentElement["offsetHeight"]
    );
    document.getElementById('background').width = (width)+'px';
    document.getElementById('background').height = (height)+'px';
};
function backgroundSwap(bg) {
    document.getElementById('background').src = bg;
}