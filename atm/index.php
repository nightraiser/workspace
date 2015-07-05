<!DOCTYPE html>
<!-- saved from url=(0043)http://getbootstrap.com/examples/offcanvas/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <?php echo "<title>Login</title>";?>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/offcanvas.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../css/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="css/ie-emulation-modes-warning.js"></script>
    <script type="text/javascript">
    window.onbeforeunload = function() {
        alert("Dude, are you sure you want to leave? Think of the kittens!") ;
        </script>
    
   
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
          
          
          <a class="navbar-brand" href="index.php"><b class="logo">MRCET Adaptive Testing Mechanism</b></a>
        </div>
        
      </div>
    </div>

    <div class="container">

  
 
     <div class="row">
     <br>
     <div class="page-header">
     <h2>Login</h2>
     </div>
      <div class="col-md-4">
      <form class="well" action="logcheck.php" method="post">

      <div class="form-group">
        <label for="uid">User id</label>
          <div class="input-group">
               <input type="text" class="form-control" name="uid"  placeholder="User id" required>
                  <span class="input-group-addon"><i class="glyphicon glyphicon-icon circle-ok form-control-feedback"></i></span>

         
         </div>
          </div>
        <div class="form-group">
        <label for="pwd">Password</label>
        <div class="input-group">
      

          <input type="password" class="form-control" name="pwd"  placeholder="Password" required>
          <span class="input-group-addon"><i class="glyphicon glyphicon-icon circle-ok form-control-feedback"></i></span>

         </div>
      </div>

      
      <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success pull-right">
      <br><br>
      </div>
      <div class="col-md-8" >

      <table class="table" style="background:white;">
      <tr style="background:rgba(45, 102, 195, 1);color:white;"><td><b>Sno</b></td><td ><b>Module</b></td><td><b>No of questions</b></td><td><b>Time</b></td></tr>
      <tr style="background:whitesmoke;"><td>1</td><td >Verbal</td><td>25</td><td>35 mins</td></tr>
       <tr style="background:#FCFCFC;"><td>2</td><td >Quants</td><td>25</td><td>35 mins</td></tr>
        <tr style="background:whitesmoke;"><td>3</td><td >Logical</td><td>25</td><td>35 mins</td></tr>
         <tr style="background:#FCFCFC;"><td>4</td><td>Technical</td><td>25</td><td>35 mins</td></tr>

      </table>
      </div>
      </div>
    
  </form>
  <hr class="featurette-divider hidden-lg">



</div>
      <hr>

      <footer>
      <center>  <p>Designed by <a href="#">Ramblers solutions</a> &copy; MRCET 2014</p>
      </center>
      </footer>

    </div><!--/.container-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <script src="js/offcanvas.js"></script>
     
      <script src="js/easing.js"></script>
  
    
</body></html>