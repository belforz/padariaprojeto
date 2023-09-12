<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;


class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produtos::all();
      

        // foreach($contatos as $c){
        //     echo "Id ". $c->idContato . "<br />";            
        //     echo "Nome ".$c->nome . "<br />"; 
        //     echo "E-mail ".$c->email . "<br />";             
        //     echo "Assunto ".$c->assunto . "<br />";  
        //     echo "Mensagem".$c->mensagem . "<br />"; 
        //     echo "<br />"; 
        // }

        return view('produtos', compact('produtos'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produtos= new Produtos();

        $produtos->Pnome = $request->txPnome;
        $produtos->Descricao = $request->txDescricao;
        $produtos ->Categoria = $request->txCategoria;
        $produtos->quantidade = $request->txQuantidade;
        $produtos->valor_inicial = $request->txValor_Inicial;
        
        


        $produtos->save();

        return redirect('/produtos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
