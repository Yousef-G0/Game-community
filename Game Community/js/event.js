var count= new Date ("Mar 30, 2024 00:00:00").getTime();
var x= setInterval(function () {
var now = new Date().getTime();
var distance = count -now;

var days = Math.floor(distance / (1000 * 60 * 60 * 24));
var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((distance % (1000 * 60)) / 1000);

document.getElementById("days").innerHTML= days;
document.getElementById("hours").innerHTML= hours;
document.getElementById("mintues").innerHTML= minutes;
document.getElementById("seconds").innerHTML= seconds;

} ,1000);


function show(){
    let sh =document.querySelector(".sidebar")
    sh.style.display='flex'
}
function hide() {
    let hid =document.querySelector(".sidebar")
    hid.style.display='none'
}