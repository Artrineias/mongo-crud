<!DOCTYPE html>
<html lang="en">
    <?php
    require_once "conexao.php";
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
    <form action="update.php" method="post">
        <label for="">Nome</label>
        <input type="text" name="name"><br>
        <label for="">Idade</label>
        <input type="text" name="idade"><br>
        <input type="submit" value="Alterar">
    </form>
    <?php

        $objarr = [
            "name"=>"".$_POST["name"].""
        ];
        if (isset($_POST["idade"])) {
            if($_POST["idade"]){
                $chamada = $colecao->users->updateOne(
                $objarr,['$set'=>["age" => "".$_POST["idade"].""]]
            );  
            echo "idade alterado.<br>";
            }
        }
    ?>
</body>
</html>