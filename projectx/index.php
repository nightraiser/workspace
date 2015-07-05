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

  
 
     <div class="row">
     <br>
     <br><br>
     			<div class="col-md-10">
      					<div class="panel panel-primary">
     						 <div class="panel-heading">
     								<h4>Send pictures</h4>
     								</div>
      									<form id = "details" class="well span6" action="upload.php" method="post" enctype="multipart/form-data">
      									 <div class="form-group">
        <label for="adhar">Adhaar card number</label>
        <div class="input-group">
          <input type="text" class="form-control"  name="adhar" placeholder="Adhaar card number" required  >
          <span class="input-group-addon"><i class="glyphicon glyphicon-icon circle-ok form-control-feedback"></i></span></div>
      </div>
 <div class="form-group">
        <label for="latlong">Position</label>
        <div class="input-group">
          <input type="text" class="form-control" id="latlong" name="latlong" readonly required  >
          <span class="input-group-addon"><i class="glyphicon glyphicon-icon circle-ok form-control-feedback"></i></span></div>
      </div>

         <div class="form-group">
          										<div class="input-group">
            										  <input type="file" id="file" name="file" multiple accept='image/*' >

                

         
         										</div>
          <br>
     										   <div class="input-group">

      
      										<input type="submit"  id="submit" value="Submit" class="btn btn-success pull-right"></div>
     <br>
     										</div>

      
								</form>
 <center> <b>Terms and conditions</b></center>
  
  <div class="panel-footer">
  <b>List</b>
  <ol><li>Condition 1</li><li>Condition 2</li><li>Condition 3</li></ol>
      
      </div>
     </div>
     </div>
     </div>
     </div>

  <script src="js/jquery.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    
    $("document").ready(function(){

    	var lat,lon;


    	 if (navigator.geolocation)
        {
        navigator.geolocation.getCurrentPosition(showPosition);
    } 
    else 
    { 
       alert("GEO location not available");
    }
 
    });
    function showPosition(position) {
    document.getElementById("latlong").value=position.coords.latitude +","+position.coords.longitude;
}

    </script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  

  
</body>
</html>