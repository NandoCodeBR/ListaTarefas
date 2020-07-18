<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>App Lista Tarefas</title>   
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/Model.css"> 
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
                <ul class="nav-tabs nav">
                        <li class="nav-item"><a class="nav-link" href="index.php" active>Tarefas pendentes</a></li>

                        <li class="nav-item"><a class="nav-link active" href="#">Nova tarefa</a></li>
                        <li class="nav-item"><a class="nav-link" href="todas_tarefas.php">Todas tarefas</a></li>
                    </ul>
                </div>
                <?php if (isset($_GET['inclusao']) && ($_GET['inclusao'] == 1)) { ?>
                    <div>
                        <h5>Inclusão Feita com sucesso! </h5>
                    </div>
                    <?php
                }
                ?>


                <div >

                    <h4>Nova tarefa</h4>
                    <hr />

                    <form method="POST" action="tarefa_controller.php?acao=inserir">
                        <div >
                            <label>Descrição da tarefa:</label>
                            <input type="text"  placeholder="Exemplo: Lavar o carro" name="tarefa">
                        </div>

                        <input type="submit" value="Cadastrar" class="cadastro btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    </body>
</html>