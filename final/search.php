<?php
if(isset($_POST['key']))
{
require("config.php");
$name = htmlspecialchars($_POST['key']);
$cname = explode(",", $name);
$query2 = mysql_query("SELECT DISTINCT userid FROM skill WHERE skill LIKE '$name' ") or die("query1");
if(count($cname)>=2)
{
  $j=0;
  $q4="SELECT DISTINCT userid FROM skill WHERE skill";
  while($j<count($cname))
  {
      $q4.=' LIKE "'.$cname[$j].'"  OR skill';
     
        
      
    $j=$j+1;
  }
  
$query2 = mysql_query(rtrim($q4, "OR skill")) or die(" ".mysql_error());
 
}
$output="";
$query = mysql_query("SELECT * FROM personal WHERE fname LIKE '$name%' OR lname LIKE '$name' OR tname LIKE '$name%' OR  email = '$name' OR address LIKE '$name%' ORDER BY fname ") or die("query1");
 //$query2 = mysql_query("SELECT DISTINCT userid FROM skill WHERE skill LIKE '%$name%' ") or die("query1");
$query3 = mysql_query("SELECT * FROM experience WHERE current LIKE '$name%' ") or die("query1");
$query4 = mysql_query("SELECT * FROM academic WHERE iname LIKE '$name' ") or die("query1");
if(mysql_num_rows($query)>0)
{
while (($res=mysql_fetch_assoc($query)) != false)
{
    $query1 = mysql_query("SELECT * FROM experience WHERE userid = '$res[userid]' ") or die("query2");
    while (($res1=mysql_fetch_assoc($query1)) != false)
    {
        $output.= "<div style='border-bottom:2px solid rgba(0,0,0,0.6);background:white;padding:10px;' class='row'><div class='col-md-2'><img style='border:1px solid black;padding:5px;' src='userpics/$res1[userid].jpg' height='120px' width='90px'></div><div class='col-md-5'><a href='profile.php?pid=$res1[userid]'><h2><b>$res[fname] $res[lname]</b></h2> </a> <p style='color:rgba(0,0,0,0.6);'><b>$res[address]<br>Email : <b>$res[email]</b><br>Phno : <b>$res[phone]</b><b style='color:rgba(0,0,0,0.6);'><BR>Currently as $res1[as] at $res1[current]</b></p></div></div>";
    }
}
}
if(mysql_num_rows($query4)>0)
{

while (($res=mysql_fetch_assoc($query4)) != false)
{
  


    $query1 = mysql_query("SELECT * FROM personal WHERE userid = '$res[userid]' ") or die("query2");
    while (($res1=mysql_fetch_assoc($query1)) != false)
    {

        $output.= "<div style='border-bottom:2px solid rgba(0,0,0,0.6);background:white;padding:10px;' class='row'><div class='col-md-2'><img style='border:1px solid black;padding:5px;' src='userpics/$res1[userid].jpg' height='120px' width='90px'></div><div class='col-md-5'><a href='profile.php?pid=$res1[userid]'><h2><b>$res1[fname] $res1[lname]</b></h2> </a><b style='color:rgba(0,0,0,0.6);'>Studied at <br>$res1[as] at $res[iname] till $res[yoc]</b></div></div>";
    }
}
}
if(mysql_num_rows($query2)>0)
{
while($result=mysql_fetch_assoc($query2))
{
$query = mysql_query("SELECT * FROM personal WHERE userid= '$result[userid]' ORDER BY fname ") or die("query13");
while (($res=mysql_fetch_assoc($query)) != false)
{
$count= mysql_query("SELECT count(*) FROM projects WHERE userid = '$result[userid]' AND field LIKE '$name%' ") or die("query of slection failed");
$cn=mysql_result($count,0);
    
        $output.= "<div style='border-bottom:2px solid rgba(0,0,0,0.6);background:white;padding:10px;' class='row'><div  class='col-md-2 col-sm-2'><img style='border:1px solid black;padding:5px;' src='userpics/$res[userid].jpg' height='120px' width='90px'></div><div class='col-md-5 col-sm-5'><a href='profile.php?pid=$res[userid]'><h2><b>$res[fname] $res[lname]</b></h2> </a><p style='color:rgba(0,0,0,0.6);'><b>$res[address]</b><br>Email : <b>$res[email]</b><br>Phno : <b>$res[phone]</b></div></div>";
         
    
}
}

}
if(mysql_num_rows($query3)>0)
{

while (($res=mysql_fetch_assoc($query3)) != false)
{
    $query1 = mysql_query("SELECT * FROM personal WHERE userid = '$res[userid]' ") or die("query2");
    while (($res1=mysql_fetch_assoc($query1)) != false)
    {
        $output.= "<div style='border-bottom:2px solid rgba(0,0,0,0.6);background:white;padding:10px;' class='row'><div class='col-md-2'><img style='border:1px solid black;padding:5px;' src='userpics/$res1[userid].jpg' height='120px' width='90px'></div><div class='col-md-5'><a href='profile.php?pid=$res1[userid]'><h2><b>$res1[fname] $res1[lname]</b></h2> </a><b style='color:rgba(0,0,0,0.6);'>Currently as<br>$res[as] at $res[current]</b></div></div>";
    }
}

}
if((mysql_num_rows($query)==0) &&(mysql_num_rows($query4)==0) && (mysql_num_rows($query3)==0) && (mysql_num_rows($query2)==0))
{
    $output="<div class='col-md-12'> <h2>Sorry no results found</h2> <br><br><a href='index.php' >Go back </a>";
}



}
else
{

header("Location:error.html");

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

    <title>Search results</title>

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
  a 
  {
    color:black;
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
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           
          <a class="navbar-brand" href="index.php"><b class="logo">Webume</b></a>
        </div>
        <div class="navbar-collapse collapse">

           <?php 
                if(isset($_COOKIE['userid']))
                {
                  $uid = $_COOKIE['userid'];

                  $user = mysql_fetch_assoc(mysql_query("SELECT * FROM personal WHERE userid = '$uid' ")) or die(mysql_error());
                  echo '<div class="navbar-form navbar-right">
  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
   '.$user['tname'].'<span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><img style="border-bottom:3px solid orange;" width=200px; height=225px; src=userpics/'.$user['userid'].'.jpg></li>
  
    <li><a href="profile.php?pid='.$uid.'"><b>My Porfile</b></a></li>
    <li><a href="#"><b>Edit Porfile</b></a></li>
    <li><a href="logout.php"><b>Logout</b></a></li>
    
  
  </ul>
</div>';
                }
                else
                {
         echo ' <form class="navbar-form navbar-right" role="form" action="logcheck.php" method="post">
            <div class="form-group">
              <input type="text" name="login" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name= "password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>';
        }
          ?>
      
           <form method="post" action="search.php" class="navbar-form navbar-right" role="search">
  <div class="form-group">
    <input name="key" type="text" class="form-control" placeholder="Search">
  </div>
  
</form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
        <div class="page-header">
          <center><b>Search results for &quot;<?php echo htmlspecialchars($_POST['key']);?> &quot;</b></center>
          </div>
    <div class="container">
    
      <div  class="row">
        
          <div class="col-md-8">
          <?php echo $output; ?>
          </div>

      </div><!--/row-->
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
    function changer(x)
    {
       var y = document.getElementsByClassName("list-group-item active");
    y[0].setAttribute("class","list-group-item");

      x.setAttribute("class","list-group-item active");
    }

    </script>
</body></html>