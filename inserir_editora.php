<?php
require_once("conexao.php");
$nomeeditora = $_POST['txtnomeeditora'];

$sql = "INSERT INTO tb_editora (nm_editora) values ('$nomeeditora')";

$query = mysqli_query($conn,$sql);

if ($query){
	echo "<script type='text/javascript'>alert('Cadastrado com sucesso!');window.location.href = 'editora_cad.php';</script>";
}else{
	echo "<script type='text/javascript'>alert('Erro ao cadastrar...');window.location.href = 'editora_cad.php';</script>";
}

?>