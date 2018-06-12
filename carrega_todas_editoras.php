<?php
require_once("conexao.php");
if (!$conn->connect_error){
	$sql = "SELECT cd_editora, nm_editora FROM tb_editora";
	$editoras = mysqli_query($conn,$sql);
}
?>