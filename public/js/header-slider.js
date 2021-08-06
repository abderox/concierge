var slides = document.querySelectorAll('.slide');
var btns = document.querySelectorAll('.btn');
let currentslide = 1;

// Javascript for image slider manual navigation
var manualNav = function(manual){
  slides.forEach((slide) => {
    slide.classList.remove('active');

    btns.forEach((btn) => {
      btn.classList.remove('active');
    });
  });

  slides[manual].classList.add('active');
  btns[manual].classList.add('active');
}

btns.forEach((btn, i) => {
  btn.addEventListener("click", () => {
    manualNav(i);
    currentslide = i;
  });
});

// Javascript for image slider autoplay navigation
var repeat = function(activeClass){
  let active = document.getElementsByClassName('active');
  let i = 1;

  var repeater = () => {
    setTimeout(function(){
      [...active].forEach((activeSlide) => {
        activeSlide.classList.remove('active');
      });

    slides[i].classList.add('active');
    btns[i].classList.add('active');
    i++;

    if(slides.length == i){
      i = 0;
    }
    if(i >= slides.length){
      return;
    }
    repeater();
  }, 10000);
  }
  repeater();
}
repeat();

const btn=document.getElementById('btn');
const container=document.querySelector('.container_');
btn.addEventListener('click', (e)=> {
  if(e.target.checked){
  container.style.clipPath='polygon(0 0, 100% 0,100% 100%, 0% 100%)';}
  else {
    container.style.clipPath='polygon(0 81%, 100% 81%,100% 100%, 0% 100%)';
  }

});


function myFunction(dots,more,myBtn,hero) {
var dots = document.getElementById(dots);
var moreText = document.getElementById(more);
var btnText = document.getElementById(myBtn);
var hero=document.getElementById(hero);

if (dots.style.display === "none") {
dots.style.display = "inline";
btnText.innerHTML = "More "+'<i class="fas fa-caret-down"></i>';
moreText.style.display = "none";
hero.style.height='240px';
} else {
dots.style.display = "none";
btnText.innerHTML = "Less "+'<i class="fas fa-caret-up"></i>';
moreText.style.display = "inline";
hero.style.height='340px';
}
}
function myfunction()
{
myFunction('dots','more','myBtn','hero');
}
function myfunction1()
{
myFunction('dots1','more1','myBtn1','hero1');
}



//Go Up button

var mybutton = document.getElementById("goUp");
var but=document.querySelector('.container_');

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
mybutton.style.display = "block";

} else {
mybutton.style.display = "none";

}
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
}


var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides_ = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides_.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides_.length; i++) {
      slides_[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides_[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
} 




