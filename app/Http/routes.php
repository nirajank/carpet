<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function(){
	return view('auth.login');
});

Route::get('home', 'HomeController@index');
Route::get('ttt',function(){
	return view('jpt');
});
//Route::get('/test','HomeController@test');
Route::any('/rep','HomeController@report');
Route::resource('warehouse', 'warehousecontroller');
Route::resource('superadmin','superadmincontroller');
Route::resource('branch','branchcontroller');
Route::resource('iteminvoice','iteminvoicecontroller');
Route::resource('branchwarehouse','branchwarehousecontroller');
Route::resource('sales','salescontroller');
Route::resource('partial','partialcontroller');
Route::any('/set1','salescontroller@set');
Route::any('/bc','HomeController@set');
Route::any('/pp','HomeController@pp');
Route::resource('purchase','purchasecontroller');
Route::any('/set2','salescontroller@set2');
Route::any('/set3','salescontroller@set3');
Route::any('exchange','salescontroller@exchange');
Route::any('purchaseajax','purchasecontroller@set');
Route::resource('deal','deals');
Route::resource('cash','cash');
Route::resource('test','test');
Route::any('t',function(){
	$a=0;
	$b=1;
	$c=array('a' => $a,'b'=>$b);
	return $c;

});


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
