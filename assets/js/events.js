let arrowClick = e => e.onclick = e => {
    e.target.classList.toggle('arrow-off');
    e.target.nextElementSibling.nextElementSibling.classList.toggle('hide')
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
        document.getElementById('animation-title').innerText = e.target.parentElement.nextElementSibling.innerText;
        window.scrollTo(0, 0);
    }
}
[...document.querySelectorAll('.box-animation .category .grid .project .thumbnail')].forEach(canvasClick);