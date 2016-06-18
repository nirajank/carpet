<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BranchWarehouse extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('warehouse_branch', function(Blueprint $table)
		{

			$table->string('Branch_Code')->index();
			$table->foreign('Branch_Code')->references('Branch_Code')->on('branch')->onDelete('cascade');
			$table->string('Design_Code')->index();
			$table->foreign('Design_Code')->references('Design_Code')->on('warehouse')->onDelete('cascade');
			
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
		Schema::drop('warehouse_branch');
	}

}
