//console.log("<h1>Index Fornecedores blade</h1>")

let fornecedores = { nome : 'Fornecedor0', status : 'N', cnpj : '000.000.0008/80', ddd : '11', tel : '9 0000-0000' };
//console.log(fornecedores);

//console.log(fornecedores['nome']);


for( var i=0; fornecedores[i]; i++ ) {

    console.log(
        fornecedores[i]['nome'], 
        fornecedores['status'], 
        fornecedores['cnpj'],
        fornecedores['ddd'],
        fornecedores['tel'] 
    )
}

//     console.log(`
//     | <strong> Cliente: </strong> ${ fornecedores[i]['nome'] }
//     | <strong> Status: </strong>  ${ fornecedores[i]['status'] }
//     | <strong> CNPJ: </strong>    ${ $fornecedores[i]['cnpj'] }
//     | <strong> CNPJ: </strong>    ${ $fornecedores[i]['ddd'] }
//     | <strong> CNPJ: </strong>    ${ $fornecedores[i]['tel'] }
// `)
/**
 console.log(`
    <table border="1" class="table table-striped table-dark">
    <thead>
        <tr>
        <th>Fornecedores</th> 
        <th>Status</th> 
        <th>Cnpj</th>
        <th>Telefone</th>
        </tr>
    </thead>
    <tbody>
    `);
    for(let i=0; ( fornecedores[i] ); i++) { 
            console.log(`<tr>  <td>' + ${fornecedores[i]['nome']}   </td> </tr> </tbody> </table>` );
    }
 */
