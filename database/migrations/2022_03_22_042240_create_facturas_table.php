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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_vendedor');
            $table->char('Tel_Agrocampo');
            $table->integer('Codig_Factura')->unique();
            $table->string('Nombre_Cliente');
            $table->string('id_cliente');
            $table->string('productos');
            $table->integer('cantidad');
            $table->decimal('precio');
            $table->decimal('ISV');
            $table->decimal('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturas');
    }
};
