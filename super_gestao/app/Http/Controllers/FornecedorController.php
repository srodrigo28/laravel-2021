<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        //$fornecedores = ['Fornecedor1', 'Fornecedor2', 'Fornecedor3'];
        $fornecedores = [
           0 => ['nome' => 'Fornecedor0', 'status' => 'N', 'cnpj' => '000.000.0008/80', 'ddd' => '11', 'tel' => '9 0000-0000' ], // São Paulo
           1 => ['nome' => 'Fornecedor1', 'status' => 'S', 'cnpj' => '024.512.0001/11', 'ddd' => '85', 'tel' => '9 0000-0000'], // Fortaleza
           2 => ['nome' => 'Fornecedor2', 'status' => 'S', 'cnpj' => '024.512.0001/11', 'ddd' => '62', 'tel' => '9 0000-0000'], // Goiás
           3 => ['nome' => 'Fornecedor3', 'status' => 'N', 'cnpj' => null, 'ddd' => '44', 'tel' => '9 0000-0000'], // Juiz de Fora - MG
           4 => ['nome' => 'Fornecedor4', 'status' => 'S', 'cnpj' => '024.512.0001/11', 'ddd' => '44', 'tel' => '9 0000-0000'], // Juiz de Fora - MG
           5 => ['nome' => 'Fornecedor5', 'status' => 'N', 'cnpj' => null, 'ddd' => '44', 'tel' => '9 0000-0000'], // Juiz de Fora - MG
        ];
/***
        $produto = ['pokemon x', 'pokemon y', 'pokemon yellow'];
        $produto1 = [
            0 => ['codigo' => 1, 'Descrição' => 'Pokemon x', 'Status' => 'falta']
        ];

        
            condicao ? se verdade : se falso;
            condicao ? se verdade : (codicao ? se verdade : se falso);
         
        echo isset($fornecedores1[2]['cnpj']) ? 'CNPJ informado' : 'CNPJ não informado';
        $msg = isset($fornecedores1[1]['cnpj']) ? $fornecedores1[1]['cnpj'] : '';
        
        // $row = $fornecedores1[1]['cnpj'];
        // $msg = isset($row) ? $row : 'CNPJ não informado';
        // echo $msg;
*/
        //$fornecedores = [];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
