<?php
$result = "Please sign in";
if(isset($_POST['login']))
{
if(($_POST['id']=="admin")&&($_POST['password']=="admin"))
{
session_start();
$_SESSION['ADMIN']=md5("admin");
header("Location:index.php");
}
else
{
$result = "Login failed";
}

}


?>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
 <div class="container">
	<br><br><br>
      <form class="well col-md-6 col-md-offset-3" action="login.php" method="post">
        <h2 class="form-signin-heading"><?php echo $result; ?></h2>
	<div class="form-group">
        <input type="text" class="form-control" name="id" placeholder="Email address">
	</div>
	<div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Password">
	</div>
      
        <button class="btn btn-large btn-primary" name="login" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
</body>
</html>