<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('report', function(Blueprint $table)
		{
           $table->increments('id');
           $table->integer('value')->nullable();
           $table->string('color');
           $table->string('highlight');
           $table->string('label');
           $table->string('Branch_Code');
           
		});

	}
  
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('report');
	}

}
