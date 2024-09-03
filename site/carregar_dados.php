<?php
  require_once "validar.php";
  $arquivo = fopen('bd.info','r');

  $chamados = array();

  while(!feof($arquivo)){
    $registro = fgets($arquivo);
    if (strlen($registro)<3){
        continue;
    }
    $chamados[] = $registro;
  }
  fclose($arquivo);
?>