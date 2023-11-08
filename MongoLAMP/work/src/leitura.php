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
        *{
            margin:0px 0px 0px 0px ;
            padding:0px;
        }
        body{
            height: 100vh;
            width: 100vw;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 50px;
        }
        div {
            height: 400px;
            width: 500px;
            border: 1px;
            border-style: solid;
            border-color: black;
        }
        form{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100px;
            width: 500px;
            border: 1px;

            border-style: solid;
            border-color: black;
            gap:15px
        }
        h3,h5{
            text-align: center;
        }
    </style>
</head>

<body>
    <form action="leitura.php" method="post">
        <label for="">CPF</label>
        <input type="text" name="name">
        <button>buscar</button>
    </form>
    <div>
        <?php
        
            $objarr = [
                "name"=>"".$_POST["name"].""
            ];
            $chamada = $colecao->users->find($objarr);

            foreach($chamada as $cosulta){}
            
            if (isset($cosulta->name)) {
                echo "<h3>Nome: " . $cosulta->name . "</h3>";
            }

            
            if (isset($cosulta->age)) {
                echo "<h3>Idade: " . $cosulta->age . "</h3>";
            }

        ?>

    </div>
</body>

</html>