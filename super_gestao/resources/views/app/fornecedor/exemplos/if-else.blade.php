<h1>Index Fornecedores blade</h1>

@php $f1 = $fornecedores1[1]['status'] @endphp
    
    Saída: 1 {{ $f1 }}

<hr>

    {{-- 
        @if($fornecedores1[0]['status'] == 'N')
            Saída: 2 <strong>Fornecedor inativo</strong>
        @elseif($fornecedores1[1]['status'] == 'S')
            Saída: 3 Fornecedor ativo
        @else
            Saída: 4 Fornecedor não encontrado
        @endif 
    --}}

    @if($f1 == 'N')
        Saída: 2 <strong>Fornecedor inativo</strong>
    @elseif($f1 == 'S')
        Saída: 3 <strong>Fornecedor ativo</strong>
    @else
        Saída: 4 <strong>Fornecedor não encontrado</strong>
    @endif



