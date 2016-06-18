<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCashesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cashes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Branch_Code')->nullable();	
		    $table->foreign('Branch_Code')->references('Branch_Code')->on('branch')->onUpadate('cascade')->onDelete('cascade');
             $table->integer('sales_id')->unsigned()->nullable();	
		    $table->foreign('sales_id')->references('id')->on('sales')->onUpadate('cascade')->onDelete('cascade');
		     $table->integer('purchase_id')->unsigned()->nullable();	
		    $table->foreign('purchase_id')->references('id')->on('purchases')->onUpadate('cascade')->onDelete('cascade');
		    $table->float('cash_in_s');
		    $table->float('cash_out_p');
		    $table->float('cash_in_h');
		    $table->float('total_cash_r');
		    $table->float('petty_cash');
			$table->timestamps();
			 $table->date('date_tran');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cashes');
	}

}
