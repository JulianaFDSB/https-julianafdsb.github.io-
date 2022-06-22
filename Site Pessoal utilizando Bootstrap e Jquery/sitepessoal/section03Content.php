<html>
<head>

	<meta charset="utf-8">
	<title>Site Pessoal</title>
	
	
</head>
<body>

<div id= "autent">

<br><br>
<hr color="#000000">
<h1 align="center">AUTENTICAÇÃO</h1>
<hr color="#000000">

<center>
<form id="frmLogin"><br><br>
	User:  <input type="text" name="user" ><br><br>
	Senha: <input type="password" name="pass"><br><br>
	<input type="button" id="btnEnviar" value="Enviar">
	
</form>
</center>
</div>





<script type="text/javascript">
	$(document).ready(function() {
		$("#btnEnviar").click(function() {
			var url   = "section04Content.php";
			var dados = $("#frmLogin").serialize();
			$.post( url, dados, function( responseText ) {
				// $("#sct02" ).html( responseText );
				var objResponse = JSON.parse( responseText );
				var outText = "Status da Autenticação:"+objResponse.login+"<br>"+"Mensagem:"+objResponse.message;  
				$("#sct02" ).html( outText);
				console.log( objResponse );
			} );
		});
	});
</script>




</body>
</html>