<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Warehouse;
use Auth;
use Hash;
use App\Branch;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class superadmincontroller extends Controller {

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
		
                $dat=User::paginate(9);
                 $dat->setPath('');
 	            return view('masteradmin.index',compact('dat'));
     
		/**$data=User::all();
 	    return view('masteradmin.index',compact('data'));**/
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		$data=User::findOrFail($id);
		$Branch_Code=Branch::lists('Branch_Code','Branch_Code');
		return view('masteradmin.edit',compact('data','Branch_Code'));
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
        'name' => 'required',
        'email' => 'required',
        'Branch_Code'=>'required',
        'status'=>'required',
         ]);
		$ud=User::findOrFail($id);
		$ud->update($request->all());
		return redirect('superadmin');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
