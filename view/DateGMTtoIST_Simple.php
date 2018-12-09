<!DOCTYPE html>
<html lang="en">
<head>
<title>DevTools | DateGMTtoIST</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<meta http-equiv="refresh" content = "5" />--> <!--//refresh page for every 5 sec-->

<meta name="title" content="DevTools"/>
<meta name="description" content="Project Compasses the Software, Web & Graphic design ; Design & Developer by Ashish K. Sondagar :) "/>
<meta name="author" content="Ashish Sondagar"/>
<meta name="keywords" content="Java,Web,Developer,website,web,application,graphics,designer,html,css,javascript,jquery,angulerjs,php,mysql,nosql,python,cloud">
<meta name="theme-color" content="#000"/>
<meta property="og:title" content="DevTools">
<meta property="og:description" content="Project Compasses the Software, Web & Graphic design ; Design & Developer by Ashish K. Sondagar :)"/>
<meta property="og:url" content="http://www.AshProjS.com/"/>
<meta property="og:image" content="http://rawdd.co.nf/$ddlib/favicons/DD2_256.ico"/>

<!-- Favicon -->
	<link rel="shortcut icon" href="http://rawdd.co.nf/$ddlib/favicons/DD2_256.ico" />

<!-- Bootstrap-3 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
body{
	text-align: center;
}

.margin5px{
	margin: 5px;
}

.width150{
	width: 150px;
</style>
</head>

<body>

<h1>DateGMTtoIST</h1>


<div>
<form class="form-inline" action="#" method="post">

	<div class="form-horizontal margin5px">
      <label class="control-label width150" for="currGmtDate">Current GMT date:</label>
      <input type="text" class="form-control"
        value="<?php date_default_timezone_set('Asia/Kolkata'); $time_now=mktime(date('H')-5,date('i')-30,date('s')); echo date('Y-m-d H:i:s', $time_now); ?>"
        id="currGmtDate" size="50">
    </div>
	
	<div class="form-horizontal margin5px">
      <label class="control-label width150" for="currIstDate">Current IST date:</label>
      <input type="text" class="form-control"
        value="<?php date_default_timezone_set('Asia/Kolkata'); echo date('Y-m-d H:i:s T P e'); ?>"
        id="currIstDate" size="50" disabled>
    </div>
    
 
 <div class="form-horizontal margin5px">
   <label class="control-label width150" for="gmtDate">GMT date:</label>
 <input type="text" class="form-control" name="gmtDate">
 </div>
 
 <div class="form-horizontal margin5px">
   <label class="control-label width150" for="istDate">IST date:</label>
   <input type="text" class="form-control" name="istDate">
 </div>
 
 <div class="form-horizontal margin5px">
   <label class="control-label width150" for="strtotime">Date To strtotime:</label>
   <input type="text" class="form-control" name="strtotime">
 </div>
 
  <div class="form-horizontal margin5px">
   <label class="control-label width150" for="strtotimeToDate">strtotime To Date:</label>
   <input type="text" class="form-control" name="strtotimeToDate">
 </div>
 
 
 <button type="submit" class="btn btn-success margin5px">Submit</button>
 <input type="reset" class="btn btn-danger" name="" value="Reset"><br>

 </form>
</div>

<?php

echo '<br>';

if(!empty($_POST["gmtDate"])){
echo "GMT to IST: " . date("Y-m-d H:i:s", strtotime("+330 minutes", strtotime($_POST["gmtDate"])));
}

if(!empty($_POST["istDate"])){
echo "IST to GMT: " . date("Y-m-d H:i:s", strtotime("-330 minutes", strtotime($_POST["istDate"])));
}

if(!empty($_POST["strtotime"])){
echo "Date To strtotime: " . strtotime($_POST["strtotime"]);
}

if(!empty($_POST["strtotimeToDate"])){
echo "strtotime To Date: " . date("Y-m-d H:i:s", $_POST["strtotimeToDate"]);
}

?>

</body>
</html>
