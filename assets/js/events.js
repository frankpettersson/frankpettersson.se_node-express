//GET UI COLOR
let UI_COLOR = localStorage.getItem('UI-COLOR');
if (UI_COLOR !== null) {
    updateUI(UI_COLOR);
} else {
    updateUI('#ff009d');
}

//SET UI COLOR
let activeLink = 0;
document.querySelector('.setting .settings-box .button').addEventListener('click', () => {
    let newUIColor = document.querySelector('#select-ui-color').value;
    document.querySelectorAll('.link a')[activeLink].style.color = newUIColor;
    updateUI(newUIColor);
});

//UPDATE UI COLOR
document.querySelectorAll('.link a')[activeLink].style.color = UI_COLOR;

function updateUI(color) {
    localStorage.setItem('UI-COLOR', color);
    document.querySelector('#select-ui-color').value = color;

    //LOGO COLOR CHANGE
    let logo = document.querySelector('#logo');
    logo.style.backgroundColor = color;
    logo.addEventListener('mouseover', e => {if(e.target === logo) e.target.style.backgroundColor = 'black'});
    logo.addEventListener('mouseout', e => {if(e.target === logo) e.target.style.backgroundColor = color});
    let footerLogo = document.querySelector('#footer-logo');
    footerLogo.style.backgroundColor = color;
    footerLogo.addEventListener('mouseover', e => {if(e.target === footerLogo) e.target.style.backgroundColor = 'black'});
    footerLogo.addEventListener('mouseout', e => {if(e.target === footerLogo) e.target.style.backgroundColor = color});

    //THUMBNAIL HOVER CHANGE
    let thumbnailOver = e => e.addEventListener('mouseover', e => {
        e.target.parentElement.style.border = '5px double '+color;
        e.target.parentElement.nextElementSibling.style.color = color;
    }); 
    [...document.querySelectorAll('.project .thumbnail img')].forEach(thumbnailOver);
    let thumbnailOut = e => e.addEventListener('mouseout', e => {
        e.target.parentElement.style.border = '5px double #787878';
        e.target.parentElement.nextElementSibling.style.color = 'rgb(30, 30, 30)';
    }); 
    [...document.querySelectorAll('.project .thumbnail img')].forEach(thumbnailOut);

    //PROJECT TEXT HOVER COLOR CHANGE
    let textOver = e => e.addEventListener('mouseover', e => e.target.style.color = color);
    [...document.querySelectorAll('.project p')].forEach(textOver);
    let textOut = e => e.addEventListener('mouseout', e => e.target.style.color = 'rgb(30, 30, 30)');
    [...document.querySelectorAll('.project p')].forEach(textOut);

    //MOBILE ONTOUCH TEXT AND THUMBNAIL COLOR CHANGE
    let mobileTouchStart = e => e.addEventListener('touchstart', e => e.target.style.color = color, {passive: true});
    [...document.querySelectorAll('.project')].forEach(mobileTouchStart);
    let mobileTouchEnd = e => e.addEventListener('touchend', e => e.target.style.color = 'rgb(30, 30, 30)', {passive: true});
    [...document.querySelectorAll('.project')].forEach(mobileTouchEnd);

    //NAVBAR LINK COLOR CHANGES
    let linkClick = e => e.addEventListener('click', e => {
        let target = e.target.getAttribute('data-show');
        if (target === 0) {
            document.querySelectorAll('.link a')[0].style.color = color;
            document.querySelectorAll('.link a')[1].style.color = 'rgb(30, 30, 30)';
            document.querySelectorAll('.link a')[2].style.color = 'rgb(30, 30, 30)';
            document.querySelector('#projects').style.display = 'none';
            document.querySelector('#settings').style.display = 'none';
            document.querySelector('#canvas').style.display = 'block';
            document.querySelector('#canvi').style.display = 'block';
            activeLink = 0;
        } else if (target === 1) {
            document.querySelectorAll('.link a')[0].style.color = 'rgb(30, 30, 30)';
            document.querySelectorAll('.link a')[1].style.color = color;
            document.querySelectorAll('.link a')[2].style.color = 'rgb(30, 30, 30)';
            document.querySelector('#canvas').style.display = 'none';
            document.querySelector('#canvas').style.display = 'none';
            document.querySelector('#canvi').style.display = 'none';
            document.querySelector('#settings').style.display = 'none';
            document.querySelector('#projects').style.display = 'block';
            activeLink = 1;
        } else if (target === 2) {
            document.querySelectorAll('.link a')[0].style.color = 'rgb(30, 30, 30)';
            document.querySelectorAll('.link a')[1].style.color = 'rgb(30, 30, 30)';
            document.querySelectorAll('.link a')[2].style.color = color;
            document.querySelector('#canvas').style.display = 'none';
            document.querySelector('#canvas').style.color = 'rgb(30, 30, 30)';
            document.querySelector('#canvi').style.display = 'none';
            document.querySelector('#projects').style.display = 'none';
            document.querySelector('#projects').style.color = 'rgb(30, 30, 30)';
            document.querySelector('#settings').style.display = 'block';
            activeLink = 2;
        }
    });
    [...document.querySelectorAll('.link a')].forEach(linkClick);

    let linkOver = e => e.addEventListener('mouseover', e => {if (e.target.getAttribute('data-show') !== activeLink) e.target.style.color = color});
    [...document.querySelectorAll('.link a')].forEach(linkOver);
    let linkOut = e => e.addEventListener('mouseout', e => {if (e.target.getAttribute('data-show') !== activeLink) e.target.style.color = 'rgb(30, 30, 30)'});
    [...document.querySelectorAll('.link a')].forEach(linkOut);
}

//HIDE/SHOW PROJECT CATEGORY ARROW
let arrowClick = e => e.addEventListener('click', e => {
    e.target.classList.toggle('arrow-off');
    e.target.parentElement.nextElementSibling.classList.toggle('hide');
});
[...document.querySelectorAll('.arrow')].forEach(arrowClick);

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