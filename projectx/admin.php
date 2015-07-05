<?php

require("config.php");

$q = mysql_query("SELECT * from details ORDER BY id DESC");

$str="";
while(($res=mysql_fetch_assoc($q))!==false)
{
$n = strlen($res['source']);
  $str.='<div class=col-md-3><b>'.$n.'</b><br><img style="border:1px solid black; padding:10px; marging-bottom:5px;" src="'.$res[source].'"'." width=150px height=200px> <br><br> <a class=".'"btn btn-primary"'." href=fullview.php?id=$res[id]>view detials</a></div>";

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Project x</title>
	><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

  

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
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          
          
          <a class="navbar-brand" href="index.php"><b class="logo">Projectx</b></a>
        </div>
        
      </div>
    </div>

    <!---container- -->
      <div class="container">

  <Br><Br>
 
     <div class="row">
     
     <?php echo $str; ?>
     			
     </div>
     </div>

  <script src="js/jquery.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
   

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  

  
</body>
</html>