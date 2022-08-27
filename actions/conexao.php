<?php

$con = mysqli_connect("localhost", "root", "", "crud-php");

if(mysqli_connect_error()){
  echo "Erro ao conectar: " .mysqli_connect_error();  
}else {
  // echo "<b>Conectado com sucesso</b> <br /><br />";  
}

