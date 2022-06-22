function slide1_1(){
    document.getElementById("slide1").src="img/1.png";
    setTimeout("slide1_2()", 5000);
} 
function slide1_2(){
    document.getElementById("slide1").src="img/2.png";
    setTimeout("slide1_3()", 5000);
} 
function slide1_3(){
    document.getElementById("slide1").src="img/3.png";
    setTimeout("slide1_1()", 5000);
}