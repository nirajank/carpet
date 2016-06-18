<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap.min.css')}}">
   <script type="text/javascript" src="{{asset('lib/jquery.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('lib/bootstrap.min.js')}}"></script>
   <script type="text/javascript" src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
   <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
   
   <script type="text/javascript">
  $(document).ready(function(){
  var $rows = $('#myTable tr');
$('#search').keyup(function() {
    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
    
    $rows.show().filter(function() {
        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
        return !~text.indexOf(val);
    }).hide();
});
});
</script>
</head>
<body>
 <div style="margin-left:100px;margin-right:100px;">
 <div class="row">
   <div class="col-md-6">
     <div>
        <img src="{{asset('images/logo.jpg')}}" height="80px" id="ttt">
           <BIG style="font-size:1.8em">CARPOOL CARPET</BIG>
                  <span>
                     <small style="position:relative;top:13px;right:200px">wholesaler of carpet worldwide</small>
                     </span>
        </div>
    </div>
  <div class="col-md-2 col-md-offset-4" style="position:relative;top:20px;left:75px">
     <a href="#"><img src="{{asset('images/facebook.png')}}" height="40px" ></a>
     <caption>facebook</caption>
</div>
</div>
<div class="row">
<ul class="nav nav-tabs" style="background-color:black"> 
   @yield('menu')
   <li class="pull-right"><a href="{{url('auth/logout')}}"><span class="glyphicon glyphicon-off" style="padding-right:10px"></span><span><big><b>Logout</b></big></span></a></li>
   </ul>
</div>
@if(Auth::user()->status==1)
 <div class="row">
             <div class="col-md-4">
            <canvas id="chart-area" width="160" height="190" style="margin-left:100px"/>
            </canvas><p style="padding-left:140px;text-decoration:underline"><big><b>Sales Report</b></big></p></div>
             <div class="col-md-4">
             <div class="jumbotron" style="border-radius:75px;position:relative;top:10px;height:165px;width:250px">
                <big style="padding-left:120px;padding-bottom:70px"><b>W</b></big><br>
                <b style="padding-left:50px;">Warehouse Remaining</b><br>
                <b style="position:relative;top:6px;left:120px" id="r"></b>

                
             </div>         
                <p style="padding-left:60px;text-decoration:underline"><big><b>Warehouse Summary</b></big></p>
             </div>
              <div class="col-md-4">
                   <div class="jumbotron" style="border-radius:75px;position:relative;top:10px;height:165px;width:250px">
                <big style="padding-left:120px;padding-bottom:70px"><b>P</b></big><br>
                <b style="padding-left:90px;">Total Purchase</b><br>
                <b style="position:relative;top:6px;left:120px" id="pp1">10</b>
             </div>         
                <p style="padding-left:63px;text-decoration:underline"><big><b>Purchase Summary</b></big></p>
              </div>
            
            </div>

	<div class="row">
   <style type="text/css">
   thead{
    background-color: black;
    color:white;
    }</style>
		@yield('table')
 
	</div>
     <div class= "row" id="footer">
Copyright © carpoolcarpet.com
</div>
  <script src="{{asset('js/Chart.js')}}" type="text/javascript"></script>

 <script type="text/javascript">
$(document).ready(function()
{    
     var pieData;
     $.ajax({
      url:"{{url('/rep')}}",
      data:{set1:'{{Auth::user()->Branch_Code}}'},
      success:function(data){
        pieData=data;
        var ctx = document.getElementById("chart-area").getContext("2d");
                window.myPie = new Chart(ctx).Pie(pieData);
         
  }}); 
            

 
});
    </script>
     @else

           <P> SOORY!!!!!YOU ARE NOT ACTIVE MEMBER AUTHORIZED!! PLEASE CONTACT TO THE ADMINISTRATOR </P>
              
    @endif
    <input type="hidden" value="{{Auth::user()->Branch_Code}}" id="bc">
	<script type="text/javascript">
$(document).ready(function(){
    var a=$("#bc").val();
     $.ajax({
      url:"{{url('/bc')}}",
      data:{set1:a},
      success:function(data){
         $("#r").html(data);
         
  }}); 
});
</script>
<script type="text/javascript">
$(document).ready(function(){
    var a=$("#bc").val();
     $.ajax({
      url:"{{url('/pp')}}",
      data:{set1:a},
      success:function(data){
         $("#pp1").html(data);
         
  }}); 
});
</script>

<style type="text/css">
#footer {
    background-color:black;
    color:white;
    text-align:center;
   
}</style>

</body>
</html>