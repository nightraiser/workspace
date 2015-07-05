<?php
$acknowlege = "";






?>




<?php
		if(isset($_POST['done']))
		{
			require("dbconnect.php");
			$file = $_FILES['file']['tmp_name'];
		$handle = fopen($file,"r");
		while(($line = fgets($handle))!==false)
		{
		
			$str = explode(",", $line);
				if(count($str)==6)
				{
				mysql_query("INSERT INTO verbal (qs,op1,op2,op3,op4,ans,mode) VALUES ('$str[0]','$str[1]','$str[2]','$str[3]','$str[4]','$str[5]','easy')") or die(mysql_error());
				
				}
		
		}
		$acknowlege="Done";


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

    <?php echo "<title>Admin</title>";?>

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
  <style type="text/css">
@font-face {
    font-family: mainfont;
    src: url(fonts/circula-medium.otf);
}
  body
  {
    background: #e9e9e9 url('css/texture_grain_200x200_v2.png');
    font-style: Helvetica,FreeSans,"Liberation Sans",Helmet,Arial,sans-serif;

  }
 .logo
 {
  font-family:mainfont;
  color:white;
  font-size: 25px;
 } 
 .logo:hover
 {
color:orange;
 }

  </style>

  <body >
     <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          
          
          <a class="navbar-brand" href="#"><b class="logo">ATM</b></a>
        </div>
        
      </div>
    </div>

    <div class="container">

  
 
     <div class="row">
     <br>
     <br><br>
     			<div class="col-md-6">
      					<div class="panel panel-primary">
     						 <div class="panel-heading">
     								<h4>Upload Questions</h4>
     								</div>
      									<form class="well span6" action="admin.php" method="post" enctype="multipart/form-data">
      										<div class="form-group">
        
         									

         
          										<div class="input-group">
            										  <input type="file" name="file" >

                

         
         										</div>
          <br>
     										   <div class="input-group">

      
      										<input type="submit" name="done" id="submit" value="Submit" class="btn btn-success pull-right"></div>
     <br>
     										</div>

      
								</form>
 <center> <b>CSV format</b></center>
  <table class="table"><tr style="background:rgba(45, 102, 195, 1);color:white;"><td>Question Statement</td><td>Op 1</td><td>Op 2</td><td>Op 3</td><td>Op 4</td><td>Answer</td><td>Mode</td></tr></table>
  <div class="panel-footer">
  <b>Mode</b>
  <ol><li>Easy - we</li><li>Medium - medium</li><li>Hard - hard</li></ol>
      <p><b>Note :</b>While uploading the CSV file make sure that any COMAS (,) present in questions,options or answer shall be replaced with "<b>& #44;</b>"</p>
      </div>
     </div>
     </div>

      <div class="col-md-6">
      	<div class="panel panel-primary">
      		<div class="panel-heading">
      		<h4>Download Results</h4>
      		</div>
      		<form class="well" action="resdown.php" method="post">
      			<div class="form-group">
      			<div class="input-group">
      				<input type="date" id="date" placeholder="YYYY-MM-DD" name="day">
      				</div>
      				<br>
      				<div class="form-group">
      				<input type="submit" class="btn btn-primary" value="Download" name="down">
      				<br><b><?php echo $acknowlege;?></b>
      				</div>
      			</div>
      		</form>
      		<div class="panel-footer">

      		<p><b>Note:</b>Make sure you provide the correct date of exam with the format "YYY-MM-DD"</p>
      		</div>
      	</div>
      </div>
      </div>

  <hr class="featurette-divider hidden-lg">



</div>
      <hr>

      <footer>
        <p>© MRCET 2014</p>
      </footer>

    </div><!--/.container-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $('#date').datepicker().prop('type','text');
    </script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <script src="js/offcanvas.js"></script>
     
      <script src="js/easing.js"></script>
  
    
</body></html>