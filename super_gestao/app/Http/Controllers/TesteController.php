<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2){
        //echo "A soma de $p1 + $p2 é: ".($p1+$p2);
         return view('site.teste', [ 'x' => $p1, 'y' => $p2, 'rs' => $p1+$p2 ]); // array associativo
        // return view('site.teste', compact('p1', 'p2'));  // não funcionnou https://www.udemy.com/course/curso-completo-do-desenvolvedor-laravel/learn/lecture/20926580#overview
        //return view('site.teste')->with('p1', $p1)->with('p2', $p2); // não funcionou também
    } 
}
 