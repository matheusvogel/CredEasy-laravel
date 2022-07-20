<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->string('cpf', 14);
            $table->decimal('renda', 10, 2, true);
            $table->string('endereco', 255);
            $table->string('profissao', 255);
            $table->int('numero');
            $table->string('email', 255);
            $table->string('senha', 2550);
            $table->string('tipo', 255);
        });

        DB::statement("ALTER TABLE cliente ADD CONSTRAINT tipo_usuario_valido CHECK (tipo IN ('CLIENTE', 'GESTOR')");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
};
