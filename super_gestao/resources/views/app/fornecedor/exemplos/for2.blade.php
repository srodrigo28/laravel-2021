<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<div class="container">

    <h1>Index Fornecedores blade</h1>

    @php ($fornecedores) @endphp 

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
        <tr  @for($i = 0; isset( $fornecedores[$i] ); $i++) >
            <td> {{ $fornecedores [$i] ['nome'] }} </td>
            <td> {{ $fornecedores [$i] ['status'] }} </td>
            <td> {{ $fornecedores [$i] ['cnpj'] ?? 'sem registro' }}</td>
            <td>  ( {{ $fornecedores [$i] ['ddd'] ?? '' }} ) ( {{ $fornecedores [$i] ['tel'] ?? '' }} ) </td>
        </tr @endfor>
    </tbody>
    </table>

        <p @for($i = 0; isset( $fornecedores[$i] ); $i++) >
            <hr>
                <strong>Cliente: </strong> {{ $fornecedores [$i] ['nome'] }}
                | <strong>Status: </strong> {{ $fornecedores [$i] ['status'] }}
                | <strong>CNPJ: </strong> {{ $fornecedores [$i] ['cnpj'] ?? 'sem registro' }}
                | <strong>Telefone: </strong>  ( {{ $fornecedores [$i] ['ddd'] ?? '' }} ) ( {{ $fornecedores [$i] ['tel'] ?? '' }} )
            <hr>
        </p @endfor>

</div>