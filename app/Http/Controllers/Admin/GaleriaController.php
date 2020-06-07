<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Galeria;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $galeria = Galeria::orderBy('id', 'DESC')->paginate(10);
      
        return view('admin.galeria.index',compact('galeria'));
    }

    public function form()
     {
        return view('admin.galeria.create-galeria');
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
        $dados = $request->all();
        //dd($dados);    motrarar os valores que está pegando atraves do 'dados'

        //tratando a imagem
        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');

            $num = rand(1111, 2222);   //gerando um numero randomico para servir como nome da imagem no banco de dados
            $dir = "img/galeria/";               //diretorio onde ira salvar a imagem
            $extensao = $imagem->guessClientExtension();  //extensao da imagem
            $nomeimagem = "imagem_" . $num . "." . $extensao;   //nome da imagem
            $imagem->move($dir, $nomeimagem);     //movendo imagem para um diretorio
            $dados['imagem'] = $dir . "/" . $nomeimagem;  //caminho da imagem para salvar no banco
        }
        Galeria::create($dados); //salvando tudo no banco de dados


        return redirect('adm/galeria');
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
