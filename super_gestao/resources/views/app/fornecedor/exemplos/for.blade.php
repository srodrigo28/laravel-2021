<h1>Index Fornecedores blade</h1>

{{-- @php $f1 = $fornecedores[3] @endphp

@isset($f1)
    
        Fornecedores: {{ $f1 ['nome'] }} <br>
        Status: {{ $f1 ['status'] }} <br>
        cnpj: {{ $f1 ['cnpj'] ?? 'sem registro' }}
        Telefone: ( {{ $f1['ddd'] ?? '' }} ) ( {{ $f1['tel'] ?? '' }} )
    
@endisset --}}

<br><hr>

@isset($fornecedores)
    @for($i = 0; isset( $fornecedores[$i] ); $i++)
        Fornecedores: {{ $fornecedores[$i] ['nome'] }} <br>
        Status: {{ $fornecedores[$i] ['status'] }} <br>
        cnpj: {{ $fornecedores[$i] ['cnpj'] ?? 'sem registro' }}
        Telefone: ( {{ $fornecedores[$i]['ddd'] ?? '' }} ) ( {{ $fornecedores[$i]['tel'] ?? '' }} )
        <hr>
    @endfor
@endisset
{{-- 
    @for($i = 0; $i <10; $i++)
    @endfor 
--}}
    {{-- <p> {{ $i }} - {{ $i.nome }} </p> --}}


