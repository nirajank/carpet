<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\dealsrequest;

use Illuminate\Http\Request;
use App\Deal;
use Auth;
use App\User;
class deals extends Controller {

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
	    $data=Deal::where('Branch_Code', Auth::user()->Branch_Code)->get();
	    return view('deals.index', compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$Branch_Code=User::where('Branch_Code',Auth::user()->Branch_Code)->lists('Branch_Code','Branch_Code');
		return view('deals.create',compact('Branch_Code'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(dealsrequest $request)
	{   
		Deal::create($request->all());
		return redirect('deal');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Respons,
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
		$Branch_Code=User::where('Branch_Code',Auth::user()->Branch_Code)->lists('Branch_Code','Branch_Code');
		$data=Deal::findOrFail($id);
		return view('deals.edit',compact('data','Branch_Code'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		$name=$request->name;
		$credit=$request->credit;
		$debit=$request->debit;
		$dt=$request->deal_type;
		if($dt==1){
			$r=Deal::where('dc',$id)->pluck('credit');
			$credi=$credit+$r;
            Deal::where('dc',$id)->update(['credit'=>$credi]);
            return redirect('deal');
		}
		else{
			$r=Deal::where('dc',$id)->pluck('debit');
			$credi=$debit+$r;
            Deal::where('dc',$id)->update(['debit'=>$credi]);
             return redirect('deal');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$dd=Deal::findOrFail($id);
		$dd->delete();
		return redirect('deal');
	}

}
