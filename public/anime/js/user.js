const backimg = document.getElementById("backimg");
backimg.style.backgroundImage = "url('/anime/img/water1.png')";


const backimg2 = document.getElementById("backimg1");
backimg2.style.backgroundImage = "url('/anime/img/water1.png')";


//  move up 

window.onscroll = function () {
  scrollFunction();
};

var backColor2 = document.getElementById("backColor2");
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    backColor2.style.backgroundColor = "#c0bbd8f1";

  }
  else if (window.innerWidth < 991 && (document.body.scrollTop == 0 || document.documentElement.scrollTop == 0)) {
    backColor2.style.backgroundColor = "#c0bbd8f1";
    btnScroll.style.display = "none";
  }
  else {
    backColor2.style.background = "none";
  }
}

//   togle div

const link1 = document.getElementById("link1");
const link2 = document.getElementById("link2");
// 
const contineChangeByLinkNav1 = document.getElementById("contineChangeByLinkNav1");
const contineChangeByLinkNav2 = document.getElementById("contineChangeByLinkNav2");



// funtions togle
link1.addEventListener("click", function togelCard() {
  contineChangeByLinkNav1.classList.remove("displaynone1");
  contineChangeByLinkNav2.classList.add("displaynone1");
  link1.classList.add("activenav");
  link2.classList.remove("activenav");


});

link2.addEventListener("click", function togelCard() {
  contineChangeByLinkNav2.classList.remove("displaynone1");
  contineChangeByLinkNav1.classList.add("displaynone1");
  link2.classList.add("activenav");
  link1.classList.remove("activenav");

});





// smoth move
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
