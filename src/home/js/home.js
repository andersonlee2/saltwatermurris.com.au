//Select DOM Items
const copyBody = document.querySelectorAll('.content-wrap p');
const menuBtn = document.querySelector('.menu-btn');
const menu = document.querySelector('.menu');
const menuNav = document.querySelector('.menu-nav');
const body = document.querySelector('body');
var vh = Math.max(document.documentElement.clientHeight, window.innerHeight );
var bg = document.querySelector('.bg-image');
const s1 = document.querySelector('.section-1');
const s2 = document.querySelector('.section-2');


// Header Hamburger Menu
menuBtn.addEventListener('click', toggleMenu);
function toggleMenu(){
    menuBtn.classList.toggle('close');
    menu.classList.toggle('show');
    body.classList.toggle('noscroll');
};


// Add Text Highlight to paragraphs
for (var i=0; i<copyBody.length; i++){
    // add span tag around paragraphs
    copyBody[i].innerHTML = '<span>' + copyBody[i].innerHTML + '</span>'; 
};
const spans = document.querySelectorAll('.content-wrap span');
for (var i=0; i<spans.length; i++){    
    // add text hightlight effect
    spans[i].classList.add('text-highlight');
};


// Change Background Image on Scroll
window.onscroll = function(){
  if ( window.scrollY >= s2.offsetTop - vh/2 ) {
    bg.style.background = "url('http://via.placeholder.com/500/522B1C/000000')";
    bg.style.backgroundAttachment = 'fixed';
//  } else if ( window.scrollY >= s1.offsetTop - vh/2) {

  } else {
    bg.style.background = "url('http://via.placeholder.com/500/00629b/000000')";
    bg.style.backgroundAttachment = 'fixed';
  }
};

