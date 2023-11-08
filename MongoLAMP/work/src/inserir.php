<!DOCTYPE html>
<html lang="en">
    <?php
    include_once "conexao.php"
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display:flex;
            align-items: center;
            flex-direction: column;
        }
        form{
            display:flex;
            flex-direction: column;
            align-items: center;
            width:300px;
            height:200px;
            border: 1px;
            border-style: solid;
            border-color: black;
            gap:10px;
        }
        label{
            justify-content: left;
        }
    </style>
</head>
<body>
    <form action="inserir.php" method="post">
        <label for="">nome</label>
        <input type="text" name="name"><br>
        <label for="">idade</label>
        <input type="text" name="idade"><br>
        <input type="submit" value="Criar">
    </form>
    <?php

        if (isset($_POST["name"])&&isset($_POST["idade"])) {
            $objarr = [
                "name"=>"".$_POST["name"]."",
                "age"=>"".$_POST["idade"].""
            ];
            if($_POST["name"]&&$_POST["idade"]){
                $chamada = $colecao->users->insertOne($objarr);  
            }

        }
    ?>
</body>
</html>