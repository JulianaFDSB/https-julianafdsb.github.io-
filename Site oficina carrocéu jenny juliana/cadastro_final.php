<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Carro Céu - Oficina Mecânica Automotiva</title>
	<link rel="stylesheet" type="text/css" href="css/estilo4.css">
	<script src="js/javinha.js"></script>
</head>
<body>
	<div id="area-cabecalho">
		<img src="imagem/bannerc.png">
			 <center>
		     <div id="area-menu"> 
				<a href="index.php">Home</a>
				<a href="compre1.php">Contato</a>
				<a href="login_processo.php">Login</a>
				
			</div>
            </center>
	</div>
	<div id="area-principal">	
            
	  
	<div id="postagem">
	<img src="imagem/ficha7.png" height="40" width="880">
    </div>
	
	
	  <div id="area-postagem">
            <?php
			 
			 include 'cadastro_processo2.php';

                echo  
	
				 
                 "<h3> NOME DO CLIENTE :&nbsp&nbsp$name  </h3> " .
				 "<h3> TELEFONE DO CLIENTE:&nbsp&nbsp$telefone </h3> " .
                 "<h3> NOME DO MECÂNICO(A) :&nbsp&nbsp$name2 </h3> " .
                 "<h3> DESCRIÇÃO DO SERVIÇO :&nbsp&nbsp$descricao  </h3>" .
				 "<h3> REBOQUE :&nbsp&nbspR$$reboque </h3> ".
                 "<h3> MÃO DE OBRA:&nbsp&nbspR$$mao</h3> " .
                 "<h3> GARANTIA :&nbsp&nbsp$garantia </h3> " .
                 "<h3>DESCONTO :&nbsp&nbspR$$desconto</h3>" .
				 "<h3> VALOR TOTAL:&nbsp&nbsp R$$valortotal </h3> ";
				 
                 
                ?>
            
		
	</div>



	</div>

	<div id="area-rodape">
			&copy;Todos os direitos reservados
			
		</div>

</body>
</html>