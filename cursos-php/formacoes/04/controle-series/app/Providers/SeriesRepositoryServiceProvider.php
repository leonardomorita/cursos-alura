<?php

namespace App\Providers;

use App\Repositories\EloquentSeriesRepository;
use App\Repositories\SeriesRepository;
use Illuminate\Support\ServiceProvider;

class SeriesRepositoryServiceProvider extends ServiceProvider
{
    // Formas de ligar uma interface com uma classe concreta
    // 1

    // /**
    //  * Register services.
    //  *
    //  * @return void
    //  */
    // public function register()
    // {
    //     // Ligar uma interface com uma classe concreta
    //     $this->app->bind(SeriesRepository::class, EloquentSeriesRepository::class);
    // }

    // 2
    public array $bindings = [
        SeriesRepository::class => EloquentSeriesRepository::class
    ];
    // ===
}
