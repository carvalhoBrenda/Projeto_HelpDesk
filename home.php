<?php
    //require: caso gere um erro, não exibe a página home.php
    require_once "validador_acesso.php";
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>App Help Desk</title>
        
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

        <style>
            .card-home{
                padding: 30px 0 0 0;
                width: 100%;
                margin: 0 auto;
            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                App Help Desk
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="logoff.php"> SAIR </a>
                </li>
            </ul>
        </nav>

        <div class="container">
            <div class="row">
                <div class="card-home">
                    <div class="card">
                        <div class="card-header">
                            Menu
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6  d-flex justify-content-center">
                                    <a href="abrir_chamado.php">
                                        <img src="abrir_chamado.png" width="70" height="70">
                                    </a>
                                </div>
                                <div class="col-6  d-flex justify-content-center">
                                    <a href="consultar_chamado.php">
                                        <img src="consultar_chamado.png" width="70" height="70">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>