<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = [
            "Punisher", "Lost", "Grey's Anatomy"
        ];

        // return view('listar-series', compact('series'));
        return view('series.index')->with('series', $series);
    }

    public function create()
    {
        return view('series.create');
    }
}
