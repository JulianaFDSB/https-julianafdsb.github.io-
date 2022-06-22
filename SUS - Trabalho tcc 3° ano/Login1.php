<?php
include_once("conexao.php"); 
if(isset($_POST['Enviar'])){
$senha = isset($_POST["senha"])?$_POST["senha"]:" sem senha ";
$n1 = isset($_POST["n1"])?$_POST["n1"]:"Não";
$sexo = isset($_POST["sexo"])?$_POST["sexo"]:" Sem expecificação";
$n2 = isset($_POST["n2"])?$_POST["n2"]:"Não";
$n3 = isset($_POST["n3"])?$_POST["n3"]:"Não";
$n4 = isset($_POST["n4"])?$_POST["n4"]:"Não";
$nome_mae =  isset($_POST["Nome_mae"])?$_POST["Nome_mae"]:" ";
$telefone_fixo = (int) isset($_POST["Telefone_fixo"])?$_POST["Telefone_fixo"]:" ";
$resultado = 0 ;
$nome = isset($_POST["Nome"])?$_POST["Nome"]:" ";
$endereco = isset($_POST["Endereco"])?$_POST["Endereco"]:" No Local indicado";
$telefone_celular = (int) isset($_POST["Telefone_celular"])?$_POST["Telefone_celular"]:" ";
$cpf = (int) isset($_POST["CPF"])?$_POST["CPF"]:" ";
$cep= (int) isset($_POST["CEP"])?$_POST["CEP"]:" ";
$data= isset($_POST["cxdata"])?$_POST["cxdata"]:" ";
$email = isset($_POST["email"])?$_POST["email"]:" Sem expecificação";

if($n1 == 'Sim'){
$resultado = $resultado + 1;
}
if($n2 == 'Sim'){
    $resultado = $resultado + 1 ;  
    
}
if($n4 == 'Sim'){
    $resultado = $resultado + 1;
     
}
if($n3 == 'Sim'){
    $resultado = $resultado + 1;
}

if($resultado == '1' ) {
    $caso = ' Caso Leve ';
}

if($resultado == '2' ) {
    $caso = ' Caso Médio ';
}
elseif($resultado == '3' ) {
    $caso = ' Caso Grave ';
}
$result_usuario1 ="INSERT INTO  usuario (CPF, Nome, Data_de_nascimento, Nome_mae, Sexo) VALUES ('$cpf','$nome', '$data', '$nome_mae', '$sexo') ";

if( mysqli_query($conn, $result_usuario1)) {
 
}
else{
	echo "Erro : " . $result_usuario1 . "<br> " . mysqli_error($conn); // mostra se houve erro
}


$result_usuario2 ="INSERT INTO contato (CEP, Endereco, CPF, Telefone_fixo, Telefone_celular, Email) VALUES ('$cep','$endereco','$cpf','$telefone_fixo','$telefone_celular','$email')"; 
// inserindo dados no banco de dados
        
if( mysqli_query($conn, $result_usuario2)) {
            
}
else{
            echo "Erro : " . $result_usuario2 . "<br> " . mysqli_error($conn); // mostra se houve erro
}


$result_usuario3 ="INSERT INTO login (CPF, Senha) VALUES ('$cpf','$senha')"; 
// inserindo dados no banco de dados
        
if( mysqli_query($conn, $result_usuario3)) {
            
}
else{
            echo "Erro : " . $result_usuario3 . "<br> " . mysqli_error($conn); // mostra se houve erro
}
mysqli_close($conn);
}
?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SUS - Atendimento</title>
	<link rel="stylesheet" type="text/css" href="css/sus.css">
	<script src="js/jhona.js"></script>
	
</head>
<body onload="slide1_1()">
	<div id="area-cabecalho">
		<div id="area-logo">
		<img src="img/img-card-destaque-rnds.png" width="auto" height="160px" class="pessoas">
		<img src="img/img-logo-conect.png" class="logo-tipo">
		
		</div>
		<div id="area-menu">
			<a href="sus.php">Quem Somos</a>
			<a href="Login.php">Login</a>

            </div>
	</div>
	<div id="area-principal">	
		<div id="area-postagem">
        
        <div id="resposta">
        
        <?php
                $valortotal = $resultado ;
                echo  "<h1>Seu cadastro foi efetuado! <br> Veja abaixo suas informações e situação:<h1></br>" ,
                 "<h3> Nome: </h3> " . $nome .
                 "<h3> Data De Nascimento: </h3> " . $data .
                 "<h3> Endereço: </h3> " .$endereco.
                 "<h3> Cpf: </h3> " . $cpf .
                 "<h3> CEP : </h3>"  . $cep .
                 "<h3> Telefone Fixo : </h3> " . $telefone_fixo.
				 "<h3> Telefone Celular : </h3> " . $telefone_celular;
                 
                ?>

		</div>

			
			
			<!-- inicio da postagem 2 -->
			<div class="postagem" >
			    
				
		    </div>

		</div>
		<div id="area-lateral">
		
			
		</div>
		<div id="area-rodape">
			&copy;Todos os direitos reservados
			
		</div>
	</div>

</body>
</html>

    
			