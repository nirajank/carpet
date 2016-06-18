<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Icarus Solutions</title>
  <link rel="stylesheet" type="text/css" href="lib/bootstrap.min.css"/> </link>
  <link rel="stylesheet" type="text/css" href="dstyle.css"/> </link>
    <!-- Adding jQuery library -->
  <script type="text/javascript" src="lib/jquery.min.js"></script>
   <script type="text/javascript" src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
   <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
   <script type="text/javascript">
   $(document).ready(function(){
    $('#myTable').DataTable();
   });
    </script>
</head>
<body>
<div style="margin-left:100px;margin-right:100px;">
 <div class="row">
   <div class="col-md-6">
     <div>
        <img src="images/logo.jpg" height="80px" id="ttt">
           <BIG style="font-size:1.8em">CARPOOL CARPET</BIG>
                  <span>
                     <small style="position:relative;top:13px;right:200px">wholesaler of carpet worldwide</small>
                     </span>
        </div>
    </div>
  <div class="col-md-2 col-md-offset-4" style="position:relative;top:20px;left:100px">
     <a href="#"><img src="images/facebook.png" height="40px" ></a>
     <span><small>Connect to </small>
     <small style="position:relative;top:10px;right:49px">facebook</small>
</span>
</div>
</div>
<div class="row">
<ul class="nav nav-tabs" style="background-color:black"> 
  <li class="dropdown">
   <a class="dropdown-toggle" data-toggle="dropdown" href="#"><big><b>Warehouse</b></big><span class="caret">
  </span> 
  </a> 
  <ul class="dropdown-menu"> <li><a href="form.html">Add Warehouse</a></li></ul>
   </li>  
   <li class="dropdown">
   <a class="dropdown-toggle" data-toggle="dropdown" href="#"><big><b>Sales</b></big><span class="caret">
  </span> 
  </a> 
  <ul class="dropdown-menu"> <li><a href="#">Add Sales</a></li></ul>
   </li>  
   <li class="dropdown">
   <a class="dropdown-toggle" data-toggle="dropdown" href="#"><big><b>Purchase</b></big><span class="caret">
  </span> 
  </a> 
  <ul class="dropdown-menu"> <li><a href="#">Add Purchase</a></li></ul>
   </li>  
   <li class="dropdown">
   <a class="dropdown-toggle" data-toggle="dropdown" href="#"><big><b>Report</b></big><span class="caret">
  </span> 
  </a> 
  <ul class="dropdown-menu"> <li><a href="#">Add Report</a></li></ul>
   </li>  
   <li class="dropdown">
   <a class="dropdown-toggle" data-toggle="dropdown" href="#"><big><b>Cash</b></big><span class="caret">
  </span> 
  </a> 
  <ul class="dropdown-menu"> <li><a href="#">Add Petty Cash</a></li></ul>
   </li>  
   <li class="dropdown">
   <a class="dropdown-toggle" data-toggle="dropdown" href="#"><big><b>Deals</b></big><span class="caret">
  </span> 
  </a> 
  <ul class="dropdown-menu"> <li><a href="#">Add Deals</a></li></ul>
   </li>  
   <li class="pull-right"><a href="#"><span class="glyphicon glyphicon-off" style="padding-right:10px"></span><span><big><b>Logout</b></big></span></a></li>
   </ul>
</div>
        <div class="row">
             <div class="col-md-4">
            <canvas id="chart-area" width="160" height="190" style="margin-left:100px"/>
            </canvas><p style="padding-left:140px;text-decoration:underline"><big><b>Annual Report</b></big></p></div>
             <div class="col-md-4">
             <div class="jumbotron" style="border-radius:75px;position:relative;top:10px;height:165px;width:250px">
                <big style="padding-left:120px;padding-bottom:70px"><b>S</b></big><br>
                <b style="padding-left:100px;">Total Sales</b><br>
                <b style="position:relative;top:6px;left:120px">10</b>

                
             </div>         
                <p style="padding-left:60px;text-decoration:underline"><big><b>Sales Summary</b></big></p>
             </div>
              <div class="col-md-4">
                   <div class="jumbotron" style="border-radius:75px;position:relative;top:10px;height:165px;width:250px">
                <big style="padding-left:120px;padding-bottom:70px"><b>P</b></big><br>
                <b style="padding-left:90px;">Total Purchase</b><br>
                <b style="position:relative;top:6px;left:120px">10</b>
             </div>         
                <p style="padding-left:63px;text-decoration:underline"><big><b>Purchase Summary</b></big></p>
              </div>
            
            </div>
        <div class="row">

       <div class="table table-striped"> <table class="table table-striped table-bordered bootstrap-datatable datatable responsive" id="myTable"> <caption><big><b style="color:white;padding-left:6px">WAREHOUSE</b></big></caption> 
       <thead> 
       <tr style="background-color:black"> <th class="f">Product</th> 
       <th class="f">Payment Date</th> 
       <th class="f">Status</th> 
       <th class="f">Action</th></tr> 
       </thead> <tbody> 
       <tr>
        <td>Product1</td> 
        <td>23/11/2013</td>
        <td>Pending</td>
         <td><span class="glyphicon glyphicon-remove" style="margin-right:3px;"></span><span class="glyphicon glyphicon-pencil"></span></td>
         </tr>
         <tr>
        <td>Product1</td> 
        <td>23/11/2013</td>
        <td>Pending</td>
         <td><span class="glyphicon glyphicon-remove" style="margin-right:3px;"></span><span class="glyphicon glyphicon-pencil"></span></td>
         </tr>
         <tr>
        <td>Product1</td> 
        <td>23/11/2013</td>
        <td>Pending</td>
         <td><span class="glyphicon glyphicon-remove" style="margin-right:3px;"></span><span class="glyphicon glyphicon-pencil"></span></td>
         </tr>
         <tr>
        <td>Product1</td> 
        <td>23/11/2013</td>
        <td>Pending</td>
         <td><span class="glyphicon glyphicon-remove" style="margin-right:3px;"></span><span class="glyphicon glyphicon-pencil"></span></td>
         </tr>
         <tr>
        <td>Product1</td> 
        <td>23/11/2013</td>
        <td>Pending</td>
         <td><span class="glyphicon glyphicon-remove" style="margin-right:3px;"></span><span class="glyphicon glyphicon-pencil"></span></td>
         </tr>
         <tr>
        <td>Product1</td> 
        <td>23/11/2013</td>
        <td>Pending</td>
         <td><span class="glyphicon glyphicon-remove" style="margin-right:3px;"></span><span class="glyphicon glyphicon-pencil"></span></td>
         </tr>
         <tr>
        <td>Product1</td> 
        <td>23/11/2013</td>
        <td>Pending</td>
         <td><span class="glyphicon glyphicon-remove" style="margin-right:3px;"></span><span class="glyphicon glyphicon-pencil"></span></td>
         </tr>
         <tr>
        <td>Product1</td> 
        <td>23/11/2013</td>
        <td>Pending</td>
         <td><span class="glyphicon glyphicon-remove" style="margin-right:3px;"></span><span class="glyphicon glyphicon-pencil"></span></td>
         </tr>
         <tr>
        <td>Product1</td> 
        <td>23/11/2013</td>
        <td>Pending</td>
         <td><span class="glyphicon glyphicon-remove" style="margin-right:3px;"></span><span class="glyphicon glyphicon-pencil"></span></td>
         </tr>
         <tr>
        <td>Product1</td> 
        <td>23/11/2013</td>
        <td>Pending</td>
         <td><span class="glyphicon glyphicon-remove" style="margin-right:3px;"></span><span class="glyphicon glyphicon-pencil"></span></td>
         </tr>
         <tr>
        <td>Product1</td> 
        <td>23/11/2013</td>
        <td>Pending</td>
         <td><span class="glyphicon glyphicon-remove" style="margin-right:3px;"></span><span class="glyphicon glyphicon-pencil"></span></td>
         </tr>
       </tbody> 
         </table> </div>
         </div></div>

  <script src="lib/bootstrap.min.js"></script>
  <script src="js/chart.js" type="text/javascript"></script>

    <script>

        var pieData = [
                {
                    value: 300,
                    color:"#F7464A",
                    highlight: "#FF5A5E",
                    label: "Red"
                },
                {
                    value: 50,
                    color: "#46BFBD",
                    highlight: "#5AD3D1",
                    label: "Green"
                },
                {
                    value: 100,
                    color: "#FDB45C",
                    highlight: "#FFC870",
                    label: "Yellow"
                },
                {
                    value: 40,
                    color: "#949FB1",
                    highlight: "#A8B3C5",
                    label: "Grey"
                },
                {
                    value: 120,
                    color: "#4D5360",
                    highlight: "#616774",
                    label: "Dark Grey"
                }

            ];

            window.onload = function(){
                var ctx = document.getElementById("chart-area").getContext("2d");
                window.myPie = new Chart(ctx).Pie(pieData);
            };



    </script>
  </body>
   </html>