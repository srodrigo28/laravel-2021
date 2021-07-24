<h1>Index Fornecedores blade</h1>

@php $f1 = $fornecedores[3] @endphp


@isset($f1)
    Fornecedores: {{ $f1 ['nome'] }} <br>
    Status: {{ $f1 ['status'] }} <br>
    cnpj: {{ $f1 ['cnpj'] ?? 'sem registro' }}
    Telefone: ( {{ $f1['ddd'] ?? '' }} ) ( {{ $f1['tel'] ?? '' }} )
    @switch( $f1['ddd'] )
        @case('11') São Paulo - SP @break
        @case('85') Fortaleza - CE @break
        @case('62') Goiás - GO @break
        @case('32') Juiz de Fora - MG @break
        @default Estado não encontrado
    @endswitch
@endisset

