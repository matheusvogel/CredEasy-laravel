<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('emprestimo', function (Blueprint $table) {
            $table->id();
            $table->decimal('valor', 10, 2, true);
            $table->decimal('taxa_juros', 10, 2, true);
            $table->decimal('valor_final', 10, 2, true);
            $table->date('data_solicitacao');
            $table->date('data_quitacao');
            $table->string('status', 20);
            $table->string('cpf_cliente', 14);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emprestimo');
    }
};
