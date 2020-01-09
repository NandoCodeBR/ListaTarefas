<?php
$acao = 'recuperar';
require 'tarefa_controller.php';
?>

<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>App Lista Tarefas</title>
        <link rel="stylesheet" href="css/Model.css">

        <script>
            function editar(id, txt_tarefa){
                let form = document.createElement('form')
                form.action = 'tarefa_controller.php?acao=atualizar';
                form.method = 'POST';
                
                let inputTarefa = document.createElement('input')
                inputTarefa.type = 'text';
                inputTarefa.name = 'tarefa';
                inputTarefa.id = 'EditaInput';
                inputTarefa.value = txt_tarefa
                
                let inputId = document.createElement('input')
                inputId.type = 'hidden'
                inputId.name = 'id'
                inputId.value = id


                
                
                
                let button = document.createElement('button')
                button.type = 'submit';
                button.innerHTML = 'Salvar'
                
                form.appendChild(inputTarefa)
                form.appendChild(inputId)
                form.appendChild(button)
                

                let tarefa = document.getElementById("tarefa_"+id)
                tarefa.innerHTML = ''
              
                tarefa.insertBefore(form,tarefa[0])
            }
                
                function deletar(id, txt_tarefa){
                let formD = document.createElement('form')
                formD.method = 'POST'
                formD.action = 'tarefa_controller.php?acao=deletar'
                
                let inputIdDeletar = document.createElement('input')
                inputIdDeletar.type = 'hidden'
                inputIdDeletar.name = 'idDel'
                inputIdDeletar.value = id
                
                let btnDeletar = document.createElement('button')
                btnDeletar.type = 'submit'
                btnDeletar.innerHTML = 'Deseja deletar?'
                
                let lblTarefa = document.createElement('label')
                lblTarefa.value = txt_tarefa
                lblTarefa.innerText = txt_tarefa
                
                
                formD.appendChild(inputIdDeletar);
                formD.appendChild(btnDeletar);
                formD.appendChild(lblTarefa);
                
                let tarefa = document.getElementById("tarefa_"+id)
                tarefa.innerHTML = ''
                
                tarefa.insertBefore(formD,tarefa[0])

                
             
                }
                function confirmar(id, txt_tarefa){
                let formC = document.createElement('form')
                formC.action = 'tarefa_controller.php?acao=confirmar';
                formC.method = 'POST';
                

                
                let inputIdC = document.createElement('input')
                inputIdC.type = 'hidden'
                inputIdC.name = 'id'
                inputIdC.value = id


                
                
                
                let buttonC = document.createElement('button')
                buttonC.type = 'submit';
                buttonC.innerHTML = 'Deseja Confirmar?'
                
                formC.appendChild(inputIdC)
                formC.appendChild(buttonC)
                

                let tarefaC = document.getElementById("tarefa_"+id)
                tarefaC.innerHTML = ''
              
                tarefaC.insertBefore(formC, tarefaC[0])
                }
                
                
       </script>
       
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
        <?php if (isset($_GET['alteracao']) && ($_GET['alteracao'] == 1)) { ?>
                    <div>
                        <h3>Alterado com sucesso! </h3>
                    </div>
                    <?php
                }
                ?>
        <?php if (isset($_GET['exclusao']) && ($_GET['exclusao'] == 1)) { ?>
                    <div>
                        <h3>Deletado com sucesso! </h3>
                    </div>
                    <?php
                }
                ?>
                <?php if (isset($_GET['confirma']) && ($_GET['confirma'] == 1)) { ?>
                    <div>
                        <h3>Tarefa Concluída! </h3>
                    </div>
                    <?php
                }
                ?>
        <h4>Todas tarefas</h4>

        <?php foreach ($tarefas as $indice => $tarefa) { ?>
            <div>
                <?php
                if ($tarefa->status=="pendente") {

                
                ?>
                <div id="tarefa_<?= $tarefa->id?>" class="divPendente">
                    <?php
                    echo "$tarefa->tarefa ($tarefa->status)";
                    ?>
                    <br>
                    <button onclick="editar(<?= $tarefa->id?>, '<?= $tarefa->tarefa ?>')">Editar</button>
   
                    <button onclick="deletar(<?= $tarefa->id?>, '<?= $tarefa->tarefa ?>')">Deletar</button>
                    <button onclick="confirmar(<?= $tarefa->id?>, '<?= $tarefa->tarefa ?>')">Confluir Tarefa</button>
                 

                </div>
                <?php } else if ($tarefa->status=="realizado") {
                    ?>
                    <div id="tarefa_<?= $tarefa->id?>" class="divRealizado">
                    <?php
                    echo "$tarefa->tarefa ($tarefa->status)";
                    ?>
                    <br>
                    <button onclick="editar(<?= $tarefa->id?>, '<?= $tarefa->tarefa ?>')">Editar</button>
                    
                    <button onclick="deletar(<?= $tarefa->id?>, '<?= $tarefa->tarefa ?>')">Deletar</button>
                 

                </div>
                <?php } ?>


            </div>
        </div>
    <?php } ?>




</div>
</body>
</html>