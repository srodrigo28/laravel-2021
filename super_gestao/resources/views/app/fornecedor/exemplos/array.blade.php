
@php 
    $nome = 'bastião';
    echo 'oi';    
@endphp
<?= "<br><br>" . $nome ?>

{{-- imprindo os valores do array 
    @dd($fornecedores)
 --}}
 
<br><hr>
{{-- Trazendo array do controller --}}
@php echo($fornecedores[1]) @endphp
<ul>
    <li> <?=$fornecedores[0]?> </li>
    <li> <?=$fornecedores[1]?> </li>
    <li> <?=$fornecedores[2]?> </li>
</ul>
{{-- Trazendo array do controller --}}
<ul>
    <li> <?=$produto[0]?> </li>
    <li> <?=$produto[1]?> </li>
    <li> <?=$produto[2]?> </li>
</ul>

<br><hr>
@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem - Fornecedores</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem mais de 10 Fornecedores</h3>
@else
    <h3>Não existe registro</h3>
@endif

<br><hr>

<style>
    table, th, td{ border: 1px solid black;  }
</style>

{{-- @dd($fornecedores1) --}}
<table>
    <thead>
        <th>Fornecedor</th>
        <th>Status</th>
    </thead>
    <tbody>
        <tr>
            <td> {{ $fornecedores1[0]['nome'] }} </td>
            <td> {{ $fornecedores1[1]['status'] }} </td>
        </tr>
    </tbody>
<table>