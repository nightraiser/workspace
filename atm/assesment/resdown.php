<?php
require('dbconnect.php');

if(isset($_POST['day']))
{
$day = $_POST['day'];
$id=1;
$w = mysql_query("SELECT * FROM result2 WHERE day = '$day' ORDER BY fname") or die(mysql_error());
$data="<table class='table table-striped'><thead><tr><td>Sno</td><td>Full name</td><td>Email</td><td>Score</td><td>Topic id</td><td>Essay</td></tr></thead>";
while(($res=mysql_fetch_assoc($w)) !== false)
{
$data.= "<tr><td>$id</td><td>$res[fname]</td><td>$res[email]</td><td>$res[score]</td><td>$res[tid]</td><td>$res[para]</td></tr>";
$id=$id+1;
}
$data.="</table>";
}

?>
<!DOCTYPE html>
<!-- saved from url=(0043)http://getbootstrap.com/examples/offcanvas/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Tecknowledge|Assesments</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/offcanvas.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../css/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="css/ie-emulation-modes-warning.js"></script>
   
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <Body>
  <br>
  <div class="container">
  	<div class="row">
  		<div class="col-md-12">
  			<div class="panel panel-primary">
  				<div class="panel-heading"><b>Results</b></div>
  				<?php echo $data; ?>
  			</div>
  		</div>
  	</div>
  </div>
  </Body>


