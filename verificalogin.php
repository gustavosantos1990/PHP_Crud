<?php
require_once("connection.php");
$usuario = $_POST['txtusuario'];
$senha = $_POST['txtsenha'];
//echo "<script>console.log('Usuario: $usuario Senha: $senha');</script>";

$sql = "SELECT * FROM users WHERE user = '$usuario' AND password = '$senha'";

$result = mysqli_query($conn,$sql);

if ($result){
	$dados = mysqli_fetch_array($result);

	$username = $dados["name"];
	session_start();

	$_SESSION['username'] = $username;
	$_SESSION['logado'] = true;
	$result->close();
	header('Location:home.php');
}else{
	header('Location:index.php');
	//echo "<script>alert('Usuário ou senha não encontrados!');</script>";
}

?>