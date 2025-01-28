<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Series;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Series::all();
        // $series = Series::query()->orderBy('nome', 'asc')->get();
        // $series = DB::select('SELECT nome FROM series;');

        // Buscar séries com escopo local
        // $series = Series::active();

        // Buscar séries com suas temporadas
        // $series = Series::with(['seasons'])->get();

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

    public function store(SeriesFormRequest $request)
    {
        // Validar campos
        // $request->validate([
        //     'nome' => ['required', 'min:3']
        // ]);

        // Obter todos os parâmetros do formulário
        $data = $request->all();

        // Obter o parâmetro do formulário
        // 1
        // $nomeSerie = $request->input('name');

        // 2
        // $nomeSerie = $request->name;

        // Obter somente os parâmetros informado do formulário
        // $request->only(['name']);

        // Obter todos os parâmetros do formulário, exceto o que for informado como parâmetro do método except
        // $request->except(['_token']);

        // Salvar o dado no banco de dados
        // 1
        // DB::insert('INSERT INTO series (name) VALUES (?)', [$nomeSerie]);

        // 2
        // $series = new Series();
        // $serie->name = $nomeSerie;
        // $serie->save();

        // 3 - Mass Assignment
        $series = Series::create($data);

        // session(['mensagem.sucesso' => 'Série adicionada com sucesso']); // Adiciona um valor na sessão, porém não é flash message, pois essa função do helper não tem
        // $request->session()->flash('mensagem.sucesso', "Série '{$series->name}' adicionada com sucesso");

        // Formas de redirecionar para uma URL utilizando o apelido da rota
        // 1
        // return redirect()->route('series.index');

        // 2 - À partir do Laravel 9
        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$series->name}' adicionada com sucesso");
    }

    public function edit(Series $series)
    {
        return view('series.edit')
            ->with('series', $series);
    }

    public function update(Series $series, SeriesFormRequest $request)
    {
        // Preencher todos os campos da Série com valores atualizados
        $series->fill($request->all());
        $series->save();

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$series->name}' atualizada com sucesso");
    }

    public function destroy(Series $series, Request $request)
    {
        // Obter todos os parâmetros da rota
        // dd($request->route());

        $series->delete();
        // Serie::destroy($request->series);

        // $request->session()->put('mensagem.sucesso', 'Série removida com sucesso'); // Adicionar um valor na sessão
        // $request->session()->flash('mensagem.sucesso', "Série '{$series->name}' removida com sucesso"); // Adicionar um valor na sessão que dura uma requisição

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$series->name}' removida com sucesso");
    }
}
