<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Veterinario extends Model
{
    /** @use HasFactory<\Database\Factories\VeterinarioFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'crmv',
        'nome',
        'nascimento',
        'especialidade_id',
    ];

    protected function especialidade() {
        return $this->belongsTo(Especialidade::class);
    }

    protected $table = 'veterinario';
}
