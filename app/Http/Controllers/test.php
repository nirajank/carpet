<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Response;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
//use App\Staff;
use App\Products;
use App\Photos;

class test extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//return 'success';
		//Mail::send('test',['key' => 'value'],function($message){
      //   $message->to('kayasthanirajan@yahoo.com', 'Nirajan Kayastha')->subject('Welcome!');
     //});
          //$request->file('image')->get(
           // base_path() . '/public', $imageName
    //);
		$file= public_path(). "/n.pdf";
        
        
        return Response::download($file);
		
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
	public function store(Request $request)
	{

		 $ext = $request->file('image')->getClientOriginalExtension();
		 $imageName ='nirn'. "." . $ext;

           $request->file('image')->move(
            base_path() . '/public', $imageName
    );
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		
		$staff = Products::find(1)->photos()->pluck('imageable_id');
dd($staff);
        //retursn view('test',compact('staff'));
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
		//
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
