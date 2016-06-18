<?php namespace App\Providers;
use App\Sales;
use App\Purchase;
use App\Cas;
use Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		Purchase::updated(function ($purchase) {
         $t1=$purchase->where('Branch_Code',Auth::user()->Branch_Code)->where('date_tran',date('Y-m-d'))->sum('price');
         $t2=$purchase->where('Branch_Code',Auth::user()->Branch_Code)->where('date_tran',date('Y-m-d'))->sum('p_credit');
         $t4=$t1-$t2;
         $t3= Cas::firstOrCreate(['date_tran' => date('Y-m-d'),'Branch_Code'=>Auth::user()->Branch_Code]);
         $t3->update(['cash_out_p'=>$t4]);
	});
		Purchase::created(function ($purchase) {
         $t1=$purchase->where('Branch_Code',Auth::user()->Branch_Code)->where('date_tran',date('Y-m-d'))->sum('price');
         $t2=$purchase->where('Branch_Code',Auth::user()->Branch_Code)->where('date_tran',date('Y-m-d'))->sum('p_credit');
         $t4=$t1-$t2;
          $t3= Cas::firstOrCreate(['date_tran' => date('Y-m-d'),'Branch_Code'=>Auth::user()->Branch_Code]);
         $t3->update(['cash_out_p'=>$t4]);
	});
		Purchase::deleted(function ($purchase) {
         $t1=$purchase->where('Branch_Code',Auth::user()->Branch_Code)->where('date_tran',date('Y-m-d'))->sum('price');
         $t2=$purchase->where('Branch_Code',Auth::user()->Branch_Code)->where('date_tran',date('Y-m-d'))->sum('p_credit');
         $t4=$t1-$t2;
          $t3 = Cas::firstOrCreate(['date_tran' => date('Y-m-d'),'Branch_Code'=>Auth::user()->Branch_Code]);
         $t3->update(['cash_out_p'=>$t4]);
	});
		Sales::updated(function ($sales) {
         $t1=$sales->where('Branch_Code',Auth::user()->Branch_Code)->where('date_tran',date('Y-m-d'))->sum('discounted_price');
          $t2=$sales->where('Branch_Code',Auth::user()->Branch_Code)->where('date_tran',date('Y-m-d'))->sum('credit');
         $t4=$t1-$t2;
          $t3 = Cas::firstOrCreate(['date_tran' => date('Y-m-d'),'Branch_Code'=>Auth::user()->Branch_Code]);
         $t3->update(['cash_in_s'=>$t4]);
	});
		Sales::created(function ($sales) {
          $t1=$sales->where('Branch_Code',Auth::user()->Branch_Code)->where('date_tran',date('Y-m-d'))->sum('discounted_price');
           $t2=$sales->where('Branch_Code',Auth::user()->Branch_Code)->where('date_tran',date('Y-m-d'))->sum('credit');
         $t4=$t1-$t2;
          $t3 = Cas::firstOrCreate(['date_tran' => date('Y-m-d'),'Branch_Code'=>Auth::user()->Branch_Code]);
          if($t3->save()){
         $t3->update(['cash_in_s'=>$t4]);
     }
	});
		Sales::deleted(function ($sales) {
          $t1=$sales->where('Branch_Code',Auth::user()->Branch_Code)->where('date_tran',date('Y-m-d'))->sum('discounted_price');
           $t2=$sales->where('Branch_Code',Auth::user()->Branch_Code)->where('date_tran',date('Y-m-d'))->sum('credit');
         $t4=$t1-$t2;
          $t3 = Cas::firstOrCreate(['date_tran' => date('Y-m-d'),'Branch_Code'=>Auth::user()->Branch_Code]);
         $t3->update(['cash_in_s'=>$t4]);
	});
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'App\Services\Registrar'
		);
	}

}
