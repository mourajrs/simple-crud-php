<?php

require '../actions/conexao.php';

$nome_funcionario = $_POST['nome_funcionario'];
$rg_funcionario = $_POST['rg_funcionario'];

$sql_insert = "insert into funcionario (nome_funcionario, rg_funcionario) values ('$nome_funcionario', '$rg_funcionario')";

$result_sql_insert = mysqli_query($con, $sql_insert);

if($result_sql_insert == 1){  
  header("location: ../pages/listar_Funcionario.php");
}else {
  echo "Erro ao cadastrar funcionário";
}