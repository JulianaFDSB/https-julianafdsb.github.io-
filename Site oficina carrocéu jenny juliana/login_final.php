<?php
if(isset($_POST['enviar'])){
	// o atributo post é usado para coletar dados de formulário. $ _POST é um array de variáveis ​​passadas para o script atual por meio do método HTTP POST.
$email = isset($_POST["email"])?$_POST["email"]:" ";
// na parte ?$_POST["entrega"]:" No Local"; relaciona esse valor , do local indicado
$senha = isset($_POST["senha"])?$_POST["senha"]:" ";


if($email != "julianajennyfer" && $senha !="1234"){
	echo "Login incorreto. Tente novamente !";
	include_once 'login_processo.php';
	
}
else{
	include_once 'cadastro_processo.php';
}





}
?>
