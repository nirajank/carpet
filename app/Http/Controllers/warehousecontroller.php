<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Http\Requests\WarehouseRequest;
use App\Warehouse;
use Hash;
use Auth;
use App\Branch;

class warehousecontroller extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct()
	{
		$this->middleware('warehouse');
	}

	public function index()
	{
		$data=Warehouse::latest()->get();
		return view('warehouse.index',compact('data'));
 }
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{ 

		$Branch_Code=Branch::lists('Branch_Code','Branch_Code');
		return view('warehouse.create',compact('Branch_Code'));
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
        'color'=>'required',
        'Branch_Code'=>'required'
         ]);
         Warehouse::create($request->all());
         return redirect('warehouse');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	/**public function show($id)
	{
		$dd=Warehouse::findOrFail($id);
		$dd->delete();
		$ss="delete";
		return redirect('warehouse');
		/**$data=Warehouse::where('branch_id',$id)->get();
		return view('warehouse.show',compact('data'));
		
	}**/

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$Branch_Code=Branch::lists('Branch_Code','Branch_Code');
		$data=Warehouse::where('Design_Code',$id)->first();
		return view('warehouse.edit',compact('data','Branch_Code'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		$this->validate($request, [
        'Item_Name' => 'required',
        'Item_size' => 'required',
        //'Design_code'=>'required',
        'color'=>'required',
        'Branch_Code'=>'required'
         ]);
		$ud=Warehouse::findOrFail($id);
		$ud->update($request->all());
		return redirect('warehouse');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Respda**/
	public function destroy($id)
	{
		$dd=Warehouse::where('Design_code',$id)->first();
		$dd->forcedelete();
		return redirect('warehouse');
		
	}

}
