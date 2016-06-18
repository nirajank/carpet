<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('purchases', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('item_name');
			$table->float('price');
			$table->boolean('Gg_Gng');
		    $table->boolean('partial');
		    $table->float('cash')->nullable();
		    $table->float('p_credit');
		    $table->boolean('tailor')->nullable();
		    $table->integer('sales_id')->unsigned()->nullable();	
		    $table->foreign('sales_id')->references('id')->on('sales')->onUpadate('cascade')->onDelete('cascade');
		    $table->float('give')->nullable();
		     $table->string('Branch_Code')->nullable();	
		   $table->foreign('Branch_Code')->references('Branch_Code')->on('branch')->onUpadate('cascade')->onDelete('cascade');
			
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
		Schema::drop('purchases');
	}

}
