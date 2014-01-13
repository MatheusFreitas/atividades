<?php
    session_start();
    
    if(!isset($_SESSION["cadastros"])){
        echo "Não existem produtos para editar";
    }
    else{
       $id = $_REQUEST["id"];
       $nome = $_REQUEST["nome"];
       $produtos = $_REQUEST["produtos"];
       $observacoes = $_REQUEST["observacoes"];
       $sexo = $_REQUEST["sexo"];
       
        $aceito = false;
        if(isset($_REQUEST["aceito"])){
        $aceito = true;
  }
       
       $pessoa = array();
       $pessoa["nome"] = $nome;
       $pessoa["produtos"] = $sexo;
       $pessoa["aceito"] = $aceito;
       $pessoa["observacoes"] = $observacoes;
       $pessoa["sexo"] = $sexo;
       
        $cadastros =& $_SESSION["cadastros"];
        
