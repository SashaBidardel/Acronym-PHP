<?php
  function getAcroym(){
  if (isset($_POST["btn"])){
    $texto=trim($_POST["text"]);
    $resultado="";
    $frase = explode(" ", $texto);
    
    foreach ($frase as &$valor){
        $resultado=$resultado.substr($valor,0,1);
    }
    echo strtoupper($resultado);
    }
} 
   
?>  