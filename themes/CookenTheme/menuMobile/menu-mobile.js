  // search-box open close js code
let navbar = document.getElementsByClassName("navbar");

let navLinks = document.getElementsByClassName("nav-links");
let menuOpenBtn = document.getElementsByClassName("bx-menu");
let menuCloseBtn = document.getElementsByClassName("bx-x");
menuOpenBtn.onclick = function() {
navLinks.style.left = "0";
}
menuCloseBtn.onclick = function() {
navLinks.style.left = "-100%";
}


let htmlcssArrow = document.getElementsByClassName("htmlcss-arrow");
htmlcssArrow.onclick = function() {
 navLinks.classList.toggle("show1");
}
let moreArrow = document.getElementsByClassName("more-arrow");
moreArrow.onclick = function() {
 navLinks.classList.toggle("show2");
}
let jsArrow = document.getElementsByClassName("js-arrow");
jsArrow.onclick = function() {
 navLinks.classList.toggle("show3");
}
