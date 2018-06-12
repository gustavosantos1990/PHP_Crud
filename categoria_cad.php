<?php
require_once('verificasessao.php');
$title = 'Categorias - SisBiblio';
$currentPage = 'categorias';
include('head.php');
include('navbar.php');
?>

<div class="jumbotron">
	<h3>Cadastro de Categoria</h3>
	<br/>
	<form method="post" action="inserir_categoria.php">
		<label for="nomecategoria">Nome</label>
		<input id="nomecategoria" class="form-control" type="text" name="txtnomecategoria" required="true">
		<hr/>
		<input class="btn btn-primary" type="submit" name="enviar">
	</form>
</div>

<?php

echo "<table class='table'  style='margin-left: 50px; margin-right: 50px; width: 80%;'>";
echo "	<thead class='thead-dark'>";
echo "		<tr>";
echo "			<th style='width: 20px'>ID</th>";
echo "			<th>Nome</th>";
echo "			<th style='width: 15px'></th>";
echo "			<th style='width: 15px'></th>";
echo "		</tr>";
echo "	</thead>";
echo "<tbody>";
require_once("conexao.php");
if (!$conn->connect_error){
	$sql = "SELECT cd_categoria, nm_categoria FROM tb_categoria";
	$result = mysqli_query($conn,$sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row["cd_categoria"]. "</td><td>" . $row["nm_categoria"]. " </td><td><a href='#'><i class='fas fa-edit'></i></a></td><td><a href='#'><i class='fas fa-trash'></i></a></td></tr>";
		}
	} else {
		echo "<tr><td> -- </td><td>Sem dados para apresentar...</td></tr>";
	}
}
$conn->close();
echo "	</tbody>";
echo "</table>";
?>


<br/>
<br/>

<?php include('footer.php'); ?>