<?php
$acao = 'recuperar';
require 'tarefa_controller.php';
?>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>App Lista Tarefas</title>
        <link rel="stylesheet" href="css/Model.css">
 
   
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
                <div>
                    <ul class="nav-tabs nav">
                        <li class="nav-item"><a class="nav-link active" href="#" active>Tarefas pendentes</a></li>

                        <li class="nav-item"><a class="nav-link" href="nova_tarefa.php">Nova tarefa</a></li>
                        <li class="nav-item"><a class="nav-link" href="todas_tarefas.php">Todas tarefas</a></li>
                    </ul>
                </div>

                <div >
                    <div >
                        <div >
                            <div >
                                <h4>Tarefas pendentes</h4>
                               

                                <div >
                                    <div >
                                        <?php
                                        foreach ($tarefas as $indice => $tarefa) {
                                            ?>
                                            <div>
                                                <?php
                                                if ($tarefa->status == "pendente") {
                                                    ?>
                                                <div class="text-danger">
                                                
                                                    <?php
                                                    echo "$tarefa->tarefa";
                                                  ?>
                                                </div>
                                                <?php
                                                }
                                                ?>
                                              
                                            </div>
                                            

<?php } ?>

                                    </div>
                                    <hr class="bg-secondary">
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
                                                    ?>
                                                <div style="color: green ">
                                                    <?php
                                                    echo "$tarefa->tarefa";
                                                  ?>
                                                </div>
                                                <?php
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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    </body>
</html>