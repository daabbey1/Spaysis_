const tab_link = document.querySelector('.tab-link');
const about = document.querySelector('#about');
const sub_tab = document.querySelector('.sub-tab');
const hover_link = document.querySelector('.hover-link');

about.addEventListener('mouseout', mouseOut);
about.addEventListener('mouseover',mouseOver);


function mouseOver() {
    // hover_link.style.display = (`block`);
    about.style.color = (`red`);
}
function mouseOut() {
}
