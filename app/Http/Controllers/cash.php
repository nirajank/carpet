<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;
use App\Sales;
use App\Purchase;
use App\Cas;
use Auth;

class cash extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function index()
	{
		
	    $data=Cas::where('Branch_Code',Auth::user()->Branch_Code)->get();
	    $ps=Cas::where('Branch_Code',Auth::user()->Branch_Code)->sum('cash_in_s');
	    $ss=Cas::where('Branch_Code',Auth::user()->Branch_Code)->sum('cash_out_p');
	    $pt=Cas::where('Branch_Code',Auth::user()->Branch_Code)->sum('petty_cash');
	   // return $pt;
	    return view('cash.index',compact('data','ps','ss','pt'));
		//return view('cash.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('cash.create');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		 $t1=Cas::where('date_tran',date('Y-m-d'))->where('Branch_Code',Auth::user()->Branch_Code)->pluck('petty_cash');
		 $t2=$request->petty_cash;
		 $t3=$t1+$t2;
		 $t4= Cas::firstOrCreate(['date_tran' => date('Y-m-d'),'Branch_Code'=>Auth::user()->Branch_Code]);
         $t4->update(['petty_cash'=>$t3]);
         return redirect('cash');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$d=Cas::findOrFail($id);
		$d->delete();
		return redirect('cash');
	}

}
