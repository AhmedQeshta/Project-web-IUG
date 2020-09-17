

var random = Math.random();
var random = parseInt((10) * (random));
var body = document.getElementById("imgrandom");
body.style.backgroundImage = "url(/anime/img/" + random + ".jpg)";



const a = document.getElementById("btn1");
const b = document.getElementById("btn2");
const c = document.getElementById("btn3");
const d = document.getElementById("btn4");
const e = document.getElementById("btn5");
const f = document.getElementById("btn6");



a.addEventListener("click", function tog() {
    document.getElementById("register").classList.add("HeddenLY");
    document.getElementById("login").classList.add("HeddenLY");
    document.getElementById("forget").classList.remove("HeddenLY");

});
b.addEventListener("click", function tog() {
    document.getElementById("register").classList.add("HeddenLY");
    document.getElementById("login").classList.remove("HeddenLY");
    document.getElementById("forget").classList.add("HeddenLY");
    document.getElementById("loginimg").classList.remove("HeddenLY");
});
c.addEventListener("click", function tog() {
    document.getElementById("register").classList.add("HeddenLY");
    document.getElementById("login").classList.add("HeddenLY");
    document.getElementById("forget").classList.remove("HeddenLY");
});
d.addEventListener("click", function tog() {
    document.getElementById("register").classList.remove("HeddenLY");
    document.getElementById("login").classList.add("HeddenLY");
    document.getElementById("forget").classList.add("HeddenLY");
});
e.addEventListener("click", function tog() {
    document.getElementById("register").classList.remove("HeddenLY");
    document.getElementById("login").classList.add("HeddenLY");
    document.getElementById("forget").classList.add("HeddenLY");
});
f.addEventListener("click", function tog() {
    document.getElementById("register").classList.add("HeddenLY");
    document.getElementById("login").classList.remove("HeddenLY");
    document.getElementById("loginimg").classList.remove("HeddenLY");
    document.getElementById("forget").classList.add("HeddenLY");
});

//validation

// var uname = document.getElementById("username");
// var email = document.getElementById("email");
// var password = document.getElementById("password");
// var errormessage  = document.getElementById("errormessage");
// var sub = document.getElementById("sub");
//



// add not importent
const hidenM = document.getElementById("hidenM");
const hidenM1 = document.getElementById("hidenM1");
const hidenM2 = document.getElementById("hidenM2");

hidenM.addEventListener("click", function tog() {
    var hidenH = document.getElementById("hidenH");
    if (hidenH.style.display === "none") {
        hidenH.style.display = "block";

    }
    else {
        hidenH.style.display = "none";
    }

});
hidenM1.addEventListener("click", function tog() {
    var hidenH = document.getElementById("hidenH");
    if (hidenH.style.display === "none") {
        hidenH.style.display = "block";

    }
    else {
        hidenH.style.display = "none";
    }

});
hidenM2.addEventListener("click", function tog() {
    var hidenH = document.getElementById("hidenH");
    if (hidenH.style.display === "none") {
        hidenH.style.display = "block";

    }
    else {
        hidenH.style.display = "none";
    }

});
 



