<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pet extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'nascimento',
        'flg_castrado',
    ];
    protected $table = 'pets';
}