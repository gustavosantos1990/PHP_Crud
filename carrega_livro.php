<?php

$operacao = $_GET['operacao'];

echo "<script>console.log('Operação: ' + " . $operacao . ");</script>";


$cd_livro = null;
$nm_livro = null;
$cd_categoria = null;
$cd_editora = null;
$nr_paginas = null;
$cd_autor = null;
$isbn_livro = null;

switch ($operacao) {
 	case 1: //Novo registro
 		# code...
 	break;

 	case 2: //Editar registro
 	require_once("conexao.php");
 	if (!$conn->connect_error){

 		$id = $_GET['id'];
 		echo "<script>console.log('Id: ' + " . $id . ");</script>";
 		
 		$sql = "SELECT cd_livro, nm_livro, cd_categoria, cd_editora, nr_paginas, cd_autor, nm_imagem, isbn_livro FROM tb_livro WHERE cd_livro = " . $id;
 		$result = mysqli_query($conn,$sql);
 		//if ($result->num_rows > 0) {
 		while($row = $result->fetch_assoc()) {
 			$cd_livro = $row["cd_livro"];
 			$nm_livro = $row["nm_livro"];
 			$cd_categoria = $row["cd_categoria"];
 			$cd_editora = $row["cd_editora"];
 			$nr_paginas = $row["nr_paginas"];
 			$cd_autor = $row["cd_autor"];
 			$isbn_livro = $row["isbn_livro"];
 		}
 		// echo "cd_livro: " . $cd_livro . "<br/>";
 		// echo "nm_livro: " . $nm_livro . "<br/>";
 		// echo "cd_categoria: " . $cd_categoria . "<br/>";
 		// echo "cd_editora: " . $cd_editora . "<br/>";
 		// echo "nr_paginas: " . $nr_paginas . "<br/>";
 		// echo "cd_autor: " . $cd_autor . "<br/>";
 		// echo "isbn_livro: " . $isbn_livro . "<br/>";
 		//}
 	}
 	break;

 } 



 ?>