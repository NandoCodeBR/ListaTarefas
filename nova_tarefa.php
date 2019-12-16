<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App Lista Tarefas</title>

	
	</head>

	<body>
		<nav>
			<div>
				<a href="#">
					<img src="img/logo.png" width="30" height="30"  alt="">
					App Lista Tarefas
				</a>
			</div>
		</nav>

		<div >
			<div>
				<div >
					<ul >
						<li><a href="index.php">Tarefas pendentes</a></li>
						<li><a href="#">Nova tarefa</a></li>
						<li><a href="todas_tarefas.php">Todas tarefas</a></li>
					</ul>
				</div>

				<div >
					<div >
						<div >
							<div>
								<h4>Nova tarefa</h4>
								<hr />

								<form method="POST" action="tarefa_controller.php">
									<div >
										<label>Descrição da tarefa:</label>
										<input type="text"  placeholder="Exemplo: Lavar o carro" name="tarefa">
									</div>

									<input type="submit" value="Cadastrar">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>