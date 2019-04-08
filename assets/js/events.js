let arrowClick = e => e.onclick = e => {
    e.target.classList.toggle('inactive');
    e.target.nextElementSibling.nextElementSibling.classList.toggle('hide')
}
[...document.querySelectorAll('.arrows')].forEach(arrowClick);

let thumbnailOver = e => e.onmouseover = e => {
    e.target.classList.toggle('inactive');
    e.target.parentElement.nextElementSibling.style.color = '#1bc600';
}
[...document.querySelectorAll('#projects .category .grid .project a img')].forEach(thumbnailOver);
let thumbnailOut = e => e.onmouseout = e => {
    e.target.classList.toggle('inactive');
    e.target.parentElement.nextElementSibling.style.color = 'black';
}
[...document.querySelectorAll('#projects .category .grid .project a img')].forEach(thumbnailOut);


let canvasClick = e => e.onclick = e => {
    if (e.target.nodeName.toLowerCase() === "img") {
        let src = e.target.getAttribute('data-src');
        document.getElementById('frontframe').src = src;
        window.scrollTo(0, 0);
    }
}
[...document.querySelectorAll('.box.animations .category .grid .project a')].forEach(canvasClick);