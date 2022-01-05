"use strict"
window.onscroll = function() {myFunction()};

var navbar = document.querySelector(".nav-manu");
var sticky = navbar.offsetTop;
let charchBar = document.querySelector('#charchBar');
let sSticky = charchBar.offsetTop;
function myFunction() {
  if (window.pageYOffset > sticky || window.pageYOffset > sSticky) {
    navbar.classList.add("sticky");
    charchBar.classList.add("sSticky");
  } else {
    navbar.classList.remove("sticky");
    charchBar.classList.remove("sSticky");
  }
}

let searchInput = document.querySelector('#searchInput');
let navManu = document.querySelector('#navManu');
let quersBar = document.querySelector('#quersBar');

charchBar.addEventListener('click', function(){
    searchInput.style.display='block';
    navManu.style.display='none';
    charchBar.style.display='none';
})

quersBar.addEventListener('click',function(){
    searchInput.style.display='none';
    navManu.style.display='block';
    charchBar.style.display='block';  
})