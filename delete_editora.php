<?php
require_once("conexao.php");
$id = $_GET["id"];

if ($id != null){

	$sql = "DELETE FROM tb_livro WHERE cd_livro =" . $id;

	$query = mysqli_query($conn,$sql);

	if ($query){
		echo "<script type='text/javascript'>alert('Deletado com sucesso!');window.location.href = 'livros.php';</script>";
	}else{
		echo "<script type='text/javascript'>alert('Erro ao deletar...');window.location.href = 'livros.php';</script>";
	}
}
?>