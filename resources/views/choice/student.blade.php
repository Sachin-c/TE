<!DOCTYPE html>
<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
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

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
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
        case "Haryana" :
            document.getElementById("Name of Institute").options[0]=new Option("Select Institute","");
            document.getElementById("Name of Institute").options[1]=new Option("CENTRAL SOIL SALINITY RESEARCH INSTITUTE","cssri");
            document.getElementById("Name of Institute").options[2]=new Option("CHAUDHARY CHARAN SINGH HARYANA AGRICULTURAL RESEARCH INSTITUTE","ccshari");
			document.getElementById("Name of Institute").options[3]=new Option("INSTITUTE OF AGRICULTURAL ENGINEERING AND TECHNOLOGY","iaet");
            break;
        
		case "Karnataka" :
            document.getElementById("Name of Institute").options[0]=new Option("Select Institute","");
            document.getElementById("Name of Institute").options[1]=new Option("Krishi Vigyan Kendra","kvk");
            document.getElementById("Name of Institute").options[2]=new Option("Indian Agriculturl Research Institute Regional Research Centre","iarirrc");
            document.getElementById("Name of Institute").options[3]=new Option("Main Agricultural Research Station","mars");
            break;
		
		case "New Delhi" :
            document.getElementById("Name of Institute").options[0]=new Option("Select Institute","");
            document.getElementById("Name of Institute").options[1]=new Option("Crop Research Institute","cri");
            document.getElementById("Name of Institute").options[2]=new Option("Farm Agricultural Research","far");
			document.getElementById("Name of Institute").options[3]=new Option("Kheti Vigyan","kv");
            break;
		
		case "Punjab" :
            document.getElementById("Name of Institute").options[0]=new Option("Select Institute","");
            document.getElementById("Name of Institute").options[1]=new Option("Kheti Hari vigyan","beng");
            document.getElementById("Name of Institute").options[2]=new Option("Beej Bod","bg");
			document.getElementById("Name of Institute").options[3]=new Option("National Agricultural Research Institute","greg");
            break;
		
		case "Tamil Nadu" :
            document.getElementById("Name of Institute").options[0]=new Option("Select Institute","");
            document.getElementById("Name of Institute").options[1]=new Option("Kisan Sevam","ks");
            document.getElementById("Name of Institute").options[2]=new Option("Agricultural College and Research","acr");
			document.getElementById("Name of Institute").options[3]=new Option("AGRICULTURAL ENGINEERING","ae");
			document.getElementById("Name of Institute").options[4]=new Option("Anbil Dharmalingam Agricultural Institute","adai");
            break;
        }
        return true;
    }
	
	function GEEKFORGEEKS()                                    
{ 
	var degree =  document.forms["RegForm"]["deg"];
    var experience = document.forms["RegForm"]["exp"];   
    var city = document.forms["RegForm"]["city"];
	var NOI = document.forms["RegForm"]["Name of Institute"];
    if (degree.selectedIndex < 1)                  
    { 
        alert("Please enter your degree."); 
        degree.focus(); 
        return false; 
    } 
	
	    if (experience.selectedIndex < 1)                  
    { 
        alert("Please enter your experience."); 
        degree.focus(); 
        return false; 
    } 
	
	    if (city.selectedIndex < 1)                  
    { 
        alert("Please enter your city."); 
        degree.focus(); 
        return false; 
    }

	if (NOI.selectedIndex < 1)                  
    { 
        alert("Please enter your name of institute."); 
        degree.focus(); 
        return false; 
    }
    return true; 
}</script> 
</head>
<body style="background : url(photo-1496483648148-47c686dc86a8.jpeg)">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Farmers Aid</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li><a href="droplogin.html">Home</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#about">About</a></li>
      </ul>
    
  </div>
   
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Login <span class="glyphicon glyphicon-log-in"></span></a>
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
  <form name = "RegForm" href="/{{URL::to('/dashboard')}}" onsubmit="return GEEKFORGEEKS()" method="post">
  
    <div class="row">
    <div class="col-25">
      <label for="deg">Degree</label>
    </div>
    <div class="col-75">
      <select id="deg" name="deg">
        <option value="Select">Select</option>
  <option value="BSC">Bsc</option>
  <option value="MSC">Msc</option>
  <option value="Phd">Phd</option>
  <option value="Post Doctorate">Post Doctorate</option>
      </select>
    </div>
  </div>
  <br><br>
 <div class="row">
    <div class="col-25">
      <label for="exp">Experience</label>
    </div>
    <div class="col-75">
      <select id="exp" name="exp">
        <option value="Select">Select</option>
  <option value="less than 5 years">less than 5 years</option>
  <option value="5 to 10 years">5 to 10 years</option>
  <option value="more than 10 years">more than 10 years</option>
      </select>
    </div>
  </div>
<br><br>  
  <div class="category_div" id="category_div">City:
        <select id="city" name="city" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);">
        <option value="">Select State</option>
        <option value="Haryana">Haryana</option>
        <option value="Karnataka">Karnataka</option>
		<option value="New Delhi">New Delhi</option>
		<option value="Punjab">Punjab</option>
		<option value="Tamil Nadu">Tamil Nadu</option>
        </select>
    </div>
	<br><br>
    <div class="sub_category_div" id="sub_category_div">Name of Institute:
        <script type="text/javascript" language="JavaScript">
        document.write('<select name="Name of Institute" id="Name of Institute"><option value="">Select Name of Institute</option></select>')
        </script>
        <noscript>
        <select id="Name of Institute" name="Name of Institute">
            <option value="open">OPEN</option>
            <option value="delivered">DELIVERED</option>
        </select>
        </noscript>
    </div>
	<br>
  <div class="row">
    <div class="row">
    <div class="btn-group buttons" style="float:right"><a href="/dashboard"><button type="button" class="btn btn-primary btn-lg">Submit</button></a></div>

    <!--<div class="btn-group buttons"><a href="choosebtw.html"><button type="button" class="btn btn-primary btn-lg">Submit</button></a></div>-->
	<!-- <input type="submit" value="Submit"> -->
  </div>
  </form>
</div>
<!--<footer>
<div class="cont">
<p><center>Copyright @ Farmer's Aid.<br> All Rights Reserved Contact Us: +91 900 0000 000</center></p>
</div>
</footer>-->
</body>
</html>