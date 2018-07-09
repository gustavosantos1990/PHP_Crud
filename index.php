<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="Gustavo Santos" content="PHP CRUD">

	<title>Contatos</title>

	<!-- Bootstrap core CSS -->
	<link href="lib/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="lib/css/signin.css" rel="stylesheet">
	<link href="lib/css/style.css" rel="stylesheet">
</head>

<body class="text-center">
	<form class="form-signin" action="verificalogin.php" method="POST">
		<img class="mb-4" src="images/logo.png" alt="" width="150" height="150">
		<h1 class="h3 mb-3 font-weight-normal">Contatos</h1>
		<label for="inputUsuario" class="sr-only">Usuário</label>
		<input type="text" id="inputUsuario" name="txtusuario" class="form-control" placeholder="Usuário" required autofocus>
		<label for="inputPassword" class="sr-only">Senha</label>
		<input type="password" id="inputPassword" class="form-control" name="txtsenha" placeholder="Senha" required>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
		<p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
	</form>
</body>
</html>