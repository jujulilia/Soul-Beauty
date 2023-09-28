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
        Schema::create('profissionals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome', 120)->nullable(false);
            $table->string('celular', 11)->nullable(false);
            $table->integer('email', 120)->unique()->nullable(false);
            $table->decimal('cpf', 11)->unique()->nullable(false);
            $table->string('dataNascimento')->nullable(false);
            $table->string('cidade', 120)->nullable(false);
            $table->integer('estado', 2)->nullable(false);
            $table->decimal('pais', 80)->nullable(false);
            $table->string('rua', 120)->nullable(false);
            $table->string('numero', 10)->nullable(false);
            $table->integer('bairro', 100)->nullable(false);
            $table->decimal('cep', 8)->nullable(false);
            $table->string('complemento', 150)->nullable(true);
            $table->string('password')->nullable(false);
            $table->decimal('salario')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profissionals');
    }
};
