<?php
$acao = 'recuperar';
require 'tarefa_controller.php';

?>

<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App Lista Tarefas</title>

		<li
	</head>

	<body>
		<nav >
			<div >
				<a href="#">
					<img src="img/logo.png" width="30" height="30" alt="">
					App Lista Tarefas
				</a>
			</div>
		</nav>

		<div>
					<ul >
                                        <li ><a href="index.php">Tarefas pendentes</a></li>
					<li ><a href="nova_tarefa.php">Nova tarefa</a></li>
					<li><a href="#">Todas tarefas</a></li>
					</ul>
                            </div>

                            <div>
				<h4>Todas tarefas</h4>
                                
                                <?php foreach ($tarefas as $indice =>$tarefa) { ?>
                                <div>
						<div>
                                                    <?php
                                                    echo "$tarefa->tarefa ($tarefa->status)";
                                                    ?>
                                                    </div>
		
						</div>
					</div>
                                <?php } ?>
					
								
						
			
		</div>
	</body>
</html>