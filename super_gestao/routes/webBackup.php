<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PrincipalController@principal');

// Route::get('/sobre-nos', function () {
//     return 'Sobre-nós';
// });

/** Controller retornando o conteúdo */
// Route::get('/', 'PrincipalController@principal');
// Route::get('/sobre-nos', 'SobreNosController@sobreNos');
// Route::get('/contato', 'ContatoController@contato');
// Route::get('/login', function(){ return 'Login'; });

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', function(){ return 'Login'; })->name('site.login');

Route::prefix('/app')->group(function() {    
    Route::get('/clientes', function(){ return 'Clientes'; })->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index' )->name('fornecedores');;
    Route::get('/produtos', function(){ return 'Produtos'; })->name('app.produtos');;
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

// Route::get('/rota1', function() { 
//     echo 'Rota 1';
// } )->name('site.rota1');

// Route::get('/rota2', function() {
//     return redirect()->route('site.rota1');
// } )->name('site.rota2');

Route::fallback(function(){
    // echo 'A rota acessada não existe. <a href="/">Clique aqui para voltar</a> ';
    echo 'A rota acessada não existe. <a href=" '.route('site.index').' ">Clique aqui para voltar</a> ';
});
//Route::redirect('/rota2', '/rota1');

/*** passando multiplus parametros
 
Route::get('/contato/{nome}', function(string $nome) { echo 'Estamos aqui: ' .$nome;});
Route::get('/contato/listar', 'ContatoController@listar');

Route::get('/contato/{nome}/{idade}/{msn}', function(
    string $nome = 'Desconhecido', 
    int $idade = 35,
    string $msn = 'Default'
    ) { echo 'Estamos aqui: ' .$nome .' Idade: ' . $idade .' Mensagem: ' . $msn;});
*/
/*** 
Route::get('contato/{nome}/{cat_id}',
    function(
        string $nome = 'Desconhecido',
        int $cat_id = 1
    ){
        echo "Estamos aqui $nome - $cat_id";
    }
)->where('cat_id', '[0-9]+')->where('nome', '[A-Za-z]+'); // tratando com lambda

 */