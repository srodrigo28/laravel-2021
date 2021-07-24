<?php
    echo '<h1>Teste If form </h1>';

    // recebendo os dados e guardando nas variaveis;
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    // valida os campos
    if($nome == ''){ echo 'Preencher o campo nome <br><br>'; }
    if($idade == ''){ echo 'Preencher o campo idade <br><br>' . '<a href="index.php"> <button>Voltar</button> </a>'; }
    
    if(is_string($nome) == false){
        var_dump($nome);
        echo 'Preencher o campo nome somente letras <br><br>' . '<a href="index.php"> <button>Voltar</button> </a>';
    }
    if(is_numeric($idade) == false){ echo 'Preencher o campo idade somente numeros <br><br>' . '<a href="index.php"> <button>Voltar</button> </a>'; }
    
    