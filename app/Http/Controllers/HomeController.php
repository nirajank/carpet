<?php namespace App\Http\Controllers;
use App\User;
use App\Warehouse;
use Auth;
use Hash;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Branch;
use App\Reports;
use App\Purchase;
class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Auth::user()->status!=1){
	      return view('master');
	  } 
	  else
	  {
		 if(Hash::check('nirajan', Auth::user()->password))
        {
 	            return redirect('/superadmin');
        }
        else
        {
             return redirect('/branchwarehouse');  
        }
    }
}
        public function test(){
        	$data = Branch::find('BN-001')->users()->orderBy('id')->get();
        	return view('test',compact('data'));
        }
          
          public function set(Request $r){
          	$bc=$r->input('set1');
             $rw=Warehouse::where('Branch_Code',$bc)->count();
             return $rw;

          }
            public function pp(Request $r){
          	$bc=$r->input('set1');
             $rw=Purchase::where('Branch_Code',$bc)->count();
             return $rw;

          }
          public function report(Request $r){
          	$r5=$r->input('set1');
          	$data=Reports::where('Branch_Code',$r5)->select('value','color','highlight','label')->get();
          	return $data;
          }
}