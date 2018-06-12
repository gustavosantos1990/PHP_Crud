<?php
require_once('verificasessao.php');
$title = 'Editoras - SisBiblio';
$currentPage = 'editoras';
include('head.php');
include('navbar.php');
?>

<div class="jumbotron">
	<h3>Cadastro de Editora</h3>
	<br/>
	<form method="post" action="inserir_editora.php">
		<label for="nomeeditora">Nome</label>
		<input id="nomeeditora" class="form-control" type="text" name="txtnomeeditora" required="true">
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
	$sql = "SELECT cd_editora, nm_editora FROM tb_editora";
	$result = mysqli_query($conn,$sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row["cd_editora"]. "</td><td>" . $row["nm_editora"]. " </td><td><a href='#'><i class='fas fa-edit'></i></a></td><td><a href='#'><i class='fas fa-trash'></i></a></td></tr>";
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