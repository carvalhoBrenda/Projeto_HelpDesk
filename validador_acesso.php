<?php
    session_start();
    //se a seesion não estiver setada ou não for igual a sim, o usuário não logou
    if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'sim')
    {
        //direciona o navegador para a tela de login 
        header('Location:index.php?login=erro2');
    }
?>