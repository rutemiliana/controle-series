<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Serie;
use App\Http\Requests\SeriesFormRequest;


class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * retorna um objeto do tipo Response com o corpo, status e cabeçalho
     */
    public function index(Request $request)
    {
        $series = Serie::all();
        $mensagemSucesso = session('mensagem.sucesso');
        return view('series.index')->with('series', $series)->with('mensagemSucesso',$mensagemSucesso);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('series.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SeriesFormRequest $request)
    {
        //$nomeSerie = $request->input('nome');
        //dd($request->nome);

        $serie = Serie::create($request->all()); 
        //método create() com array associativa    
   
        // $serie= new Serie();
        // $serie->name= $nomeSerie;
        // $serie->save();             
   
        return redirect()->route('series.index')
            ->with('mensagem.sucesso', "Série '{$serie->name}' adicionada com sucesso!");
    
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
    public function edit(Serie $series)
    {
        /*dd($series);
        $series->temporadas acessa a propriedade, logo, acessa uma coleção coleção
        $series->temporadas() acessa o relacionamento, uma query builder com possibilidade de filtro
        */
       // dd($series->temporadas());

       
       return view('series.edit')->with('series', $series);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Serie $series, SeriesFormRequest $request)
    {
        
        //fill faz os filtros dos campos que podem ser alterados(definidos na model Serie)
        $series->fill($request->all());
        $series->update();


        return redirect()->route('series.index')
        ->with('mensagem.sucesso', "Série '{$series->name}' atualizada com sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Serie se refere a model
    public function destroy(Serie $series)
    {
        $series->delete();
        //dd($series);
        /* series é o ID da serie que segue o padrão de rota (Actions Handled By Resource Controller)
        singular de series em inglês é series */

       return redirect()->route('series.index')
            ->with('mensagem.sucesso', "Série '{$series->name}' removida com sucesso");
    }
}
