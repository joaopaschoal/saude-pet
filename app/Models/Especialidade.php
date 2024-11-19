<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Especialidade extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'nome'
    ];

    protected function veterinarioList() {
        return $this->hasMany(Veterinario::class);
    }

    protected $table = 'especialidade';
}
