<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Episode;
use App\Models\Season;
use App\Models\Series;
use App\Repositories\SeriesRepository;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function __construct(private SeriesRepository $seriesRepository) {}

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

    // public function store(SeriesRepository $seriesRepository, SeriesFormRequest $request)
    public function store(SeriesFormRequest $request)
    {
        // Validar campos
        // $request->validate([
        //     'nome' => ['required', 'min:3']
        // ]);

        // $series = $seriesRepository->add($request);
        $series = $this->seriesRepository->add($request);

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
