
function validate_loc1(){
    document.getElementById("loc1").onclick = function () {
        location.href = "./booking/anaheim.html";
    };
}

function validate_loc2(){
    document.getElementById("loc2").onclick = function () {
        location.href = "booking/beverly-hills.html";
    };
}

function validate_loc3(){
    document.getElementById("loc3").onclick = function () {
        location.href = "booking/glendale.html";
    };
}

function validate_loc4(){
    document.getElementById("loc4").onclick = function () {
        location.href = "booking/huntington-beach.html";
    };
}

function validate_loc5(){
    document.getElementById("loc5").onclick = function () {
        location.href = "booking/irvine.html";
    };
}

function validate_loc6(){
    document.getElementById("loc6").onclick = function () {
        location.href = "booking/laguna-niguel.html";
    };
}

function validate_loc7(){
    document.getElementById("loc7").onclick = function () {
        location.href = "booking/los-angeles.html";
    };
}

function validate_loc8(){
    document.getElementById("loc8").onclick = function () {
        location.href = "booking/newport-beach.html";
    };
}

document.getElementById('select-1').onclick=function(){
    document.getElementById('continue-1').style.visibility='visible';
  };


$(document).ready(function(){
$('#showbooking').on('click', function(event) {        
    $('.content').toggle('show');
});
});