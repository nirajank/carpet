<fieldset>
            
            <div class="form-group">
                <label><b>ITEM NAME</b></label>
                 {!! Form::text('item_name',null,array('class'=>'form-control','id'=>'item_name')) !!}
            </div>

            <div class="form-group">
                <label><b>PRICE</b></label>
                {!! Form::text('price','',array('class'=>'form-control','id'=>'price') )!!}
            </div>
               <div class="form-group">
                <span style="margin-left:20px"><b>GOODS STATUS</b></span><br>
                <span style="margin-left:0px"> 
                      {!! Form::select('Gg_Gng', array('1'=>'GOODS GET','0'=>'GOODS NOT GET') ,'default', array('id' => 'Gg_Gng')) !!}</span>
            </div>
            <div class="form-group">
                 {!! Form::hidden('Branch_Code',$Branch_Code->Branch_Code,array('class'=>'form-control','id'=>'price','readonly'=>true) )!!}
            </div>
           <div class="form-group">
            <span>
                <span><b>PARTIAL/FULL MODE:</b></span>
              <span>   {!! Form::select('partial', array('1'=>'partial','0'=>'full') ,'0', array('id' => 'partial')) !!}</span>
                                  <span style="margin-left:10px">ENTER PAID CASH:</span> <span>{!! Form::text('cash',null,array('value'=>0,'id'=>'cash','onchange'=>'validateprice()')) !!}</span>
                           </span> </div>

                              <div class="form-group">
            <span>
                <span><b>TAILOR STATUS:</b></span>
              <span>   {!! Form::select('tailor', array('1'=>'YES','0'=>'NO'),'0', array('id' => 'tailor','onchange'=>'validate()')) !!}</span>
              <span> {!!Form::select('purchase_code', $Design_Code, $Design_Code,['id'=>'sales_code'])!!}</span>
              <span style="margin-left:10px">RESULT:</span> <span>{!! Form::text('cash2',null,array('value'=>0,'readonly' =>true,'id'=>'cash2')) !!}</span>
            </div>          
            <div class="form-group">
                <label><b>DATE</b></label>
                {!! Form::input('date','date_tran',date('Y-m-d'),array('class'=>'form-control','id'=>'date_tran') )!!}
            </div>          
        
          
            <div class="form-group"  style="width:80px;">
                {!! form::submit($button,[' class'=>'btn btn-primary form-control'])!!}
          
         </div>
       
 </fieldset>