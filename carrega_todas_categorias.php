<?php
require_once("conexao.php");
if (!$conn->connect_error){
	$sql = "SELECT cd_categoria, nm_categoria FROM tb_categoria";
	$categorias = mysqli_query($conn,$sql);
}
?>