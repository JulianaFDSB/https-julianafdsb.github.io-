<?php ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/cadastro.css">
	<title>Formulário</title>
</head>

<body>
	<div class="container">
		<div class="form-image">
			<img src="assets/img/If1-removebg-preview.png" alt="">
		</div>
	<div class="form">
		<form action="usuario.php" method="post">
		<div class="form-header">
			<div class="title">
				<h1>Cadastre-se</h1>
			</div>
			
		</div>

		<div class="input-group">
			<div class="input-box">
				<label for="firstname">Primeiro Nome</label>
				<input id="firstname" type="text" name="firstname" placeholder="Digite seu primeiro nome" required>
			</div>

			<div class="input-box">
				<label for="lastname">Sobrenome</label>
				<input id="lastname" type="text" name="lastname" placeholder="Digite seu sobrenome" required>
			</div>
			<div class="input-box">
				<label for="email">E-mail</label>
				<input id="email" type="email" name="email" placeholder="Digite seu e-mail">
			</div>

			<div class="input-box">
				<label for="number">GU + Prontuario</label>
				<input id="number" type="text" name="number" placeholder="Digite seu prontuário" required>
			</div>

			<div class="input-box">
				<label for="password">Senha</label>
				<input id="password" type="password" name="password" placeholder="Digite sua senha" required>
			</div>


			<div class="input-box">
				<label for="confirmPassword">Confirme sua Senha</label>
				<input id="confirmPassword" type="password" name="confirmPassword" placeholder="Digite sua senha novamente" required>
			</div>

		</div>

		<div class="gender-inputs">
			<div class="gender-title">
			<h6>Corpo Acadêmico</h6>
			</div>

			<div class="gender-group">
				<div class="gender-input">
				<input id="female" type="radio" name="corpo" value="Docente">
				<label for="female">Docente</label>
			</div>

			<div class="gender-input">
				<input id="male" type="radio" name="corpo" value="Discente">
				<label for="male">Dicente</label>
			</div>
				
			<div class="continue-button">
				<button><a href="index.php">Entrar</a></button>
			</div>
				
			<div class="continue-button">
				<button type="submit">Enviar</button>
			</div>

		</div>

		</div>
		</form>
	</div>
	</div>
</body>

</html>
