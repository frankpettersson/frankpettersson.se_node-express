let arrowClick = e => e.onclick = e => {
    e.target.classList.toggle('arrow-off');
    e.target.parentElement.nextElementSibling.classList.toggle('hide');
}
[...document.querySelectorAll('.arrow')].forEach(arrowClick);

let thumbnailOver = e => e.onmouseover = e => {
    e.target.parentElement.classList.toggle('thumbnail-hover-border');
    e.target.parentElement.nextElementSibling.classList.toggle('thumbnail-hover-text');
}
[...document.querySelectorAll('.project .thumbnail img')].forEach(thumbnailOver);

let thumbnailOut = e => e.onmouseout = e => {
    e.target.parentElement.classList.toggle('thumbnail-hover-border');
    e.target.parentElement.nextElementSibling.classList.toggle('thumbnail-hover-text');
}
[...document.querySelectorAll('.project .thumbnail img')].forEach(thumbnailOut);

let canvasClick = e => e.onclick = e => {
    if (e.target.nodeName.toLowerCase() === "img") {
        let src = e.target.getAttribute('data-src');
        document.getElementById('frontframe').src = src;
        document.getElementById('canvas-title').innerText = e.target.parentElement.nextElementSibling.innerText;
        window.scrollTo(0, 0);
    }
}
[...document.querySelectorAll('.box-canvas .category .grid .project .thumbnail')].forEach(canvasClick);

let linkClick = e => e.onclick = e => {
    let target = e.target.getAttribute('data-show');
    if (target === '#canvas') {
        document.querySelector('#projects').style.display = 'none';
        document.querySelector('#canvas').style.display = 'block';
        document.querySelector('#canvi').style.display = 'block';
        e.target.parentElement.nextElementSibling.children[0].classList.toggle('link-color');
    } else if (target === '#projects') {
        document.querySelector('#canvas').style.display = 'none';
        document.querySelector('#canvi').style.display = 'none';
        document.querySelector('#projects').style.display = 'block';
        e.target.parentElement.previousSibling.children[0].classList.toggle('link-color');
    }
    e.target.classList.toggle('link-color');
}
[...document.querySelectorAll('.link a')].forEach(linkClick);