<h1>Index Fornecedores blade</h1>
  @php $f1 = $fornecedores1[1]  @endphp
{{-- @dd($fornecedores1) --}}

{{-- @isset($fornecedores1)
    Fornecedores: {{ $fornecedores1[0]['nome'] }}
    <br>
    Status: {{ $fornecedores1[0]['status'] }}
    <br>
    @isset($fornecedores1[1]['cnpj'])
        cnpj: {{ $fornecedores1[1]['cnpj'] }}
    @endisset
@endisset --}}

{{-- @isset($fornecedores1[10])
    @php $f1 = $fornecedores1[10]  @endphp
@endisset --}}

{{-- 
@isset($f1)
    Fornecedores: {{ $f1 ['nome'] }} <br>
    Status: {{ $f1 ['status'] }} <br>

    @isset($f1['cnpj'])
        cnpj: {{ $f1 ['cnpj'] }}
    @endisset
    
@endisset --}}

@isset($f1)
    @isset($f1['nome'])
        Fornecedores: {{ $f1 ['nome'] }} <br>
    @endisset
    @isset($f1['status'])
        Status: {{ $f1 ['status'] }} <br>
    @endisset

    @isset($f1['cnpj'])
        cnpj: {{ $f1 ['cnpj'] }}
    @endisset
    
@endisset

