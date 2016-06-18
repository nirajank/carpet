<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\purchaserequest;
use Illuminate\Http\Response;

use Illuminate\Http\Request;
use App\Sales;
use App\Purchase;
use App\User;
use Auth;
class purchasecontroller extends Controller {

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
			$data=Purchase::where('Branch_Code',Auth::user()->Branch_Code)->get();
			return view('purchase.index',compact('data'));
		
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		$Design_Code=Sales::where('Branch_Code',Auth::user()->Branch_Code)->lists('Design_Code','Design_Code');
		$Branch_Code=User::where('Branch_Code',Auth::user()->Branch_Code)->first();
		return view('purchase.create',compact('Design_Code','Branch_Code'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(purchaserequest $request)
	{
		$item_name=$request->item_name;
		$price=$request->price;
		$Gg_Gng=$request->Gg_Gng;
		$partial=$request->partial;
		$cash=$request->cash;
		$tailor=$request->tailor;
		$cash2=$request->cash2;
		$purchase_code=$request->purchase_code;
		$Branch_Code=$request->Branch_Code;
		//$sales_id=Sales::where('Design_Code',$purchase_code)->pluck('id');
		
		if($partial==1 && $cash2!='No credit'){
			if($tailor==1){
			 $credit=Sales::where('Design_Code',$purchase_code)->pluck('credit');
			  if($credit<$price && $credit>0){
        	$s=Sales::where('Design_Code',$purchase_code)->first();
          $s->update(['credit'=>'0','p_payment_or_f_payment'=>'1']);
           $p_credit=$price-$credit-$cash;
       }
       elseif($credit>$price) {
       	 $s1=$credit-$price;
       	 $s=Sales::where('Design_Code',$purchase_code)->first();
          $s->update(['credit'=>$s1]);
           $p_credit=0;
       }
       elseif($credit==0 || $credit<0){
       	$p_credit=$price-$cash;
       }
   }
        else{
        	$p_credit=$price-$cash;
        }
    }
        else
        {
        	$p_credit=0;
        }
        Purchase::create(['date_tran'=>$request->date_tran,'Branch_Code'=>$Branch_Code,'item_name' =>$item_name,'price'=>$price,'Gg_Gng'=>$Gg_Gng,'p_credit'=>$p_credit,'partial'=>$partial,'cash'=>$cash,'cash2'=>$cash2]);
        return redirect('purchase')->with('status', 'info successfully saved');;

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
		$data=Purchase::find($id);
		$Design_Code=Sales::lists('Design_Code','Design_Code');
        return view('purchase.edit',compact('data','Design_Code'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
		$ud=Purchase::find($id);
		if($request->partial==0){
		$ud->update(['p_credit'=>0]);
	     }
		$ud->update($request->all());
		return redirect('purchase');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$dd=Purchase::find($id);
		$dd->delete();
		return redirect('purchase');
	}
	public function set(Request $request){
		$a=$request->set1;
		$b=$request->set2;
        $credit=Sales::where('Design_Code',$a)->pluck('credit');
        if($credit<$b && $credit>0){
        	//$s=Sales::where('Design_Code',$a)->first();
          // $s->update(['credit'=>'0','p_payment_or_f_payment'=>'1']);
           $ff=$b-$credit;
           return 'Give:'.$ff;
       }
       elseif($credit>$b) {
       	 $s1=$credit-$b;
       	 //$s=Sales::where('Design_Code',$a)->first();
         //  $s->update(['credit'=>$s1]);
           return 'tailor credit now:'.$s1;


       }
       if($credit==0 || $credit<0){
       	return 'NO credit';
       }

     
      
	}

}
