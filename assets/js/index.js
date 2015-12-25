//card shuffle
function play() {
    makeitplay();
    window.setInterval(function () {
        makeitplay();
    }, 16000);
}

function makeitplay() {
    setTimeout(function () {
        shuffle(1);
    }, 5000);
    setTimeout(function () {
        shuffle(2);
    }, 10000);
    setTimeout(function () {
        shuffle(3);
    }, 15000);
    setTimeout(function () {
        bringback();
    }, 15500);
}

function bringback() {


    if ($("#vd2").hasClass("vdactive")) {
        remove("#vd2");
    }
    if ($("#vd3").hasClass("vdactive")) {
        remove("#vd3");
    }
    if ($("#vd1").hasClass("vdactive")) {
        remove("#vd1");
    }
}

function shuffle(card) {

    var card_num = "#vd" + card;
    $(card_num).addClass("vdactive animated bounceOutLeft");
    console.log(card_num);
}

function remove(cnum) {

    $(cnum).removeClass("vdactive");
    $(cnum).addClass("flipInX");
    setTimeout(function () {
        $(cnum).removeClass("animated bounceOutLeft flipInX ");
    }, 1000);
}

$(document).ready(function () {
    play();
});