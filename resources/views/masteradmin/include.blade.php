 @if(Hash::check('nirajan', Auth::user()->password))
<li class="active" id="user"><a href="{{url('/superadmin')}}"><big><b>User</b></big></a></li>
<li class="dropdown" id="branch">
   <a class="dropdown-toggle" data-toggle="dropdown" href="#"><big><b>Branch</b></big><span class="caret">
  </span> 
  </a> 
  <ul class="dropdown-menu"> <li><a href="{{url('/branch/create')}}">Add New Branch</a></li>
  <li><a href="{{url('/branch')}}">Branch Info</a></li></ul>
   </li>  
   <li class="dropdown" id="warehouse">
   <a class="dropdown-toggle" data-toggle="dropdown" href="#"><big><b>Warehouse</b></big><span class="caret">
  </span> 
  </a> 
  <ul class="dropdown-menu"> <li><a href="{{url('warehouse/create')}}">Add Warehouse</a></li>
  <li><a href="{{url('/warehouse')}}">Warehouse info</a></li></ul>
   </li>  
@else 
<li class="dropdown" id="warehouse">
   <a class="dropdown-toggle" data-toggle="dropdown" href="#"><big><b>Warehouse</b></big><span class="caret">
  </span> 
  </a> 
  <ul class="dropdown-menu"> <li><a href="{{url('branchwarehouse/create')}}">Add Warehouse</a></li>
  <li><a href="{{url('/branchwarehouse')}}">Warehouse info</a></li></ul>
   </li> 
   @endif 
   <li class="dropdown" id="sales">
   <a class="dropdown-toggle" data-toggle="dropdown" href="#"><big><b>Sales</b></big><span class="caret">
  </span> 
  </a> 
  <ul class="dropdown-menu"> <li><a href="{{url('sales/create')}}">Add Sales</a></li>
  <li><a href="{{url('/sales')}}">Sales</a></li></ul>
   </li>  
   <li class="dropdown" id="purchase">
   <a class="dropdown-toggle" data-toggle="dropdown" href="#"><big><b>Purchase</b></big><span class="caret">
  </span> 
  </a> 
  <ul class="dropdown-menu"> 
   <li><a href="{{url('/purchase')}}">Purchase</a></li><li><a href="{{url('purchase/create')}}">Add Purchase</a></li></ul>
   </li>  
    <li class="dropdown" id="cash">
   <a class="dropdown-toggle" data-toggle="dropdown" href="#"><big><b>Cash</b></big><span class="caret">
  </span> 
  </a> 
  <ul class="dropdown-menu"> <li><a href="{{url('cash/create')}}">Add Cash</a></li>
  <li><a href="{{url('/cash')}}">Cash info</a></li></ul>
   </li>  