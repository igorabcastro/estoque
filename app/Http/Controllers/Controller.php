<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function apresentacao()
    {
        $bares = DB::table('bares')->get();
        return view('bares', ['bares'=>$bares]);
    }

    public function listagemEstoque(Request $request)
    {
        $bar = DB::table('bares')->where('cod_bar', $request->bar)->first();
        $bares = DB::table('bares')->get();
        $produtos = DB::table('produtos')->get();
        $estoque = DB::table('estoque')->where('cod_bar', $request->bar)->get();
        return view('apresentacao', ['bares'=>$bares, 'bar'=>$bar, 'produtos'=>$produtos, 'estoque'=>$estoque]);
    }

    public function transacao()
    {
       $bares = DB::table('bares')->get();
       $produtos = DB::table('produtos')->get();
       return view('transacao', ['bares'=>$bares, 'produtos'=>$produtos]);
    }

    public function login()
    {   
        return view('login');
    }

    public function tabela(Request $request)
    {
        $bares = DB::table('bares')->get();
        $produtos = DB::table('produtos')->get();
        $estoque = DB::table('estoque')->get();
        // foreach ($bares as $bar){
        // $estoque = DB::table('estoque')->where('cod_bar', $bar->cod_bar)->where(->get();
        // $tudo = [$bar->nome, $bar->coordenador, $estoque, ];
        // }
        return view('tabela', ['bares'=>$bares, 'produtos'=>$produtos, 'estoque'=>$estoque] );
    }




}


