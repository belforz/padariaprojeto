<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;


class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$produtos = Produtos::all();
        //$produtos = DB::table('produto')->orderBy('valor_inicial','desc')->get();
        //$produtos = DB::table('tbProduto')->orderBy('valor-inicial','asc')->get();

        $sql = "select * from produto";
        $produtos = DB::select($sql);
      

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

    public function index2()
    {
        $sql = "select * from produto";
        $produtos = DB::select($sql);
        return view('produto-escolhido', compact('produtos'));
    }

    public function indexApi()
    {
        $sql = "select * from tbProduto";
        $produtos = DB::select($sql);

        return $produtos;
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
        $produtos = new Produtos();
        $imagem = $request->file('imagem');
        $nomeArquivo = uniqid() . '.' . $imagem->getClientOriginalExtension();
        $caminho = $imagem->storeAs('uploads', $nomeArquivo);

        $produtos->Pnome = $request->txPnome;
        $produtos->Descricao = $request->txDescricao;
        $produtos ->Categoria = $request->txCategoria;
        $produtos->quantidade = $request->txQuantidade;
        $produtos->valor_inicial = $request->txValor_Inicial;
        $produtos->imagem = $caminho;
        
        


        $produtos->save();
        
        return redirect('/produto-escolhido');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produtos = Produtos::where('idProduto','=',$id)->get();                
        
        return view('produto-escolhido',compact('produtos'));
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
    public function updateApi(Request $request, $id)
    {
        $produto = Produto::where('idProduto',$id)->update([
            'produto' => $request->produto,
            'descrProduto' => $request->descricao,
            'valor'=> $request->valor            
        ]);
        
        return response()->json([
            'message'=> 'Dados alterados com sucesso',
            'code'=>200]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produtos::where('idProduto',$id)->delete();
        return redirect('/produto-escolhido');        
    }

    
    public function destroyApi(string $id)
    {
        Produto::where('idProduto',$id)->delete();
        
        return response()->json([
            'message'=> 'Dados excluídos com sucesso',
            'code'=>200]); 
    }


    public function download()
    {               
        $sql = 'select * from tbProduto';

        $queryJson = DB::select($sql);

        // Nome do arquivo CSV
        $filename = 'problemas.csv';

        // Cabeçalho do arquivo        
        $headers = [
            'Content-Type' => 'text/csv;charset=utf-8',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];        

        //Cabeçalho        
        
        $file = fopen('php://output', 'w');

        fclose($file);

        // Gera o arquivo CSV
        $callback = function () use ($queryJson) {
            
        $file = fopen('php://output', 'w');

        //Cabeçalho
        $col1 = "ID";
        $col2 = "Produto";
        $col3 = mb_convert_encoding("Descrição","ISO-8859-1");
        $col4 = "Valor";
        $col5 = "Data de Cadastro";
        
        $escreve = fwrite($file, "$col1,$col2,$col3,$col4,$col5");
        
        
            foreach($queryJson as $d) {
                $data1 = $d->idProduto;
                $data2 = $d->produto;
                $data3 = $d->descrProduto;
                $data4 = $d->valor;
                $data5 = $d->dtCadastro;
                
               //$escreve = fwrite($file, "\n$data1;$data2;$data3;$data4;$data5");
               $escreve = fwrite($file, "\n$data1,$data2,$data3,$data4,$data5");
               
            }
            fclose($file);
        };

        // Retorna o arquivo CSV para download
        return Response::stream($callback, 200, $headers);
    }


    public function json(){
        $response = Http::get('https://viacep.com.br/ws/01001000/json/');
        $data = $response->json();

        return view('test_view', compact('data'));

    }
}
