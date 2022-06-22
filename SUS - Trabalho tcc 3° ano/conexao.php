<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "saudegru";
//Criar a conexão 
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
// checar conexão
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }




?>