@extends('master')
@section('section')
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>

<style> 
#panel {
    background-color:black;
    border: solid 1px #c3c3c3;
    color:white;
    height:1000px;
   width: 300px;
   display:none;
}

</style>

<nav class = "navbar navbar-inverse" role = "navigation" style="margin-bottom:0px">
   
   <div class = "navbar-header">
      <a class = "navbar-brand" href = "#">
          <span id="flip" class="glyphicon glyphicon-th-list"></span>
        </a>
   </div>
   
   <div>
      <ul class = "nav navbar-nav">
         <li class = "active"><a href = "#">iOS</a></li>
         <li><a href = "#">SVN</a></li>
         <li class = "dropdown">
            <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
               Java
               <b class = "caret"></b>
            </a>
            
            <ul class = "dropdown-menu">
               <li><a href = "#">jmeter</a></li>
               <li><a href = "#">EJB</a></li>
               <li><a href = "#">Jasper Report</a></li>
               <li class = "divider"></li>
               <li><a href = "#">Separated link</a></li>
               
               <li class = "divider"></li>
               <li><a href = "#">One more separated link</a></li>
            </ul>
            
         </li>
      </ul>
   </div>
   
</nav>
<aside id="panel" class="pull-left" style="margin-top:0px">this is the </aside><div>sfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff</div>

@stop