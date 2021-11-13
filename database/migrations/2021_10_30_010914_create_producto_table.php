<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->string('cod_unique', 100)->unique();
            $table->string('nombre_producto');
            $table->integer('cantidad')->default(1);
            $table->float('precio')->default(0.0);
            $table->unsignedBigInteger('sucursal');
            $table->unsignedBigInteger('categoria');
            $table->text('descripcion')->nullable();
            $table->timestamps();

            $table->foreign('sucursal')->references('id')->on('sucursal');
            $table->foreign('categoria')->references('id')->on('categoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}
