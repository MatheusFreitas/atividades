<html>
    <head>
        <title>Cadastro do produtos</title>
    </head>
    <body>
        <?php
            require_once("menu.php");
        ?>    
        <form action="editar.php" method="post">
            <label>Digite o codigo do produtos para editar:</label>
            <br/>
            <input type="text" name="id" />
            <br/>
            <label>digite o novo nome do produto:</label>
            <br/>
            <?php require_once("campos_produtos.php"); ?>
            <input type="submit" value="editar" />
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
