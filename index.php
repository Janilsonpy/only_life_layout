<?php

$valor = 850;
$percent = $valor * 15 / 100;
echo " Vai receber 15% de".$valor." que � ".$percent;

 function porcentagem($valor,$percent){
  $mensagem = " Vai receber 15% de".$valor." que � ".$percent;
  return $mensagem.$valor * $percent / 100;
 }

 porcentagem(850,15);
?>