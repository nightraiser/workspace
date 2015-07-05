<?php

require('dbconfig.php');

$t = $_GET['id'];
session_start();
$day = $_SESSION['day'];
$cid = $_SESSION['cid'];
$q = mysql_query("SELECT * FROM future WHERE day='$day'");
$row = mysql_fetch_row($q);

$q1;

$q12 = "SELECT * FROM sharesdb WHERE cid=$cid AND  nakshatram='$row[1]'";


$q22 = "SELECT * FROM sharesdb WHERE cid=$cid AND nakshatram='$row[1]' AND padam=$row[2]";


$q32 = "SELECT * FROM sharesdb WHERE cid=$cid AND nakshatram='$row[1]' AND padam=$row[2] AND pstart='$row[3]'";

$q42 = "SELECT * FROM sharesdb WHERE cid=$cid AND nakshatram='$row[1]' AND padam=$row[2] AND pstart='$row[3]' AND thidhi='$row[4]'";

$q52 = "SELECT * FROM sharesdb WHERE cid=$cid AND nakshatram='$row[1]' AND padam=$row[2] AND pstart='$row[3]' AND thidhi='$row[4]' AND weekday='$row[5]'";
 switch ($t) {
 	case 1:
 		$q1=mysql_query($q12);
 		break;
 		case 2:
 		$q1=mysql_query($q22);
 		break;
 		case 3:
 		$q1=mysql_query($q32);
 		break;
 		case 4:
 		$q1=mysql_query($q42);
 		break;
 		case 5:
 		$q1=mysql_query($q52);
 		break;
 	
 	default:
 		header('Location:error.html');
 		break;
 }
 $tab="";
 $i=1;
 $bcolor;
 $tcolor;
 while(($res=mysql_fetch_assoc($q1))!==false)
 {
 	if($res['diifp']<=0)
 	{
 		$bcolor='#f2dede';
 		$tcolor='#a94442';
 	}
 	else
 	{
 		$bcolor='#dff0d8';
 		$tcolor='#3c763d';
 	}
 	$tab.="<tr style="."color:$tcolor;background:$bcolor;"."><td>$i</td><td>$res[nakshatram]</td><td>$res[padam]</td><td>$res[pstart]</td><td>$res[thidhi]</td><td>$res[weekday]</td><td>$res[day]</td><td>$res[dindex]</td><td>$res[diifp]</td><td>$res[startday]</td><td>$res[high]</td><td>$res[low]</td><td>$res[diffs]</td></tr>";
 	$i++;
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

    <title>Kautilya Vyuham</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/circle.css">

    <!-- Custom styles for this template -->
    <link href="assets/offcanvas.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/ie-emulation-modes-warning.js"></script>
   
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style type="text/css">
@font-face {
    font-family: mainfont;
    src: url(fonts/circula-medium.otf);
}
    body
    {
      background: #2c3e50;
      color:black;

    }
    .logo
    {
      font-family: mainfont;
      color: white;
      font-size:30px;
    }
    .panel
    {
      cursor: pointer;
    }
    .col-md-12
    {
      background: white;
      padding:10px;
      border: 1px solid rgba(0,0,0,0);
      border-radius: 4px;
      margin-bottom:10px;
      box-shadow: -5px 5px 25px rgba(0,0,0,0.5);
    }
    tr:nth-child(3n)
    {

    	background: #ecf0f1;
    }
    tr:nth-child(4n)
    {
    	background: #bdc3c7;
    }
    tr:nth-child(5n)
    {
    	background: #7f8c8d;
    }
  </style>

  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
     <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           
          <a class="navbar-brand" href="index.php"><b class="logo">Kautilya Vyuham</b></a>
        </div>
        <div class="navbar-collapse collapse">

          
           
        </div><!--/.navbar-collapse -->
      </div>
    </div>
<div class="container">

    <div class="row">
    

    <!--col start-->
            <div class="col-md-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                            <b>Details</b>
                    </div>
                    <p>Information is being extracted FOR <?php echo "<b>$_SESSION[day]</b>"?></p>
                     <table class="table">
                     	<tr style="background:#3498db;color:white;"><td>Sno</td><td>Nakshatram</td><td>Padam</td><td>PStart</td><td>Thidhi</td><td>Week</td><td>Date</td><td>Index</td><td>PDiff</td><td>Say Start</td><td>High</td><td>Low</td><td>Diffs</td></tr>
                     <?php echo $tab; ?>
                     </table>
                        <div class="panel-footer">
                        <b>The Copyright of the content &copy; held by T.V.Prasad</b>
                     </div>
                    
                </div>
            </div>
    <!--col end-->
    

   
    </div>
</div>

</div>
      <hr>

      <footer>
        <p>© Company 2014</p>
      </footer>

    </div><!--/.container-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
   
    
    <script src="assets/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/ie10-viewport-bug-workaround.js"></script>

    <script src="assets/offcanvas.js"></script>
     
      <script src="assets/easing.js"></script>
  
  
</body></html>