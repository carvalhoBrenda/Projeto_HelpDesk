<?php
    //função replace: texto a ser substiuído (#), texto substituto (-), valor a ser substituído # sera usado para separar as informações no arquivo texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    // #usado para separar a sequencia
    //função PHP_EOL; quebra linha (end of line)
    $texto = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    //função fopen: abre arquivo de texto, se não existe será criado
    //a: abre arquivo para escrita
    $arquivo = fopen('arquivo.txt', 'a');

    //adiciona a variável $texto ao arquivo txt
    fwrite($arquivo, $texto);

    fclose ($arquivo); //fecha o arquivo texto

    header('Location:abrir_chamado.php');
?>
