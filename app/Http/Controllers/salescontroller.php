<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\salesrequest;
use Illuminate\Http\Request;
use App\Sales;
use  App\User;
use  App\Warehouse;
use  App\Branch;
use Auth;
use Session;
use Validator;
use App\Reports;

class salescontroller extends Controller {

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
        if(Auth::user()->Branch_Code=='BN-00')
        {
        	 $data=Sales::all();
		return view('sales.index',compact('data','Branch_Name'));
	}
	else{
		 $data=Sales::where('Branch_Code',Auth::user()->Branch_Code)->get();
		return view('sales.index',compact('data','Branch_Name'));
	}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	    $Branch_Code=Auth::user()->lists('Branch_Code','Branch_Code');
	    $Branch_Cod=Auth::user()->Branch_Code;
	    $check=Warehouse::where('Branch_Code',$Branch_Cod)->first();
	    $Design_Code=Warehouse::where('Branch_Code',$Branch_Cod)->pluck('Design_Code');
	    $Item_Name=Warehouse::where('Branch_Code',$Branch_Cod)->lists('Item_Name','Item_Name');
	     $Item_size=Warehouse::where('Branch_Code',$Branch_Cod)->lists('Item_size','Item_size');
	     $sales_code=Sales::lists('Design_Code','Design_Code');
	    //$Item_Name=Warehouse::lists('$I')
	    return view('sales.create',compact('Branch_Cod','Design_Code','Item_Name','Item_size','check','sales_code'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(salesrequest $request)
	{
		
		$p=$request->p_payment_or_f_payment;
		$e=$request->exchange_Status;
		if($p=='2'){
			if($e==0){
			$c=$request->cash;
			$d=$request->discounted_price;
			$cr=$d-$c;
		              }
		    else
		              {
			             $sales_code=$request->sales_code;
			             $c=$request->cash;
			             $ff=$request->discounted_price;
			             $credit=Sales::where('Design_Code',$sales_code)->pluck('credit');
			             $discounted_price=Sales::where('Design_Code',$sales_code)->pluck('discounted_price');
			             if($credit==0){
				                       if($discounted_price>$ff){
					                                             $cr=0;
				                                                 }
				                                                 else
				                                                 {
					                                             $cr=$ff-$discounted_price-$c;
				                                                  }
			                            }
			                        else{
                                         if($discounted_price>$ff){
                                                                  $cr=$discounted_price-$ff+$credit-$c;
                                                                   }
                                                               else{
                                                                   $cr=$ff-$discounted_price+$credit-$c;
                                                                   }
			                            }    

			            }

		            }
		
		else
		{
			$cr=0;
		}
		$set1=$request->item_name;
		$set2=$request->item_size;
	    $d_code=Warehouse::where('Item_Name',$set1)->where('Item_size',$set2)->pluck('Design_Code');
		Warehouse::where('Design_Code',$d_code)->delete();
        $data=Sales::create(['date_tran'=>$request->date_tran,'credit'=>$cr,'item_name' =>$request->item_name,'item_size'=>$request->item_size,'discount'=>$request->discount,'original_price'=>$request->original_price,'discounted_price'=>$request->discounted_price,'exchange_Status'=>$request->exchange_Status,'Gg_Gng'=>$request->Gg_Gng,'Return_status'=>$request->Return_status,'p_payment_or_f_payment'=>$request->p_payment_or_f_payment,'Branch_Code'=>$request->Branch_Code,'Design_Code'=>$d_code]);
        if($data->save())
        {
           $cc=Sales::where('Item_Name',$request->item_name)->where('Branch_Code',$request->Branch_Code)->count();
           $dd=Reports::firstOrCreate(['Branch_Code'=>$request->Branch_Code,'label'=>$request->item_name]);
           if($dd->save()){
           	$ary=array('red' ,'blue','green','orange','pink','grey','black');
           	$k=array_rand($ary);
           	$v1=$ary[$k];
           	Reports::where('label',$request->item_name)->where('Branch_Code',$request->Branch_Code)->update(['value'=>$cc,'highlight'=>'red','color'=>$v1]);
           }
        }
          Session::flash('message', 'sales info was successfully added!.');
          if($e==1){
             $s=$request->sales_code;
              Warehouse::withTrashed()->where('Design_Code',$s)->restore();
	          $dd=Sales::where('Design_Code',$s)->first();
		      $dd->delete();
		}

        return redirect('sales');
       
      
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
		$data=Sales::where('Design_Code',$id)->first();
        return view('sales.edit',compact('data'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		$R=$request->Return_status;
		$e=$request->exchange_Status;
		if($request->p_payment_or_f_payment==1){
			$cr=0;
		}
		else{
			$c=Sales::where('Design_Code',$id)->pluck('credit');
			$cr=$c;
		}
		if($R=='1'){
		Warehouse::withTrashed()->where('Design_Code',$id)->restore();
	    $dd=Sales::where('Design_Code',$id)->first();
		$dd->delete();
		return redirect('sales');
		}
		else{

			$ud=Sales::where('Design_Code',$id)->first();
			$discount=$request->input('discount');
		$original_price=$request->input('original_price');
		$discounted_price=$original_price-($original_price*($discount/100));

			$ud->update(['item_name' =>$request->item_name,'item_size'=>$request->item_size,'discount'=>$discount,'original_price'=>$original_price,'discounted_price'=>$discounted_price,'exchange_Status'=>$request->exchange_Status,'Gg_Gng'=>$request->Gg_Gng,'Return_status'=>$request->Return_status,'p_payment_or_f_payment'=>$request->p_payment_or_f_payment,'Branch_Code'=>$request->Branch_Code,'Design_Code'=>$request->Design_Code,'credit'=>$cr]);
		    return redirect('sales');
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
		$it=Sales::where('Design_Code',$id)->pluck('Item_Name');
		$br=Sales::where('Design_Code',$id)->pluck('Branch_Code');
		$crd=Reports::where('label',$it)->where('Branch_Code',$br)->pluck('value');
		$c1=$crd-1;
		Reports::where('label',$it)->where('Branch_Code',$br)->update(['value'=>$c1]);
		$ds=Sales::where('Design_Code',$id)->first();
	    Warehouse::withTrashed()->where('Design_Code',$id)->restore();
	    $ds->delete();
		return redirect('sales');
			
	}
	public function set(Request $request)
	{
		$set1=$request->input('set1');
		$set2=$request->input('set2');
        $dc=Warehouse::where('Item_Name',$set1)->where('Item_size',$set2)->pluck('Design_Code');
        return $dc;

	}
	public function set2(Request $request)
	{
		$set2=$request->input('set1');
		$set1=$request->input('set2');
        $dc=Warehouse::where('Item_Name',$set2)->where('Branch_Code',$set1)->lists('Item_size','Item_size');
        return $dc;

	}
	public function set3(Request $request){
		$dis=$request->dis;
		$m=$request->m;
		$f=$m-($m*($dis/100));
		return $f;
	}
	public function exchange(Request $request)
	{
		/**$fp=$request->fp;
		$sc=$request->sc;
		$t=Sales::where('Design_Code',$sc)->pluck('credit');
		$t1=Sales::where('Design_Code',$sc)->pluck('discounted_price');
		if($t==0){
			if($t1>$fp){
				$give=$t1-$fb;
				return 'Return:Rs,'.$give;
			}
			else{
				$take=$fb-$t1;
				return 'Take:Rs,'.$take;

			}
		}
		else{
			if($t1>$fp){
				$give=$t1-$fb+$t;
				return 'Return:Rs,'.$give;
			}else{
				$take=$fb-$t1+$t;
				return 'Take:Rs,'.$take;
			}

		}**/
		$fp=$request->fp;;
		$sc=$request->sc;
		$t=Sales::where('Design_Code',$sc)->pluck('credit');
		$t1=Sales::where('Design_Code',$sc)->pluck('discounted_price');
		if($t==0){
			if($t1>$fp){
				$give=$t1-$fp;
				return 'Return:Rs,'.$give;
			}
			else{
				$take=$fp-$t1;
				return 'Take:Rs,'.$take;

			}
		}
		else{
			if($t1>$fp){
				$give=$t1-$fp-$t;
				return 'Return:Rs,'.$give;
			}else{
				$take=$fp-$t1+$t;
				return 'Take:Rs,'.$take;
			}

		}

		}

}
