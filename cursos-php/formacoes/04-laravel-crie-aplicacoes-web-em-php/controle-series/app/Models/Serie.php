<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    // Informar os campos que vão poder ser atribuídos com mass assignment.
    protected $fillable = ['nome'];

    protected $table = 'series';
}
