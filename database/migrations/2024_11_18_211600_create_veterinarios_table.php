<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('veterinario', function (Blueprint $table) {
            $table->id();
            $table->string('crmv', 20);
            $table->string('nome', 100);
            $table->date('nascimento')->nullable();
            $table->foreignId('especialidade_id')->constrained('especialidade', 'id')->onDelete('restrict');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('veterinarios');
    }
};
