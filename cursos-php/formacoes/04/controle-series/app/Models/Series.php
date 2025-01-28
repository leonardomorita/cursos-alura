<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;

    // Informar os campos que vão poder ser atribuídos com mass assignment.
    protected $fillable = ['name'];

    protected $table = 'series';

    // Se toda vez precisar da tabela temporadas (seasons)
    // protected $with = ['seasons'];

    public function seasons()
    {
        return $this->hasMany(Season::class, 'series_id');
    }

    // Exemplo de escopo local
    // public function scopeActive(Builder $builder)
    // {
    //     return $builder->where('active', '=', true);
    // }

    protected static function booted()
    {
        self::addGlobalScope('ordered', function(Builder $builder) {
            $builder->orderBy('name');
        });
    }
}
