<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seasons', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('season_number');

            // Criar chave estrangeira
            // 1
            // $table->unsignedBigInteger('series_id');
            // $table->foreign('series_id')->references('id')->on('series');
            // 2
            $table->foreignId('series_id')->constrained()->onDelete('cascade');
            // 3 - Laravel 8+
            // $table->foreignIdFor(Serie::class, 'series_id')->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seasons');
    }
};
