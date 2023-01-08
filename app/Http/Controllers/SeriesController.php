<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Serie;


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
        $series = Serie::query()->orderBy('name')->get();
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
    public function store(Request $request)
    {
        //$nomeSerie = $request->input('nome');
        //dd($request->all())

        $serie = Serie::create($request->all()); 
        $request->session()->flash('mensagem.sucesso', "Série '{$serie->name}' adicionada com sucesso!");
        //método create() com array associativa    
   
        // $serie= new Serie();
        // $serie->name= $nomeSerie;
        // $serie->save();             
   
        return redirect()->route('series.index');
    
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
    public function destroy(Serie $series, Request $request)
    {
        $series->delete();
        //dd($series);
        /* series é o ID da serie que segue o padrão de rota (Actions Handled By Resource Controller)
        singular de series em inglês é series */
        //dd($request->series);
        //dd($request->route());

        $request->session()->flash('mensagem.sucesso', "Série '{$series->name}' removida com sucesso");


       return redirect()->route('series.index');
    }
}
