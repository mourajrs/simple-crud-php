<?php

require '../actions/conexao.php';

$id_funcionario = $_GET['id'];

$sql_delete_func = "delete from funcionario where id_funcionario = $id_funcionario";

$result_sql_delete_func = mysqli_query($con, $sql_delete_func);

if($result_sql_delete_func == 1){
  header("Location:../pages/listar_Funcionario.php");
}else{
  echo "Erro ao deletar funcionario: " .$id_funcionario;
}