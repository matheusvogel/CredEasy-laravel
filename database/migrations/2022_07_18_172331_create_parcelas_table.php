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
        Schema::create('parcela', function (Blueprint $table) {
            $table->id();
            $table->int('numero', 10, 2, true);
            $table->date('data_vencimento');
            $table->date('data_pagamento');
            $table->decimal('multa', 10, 2, true);
            $table->decimal('valor_pago', 10, 2, true);
            $table->string('status', 20);
            $table->id('emprestimo_id');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parcela');
    }
};
