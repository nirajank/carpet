<!DOCTYPE html>
<html lang="en">
<head>
	<title>icarus</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap.min.css')}}">
   <script type="text/javascript" src="{{asset('lib/jquery.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('lib/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
   <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
   <script type="text/javascript">
   $(document).ready(function(){
    $('#myTable').DataTable();
   });
    </script>
</head>
<body  style="background-color:#252830">
<div id="body">
<div class="left-col">
     <div class=" col-xs-7 col-md-7">
     <a href="#" ><span class="glyphicon glyphicon-leaf"> </a>
    </div>
    <div class="col-xs-7 col-md-7">
       <div class="input-group"  >
        <input type="text" class="form-control" placeholder="Search for..." style="background:#363636">
        <span class="input-group-btn">
        <button class="btn btn-default" style="background:#363636" type="button"><span class="glyphicon glyphicon-search" style="color:white"> </span></button>
        </span>
      </div>
    </div>
    <div class="col-xs-7 col-md-9">
      <div class="dashboards">
      <h6 style="text-align:center; color:#c3c3c3;" > DASHBOARDS</h6>
        <ul class="nav nav-pills nav-stacked">
          <li role="presentation" class="active"><a href="#">MENU</a></li>
          <li role="presentation"><a href="Fluid Layout.html">SLIDERS</a></li>
          <li role="presentation"><a href="icon-navigation.html">ABOUT</a></li>
          <li role="presentation"><a href="icon-navigation.html">SERVICES</a></li>
          </ul>
      
      </div>
    </div>
    
    <div class="col-xs-7 col-md-9">
    <div class="more">
    <h6 style=" text-align:center;color:#c3c3c3;"> MORE</h6>
    <ul class="nav nav-pills nav-stacked">
      <li role="presentation"><a href="#">SEND EMAIL</a></li>
      <li role="presentation"><a href="http://www.getbootstrap.com/" target="_blank">EMPLOYEE INFO</a></li>
      <li role="presentation"><a href="light ui.html">SALARY</a></li>
      <li role="presentation"><a href="#">PROJECT MANAGEMENT</a>
      <li role="presentation"><a href="#">MESSEGING SYSTEM</a>  
            <li role="presentation"><a href="#">PETTY COST</a>
      </ul> 
        </div>
        </div>
      
</div>    
   
   
  
<!-- right column -->

<div class="right-col">
 <div class="row">
  <div class="col-xs-7 col-md-12"> 
  <div class="input-group pull-right" style="width:150px;" >
     <input type="text" class="form-control" value="01/01/15 - 01/08/15" id="datepicker">
     <span class="input-group-btn">
         <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-calendar" > </span></button>
         </span>
  </div>
    <h6 style="color:#c3c3c3"> DASHBOARDS</h6>
  </div>
</div>
<div class="row block">
   <div class="col-xs-7 col-md-4"> 
  <p class="Overview" style="color:white">Overview <p>
  </div>
</div>

<div class="row">
<div class="col-xs-2 col-md-4">
<div class="input-group">
  <span class="input-group-btn">
        <button class="btn btn-default" style="background:#363636" type="button"><span class="glyphicon glyphicon-search" style="color:white"> </span></button>
      </span>
      <input type="text" class="form-control" placeholder="Search orders" style="background:#363636">
      
    </div>
</div>

<div class="col-xs-offset-2 col-xs-2 col-md-offset-6 col-md-2">
  <span><button type="button" class="btn" style="background:transparent; color:#1997c6; border-color:#1997c6;">
    ADD MENU
  </span>
  </button>
</div>
</div>


<div class="row">
<div class="col-xs-6 col-md-12">

 <div class="table-responsive">
            <table class="table" id="myTable">
  <thead style="color:white">
  <tr>
  <td>ID</td>
  <td>NAME</td>
  <td>LINK</td>
  <td>ACTION</td>
  </tr>
  </thead>
  <tbody style="color:#c3c3c3">
  </tbody>
  
</table>
</div>
 
</div>
</div>
</div>
</div>

</body>

 
</html>



