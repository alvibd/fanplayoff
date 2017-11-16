//window.onload = function () {

var drafttimer = setInterval(tim, 1000);

var counter = 0;
var totalsec = document.getElementById('total-sec').value;
var timerx = parseInt(totalsec);

function convertsecond(s) {
    var min = floor(s / 60);
    var sec = s % 60;
    return min + ":" + sec;
}

function tim() {
    counter++;
    timerx;
    var wow = timerx - counter;


    var min = Math.floor(wow / 60);
    if (min.toString().length == 1) {
        min = "0" + min;
    }

    if (min < 0) {
        min = 0;
        min = "0" + min;
    }




    var sec = wow % 60;
    if (sec.toString().length == 1) {
        sec = "0" + sec;
    }

    if (sec < 0) {
        sec = 00;
        sec = "0" + sec;
    }


    document.getElementById("timer-clock").innerHTML = min + ":" + sec;
}

//};
