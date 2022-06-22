<?php
if(isset($_POST['imprimir'])){
	
$name = (isset($_POST["name"]))?$_POST['name'] : " ";
// na parte ?$_POST["entrega"]:" No Local"; relaciona esse valor , do local indicado
$telefone = (isset($_POST["telefone"]))?$_POST['telefone'] : " ";
$name2 = (isset($_POST["name2"]))?$_POST['name2'] : " ";
// na parte ?$_POST["entrega"]:" No Local"; relaciona esse valor , do local indicado
$descricao = (isset($_POST["descricao"]))?$_POST['descricao'] : " ";
$adicionais1 = (int)(isset($_POST["troca1"]))?$_POST['troca1'] : " ";
// na parte ?$_POST["entrega"]:" No Local"; relaciona esse valor , do local indicado
$adicionais2 = (int)(isset($_POST["adesi"]))?$_POST['adesi'] : " ";
$adicionais3 = (int)(isset($_POST["cambio"]))?$_POST['cambio'] : " ";
$adicionais4 = (int)(isset($_POST["ali1"]))?$_POST['ali1'] : " ";
$adicionais5 = (int)(isset($_POST["troca2"]))?$_POST['troca2'] : " ";
$adicionais6 = (int)(isset($_POST["troca3"]))?$_POST['troca3'] : " ";
$adicionais7 = (int)(isset($_POST["troca4"]))?$_POST['troca4'] : " ";
$adicionais8 = (int)(isset($_POST["revisao"]))?$_POST['revisao'] : " ";
$reboque = (int)(isset($_POST["reboque"]))?$_POST['reboque'] : " ";
$mao = (int)(isset($_POST["mao"]))?$_POST['mao'] : " ";
// na parte ?$_POST["entrega"]:" No Local"; relaciona esse valor , do local indicado
$garantia = (isset($_POST["garantia"]))?$_POST['garantia'] : " ";
$desconto = (int)(isset($_POST["desconto"]))?$_POST['desconto'] : " ";
// na parte ?$_POST["entrega"]:" No Local"; relaciona esse valor , do local indicado
$money = (isset($_POST["money"]))?$_POST['money'] : " ";
$or = (isset($_POST["or"]))?$_POST['or'] : " ";
// na parte ?$_POST["entrega"]:" No Local"; relaciona esse valor , do local indicado
 $valortotal = 0;
if($adicionais1 != 0){
	$valortotal += $adicionais1 ;
}
if($adicionais2 != 0){
	$valortotal += $adicionais2 ;
}
if($adicionais3 != 0){
		$valortotal += $adicionais3 ;
}
if($adicionais4 != 0){
		$valortotal += $adicionais4 ;
}
if($adicionais5 != 0){
	$valortotal += $adicionais5 ;
}
if($adicionais6 != 0){
	$valortotal += $adicionais6 ;
}
if($adicionais7 != 0){
	$valortotal += $adicionais7 ;
}
if($adicionais8 != 0){
	$valortotal += $adicionais8 ;
}
if( $garantia != " "  || $garantia != "GARANTIA"){
	if($garantia == "3 meses"){
		$valortotal += 250;
	}
	elseif($garantia == "6 meses"){
        $valortotal += 500;
	}
	elseif($garantia == "9 meses"){
		$valortotal += 1000;
	}
	elseif($garantia == "12 meses"){
        $valortotal += 1500;
	}
}
if($reboque > 0){
$valortotal += $reboque ;
}
if($mao > 0){
$valortotal += $mao ;
}
$desconto = (int)$desconto;
if( $or == 'sim'){
   $desconto += 5;
}


if($money == "Dinheiro"){
	$desconto += 5 ; 
	$desconto = $valortotal * $desconto/100;
	$valortotal = $valortotal - $desconto;
	
   
}
else{
	 $desconto = $valortotal * $desconto/100;
	 $valortotal = $valortotal - $desconto;
	 
   }
}
?>