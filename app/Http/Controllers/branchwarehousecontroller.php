<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Branch;
use App\Warehouse;
use Auth;
use Hash;
use App\User;

class branchwarehousecontroller extends Controller {

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
		$Branch_Name=Branch::where('Branch_Code',Auth::user()->Branch_Code)->first();
		$data=Warehouse::where('Branch_Code', Auth::user()->Branch_Code)->get();
		return view('branchwarehouse.index', compact('data','Branch_Name'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		$Branch_Code=User::where('Branch_Code', Auth::user()->Branch_Code)->lists('Branch_Code','Branch_Code');
		return view('branchwarehouse.create',compact('Branch_Code'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, [
        'Item_Name' => 'required',
        'Item_size' => 'required',
        'Design_Code'=>'required|unique:warehouse',
        'color'=>'required'
         ]);
         Warehouse::create($request->all());
         return redirect('branchwarehouse');
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
		$data=Warehouse::where('Design_Code',$id)->first();
		return view('branchwarehouse.edit',compact('data','id'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$ud=Warehouse::findOrFail($id);
		$ud->update($request->all());
		return redirect('branchwarehouse');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
				$dd=Warehouse::where('Design_code',$id)->first();
		        $dd->delete();
		        return redirect('branchwarehouse');
	}

}
