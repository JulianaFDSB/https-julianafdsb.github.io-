<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SUS - Atendimento</title>
    <link rel="stylesheet" type="text/css" href="css/sus.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>
    <script type="text/javascript" src="js/jquery.mask.js"> </script>
    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
    <script src="javinha/javinha.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script>
       
        $(document).ready(function(){
        $("#cxdata").mask('0000-00-00');
        $(".cxcep").mask('00000-000');
        $("#cxtelefone").mask('0000-0000');
        $('#cxc').mask('000.000.000-00', {reverse: true} );
        $('#cxsus').mask('000 0000 0000 0000', {reverse: true} );
        $("#cxrg").mask('00.000.000-0', {reverse: true}) }); 
        
        </script>





</head>
<body onload="slide1_1()">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    
    
   <div id="area-cabecalho">
		<div id="area-logo1">
		<img src="img/img-card-destaque-rnds.png" width="auto" height="160px" class="pessoas1">
		<img src="img/img-logo-conect.png" class="logo-tipo">
		
		</div>
		<div id="area-menu">
			<a href="sus.php">Quem Somos</a>
			<a href="Login.php">Login</a>
			
		</div>
	</div>
	<div id="area-principal">	
		<div id="area-postagem1">
    <div id="menu"> 

    <form id="validate" method="POST"  action="Login1.php" enctype="multipart/form-data">
            <br/>
            <h1> Cadastre-se </h1>


            <input class="form-control" type="text" placeholder="Nome Completo" id="cxnome"
            onblur="vernome()" name="Nome"required><br/>

            <input type="text" id="cxresp1" 
            style="background-color:#fff;border:0" >
            <br/>

            <input class="form-control" type="text" placeholder="Data de nascimento" id="cxdata"
           class="cxdata" name="cxdata" onblur="veridade()" required><br/>

           <input type="text" id="cxresp3" 
           style="background-color:#fff;border:0">
        
            <br/>
            
            <input class="form-control" type="text" placeholder="Nome da Mãe" id="cxnome"
            onblur="vernome()" name="Nome_mae"required><br/>

            <input type="text" id="cxresp1" 
            style="background-color:#fff;border:0" >
            <br/>

           
           

            <input class="form-control" type="text" placeholder="CPF" id="cxc" class="cxc"
              class="cxcpf" name= "CPF" onblur="verc()" >
        
             
             <br/>

            <input type="text" id="cxresp7" 
            style="background-color:#fff;border:0">
            <br/>

            
           
            <input class="form-control" type="text" placeholder="E-mail" id="cxemail" 
            onblur="veremail()" onchange="voltar()" name="email"><br/>

            <input type="text" id="cxresp4" 
            style="background-color:#fff;border:0">
            <br/>

            
            <input class="form-control" type="text" placeholder="Endereço" id="cxendereco"
            onblur="vernascimento()" onfocus="voltar()"required name="Endereco"><br/>

            <input type="text" id="cxresp5" 
            style="background-color:#fff;border:0">
            <br/>
            
            <input class="form-control" type="text" name="CEP" placeholder="CEP" id="cxcep" class="cxcep"
             onblur="verrg()" ><br/>

            <input type="text" id="cxresp8" 
            style="background-color:#fff;border:0">
            <br/>
            
            <input class="form-control" type="text" placeholder="Telefone Fixo" id="cxtelefone" name="Telefone_fixo" class="cxtelefone"
             onblur="vertelefone()"><br/>

            <input type="text" id="cxresp910" 
            style="background-color:#fff;border:0">
            <br/>

            <input class="form-control" type="text" placeholder="Telefone Celular" id="cxtelefone" name="Telefone_celular" class="cxtelefone"
             onblur="vertelefone()"><br/>

            <input type="text" id="cxresp910" 
            style="background-color:#fff;border:0">
            <br/>

            <input class="form-control" type="text" placeholder="Senha" id="cxsenha" name="senha" class="cxsenha"
             onblur="vertelefone()"><br/>

            <input type="text" id="cxresp910" 
            style="background-color:#fff;border:0">
            <br/>
            <h3>Sexo </h3>
            
            <input type="radio" name="sexo" value="Feminino"> Feminino  </br>
            <input type="radio" name="sexo" value="Masculino"> Masculino
            
            </br>
            <br/>
            
            
            <h1>Perguntas: </h1>

          
             
          Você tem alguma doença respiratória?
          <select name="n1"class="form-select" aria-label="Default select example">
          <option value="Sim">Sim</option>
          <option value="Não">Não</option>
          </select> </br>
          </br>
          Os Anexos precisam comprovam o tipo de doença, sua gravidade.
          </br> </br>
          <label> Documentos médicos: <input type="file" name="image1"></label>
          <br><br>

          Você tem alguma doença Cardiovascular?
          <select  name="n2" class="form-select" aria-label="Default select example">
          <option value="Sim">Sim</option>
          <option value="Não">Não</option>
          </select> </br></br>
          Os Anexos precisam comprovam o tipo de doença, sua gravidade.
          </br> </br>
          <label>Documentos médicos:  <input type="file" name="image2"></label>
          <br><br>

          Tem alguma alergia?
          <select  name="n3" class="form-select" aria-label="Default select example">
          <option value="Sim">Sim</option>
          <option value="Não">Não</option>
          </select> </br></br>
          Os Anexos precisam comprovam o tipo de doença, sua gravidade.
          </br> </br>
          <label>Documentos médicos: <input type="file" name="image3"></label>
          <br><br>

          Você tem alguma doença Crônica?
          <select  name="n4" class="form-select" aria-label="Default select example">
          <option value="Sim">Sim</option>
          <option value="Não">Não</option>
          </select> </br></br>
          Os Anexos precisam comprovam o tipo de doença, sua gravidade.
          </br> </br>
          <label>Documentos médicos: <input type="file" name="image4"></label>
          <br><br>

          Se a resposta da pergunta anterior for sim, a quanto tempo você tem essa doença?
          <select  name="n5" class="form-select" aria-label="Default select example">
          <option value="3">3 meses</option>
          <option value="6">6 meses</option>
          <option value="1">1 ano</option>
          <option value="3">3 anos</option>
          </select> </br>
            

            <input type="submit" class="btn btn-outline-primary" name="Enviar" onclick="caixaresposta()" >
     <input type="reset" class="btn btn-outline-primary" value="Limpar"/> </form>
        </div>
    </br> 
    <script>
    
         
        $("#validate").validate({
        rules:{
        cxc:{
            required:true,
            minlength:11 
        },

    
    
        cxrg:{
            required:true,
            minlength:12
        },
        telefone:{
            required:true,
            minlength:8
        },
        cxdata:{
            required:true,
            
        },

    }
        
        });
    
    
    </script>
    
    
    

        </div>
		<div id="area-rodape">
			&copy;Todos os direitos reservados
			
		</div>
	</div>

</body>
</html>
    
           