//HIDE/SHOW PROJECT CATEGORY ARROW
let arrowClick = e => e.addEventListener('click', e => {
    e.target.classList.toggle('arrow-off');
    e.target.parentElement.nextElementSibling.classList.toggle('hide');
});
[...document.querySelectorAll('.arrow')].forEach(arrowClick);

//MOUSEOVER ON THUMBNAIL COLOR CHANGE
let thumbnailOver = e => e.addEventListener('mouseover', e => {
    e.target.parentElement.classList.toggle('thumbnail-hover-border');
    e.target.parentElement.nextElementSibling.classList.toggle('thumbnail-hover-text');
});
[...document.querySelectorAll('.project .thumbnail img')].forEach(thumbnailOver);

//MOUSEOUT ON THUMBNAIL COLOR REVERT
let thumbnailOut = e => e.addEventListener('mouseout', e => {
    e.target.parentElement.classList.toggle('thumbnail-hover-border');
    e.target.parentElement.nextElementSibling.classList.toggle('thumbnail-hover-text');
});
[...document.querySelectorAll('.project .thumbnail img')].forEach(thumbnailOut);

//PREVIEW CANVAS CHANGER
let canvasClick = e => e.addEventListener('click', e => {
    if (e.target.nodeName.toLowerCase() === "img") {
        let src = e.target.getAttribute('data-src');
        document.getElementById('frontframe').src = src;
        document.getElementById('canvas-title').innerText = e.target.parentElement.nextElementSibling.innerText;
        window.scrollTo(0, 0);
    }
});
[...document.querySelectorAll('.box-canvas .category .grid .project .thumbnail')].forEach(canvasClick);

//NAVBAR LINK COLOR CHANGES
let activeLink = 'canvas';
let linkClick = e => e.addEventListener('click', e => {
    let target = e.target.getAttribute('data-show');
    if (target === '#canvas') {
        document.querySelector('#projects').style.display = 'none';
        document.querySelector('#canvas').style.display = 'block';
        document.querySelector('#canvi').style.display = 'block';
        if (activeLink === 'projects') {
            e.target.parentElement.nextElementSibling.children[0].classList.toggle('link-color');
            e.target.classList.toggle('link-color');
            activeLink = 'canvas';
        }
    } else if (target === '#projects') {
        document.querySelector('#canvas').style.display = 'none';
        document.querySelector('#canvi').style.display = 'none';
        document.querySelector('#projects').style.display = 'block';
        if (activeLink === 'canvas') {
            e.target.parentElement.previousSibling.children[0].classList.toggle('link-color');
            e.target.classList.toggle('link-color');
            activeLink = 'projects';
        }
    }
});
[...document.querySelectorAll('.link a')].forEach(linkClick);

//MOBILE ONTOUCH TEXT AND THUMBNAIL COLOR CHANGE
let mobileTouchStart = e => e.addEventListener('touchstart', e => {
    e.target.classList.toggle('thumbnail-hover-text');
}, {passive: true});
[...document.querySelectorAll('.project')].forEach(mobileTouchStart);

let mobileTouchEnd = e => e.addEventListener('touchend', e => {
    e.target.classList.toggle('thumbnail-hover-text');
}, {passive: true});
[...document.querySelectorAll('.project')].forEach(mobileTouchEnd);

//MOBILE ONTOUCH TEXT AND THUMBNAIL COLOR CHANGE
let projectMouseOver = e => e.addEventListener('mouseover', e => {
    e.target.classList.toggle('thumbnail-hover-text');
});
[...document.querySelectorAll('.project')].forEach(projectMouseOver);

let projectMouseOut = e => e.addEventListener('mouseout', e => {
    e.target.classList.toggle('thumbnail-hover-text');
});
[...document.querySelectorAll('.project')].forEach(projectMouseOut);