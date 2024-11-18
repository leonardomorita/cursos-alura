<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        // $series = Serie::all();
        $series = Serie::query()->orderBy('nome', 'asc')->get();
        // $series = DB::select('SELECT nome FROM series;');

        // $mensagemSucesso = $request->session()->get('mensagem.sucesso'); // Obter um valor da sessão
        $mensagemSucesso = session('mensagem.sucesso'); // Obter um valor da sessão, usando uma função do Helper do Laravel
        // $request->session()->forget('mensagem.sucesso'); // Remover um valor da sessão

        // return view('listar-series', compact('series'));
        return view('series.index')
            ->with('series', $series)
            ->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        // Obter todos os parâmetros do formulário
        $data = $request->all();

        // Obter o parâmetro do formulário
        // 1
        // $nomeSerie = $request->input('nome');

        // 2
        // $nomeSerie = $request->nome;

        // Obter somente os parâmetros informado do formulário
        // $request->only(['nome']);

        // Obter todos os parâmetros do formulário, exceto o que for informado como parâmetro do método except
        // $request->except(['_token']);

        // Salvar o dado no banco de dados
        // 1
        // DB::insert('INSERT INTO series (nome) VALUES (?)', [$nomeSerie]);

        // 2
        // $serie = new Serie();
        // $serie->nome = $nomeSerie;
        // $serie->save();

        // 3 - Mass Assignment
        $serie = Serie::create($data);

        // session(['mensagem.sucesso' => 'Série adicionada com sucesso']); // Adiciona um valor na sessão, porém não é flash message, pois essa função do helper não tem
        // $request->session()->flash('mensagem.sucesso', "Série '{$serie->nome}' adicionada com sucesso");

        // Formas de redirecionar para uma URL utilizando o apelido da rota
        // 1
        // return redirect()->route('series.index');

        // 2 - À partir do Laravel 9
        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$serie->nome}' adicionada com sucesso");
    }

    public function edit(Serie $series)
    {
        return view('series.edit')
            ->with('serie', $series);
    }

    public function update(Serie $series, Request $request)
    {
        // Preencher todos os campos da Série com valores atualizados
        $series->fill($request->all());
        $series->save();

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$series->nome}' atualizada com sucesso");
    }

    public function destroy(Serie $series, Request $request)
    {
        // Obter todos os parâmetros da rota
        // dd($request->route());

        $series->delete();
        // Serie::destroy($request->series);

        // $request->session()->put('mensagem.sucesso', 'Série removida com sucesso'); // Adicionar um valor na sessão
        // $request->session()->flash('mensagem.sucesso', "Série '{$series->nome}' removida com sucesso"); // Adicionar um valor na sessão que dura uma requisição

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$series->nome}' removida com sucesso");
    }
}
