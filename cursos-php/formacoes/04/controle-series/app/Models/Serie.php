<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    // Informar os campos que vão poder ser atribuídos com mass assignment.
    protected $fillable = ['nome'];

    protected $table = 'series';

    protected static function booted()
    {
        self::addGlobalScope('ordered', function(Builder $builder) {
            $builder->orderBy('nome');
        });
    }

    // Exemplo de escopo local
    // public function scopeActive(Builder $builder)
    // {
    //     return $builder->where('active', '=', true);
    // }

    public function temporadas()
    {
        return $this->hasMany(Season::class, 'series_id');
    }
}
