<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Branch;

class branchcontroller extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct()
	{
		//$this->middleware('warehouse');
	}
	public function index()
	{
		$data=Branch::all();
		return view('branch.index',compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('branch.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		
		$this->validate($request, [
        'Branch_Name' => 'required',
        'Branch_Code'=>'required|unique:branch',
        'Contact'=>'required',
        'Address'=>'required'
         ]);
         $data=Branch::create($request->all());
         return redirect('branch');
	     
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
		$data=Branch::where('Branch_Code',$id)->first();
		return view('branch.edit',compact('data'));
	   
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
        'Branch_Name' => 'required',
        'Contact'=>'required',
        'Address'=>'required'
         ]);
		$ud=Branch::findOrFail($id);
		$ud->update($request->all());
		return redirect('branch');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	   $dd=Branch::where('Branch_Code',$id)->first();
		$dd->delete();
		return redirect('branch');
		
	}

}
