<?php
include_once 'login_final.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Carro Céu - Oficina Mecânica Automotiva</title>
	<link rel="stylesheet" type="text/css" href="css/estilo3.css">
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
            <div id="area-postagem">
                <form name="frmofi" method="POST" action="cadastro_final.php">
                        <div class="postagem">
                            <span class="data-postagem"></span>
                            <h1> Cadastro de Serviço </h1>
                        </div>   
                            
                           <div class="postagem1">       
                            <hr color="#390760" size= "6" width="949">
                           </div>
                           
                           <br><br>
                        <input type="text" name="name" value="Seu nome" class="form"/>
                        
                        <input type="text" name="telefone" value="Telefone" class="form"><br> <br>
                        <input type="text" name="name2" value="Número do mecânico" class="form"> <br><br>
                        
                        <textarea name="descricao" value="Descrição" rows="5" cols="50" class="form"> Descreva o serviço :</textarea>
                        <br> <br> 
                        <input type="checkbox" name="troca1" value="145" class="form">  Troca de óleo -- R$145,00
                        <input type="checkbox" name="adesi" value="1000" class="form">  Adesivagem -- R$1000,00<br><br>
                        <input type="checkbox" name="cambio" value="230" class="form">  Cambio -- R$230,00
                        <input type="checkbox" name="revisao" value="320" class="form">Revisão dos freios ---- R$320,00<br><br>
                        <input type="checkbox" name="troca2" value="370" class="form">  Troca Suspensão - R$370,00
                        <input type="checkbox" name="ali1" value="535" class="form">Alinhamento - R$535,00<br><br>
                        <input type="checkbox" name="troca3" value="185" class="form">Troca da Correia Dentada--R$185,00 <br><br>
                        <input type="checkbox" name="troca4" value="80" class="form"> Troca de Embreagem--R$80,00<br><br><br>
                        
                        <input type="text" name="reboque" value="REBOQUE" class="form">
                        <input type="text" name="mao" value="MÃO DE OBRA" class="form"><br><br>
                        <input type="text" name="garantia" value="GARANTIA" class="form">
                        <input type="text" name="desconto" value="DESCONTO" class="form"><br><br>


                    <div id="pag">
                        <h4>Pagamentos</h4><br><br>
                            <input type="radio" name="money" value="Dinheiro" class="form">  Dinheiro<br><br>
                            <input type="radio" name="money" value="Cartão de debito" class="form">  Cartão de debito<br><br>
                            <input type="radio" name="money" value="Cartão de credito" class="form">  Cartão de credito<br><br><br>

                </div>
                <div id="vez">
                        <h4> É a primeira vez do cliente na loja ?</h4><br><br>
                            <input type="radio" name="or" value="sim" class="form">  Sim<br><br>
                            <input type="radio" name="or" value="nao" class="form">  Não<br><br><br>
                            

                </div>



                <button name="imprimir" class="bottom"> IMPRIMIR</button>	
            </form>
            </div>
            
            </div>
            
		<div id="area-rodape">
			&copy;Todos os direitos reservados
			
		</div>
	</div>

</body>
</html>