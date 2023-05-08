<?php
    session_start(); //inicia a sessão
    //vetor que armazena os usuários
    $usuarios_site = [
        [
            "email" => "user@gmail.com",
            "senha" => "123",
        ],
        [
            "email" => "adm@gmail.com",
            "senha" => "456",
        ]

    ];

    $usuario_autenticado = false;
    //verifca se o email e a senha armazenado no vetor são iguais aos digitados pelo usuário
    foreach($usuarios_site as $user)
    {
        if (($user['email']== $_POST['email']) && ($user['senha'] == $_POST['senha']))
        {
            $usuario_autenticado = true;
        }
    }

    //armazena dados na session
    if ($usuario_autenticado == true)
    {
        //armazena na session que o usuário está autenticado
        $_SESSION['autenticado'] = 'sim';
        //força o redimencionamento para a página home.php
        header('Location:home.php');
    }
    else
    {
        $_SESSION['autenticado'] = 'nao';
        header('Location:index.php?login=erro');
        //redireciona para a página de index
        //passa por parametro login=erro
    }
?>