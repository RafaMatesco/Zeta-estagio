<?php

    $NavBar = ['Zeta'=>'Empresa', 'Sobre nós'=>'Tudo sobre a gente' , 'Nossas soluções'=>'Tudo que a gente faz' , 'Contato'=>'número 993829173'];
    $drop = ['quem somos'=>'Quem a gente é?', 'missão e valores'=>'missão teste'];

?>

<!DOCTYPE html>
<html>

    <head>
        <title>Zeta corp.</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style type="text/css">
            body{
                background-color:  rgb(0, 107, 207);
            }
            header{
                text-align: center;
                font-size: 15px;
            }
            a{
                color: white;
                margin: 0 25px;
            }
            dropdb{
                color: white;
                margin: 0 25px;
                text-decoration: none;
            }
            nav ul li ul{
                display: none;
                position: relative;
                padding: 10px;
                border-radius: 0px 0px 5px 5px;
            }
            nav ul li:hover ul{
                display: block
            }
        </style>
    </head>

    <body>
        <header>
            <?php
            echo '<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">';
                foreach($NavBar as $key => $value){
                    if ($key == 'Sobre nós'){
                        echo'<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="?page='.$key.'" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sobre nós
                            </a>
                            <ul>
                            <div class="dropdb">
                                <li><a  href="?page=quem somos">Quem somos</a></li>
                                <li><a  href="?page=missão e valores">Missão e valores</a></li>
                            </div>
                            </ul>
                            </li>';
                    }else{
                        echo '
                                <li class="nav-item active">
                                    <a class="nav-link" href="?page='.$key.'">'.ucfirst($key).'<span class="sr-only">(current)</span></a>
                                </li>
                            ';
                    }
                }
                echo '</ul>
                        </div>
                        </nav>';
            ?>
        </header>

        <h1>
            <?php
                $dropdown = FALSE;
                $PagAtual = (isset($_GET['page']) ? $_GET['page'] : 'Zeta');
                if(!array_key_exists($PagAtual, $NavBar)){
                    if(!array_key_exists($PagAtual, $drop)){
                        $PagAtual = 'Zeta';
                    }else{
                        $dropdown = TRUE;
                    }
                }
                echo ucfirst($PagAtual);
            ?>
        </h1>
        <h2>
            <?php
                if($dropdown == TRUE){
                    echo $drop[$PagAtual];
                }else{
                    echo $NavBar[$PagAtual];
                }
            ?>
        </h2>
    </body>

</html>