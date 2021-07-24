<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<div class="container">

    <h1>Index Fornecedores blade</h1>

        @isset($fornecedores)
            @foreach($fornecedores as $indice => $fornecedor)
                <li>
                    Cliente: {{ $fornecedor['nome'] }}
                    Status:  {{ $fornecedor ['status'] }}
                    CNPJ:    {{ $fornecedor ['cnpj'] ?? 'sem registro' }}
                    Telefone: ( {{ $fornecedor ['ddd'] ?? '' }} ) ( {{ $fornecedor ['tel'] ?? '' }} )
                </li>
            @endforeach
        @endisset
</div>