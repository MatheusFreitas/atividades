<body>
        <?php
            require_once("menu.php");
        ?>    
        <form action="remover.php" method="post">
            <label>Digite o código do produto para remover:</label>
            <br/>
            <input type="text" name="id" />
            <input type="submit" value="Remover" />
        </form>
    </body>
<html>

<?php
    require_once("menu.php");

    session_start();
    
    if(isset($_SESSION["cadastros"])){
        
        $cadastro = $_SESSION["cadastros"];
        
        foreach($cadastro as $id => $pessoa){
            if($pessoa != null){
                 echo "[$id] => " . $pessoa["nome"] . "<br/>";
            }
        }  
    }
    else{
        echo "Não existem produtos cadastradas";
    }
    
    
?>
