<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sales', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('item_name');
			$table->string('item_size');
			$table->float('discount');
			$table->float('original_price');
			$table->float('discounted_price');
			/**1==return and 0==not return use radio maynot needs soft deleted concept in warehouse table**/
			$table->boolean('Return_status');
			/**p==partial and f=fullpayment use checkbox needs other table to handle this**/
			$table->string('p_payment_or_f_payment');
			$table->float('credit');
    
			//$table->float('recieved');
			//$table->float('credit');
			/**Gg=goods get after payment and Gng=good not get after payment so warehouse data should be maintained accordingly**/ 
			$table->boolean('Gg_Gng');
			/**if status=1 restore soft deleted item in warehouse**/
			$table->string('exchange_Status');
			 $table->string('Branch_Code')->nullable();	
		   $table->foreign('Branch_Code')->references('Branch_Code')->on('branch')->onUpadate('cascade')->onDelete('cascade');
		     $table->string('Design_Code')->nullable();	
		    $table->foreign('Design_Code')->references('Design_Code')->on('warehouse')->onUpadate('cascade')->onDelete('cascade');
			$table->timestamps();
			$table->timestamp('date_tran');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sales');
	}

}
