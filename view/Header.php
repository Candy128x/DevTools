<!DOCTYPE html>
<html lang="en">
<head>
<title>DevTools</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap-3 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
body{
	text-align: center;
}

.wid500{
	margin: 0 auto;
	width: 500px;
}

.fonSiz14{
  font-size: 18px;
}

.table td{
	text-align: left;
}

.styOprnIUSD{
	width: 150px;
}

.btnBack{
  margin-right: 10px !important;
}

div:empty {
  display:none;
}

a, a:hover{
	color: black;
}

.padd-10{
	padding: 10px;
}

.margin5px{
	margin: 5px;
}

</style>
<script>

</script>
</head>
<body>

<?php include_once('../model/config/ProjPath.php'); //echo $projPath.'<br>'; ?>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
      <a class="navbar-brand" href="#">DevTools</a>
    </div>
	<div class="collapse navbar-collapse" id="myNavbar">
	<ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo $projPath.'/view/indexHome.php'; ?>">Home</a></li>
      <li><a href="#">Insert</a></li>
      <li><a href="#">Update</a></li>
      <li><a href="#">Select</a></li>
      <li><a href="#">Delete</a></li>
      <li><a href="<?php echo $projPath."/view/TestPage.php"; ?>">TestPage</a></li>
	  <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">More
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
			<li><a href="<?php echo $projPath.'/view/DummyPage.php'; ?>" title='Demo-DummyPage'>DummyPage</a></li>
		  	<li><a href="<?php echo $projPath.'/view/DateGMTtoIST.php'; ?>">DateGMTtoIST</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
	   <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">LogIn
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href='#'>SignUp</a></li>
          <li><a href='#'>SignIn</a></li>
		  <li><a href='#'>LogOut</a></li>
        </ul>
      </li>
      <li><a href='<?php echo $projPath."/view/DummyPage.php"; ?>'>xyz</a></li>
    </ul>
	</div>
  </div>
</nav>


<!-- <h1>DevTools</h1>
<hr> -->

</body>
</html>
