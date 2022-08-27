<?php

require 'conexao.php';

$id_funcionario = $_POST['id_funcionario'];
$nome_funcionario = $_POST['nome_funcionario'];
$rg_funcionario = $_POST['rg_funcionario'];

$sql_update_func = "update funcionario set nome_funcionario = '$nome_funcionario', rg_funcionario = '$rg_funcionario'" 
  . " where id_funcionario= $id_funcionario";

$result_sql_update_func = mysqli_query($con, $sql_update_func);

if($result_sql_update_func = 1) {
  header("Location: ../pages/listar_Funcionario.php");
}else {
  echo "Falha ao alterar cadastro";  
}