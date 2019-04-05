let selectedArrow = document.getElementsByClassName('arrows');
let showState = 0;
for (let i = 0; i < selectedArrow.length; i++) {
    selectedArrow[i].addEventListener('click', function arrow() {
        let id = event.target;
        let target = event.target.parentElement.nextElementSibling;
        if(showState === 0) {
            id.style.transform = 'rotate(-90deg)'
            target.style.display = 'none';
            showState = 1;
        } else if(showState === 1) {
            id.style.transform = 'rotate(0deg)'
            target.style.display = 'grid';
            showState = 0;
        }
    });
}