<?php
    session_start();
    
    if(!isset($_SESSION["cadastros"])){
        echo "Não existem produtos para remover";
    }
    else{
       $id = $_REQUEST["id"];
       
        $cadastros =& $_SESSION["cadastros"];
        $cadastros[$id] = null;
  
  
 
        echo "Remoção efetuado com sucesso !" ;
  }
