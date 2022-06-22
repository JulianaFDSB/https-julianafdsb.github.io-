function slide1_1(){
    document.getElementById("slide1").src="imagem/carro_ceu_0.png";
    setTimeout("slide1_2()", 4000);
} 
function slide1_2(){
    document.getElementById("slide1").src="imagem/carro_ceu_1.png";
    setTimeout("slide1_3()", 4000);
} 
function slide1_3(){
    document.getElementById("slide1").src="imagem/carro_ceu_2.png";
    setTimeout("slide1_1()", 4000);
}