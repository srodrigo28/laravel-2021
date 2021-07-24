<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<div class="container">

    <h1>Index Fornecedores blade</h1>

        
        <table border="1">
            <thead >
                <th>Nome</th>
                <th>Status</th>
                <th>CNPJ</th>
                <th>Telefone</th>
            </thead>
            <tbody>
            @isset($fornecedores)
                @foreach($fornecedores as $indice => $fornecedor)
                <tr>
                    <td> {{ $fornecedor['nome'] }} </td>
                    <td> {{ $fornecedor ['status'] }} </td>
                    <td> {{ $fornecedor ['cnpj'] ?? 'sem registro' }} </td>
                    <td> ( {{ $fornecedor ['ddd'] ?? '' }} ) ( {{ $fornecedor ['tel'] ?? '' }} ) </td>
                </tr>
                 @endforeach
                 @php $total = count($fornecedores) @endphp 
                <tr> Total {{ $total }} </tr>
            </tbody>
        <table>
                  
        @endisset
        
</div>