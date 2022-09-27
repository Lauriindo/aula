<?php   
$titulo = $_GET["title"];
$conteudo = $_GET["content"];
$autor = $_GET["autor"];
if($titulo == "" ){
    echo "ALERTA Titulo não preenchido";
}
elseif 
($conteudo == ""){
    echo "ALERTA Conteúdo não preenchido";
}
elseif 
($autor == ""){
    echo "ALERTA Autor não preenchido";
}
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title></title>
</head>
<body  style= text-align: center;>
    <header></header>
    <section>
        <div class='um'>
        <?php
            echo "Título:".$titulo. "<br>";
            echo "Conteúdo:". $conteudo. "<br>";        
        ?>
        </div class ='um'>
    </section>
    <section>
        <div class='autor'>
            <?php 
                echo "Autor:". $autor."<br>";            
            ?>
        </div class ='autor'>
        
    </section>
    
</body>
</html>
