<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('codigo')->nullable();
			$table->integer('idProveedor')->nullable()->unsigned();
			$table->foreign('idProveedor')->references('id')->on('proveedores')->onDelete('set null');
			$table->string('descripcion');
			$table->string('precio_compra')->nullable();
			$table->string('precio');
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
		Schema::drop('productos');
	}

}
