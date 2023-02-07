<?php

    $NavBar = ['Zeta'=>'Empresa', 'Sobre nós'=>'Tudo sobre a gente' , 'Nossas soluções'=>'Tudo que a gente faz' , 'Contato'=>'número 993829173']

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Zeta corp.</title>
        <meta charset="utf-8">
        <style type="text/css">
            body{
                background-color: rgba(0, 107, 207, 0.493);
            }
            header{
                background-color: rgba(255, 255, 255, 0.493);
                border-radius: 90%;
                margin-left: 550px;
                margin-right: 550px;
                padding: 40px 10px;
                text-align: center;
                font-size: 25px;
            }
            a{
                color: black;
                margin: 0 25px;
            }
        </style>
    </head>
    <body>
        <header>
            <?php
                foreach($NavBar as $key => $value){
                    echo '<a href="?page='.$key.'">'.ucfirst($key).'</a>';
                }
            ?>
        </header>

        <h1>
            <?php
                $PagAtual = (isset($_GET['page']) ? $_GET['page'] : 'Zeta');
                if(!array_key_exists($PagAtual, $NavBar)){
                    $PagAtual = 'Zeta';
                }
                echo ucfirst($PagAtual);
            ?>
        </h1>
        <h2>
            <?php
                echo $NavBar[$PagAtual]
            ?>
        </h2>
    </body>
</html>