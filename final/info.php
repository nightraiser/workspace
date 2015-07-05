<!DOCTYPE html>
<!-- saved from url=(0043)http://getbootstrap.com/examples/offcanvas/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <?php echo "<title>Registration</title>";?>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap.min.css" rel="stylesheet">

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
    background: #e9e9e9 url('assets/texture_grain_200x200_v2.png');
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

  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
     <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          
          
          <a class="navbar-brand" href="#"><b class="logo">Webume</b></a>
        </div>
        
      </div>
    </div>

    <div class="container">
<div class="row">
  <div class="col-md-12">
    
  
  </div>
  <form role="form" action="" method="post" >
    <div class="col-lg-8">
    <div id="status">
    <!--
   <div class="alert alert-success"><strong><span class="glyphicon glyphicon-send"></span> Success! Message sent. (If form ok!)</strong></div>   
    <div class="alert alert-danger"><span class="glyphicon glyphicon-alert"></span><strong> Error! Please check the inputs. (If form error!)</strong></div> 
   -->
    </div>
     <div class="row">
        <div class="col-md-6">
      <div class="form-group">
        <label for="firstname">FirstName</label>
        <div class="input-group">
      

          <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" required>
          <span class="input-group-addon"><i class="glyphicon glyphicon-icon circle-ok form-control-feedback"></i></span>

         </div>
      </div>
      </div>
         <div class="col-md-6">
      <div class="form-group">
        <label for="lastname">Last Name</label>
        <div class="input-group">
      

          <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" required>
          <span class="input-group-addon"><i class="glyphicon glyphicon-icon circle-ok form-control-feedback"></i></span>

         </div>
      </div>
      </div>
      </div>
      <div class="form-group">
        <label for="gender">Gender</label>
        <div class="input-group">
      

          <select class="form-control" name="gender" id="gender" placeholder="Gender"><option value="male">Male</option><option value="female">Female</option></select>
          <span class="input-group-addon"><i class="glyphicon glyphicon-icon circle-ok form-control-feedback"></i></span>

         </div>
      </div>
        <div class="form-group">
        <label for="firstname">Father's Name</label>
        <div class="input-group">
      

          <input type="text" class="form-control" name="father" id="father" placeholder="Father's Name" required>
          <span class="input-group-addon"><i class="glyphicon glyphicon-icon circle-ok form-control-feedback"></i></span>

         </div>
      </div>

      <div class="form-group">
        <label for="InputEmail">Your Email</label>
        <div class="input-group">
          <input onkeyup= "emailcheck(this);"type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email" required  >
          <span class="input-group-addon"><i class="glyphicon glyphicon-icon circle-ok form-control-feedback"></i></span></div>
      </div>
      <div class="form-group">
        <label for="dob">Date of Birth (mm/dd/yyyy)</label>
        <div class="input-group">
          <input type="date" class="form-control" id="dob" name="dob" placeholder="Date of Birth" required  >
          <span class="input-group-addon"><i class="glyphicon glyphicon-icon circle-ok form-control-feedback"></i></span></div>
      </div>
      <div class="form-group">
        <label for="aboutme">About me/Career Objective</label>
        <div class="input-group">
          <textarea name="aboutme" id="aboutme" class="form-control" rows="5" required></textarea>
          <span class="input-group-addon"><i class="glyphicon glyphicon-icon circle-ok form-control-feedback"></i></span></div>
      </div>
       <div class="form-group">
        <label for="address">Address</label>
        <div class="input-group">
          <textarea name="address" id="address" class="form-control" rows="5" required></textarea>
          <span class="input-group-addon"><i class="glyphicon glyphicon-icon circle-ok form-control-feedback"></i></span></div>
      </div>

      <div class="form-group">
        <label for="hobbies">Hobbies</label>
        <div class="input-group">
          <textarea name="hobbies" id="hobbies" class="form-control" rows="3" required></textarea>
          <span class="input-group-addon"><i class="glyphicon glyphicon-icon circle-ok form-control-feedback"></i></span></div>
      </div>

      <div class="form-group">
        <label for="InputReal">What is 4+3? (Simple Spam Checker)</label>
        <div class="input-group">
          <input type="text" class="form-control" name="InputReal" id="InputReal" required>
          <span class="input-group-addon"><i class="glyphicon-icon circle-ok form-control-feedback"></i></span></div>
      </div>
      <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
    </div>
  </form>
  <hr class="featurette-divider hidden-lg">



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
     <script type="text/javascript">
        function down(d)
        {
          d.innerHTML="Thank you for downloading";
        }
      $(document).ready(function(){
  $('a[href*=#]').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
    && location.hostname == this.hostname) {
      var $target = $(this.hash);
      $target = $target.length && $target
      || $('[name=' + this.hash.slice(1) +']');
      if ($target.length) {
        var targetOffset = $target.offset().top;
        $('html,body')
        .animate({scrollTop: targetOffset}, 1000);
       return false;
      }
    }
  });
});

    </script>
    <script src="assets/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/ie10-viewport-bug-workaround.js"></script>

    <script src="assets/offcanvas.js"></script>
     
      <script src="assets/easing.js"></script>
  
    <script type="text/javascript">
    function checker()
    {
      if(document.getElementById("firstname").value.length==0)
      {
        document.getElementById("status").innerHTML=' <div class="alert alert-danger"><span class="glyphicon glyphicon-alert"></span><strong> Error! Name cannot be empty. (If form error!)</strong></div> ';
        return false;
      }

      
    }



    </script>
</body></html>