<?php
    //valida se o usuário esta logado
    //caso não esteja, direciona para a página de index
    require_once "validador_acesso.php";

    //cria um vetor para armazenar os registros do arquivo txt
    $vetchamados = array();

    //read: leitura
    $arquivo = fopen ('arquivo.txt', 'r');

    //feof (end of file), percorre arquivo enquanto não for o final do arquivo
        while (!feof($arquivo))
        {
            //recupera o conteúdo da linha
            $registro = fgets($arquivo);
            $vetchamados[] = $registro;
        }

        //fecha o arquivo.txt
        fclose($arquivo);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>App Help Desk</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <style>
            .card-consultar-chamado{
                padding: 30px 0 0 0;
                width: 100%;
                margin: 0 auto;
            }
        </style>
    </head>
    <body>
        <nav class= "navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> App Help Desk
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="logoff.php"> SAIR </a>
                </li>
            </ul>
        </nav>
        
        <div class="container">
            <div class="row">
                <div class="card-consultar-chamado">
                    <div class="card">
                        <div class="card-header">
                            Consulta de chamados
                        </div>
                        <div class="card-body">
                            <?php
                            foreach ($vetchamados as $chamado)
                            {
                            //percorre vetor para tirar o carcater # usando o comando explode
                            $chamado_dados = explode('#',$chamado);
                                if(count($chamado_dados) < 3){
                                    //caso não tenha preenchido os três campos continua a execução
                                    continue;
                                }
                            ?>
                                <div class="card mb-3 bg-light">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <?= $chamado_dados[0]?>
                                        </h5>
                                        <h6 class="card-subtitle mb-2m text-muted">
                                            <?= $chamado_dados[1]?>
                                        </h6>
                                        <p class="card-text">
                                            <?= $chamado_dados[2]?>
                                        </p>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="row mt-5">
                                <div class="col-6">
                                    <a href="home.php">Voltar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>