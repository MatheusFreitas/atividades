 session_start();
    
    if(isset($_SESSION["cadastros"])){
        $cadastro = $_SESSION["cadastros"];
        
        echo "<dl>";
        foreach($cadastro as $pessoa){
            $sexo = $pessoa["sexo"];
            $aceito = $pessoa["aceito"];
            $observacoes = $pessoa["observacoes"];
            
            if($pessoa != null){
                    echo "<dt class='$sexo'>" . $pessoa["nome"] . "</dt>";
                    echo "<dt>Sexo: " .  $sexo . "</dd>";
                    echo "<dt>Observacoes: " .  $observacoes . "</dd>";
                    echo "<dt>Aceita o contrato: ";
                    if($aceito){
                        echo "sim";
                    }
                    else{
                        echo "Não";
                    }
                    echo "</dd>";
                    
        
        }
      }
         echo "<dl>";
    }
    else {
        echo"Não existem pessoas cadastradas";
    }
   
