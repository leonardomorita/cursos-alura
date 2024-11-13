<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index()
    {
        // $series = Serie::all();
        $series = Serie::query()->orderBy('nome', 'asc')->get();
        // $series = DB::select('SELECT nome FROM series;');

        // return view('listar-series', compact('series'));
        return view('series.index')->with('series', $series);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        // Obter todos os parâmetros da requisição
        $data = $request->all();

        // Obter o parâmetro da requisição
        // 1
        // $nomeSerie = $request->input('nome');

        // 2
        // $nomeSerie = $request->nome;

        // Obter somente os parâmetros informado
        $request->only(['nome']);

        // Obter todos os parâmetros, exceto o que for informado como parâmetro do método except
        $request->except(['_token']);

        // Salvar o dado no banco de dados
        // 1
        // DB::insert('INSERT INTO series (nome) VALUES (?)', [$nomeSerie]);

        // 2
        // $serie = new Serie();
        // $serie->nome = $nomeSerie;
        // $serie->save();

        // 3 - Mass Assignment
        Serie::create($data);

        // Formas de redirecionar para uma URL utilizando o apelido da rota
        // 1
        // return redirect()->route('series.index');

        // 2 - À partir do Laravel 9
        return to_route('series.index');
    }
}
