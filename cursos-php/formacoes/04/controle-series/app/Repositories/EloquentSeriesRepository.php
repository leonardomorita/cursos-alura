<?php

namespace App\Repositories;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Episode;
use App\Models\Season;
use App\Models\Series;
use Illuminate\Support\Facades\DB;

class EloquentSeriesRepository implements SeriesRepository
{
    public function add(SeriesFormRequest $request): Series
    {
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

        /**
         * Transações:
         * 1- DB::transaction(function () {});
         * 2- DB::beginTransaction(); ... DB::commit(); ... DB::rollback();
         */

        $series = DB::transaction(function () use ($request, $data) {
            // 3 - Mass Assignment
            $series = Series::create($data);

            $seasons = [];

            for ($i = 1; $i <= $request->seasonQty; $i++) {
                $seasons[] = [
                    'series_id' => $series->id,
                    'season_number' => $i
                ];
            }

            Season::insert($seasons);

            $episodes = [];

            foreach ($series->seasons as $season) {
                for ($j = 1; $j <= $request->episodePerSeason; $j++) {
                    $episodes[] = [
                        'season_id' => $season->id,
                        'episode_number' => $j
                    ];
                }
            }

            Episode::insert($episodes);

            return $series;
        });

        return $series;
    }
}
