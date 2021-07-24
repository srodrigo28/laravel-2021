<?php
    echo '<h1>Teste If </h1>';

    $nome = 'bastião';

    //echo $nome . '<br><hr>';

    if($nome == 'bastião'):
        echo 'Bem vindo ' . $nome;
    elseif($nome == ''):
        echo 'Não achei o seu nome';
    endif;

    // if($nome == 'bastião'){
    //     echo 'Bem vindo Sr. ' . $nome;
    // }