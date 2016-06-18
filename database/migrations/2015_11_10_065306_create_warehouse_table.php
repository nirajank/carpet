<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarehouseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('warehouse', function(Blueprint $table)
		{
			$table->string('Design_Code');
			$table->primary('Design_Code');
			$table->string('Item_Name');
			$table->string('Item_size');
		    $table->string('color');
		    $table->string('Branch_Code')->nullable();	
		    $table->foreign('Branch_Code')->references('Branch_Code')->on('branch')->onUpadate('cascade')->onDelete('cascade');
		     $table->softDeletes();
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
		Schema::drop('warehouse');
	}

}
