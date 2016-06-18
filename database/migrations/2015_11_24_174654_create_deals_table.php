<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('deals', function(Blueprint $table)
		{
			$table->string('dc');
			$table->primary('dc');
			$table->string('name');
			$table->string('type');
			$table->float('credit');
			$table->float('debit');
			$table->timestamp('date_tran');
		    $table->string('deal_type');
		    $table->float('result');
			 $table->string('Branch_Code')->nullable();	
		   $table->foreign('Branch_Code')->references('Branch_Code')->on('branch')->onUpadate('cascade')->onDelete('cascade');
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
		Schema::drop('deals');
	}

}
