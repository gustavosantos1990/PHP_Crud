<?php
require_once("conexao.php");
$nomecategoria = $_POST['txtnomecategoria'];

$sql = "INSERT INTO tb_categoria (nm_categoria) values ('$nomecategoria')";

$query = mysqli_query($conn,$sql);

if ($query){
	echo "<script type='text/javascript'>alert('Cadastrado com sucesso!');window.location.href = 'categoria_cad.php';</script>";
}else{
	echo "<script type='text/javascript'>alert('Erro ao cadastrar...');window.location.href = 'categoria_cad.php';</script>";
}

?>