	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Contatos</a>

		<div class=" navbar-collapse" >
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li <?php if ($currentPage == "home"){echo "class='nav-item active'";}else{echo "class='nav-item'";}?>>
					<a class="nav-link" href="home.php">Home</a>
				</li>
				<li <?php if ($currentPage == "contacts"){echo "class='nav-item active'";}else{echo "class='nav-item'";}?>>
					<a class="nav-link" href="contacts.php">Contatos</a>
				</li>
			</ul>

			<div class="mr-auto mt-2 mt-lg-0">
				<p><?php $username = $_SESSION['username'];?></p>
			</div>
			<a class="nav-link btn btn-danger" href="fechar.php">Sair</a>

		</div>
	</nav>