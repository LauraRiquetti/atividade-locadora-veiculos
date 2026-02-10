<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('carros', function (Blueprint $table) {
            $table->id();
            $table->string('modelo');
            $table->string('placa')->unique;
            $table->string('marca');
            $table->integer('ano');
            $table->decimal('preco_diaria');
            $table->text('descricao')->opcional;
            $table->enum('status', ['disponivel', 'alugado', 'manutencao']);
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('carros');
    }
};
