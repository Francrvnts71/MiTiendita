<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_detalles', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('precio', 5, 2);
            $table->integer('cantidad')->unsigned();
            $table->integer('idProducto')->unsigned();
            $table->foreign('idProducto')
                 ->references('id')
                 ->on('productos')
                 ->onDelete('cascade');
            $table->integer('idOrden')->unsigned();
            $table->foreign('idOrden')
                 ->references('id')
                 ->on('ordenes')
                 ->onDelete('cascade');
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
        Schema::drop('orden_detalles');
    }
}
