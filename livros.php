<?php
require_once('verificasessao.php');
$title = 'Livros - SisBiblio';
$currentPage = 'livros';
include('head.php');
include('navbar.php');
?>

<div class="jumbotron">
	<h3>LIVROS</h3>
</div>
<?php

echo "<table class='table'  style='margin-left: 50px; margin-right: 50px; width: 80%;'>";
echo "	<thead class='thead-dark'>";
echo "		<tr>";
echo "			<th style='width: 20px'>ID</th>";
echo "			<th>Nome</th>";
echo "			<th style='width: 15px'></th>";
echo "			<th style='width: 15px'><button class='btn btn-success'><a href='livro_cad.php?operacao=1' style='text-decoration: none; color: white;'>Novo Livro</a></button></th>";
echo "		</tr>";
echo "	</thead>";
echo "<tbody>";
require_once("conexao.php");
if (!$conn->connect_error){
	$sql = "SELECT cd_livro, nm_livro FROM tb_livro";
	$result = mysqli_query($conn,$sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row["cd_livro"]. "</td><td>" . $row["nm_livro"]. " </td>
			<td style='text-align: right;'>
			<a href='livro_cad.php?operacao=2&id=" .  $row["cd_livro"] . "'><i class='fas fa-edit'></i></a>
			</td>
			<td style='text-align: right;'>
			<a href='delete_editora.php?id=" .  $row["cd_livro"] . "'><i style='color: red;' class='fas fa-trash'></i></a>
			</td>
			</tr>";
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