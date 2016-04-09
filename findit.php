
<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="../suramshivareddy.com/photo.png" type="image/gif">
    <meta name="author" content="Suram ShivaReddy" />
    <meta name="keywords"  content="ShivaReddy, Suram ShivaReddy, Suram Shiva, Shiva R'dy" />
<meta name="description" content="I'm Suram ShivaReddy a Webdeveloper from India (Hyderabad). If you are looking for a
good looking Responsive website, I can help you with it">
<meta name="viewport" content="width=device-width, intial-scale=1">
<title>Know your day count - Shiva</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
body{
    background-image: url("Background-Texture-Images4.jpg");
	 background-size: cover;

background-color:#EEEEEE;
	}
button{
background-color:#34g98db;}
.jumbotron {
	background: #D9534F;
	color:white;
	font-family:Zapf Chancery, cursive;
	height:120px;
	text-align: center;
	padding:1px 0;}

h2{
color:#D9534F;
font-family:Zapf Chancery, cursive;
font-weight:900;
}
</style>
</head>
<body bgcolor="#d9534f" align="center">
<div class="jumbotron">
    <h1 style="font-size:300%">Know your day count..</h1>                   
  </div>

  <div class="container-fluid">
 

<?php

$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];

$birth= date("M-d-Y",mktime(0,0,0,$month,$day,$year));


$birthday=mktime(0,0,0,$month,$day,$year);

$presenttime=time();
if($birthday<$presenttime)
{
$difference=time()-$birthday;
$daycount=floor($difference/86400);


switch($month)
{
	case 01: echo "<h1>You were born on $day-Jan-$year</h1>";break;
	case 02: echo "<h1>You were born on $day-Feb-$year</h1>";break;
	case 03: echo "<h1>You were born on $day-Mar-$year</h1>";break;
	case 04: echo "<h1>You were born on $day-Apr-$year</h1>";break;
	case 05: echo "<h1>You were born on $day-May-$year</h1>";break;
	case 06: echo "<h1>You were born on $day-Jun-$year</h1>";break;
	case 07: echo "<h1>You were born on $day-Jul-$year</h1>";break;
	case 8: echo "<h1> You were born on $day-Aug-$year</h1>"; break;
	case 9: echo "<h1> You were born on $day-Sep-$year</h1>"; break;
	case 10: echo "<h1>You were born on $day-Oct-$year</h1>";break;
	case 11: echo "<h1>You were born on $day-Nov-$year</h1>";break;
	case 12: echo "<h1>You were born on $day-Dec-$year</h1>";break;

}

echo "<h2>You are now $daycount days old !!</h2>";

$bt=date( "d-M-Y", strtotime( "$birth +1000 day" ) );
if($daycount<1000){
echo "<h4>You turn 1,000 days old on  $bt .</h4>";}
else{
echo "<h4>You turned 1,000 days old on  $bt .</h4>";
}

$bt=date( "d-M-Y", strtotime( "$birth +3000 day" ) );
if($daycount<3000){
echo "<h4>You turn 3,000 days old on  $bt .</h4>";}
else{
echo "<h4>You turned 3,000 days old on  $bt .</h4>";
}
$bt=date( "d-M-Y", strtotime( "$birth +6000 day" ) );
if($daycount<6000){
echo "<h4>You turn 6,000 days old on  $bt .</h4>";}
else{
echo "<h4>You turned 6,000 days old on  $bt .</h4>";
}

$bt=date( "d-M-Y", strtotime( "$birth +9000 day" ) );
if($daycount<9000){
echo "<h4>You turn 9,000 days old on  $bt .</h4>";}
else{
echo "<h4>You turned 9,000 days old on  $bt .</h4>";
}
}
else{
 echo"<h1> Don't be too smart !!<br><br>Your Birthdate can't be in Future.. </h1>";

}

?>
<br>
<a class="btn btn-danger btn-xs " href="home.php">Try Another Birthdate !</a>
<br>
<h4> Share this with your friends !! </h4>
</div>
<div class="navbar navbar-inverse navbar-fixed-bottom">
      <div class="container">
	  
        <p class="navbar-text pull-left ">Copyrights &copy; 2015</p> 
		<a class="navbar-btn btn-link  btn pull-right" href="https://www.facebook.com/shivareddy0">Shiva</a><p class="navbar-text pull-right ">Developer</p>

</div>
</div>
      

</body>
</html>