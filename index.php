<?php
$acao = 'recuperar';
require 'tarefa_controller.php';
?>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>App Lista Tarefas</title>


    </head>

    <body>
        <nav >
            <div>
                <a href="#">
                    <img src="img/logo.png" width="30" height="30" alt="">
                    App Lista Tarefas
                </a>
            </div>
        </nav>

        <div>
            <div >
                <div >
                    <ul >
                        <li ><a href="#">Tarefas pendentes</a></li>

                        <li ><a href="nova_tarefa.php">Nova tarefa</a></li>
                        <li ><a href="todas_tarefas.php">Todas tarefas</a></li>
                    </ul>
                </div>

                <div >
                    <div >
                        <div >
                            <div >
                                <h4>Tarefas pendentes</h4>
                                <hr />

                                <div >
                                    <div >
                                        <?php
                                        foreach ($tarefas as $indice => $tarefa) {
                                            ?>
                                            <div>
                                                <?php
                                                if ($tarefa->status == "pendente") {
                                                    echo "$tarefa->tarefa";
                                                }
                                                ?>
                                            </div>

<?php } ?>

                                    </div>
                                    <div >

                                    </div>
                                </div>

                                <div >
                                    <h4> Tarefas realizadas</h4>
                                    <hr />
<?php
foreach ($tarefas as $indice => $tarefa) {
    ?>
                                        <div>
                                        <?php
                                        if ($tarefa->status == "realizado") {
                                            echo "$tarefa->tarefa";
                                        }
                                    }
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>