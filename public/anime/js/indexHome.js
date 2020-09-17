const backimg = document.getElementById("backimg");
backimg.style.backgroundImage = "url('/anime/img/water1.png')";


const backimg2 = document.getElementById("backimg1");
backimg2.style.backgroundImage = "url('/anime/img/water1.png')";




// backgruond img  

function backGImg() {
  let body = document.getElementById("body");
  body.style.backgroundImage = "url(/anime/img/6.jpg)";
  body.style.backgroundSize = "cover";
  body.style.backgroundPosition = "center";
  body.style.backgroundRepeat = "no-repeat";
  body.style.backgroundAttachment = "fixed";
  let main2 = document.getElementById("main2");
  main2.style.backgroundColor = "#ffffff5d";

}
backGImg();


// card togel 

const btntogel1 = document.getElementById("btntogel1");
const btntogel2 = document.getElementById("btntogel2");
const btntogel3 = document.getElementById("btntogel3");
const btntogel4 = document.getElementById("btntogel4");
const card1 = document.getElementById("card1");
const card2 = document.getElementById("card2");
const card3 = document.getElementById("card3");
const card4 = document.getElementById("card4");


btntogel1.addEventListener("click", function togelCard() {
  card1.classList.remove("displaynone");
  card2.classList.add("displaynone");
  card3.classList.add("displaynone");
  card4.classList.add("displaynone");

  btntogel1.classList.add("dotFocus");
  btntogel2.classList.remove("dotFocus");
  btntogel3.classList.remove("dotFocus");
  btntogel4.classList.remove("dotFocus");

});

btntogel2.addEventListener("click", function togelCard() {
  card2.classList.remove("displaynone");
  card1.classList.add("displaynone");
  card3.classList.add("displaynone");
  card4.classList.add("displaynone");

  btntogel2.classList.add("dotFocus");
  btntogel1.classList.remove("dotFocus");
  btntogel3.classList.remove("dotFocus");
  btntogel4.classList.remove("dotFocus");

});

btntogel3.addEventListener("click", function togelCard() {
  card3.classList.remove("displaynone");
  card1.classList.add("displaynone");
  card2.classList.add("displaynone");
  card4.classList.add("displaynone");

  btntogel3.classList.add("dotFocus");
  btntogel2.classList.remove("dotFocus");
  btntogel1.classList.remove("dotFocus");
  btntogel4.classList.remove("dotFocus");

});
btntogel4.addEventListener("click", function togelCard() {
  card4.classList.remove("displaynone");

  card1.classList.add("displaynone");
  card3.classList.add("displaynone");
  card2.classList.add("displaynone");

  btntogel4.classList.add("dotFocus");
  btntogel2.classList.remove("dotFocus");
  btntogel3.classList.remove("dotFocus");
  btntogel1.classList.remove("dotFocus");
});




// slider swiper-container  

var swiper = new Swiper('.swiper-container', {
  effect: 'coverflow',
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 'auto',
  coverflowEffect: {
    rotate: 30,
    stretch: 0,
    depth: 450,
    modifier: 1,
    slideShadows: false,
  },
  pagination: {
    el: '.swiper-pagination',
  },
});

//  move up 

window.onscroll = function () { scrollFunction(); };
var btnScroll = document.getElementById("btnScroll");
var backColor = document.getElementById("backColor");

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    btnScroll.style.display = "block";
    backColor.style.backgroundColor = "#c0bbd8f1";
  }

  else if (window.innerWidth < 991 && (document.body.scrollTop == 0 || document.documentElement.scrollTop == 0)) {
    backColor2.style.backgroundColor = "#c0bbd8f1";
  }

  else {

    btnScroll.style.display = "none";
    backColor.style.background = "none";

  }
}



btnScroll.addEventListener("click", function toUp() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;

});




//  smoth scroll 

$(document).ready(function () {
  $("a").on('click', function (event) {

    if (this.hash !== "") {

      event.preventDefault();
      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function () {
        window.location.hash = hash;
      });
    }
  });
});






