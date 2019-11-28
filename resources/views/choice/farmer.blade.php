<!DOCTYPE html>
<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-
lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
* {
box-sizing: border-box;
}

input[type=text], input[type=email],input[type=password],input[type=tel],select, textarea {
width: 100%;
padding: 12px;
border: 1px solid #ccc;
border-radius: 4px;
resize: vertical;
}

label {

padding: 12px 12px 12px 0;
display: inline-block;
}

input[type=submit] {
background-color: #C0C0C0;
color: white;
padding: 12px 20px;
border: none;
border-radius: 4px;
cursor: pointer;
float: right;
}

input[type=submit]:hover {
background-color: #008080;
}

.container {
border-radius: 5px;
background-color: #f2f2f2;
padding: 20px;
}

.col-25 {
float: left;
width: 25%;
margin-top: 6px;
}

.col-75 {
float: left;
width: 75%;
margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
content: "";
display: table;
clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other
instead of next to each other */
@media screen and (max-width: 600px) {
.col-25, .col-75, input[type=submit] {
width: 100%;
margin-top: 0;
}
}

.cont{
padding: 10px 0;
background-color: #101010;
color: #9d9d9d;
bottom: 0;
width: 100%;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language="javascript" type="text/javascript">
function dynamicdropdown(listindex)
{
switch (listindex)
{
case "Manure" :
document.getElementById("Type of Nutrient").options[0]=new Option("Select Type of Nutrient","");
document.getElementById("Type of Nutrient").options[1]=new Option("Bulky Organic Manure","bom");
document.getElementById("Type of Nutrient").options[2]=new Option("Farmyard Manure","fm");

document.getElementById("Type of Nutrient").options[3]=new Option("Sheep and Goat

Manure","sgm");

document.getElementById("Type of Nutrient").options[4]=new Option("Poultry

Manure","pm");

document.getElementById("Type of Nutrient").options[5]=new Option("Concentrated

Organic Manure","com");

document.getElementById("Type of Nutrient").options[6]=new Option("Oil

Cakes","oc");
break;

case "Fertilizers" :
document.getElementById("Type of Nutrient").options[0]=new Option("Select Type of Nutrient","");
document.getElementById("Type of Nutrient").options[1]=new Option("Organic Fertilizers","of");
document.getElementById("Type of Nutrient").options[2]=new Option("Nitrogen Based Fertilizers","nbf");
document.getElementById("Type of Nutrient").options[3]=new Option("Potassium Based
Fertilizers","pbf");

document.getElementById("Type of Nutrient").options[3]=new Option("Phosphorus

Based Fertilizers","phbf");

document.getElementById("Type of Nutrient").options[3]=new Option("Solid

Fertilizers","sf");
break;
}
return true;
}

function GEEKFORGEEKS()
{
var fruits = document.forms["RegForm"]["Fruits"];
var TOS = document.forms["RegForm"]["tos"];
var nfs = document.forms["RegForm"]["nfs"];
var ton = document.forms["RegForm"]["Type of Nutrient"];

if (fruits.selectedIndex < 1)
{
alert("enter fruit");
fruits.focus();
return false;
}

if (TOS.selectedIndex < 1)
{
alert("enter type of soil");
TOS.focus();
return false;
}

if (nfs.selectedIndex < 1)
{
alert("enter type of soil");
nfs.focus();
return false;
}

if (ton.selectedIndex < 1)
{
alert("enter type of soil");
ton.focus();
return false;
}
}
</script>
</head>
<body style="background : url(photo-1496483648148-47c686dc86a8.jpeg)">
<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" href="#">Farmers Aid</a>
</div>
<div>
<ul class="nav navbar-nav">
<li><a href="#home">Home</a></li>
<li><a href="#contact">Contact</a></li>
<li><a href="#about">About</a></li>

</ul>

</div>

<ul class="nav navbar-nav navbar-right">
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Login <span
class="glyphicon glyphicon-log-in"></span></a>
<div class="dropdown-menu">
<form id="formLogin" class="form container-fluid">
<div class="form-group">
<label for="usr">Email:</label>
<input type="email" class="form-control" id="usr">
</div>
<div class="form-group">
<label for="pwd">Password:</label>
<input type="password" class="form-control" id="pwd">
</div>
<button type="button" id="btnLogin" class="btn btn-block">Login</button>
</form>
<div class="container-fluid">
<br>
<a class="small" href="#">Forgot password?</a>
</div>
</div>
</li>

<li><a href="#">Register</a></li>

</ul>
</div>
</div>
</nav>

<h1 style="text-align:center">Next Step!<i class= 'far fa-smile' style='font-size:36px'></i></h1>

<div class="container">
<form name = "RegForm" href="{{URL::to('/dashboard')}}" onsubmit=" return GEEKFORGEEKS()" method="post">

<div class="row">
<div class="col-25">
<label for="Fruits">Fruits</label>
</div>
<div class="col-75">
<select id="Fruits" name="Fruits">
<option value="Select">Select</option>
<option value="Apple">Apple</option>
<option value="Cherry">Cherry</option>
<option value="Corn">Corn</option>
<option value="Peach">Peach</option>
<option value="Potato">Potato</option>
</select>
</div>
</div>
<br><br>
<div class="row">
<div class="col-25">
<label for="tos">Type of Soil</label>
</div>
<div class="col-75">
<select id="tos" name="tos">
<option value="Select">Select</option>
<option value="Sandy Soil">Sandy Soil</option>
<option value="Clay Soil">Clay Soil</option>
<option value="Silt Soil">Silt Soil</option>
<option value="Peat Soil">Peatt Soil</option>
<option value="Chalk Soil">Silt Soil</option>
<option value="Loam Soil">Silt Soil</option>
</select>
</div>
</div>
<br><br>
<div class="category_div" id="category_div">Nutrient for Soil:

<select id="nfs" name="nfs" onchange="javascript:
dynamicdropdown(this.options[this.selectedIndex].value);">
<option value="">Select</option>
<option value="Manure">Manure</option>
<option value="Fertilizers">Fertilizers</option>
</select>
</div>
<br><br>
<div class="sub_category_div" id="sub_category_div">Type of Nutrient:
<script type="text/javascript" language="JavaScript">
document.write('<select name="Type of Nutrient" id="Type of Nutrient"><option value="">Select Type of
Nutrient</option></select>')
</script>
<noscript>
<select id="Type of Nutrient" name="Type of Nutrient">
<option value="open">OPEN</option>
<option value="delivered">DELIVERED</option>
</select>
</noscript>
</div>
<br>
<div class="row">
<div class="btn-group buttons" style="float:right"><a href="/dashboard"><button type="button" class="btn btn-primary btn-lg">Submit</button></a></div>

</div>
</form>
</div>
<footer>
<div class="cont">
<p><center>Copyright @ Farmer's Aid.<br> All Rights Reserved Contact Us: +91 900 0000 000</center></p>
</div>
</footer>
</body>
</html>
