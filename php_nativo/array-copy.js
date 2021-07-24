<h1>Index Fornecedores blade</h1>

<?php
    $fornecedores = [
        0 => ['nome' => 'Fornecedor0', 'status' => 'N', 'cnpj' => '000.000.0008/80', 'ddd' => '11', 'tel' => '9 0000-0000' ], // São Paulo
        1 => ['nome' => 'Fornecedor1', 'status' => 'S', 'cnpj' => '024.512.0001/11', 'ddd' => '85', 'tel' => '9 0000-0000'], // Fortaleza
        2 => ['nome' => 'Fornecedor2', 'status' => 'S', 'cnpj' => '024.512.0001/11', 'ddd' => '62', 'tel' => '9 0000-0000'], // Goiás
        3 => ['nome' => 'Fornecedor3', 'status' => 'N', 'cnpj' => null, 'ddd' => '44', 'tel' => '9 0000-0000'], // Juiz de Fora - MG
        4 => ['nome' => 'Fornecedor4', 'status' => 'S', 'cnpj' => '024.512.0001/11', 'ddd' => '44', 'tel' => '9 0000-0000'], // Juiz de Fora - MG
        5 => ['nome' => 'Fornecedor5', 'status' => 'N', 'cnpj' => null, 'ddd' => '44', 'tel' => '9 0000-0000'], // Juiz de Fora - MG
    ];
?>



<br><hr>
<table border="1" class="table table-striped table-dark">
<thead>
    <tr>
    <th>Fornecedores</th> 
    <th>Status</th> 
    <th>Cnpj</th>
    <th>Telefone</th>
    </tr>
</thead>
<tbody>
    <tr  <?php for( $i=0; isset($fornecedores[$i]); $i++) { ?> >
        <td> <?= $fornecedores[$i]['nome']   ?> </td>
        <td> <?= $fornecedores[$i]['status'] ?> </td>
        <td> <?= $fornecedores[$i]['cnpj']   ?> </td>
        <td> <?php echo $fornecedores[$i]['ddd'] . '-'  . $fornecedores[$i]['tel']   ?> </td>
    </tr <?php } ?> >
</tbody>
</table>

<p <?php for($i = 0; isset( $fornecedores[$i] ); $i++){ ?> >
        <hr>
            | <strong>Cliente: </strong> <?= $fornecedores [$i] ['nome'] ?>
            | <strong>Status: </strong>  <?= $fornecedores [$i] ['status'] ?>
            | <strong>CNPJ: </strong>    <?= $fornecedores [$i] ['cnpj'] ?>
        <hr>
    </p <?php } ?>>
