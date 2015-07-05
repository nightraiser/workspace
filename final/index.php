<?php

//////User $cvisilbe variable if you want to hide the no certificate listing 
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

    <title>Welcome to Webume</title>

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
  mask
  {
    width:100%;
    height:100%;
    position: absolute;
    top:0%;
    left:0%;
    background: grey;
  }
  .jumbotron
  {
    
  }
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
.skill
{
  background:#5cb85c;
  color:black;
  font-weight: bold;
  border-radius:5px;
  padding:5px;
  margin-right:4px;
  position: relative;
  top:10px;
}
td
{
  padding:7px;
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
           
          <a class="navbar-brand" href="index.php"><b class="logo">Webume</b></a>
        </div>
        <div class="navbar-collapse collapse">
            <form class="navbar-form navbar-right" role="form" action="logcheck.php" method="post">
            <div class="form-group">
              <input type="text" name="login" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name= "password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        
           <form action="search.php" method="post" class="navbar-form navbar-right" role="search">
  <div class="form-group">
    <input type="text" name="key" class="form-control" placeholder="Search">
  </div>
  
</form>
           
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <div class="container">
    
    <div class="jumbotron">
       <div class="page-header">
          <center><h1 style="font-size:50px;font-family:mainfont;">Webume</h1><h3>We add art to your resume</h3></center>
        </div>
    
       <center>  <p class="lead">Wake up your career by making yourself online,all you need to do is spend a couple of minutes and tell us about yourself and we will build a perfect profile of you for the social exchange.</p>
       <a class="btn btn-large btn-success" href="info.php" style="font-size:20px;">Get started today &gt;&gt;</a>
        </center>

      

    </div>
      <hr>

      <footer>
        <p>© Ramblers Solutions 2014</p>
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
    $( window ).unload(function() {
  alert( "Handler for .unload() called." );
});
    function changer(x)
    {
       var y = document.getElementsByClassName("list-group-item active");
    y[0].setAttribute("class","list-group-item");

      x.setAttribute("class","list-group-item active");
    }

    </script>
</body></html>