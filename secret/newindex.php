<?php
$sm=$_POST['smail'];
$rm=$_POST['rmail'];
$m = $_POST['message'];
$t = $_POST['secs'];
$ids=md5($m);
include("dbconnect.php");
//mysql_connect('localhost','root','livetolearn') or die("no con");
//mysql_select_db('secret') or die("no db");
if($_POST['smail']!="")
{
mysql_query("INSERT INTO secrets (identity,sender,reciever,message,tsecs) VALUES ('$ids','$sm','$rm','$m','$t')") or die("server busy");
header("Location:view.php?id=$ids");
}
if($sm!="")
{
  include("dbconnect.php");
//mysql_connect('localhost','root','livetolearn') or die("no con");
//mysql_select_db('secret') or die("no db");

}
?>






<!DOCTYPE html>
<html>
<head>
	<title>S3ecr3t</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.css">

<!-- Latest compiled and minified JavaScript -->

	<style>
	body
	{
		background: black;
		
	}
	.lock
	{
		background-image: url('lock.png');
		width:128px; 
   height:128px;
   display: block;
   

	}
	.panel p
	{
		padding: 5px;
	}
	#mask p,h1
	{
		padding: 20px;
		padding-top:5px;
	}
	#mask h1
	{
		font-weight: bold;
	}
	#mask
	{

		color: white;
		background: rgba(0,0,0,0.7);
		position:absolute;
		width: 100%;
		height: 100%;
		top:0%;
		left: 0%;
		cursor: pointer;
		z-index: 100;
	}
	#spec
	{
		z-index: 0;
	}
	</style>
</head>
<body>
<!-- Modal start-->
          <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background:#1abc9c;color:white;">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="loginLable">Talk here</h4>
      </div>
       <form method="post" action="login.php">
      <div class="modal-body">
     
        <label for="lid" class="control-label">Email/id</label>
        <input type="text" class="form-control" placeholder="Email/login id" name="lid">
          <label for="pwd" class="control-label" placeholder="password">Password</label>
        <input type="password" class="form-control" name="pwd">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <input type="submit" id="shout" class="btn btn-success" value="Login">
      </div>
      </form>
    </div>
  </div>
</div>
<!--Modal end -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">S3CR3T</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
        <li><a data-toggle="modal" data-target="#login">Login</a></li>
       <li><a href="signup.php">Sign up</a></li>
      </ul>
      
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
<div class="row">
	<div class="col-m-d-12">
		<div class="jumbotron">
		<CENTER>	<h1>S3CRET</h1></CENTER>
		<hr>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>

</div>
<div class="row">
<div class="col-md-6">
<div class="panel panel-primary">
<div class="panel-heading">
<b>Basic account</b>
</div>
		<form id = "normal" class="well span6" action="newindex.php" method="post" enctype="multipart/form-data">
      	 <div class="form-group">
        <label for="smail">Sender's Email</label>
        <div class="input-group">
          <input type="text" class="form-control"  name="smail" placeholder="Your email" required  >
          <span class="input-group-addon"><i class="glyphicon glyphicon-icon circle-ok form-control-feedback"></i></span></div>
      </div>

       <div class="form-group">
        <label for="rmail">Reciever's Email</label>
        <div class="input-group">
          <input type="text" class="form-control"  name="rmail" placeholder="Reciever's email" required  >
          <span class="input-group-addon"><i class="glyphicon glyphicon-icon circle-ok form-control-feedback"></i></span></div>
      </div>

 <div class="form-group">
        <label for="message">Message</label>
        <div class="input-group">
        <textarea class="form-control" name="message" rows="10" cols="40">
        	
        </textarea>
<span class="input-group-addon"><i class="glyphicon glyphicon-icon circle-ok form-control-feedback"></i></span>
         </div>
      </div>

<div class="form-group">
        <label for="secs">Time in secs</label>
        <div class="input-group">
        		<select class="form-control" name="secs">
<option value="0">User defined</option>
<option value="60">60</option>
<option value="30">30</option>
<option value="15">15</option>
<option value="10">10</option>
<option value="5">5</option>

</select>
<span class="input-group-addon"><i class="glyphicon glyphicon-icon circle-ok form-control-feedback"></i></span>

         </div>
      </div>

         <div class="form-group">
         		
     										   <div class="input-group">

      
      										<input type="submit"  id="submit" value="Submit" class="btn btn-success pull-right"></div>
     <br>
     										</div>

      
								</form>

								<div class="panel-footer"><p>You cannot add files or send messages of more than 446 characters, to do so just <b>sign up</b></p></div>
</div>
</div>
<div id="spec" class="col-md-6">

<div class="panel panel-success">
<div class="panel-heading">
<b>Premium account</b>
</div>

<form id = "normal" class="well span6" action="upload.php" method="post" enctype="multipart/form-data">
      	 <div class="form-group">
        <label for="smail">Sender's Email</label>
        <div class="input-group">
          <input type="text" class="form-control"  name="smail" placeholder="Your email" required  >
          <span class="input-group-addon"><i class="glyphicon glyphicon-icon circle-ok form-control-feedback"></i></span></div>
      </div>

       <div class="form-group">
        <label for="rmail">Reciever's Email</label>
        <div class="input-group">
          <input type="text" class="form-control"  name="rmail" placeholder="Reciever's email" required  >
          <span class="input-group-addon"><i class="glyphicon glyphicon-icon circle-ok form-control-feedback"></i></span></div>
      </div>

 <div class="form-group">
        <label for="message">Message</label>
        <div class="input-group">
        <textarea class="form-control" name="message" rows="10" cols="40">
        	
        </textarea>
        <div class="form-group">
          										<div class="input-group">
          										<label for="file">Upload files</label>
            										  <input type="file" id="file" name="file" multiple accept='image/*' >

                

         
         										</div>
<span class="input-group-addon"><i class="glyphicon glyphicon-icon circle-ok form-control-feedback"></i></span>
         </div>
      </div>

<div class="form-group">
        <label for="secs">Time in secs</label>
        <div class="input-group">
        		<select class="form-control" name="secs">
<option value="0">User defined</option>
<option value="60">60</option>
<option value="30">30</option>
<option value="15">15</option>
<option value="10">10</option>
<option value="5">5</option>

</select>
<span class="input-group-addon"><i class="glyphicon glyphicon-icon circle-ok form-control-feedback"></i></span>

         </div>
      </div>

         <div class="form-group">
         		
     										   <div class="input-group">

      
      										<input type="submit"  id="submit" value="Submit" class="btn btn-success pull-right"></div>
     <br>
     										</div>

      
								</form>

</div>
</div>
</div>


</div>
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>
</html>