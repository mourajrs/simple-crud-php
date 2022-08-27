<?php

  require '../actions/conexao.php';

  $id = $_GET['id'];

  $sql_buscar_func = "select * from funcionario where id_funcionario = $id";

  $result_sql_buscar_func = mysqli_query($con, $sql_buscar_func);

  $dados = mysqli_fetch_assoc($result_sql_buscar_func);

  $id_funcionario = $dados['id_funcionario'];
  $nome_funcionario = $dados['nome_funcionario'];
  $rg_funcionario = $dados['rg_funcionario'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="global.css"/>

  <title>Alterar Funcionário</title>
</head>
<body>
  <nav class="navbar navbar-dark bg-dark mb-5">
    <div class="container-md">
      <a class="navbar-brand" href="index.html">Cadastrar Funcionário</a>  
      <a class="navbar-brand" href="listar_Funcionario.php">Listar Funcionário</a>      
    </div>
  </nav>

  <div class="d-flex justify-content-center">
    <form action="../actions/alterar_Funcionario.php" class="d-flex row justify-content-center" method="POST">

      <div class="d-flex row mb-3 p-0">
        <label for="id" class="label mb-1">ID</label>
        <input class="form-control" readonly type="text" value="<?php echo $id_funcionario ?>" name="id_funcionario">
      </div>

      <div class="d-flex row mb-3 p-0">
        <label for="nome" class="label mb-1">Nome</label>
        <input class="form-control" type="text" value="<?php echo $nome_funcionario ?>" name="nome_funcionario">
      </div>
      
      <div class="d-flex row mb-3 p-0">
        <label for="rg" class="label mb-1"> Rg</label>
        <input class="form-control" type="text" value="<?php echo $rg_funcionario ?>" name="rg_funcionario">
      </div>
      
      <input type="submit" class="btn btn-primary" value="Alterar">
      
    </form>
  </div>

</body>
</html>

