<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>
.btn{
padding: 18px 36px;
}

.cont{
padding: 10px 0;
background-color: #101010;
color: #9d9d9d;
bottom: 0;
width: 100%;
}
</style>
<body>
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

<h1 style="text-align:center;">QUALIFICATION</h1><br><br><br>
<div class="row text-center">
<div class='col-lg-5'>
<?php $uid=0 ?>
<div class="btn-group buttons"><a href="{{URL::to('/qualification/'.$uid)}}"><button type="button" class="btn btn-primary btn-
lg">Farmer</button></a></div>

</div>
<br><br>
<div class='col-lg-5'>
<?php $uid=1 ?>
<div class="btn-group buttons"><a href="{{URL::to('/qualification/'.$uid)}}"><button type="button" class="btn btn-primary btn-

lg"id="target1">Researcher</button></a></div>
</div>
<br><br>
<div class='col-lg-5'>
<?php $uid=2 ?>
<div class="btn-group buttons"><a href="{{URL::to('/qualification/'.$uid)}}"><button type="button" class="btn btn-primary btn-
lg">Student</button></a></div>

</div>
</div>
</body>
</html>