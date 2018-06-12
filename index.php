
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>SisBiblio - Sistema Bibliotecário</title>
	<meta charset="utf-8">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="lib/css/login_biblio.css">

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="imagens/icones/livro.png">

</head>
<body class="bg_login">
	<section class="login">
		<div class="imagem_login">
			<img class="img_login" src="imagens/sisbiblio_transp.png" alt="SisBiblio" title="Logomarca Sistema Bibliotecário">
		</div>

		<form action="verificalogin.php" method="POST" class="form_login">
			<input type="email" name="txtusuario" placeholder="Digite aqui seu email" required="true">
			<input type="password" name="txtsenha" placeholder="Digite aqui sua senha" required="true">
			<button >Acessar</button>
			<a class="senha" href="">Recuperar senha?</a>
		</form>
	</section>

</body>
</html>