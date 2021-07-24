<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    /** Aqui retornamos dados dos controller */
    public function contato(){
        //echo 'Contato';

        var_dump($_POST);
        return view('site.contato', ['titulo' => 'Contato']);
    }
    /** Aqui retornamos dados dos controller */
    public function listar(){
        echo '<ul>
                <li>Rodrigo</li>
                <li>Adriano</li>
                <li>Rosana</li>
            </ul>';
    }
}
