let arrowClick = e => e.onclick = e => {
    e.target.classList.toggle('inactive');
    e.target.nextElementSibling.nextElementSibling.classList.toggle('hide')
}
[...document.querySelectorAll('.arrows')].forEach(arrowClick);

let thumbnailOver = e => e.onmouseover = e => {
    e.target.classList.toggle('inactive');
    e.target.parentElement.nextElementSibling.style.color = '#1bc600';
}
[...document.querySelectorAll('.project a img')].forEach(thumbnailOver);
let thumbnailOut = e => e.onmouseout = e => {
    e.target.classList.toggle('inactive');
    e.target.parentElement.nextElementSibling.style.color = 'black';
}
[...document.querySelectorAll('.project a img')].forEach(thumbnailOut);