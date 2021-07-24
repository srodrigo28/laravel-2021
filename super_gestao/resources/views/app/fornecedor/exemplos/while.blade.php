<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<div class="container">

    <h1>Index Fornecedores blade</h1>

        @php $i=0 @endphp
        @while( isset( $fornecedores[$i] ))
                <li>
                    <strong>Cliente: </strong> {{ $fornecedores [$i] ['nome'] }}
                    | <strong>Status: </strong> {{ $fornecedores [$i] ['status'] }}
                    | <strong>CNPJ: </strong> {{ $fornecedores [$i] ['cnpj'] ?? 'sem registro' }}
                    | <strong>Telefone: </strong>  ( {{ $fornecedores [$i] ['ddd'] ?? '' }} ) ( {{ $fornecedores [$i] ['tel'] ?? '' }} )
                </li>
            @php $i++ @endphp
         @endwhile

</div>