<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<div class="container">

    <h1>Index Fornecedores blade</h1>

        @isset($fornecedores)
            @forelse($fornecedores as $indice => $fornecedor)
                <li>
                    <strong>Cliente: </strong> {{ $fornecedor['nome'] }}
                    | <strong>Status: </strong> {{ $fornecedor ['status'] }}
                    | <strong>CNPJ: </strong> {{ $fornecedor ['cnpj'] ?? 'sem registro' }}
                    | <strong>Telefone: </strong>  ( {{ $fornecedor ['ddd'] ?? '' }} ) ( {{ $fornecedor ['tel'] ?? '' }} )
                </li>
                @empty
                Não existem fornecedores cadastrados!!!
            @endforelse            
        @endisset
</div>