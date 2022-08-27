<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listar Funcionário</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  </head>
  <body>

  <nav class="navbar navbar-dark bg-dark mb-5">
    <div class="container-md">
      <a class="navbar-brand" href="../index.html">Adicionar</a>
    </div>
  </nav>
    
  <?php
    require '../actions/conexao.php';
    $sql_select_func = "select * from funcionario";
    $result_sql_select_func = mysqli_query($con, $sql_select_func);
  ?>

    <div class="d-flex justify-content-center">
      <div class="col col-lg-6">
        <table class="table table-striped" aria-describedby="Listagem de funcionários" >
          
          <thead>
            <tr class="table-primary">
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Rg</th>
              <th scope="col">Deletar</th>
              <th scope="col">Editar</th>
            </tr>
          </thead>
          <tbody>

            <?php
              while ($dados = mysqli_fetch_assoc($result_sql_select_func)){
            ?>

            <tr>
              <th scope="row"><?php echo $dados['id_funcionario']; ?></th>
              <td><?php echo $dados['nome_funcionario']; ?></td>
              <td><?php echo $dados['rg_funcionario']; ?></td>

              <td>
                <a href="../actions/excluir_Funcionario.php?id=<?php echo $dados['id_funcionario']?>">
                  <span class="material-symbols-outlined">delete</span>
                </a>
              </td>

              <td>
                <a href="../pages/frm_alterarFuncionario.php?id=<?php echo $dados['id_funcionario']?>">
                  <span class="material-symbols-outlined">
                    edit_note                  
                  </span>
                </a>
              </td>
            </tr>
            
            <?php
              }
            ?>

          </tbody>
        </table>
      </div>
    </div>
        
  </body>
</html>