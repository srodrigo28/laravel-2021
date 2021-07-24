<h1>Index Fornecedores blade</h1>
  @php $f1 = $fornecedores1[1]  @endphp
{{--
    if(empty($variavel)){
        valida se o valor é nulo
        '', 0, 0.0, null, false, array(), $var
    }
--}}
@isset($f1)
        Fornecedores: {{ $f1 ['nome'] }} <br>
        Status: {{ $f1 ['status'] }} <br>
        cnpj: {{ $f1 ['cnpj'] }} @empty( $f1 ['cnpj']) - vazio @endempty
@endisset

