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
    <form action="delete.php" method="post">
        <label for="">Nome que ira deletar</label>
        <input type="text" name="name"><br>
        <input type="submit">
    </form>
    <?php

        if (isset($_POST["name"])) {
            $objarr = [
                "name"=>"".$_POST["name"].""
            ];
            if($_POST["name"]){
                $chamada =$colecao->users->deleteOne($objarr);  
            echo "Cliente deletado.<br>";
            }
        }
    ?>
</body>
</html>