<?php

//////User $cvisilbe variable if you want to hide the no certificate listing 
if(isset($_GET['pid']))
{

$pid = $_GET['pid'];
if(strlen($pid)!=32)
{
  $pid=md5($_GET['pid']);
}
require("config.php");
if(mysql_num_rows(mysql_query("SELECT * FROM personal WHERE userid = '$pid' "))==0)
{
header("Location:error.html");
}
$personal= mysql_fetch_assoc(mysql_query("SELECT * FROM personal WHERE userid = '$pid' "));

$pofessional="";
$aca= mysql_query("SELECT * FROM academic WHERE userid LIKE '$pid' ") or die("query of slection failed");
$bgc="white";
while(($res1=mysql_fetch_assoc($aca)) !== false)
{
  $professional.="<tr bgcolor='$bgc'><td>$res1[grade]</td><td>$res1[iname]</td><td>$res1[discipline]</td><td>$res1[yoc]</td><td>$res1[syllabus]</td></tr>";

}
$cskills="";
$cskill= mysql_query("SELECT * FROM skill WHERE userid LIKE '$pid' AND type = 'Computer skills'") or die("query of slection failed");
while(($res1=mysql_fetch_assoc($cskill)) !== false)
{
  
    $set.= "<div style='margin-bottom:10px;' class='col-md-3 col-sm-3'><div class=skill>$res1[skill]</div></div>";
  
  
  }
  $cskills.="<b>Computer skills:</b><div class='row'>$set</table></div><hr>";

  ///////soft///////
  $sskills="";
$sskill= mysql_query("SELECT * FROM skill WHERE userid LIKE '$pid' AND type = 'Soft skills'") or die("query of slection failed");
while(($res1=mysql_fetch_assoc($sskill)) !== false)
{
  
    $set1.= "<div style='margin-bottom:10px;' class='col-md-3 col-sm-3'><div class=skill>$res1[skill]</div></div>";
  
  
  }
  $sskills.="<b>Soft skills:</b><div class='row'>$set1</table></div><hr>";
  ////////////
  ///////////other/////////////
$oskills="";
$oskill= mysql_query("SELECT * FROM skill WHERE userid LIKE '$pid' AND type = 'Other skills'") or die("query of slection failed");
while(($res1=mysql_fetch_assoc($oskill)) !== false)
{
  
    $set2.= "<div style='margin-bottom:10px;' class='col-md-3 col-sm-3'><div class=skill>$res1[skill]</div></div>";
  
  
  }
  $oskills.="<b>Other skills:</b><div class='row'>$set2</table></div><hr>";
  ///////////////



$projects="";
$count= mysql_query("SELECT count(*) FROM projects WHERE userid LIKE '$pid' ") or die("query of selction failed");
$cn=mysql_result($count,0);
$sno=1;
if($cn>0)
{
$aca= mysql_query("SELECT * FROM projects WHERE userid LIKE '$pid' ") or die("query of selction failed");

$bgc="#C2DFFF";
$projects = "<tr bgcolor='#428bca'  style='color:white;'  height=50px><td><b>Sno</b></td><td><b>Developement Feild</b></td><td><b>Project name</b></td></tr>";
while(($res1=mysql_fetch_assoc($aca)) !== false)
{

  $projects.="<tr bgcolor='$bgc'><td>$sno</td><td>$res1[field]</td><td>$res1[pname]</td></tr>";
  $sno=$sno+1;
  if($bgc=="#C2DFFF")
  {
    $bgc="#E5E4E2";
  }
    elseif($bgc=="#E5E4E2")
    {
      $bgc="#EBF4FA";
    }
    else
    {
      $bgc="#C2DFFF";
    }

}

}
else
{
  $projects = "<h4>*No Projects listed</h4>";
}

$certificates="";
$count1= mysql_query("SELECT count(*) FROM certificates WHERE userid LIKE '$pid' ") or die("query of slection failed");
$cn1=mysql_result($count1,0);
$sno =1;
$cvisible = 'style="display:block;';
    if($cn1>0)
    {
      $certificates = "<tr bgcolor='#428bca'  style='color:white;'  height=50px><td><b>Sno</b></td><td><b>Certification</b></td></tr>";
      $aca= mysql_query("SELECT * FROM certificates WHERE userid LIKE '$pid' ") or die("query of slection failed");

      $bgc="#C2DFFF";
      while(($res1=mysql_fetch_assoc($aca)) !== false)
      {
        $certificates.="<tr bgcolor='$bgc'><td>$sno</td><td>$res1[cname]</td></tr>";
  
        if($bgc=="#C2DFFF")
        {
          $bgc="#E5E4E2";
        }
        elseif($bgc=="#E5E4E2")
        {
          $bgc="#EBF4FA";
        }
        else
        {
          $bgc="#C2DFFF";
        }
        $sno=$sno+1;
        
      }
    }
    else
    {
      $certificates="<center><h4>*No certificates listed</h4></center>";
      $cvisible = 'style="display:none;';
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

    <?php echo "<title>$personal[tname]</title>";?>

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
.skill
{
  background:#27ae60;
  color:black;
  font-weight: bold;
  border-radius:5px;
  padding:5px;
  margin-right:4px;
  position: relative;
  top:10px;
  text-align: center;


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
           <p class="pull-left visible-xs">

            <button style="margin-top:10px; margin-left:10px;" type="button" class="btn btn-success " data-toggle="offcanvas">Menu</button>
          </p>
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
           <form action="search.php" method="post" class="navbar-form navbar-right" role="search">
  <div class="form-group">
    <input type="text" name="key" class="form-control" placeholder="Search">
  </div>
  
</form>
           
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <div class="container">
    <div  class="row">
    <div class="col-xs-12 col-sm-9">
         
          </div>
    </div>
      <div class="row row-offcanvas row-offcanvas-left">
      <div class="col-xs-6 col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">
          <div data-spy="affix" class="list-group">
          <a href="#about" onclick="changer(this);"class="page-scroll list-group-item active">About</a>
            <a href="#personal" onclick="changer(this);"class="page-scroll list-group-item ">Personal</a>
            <a href="#professional" onclick="changer(this);"class="page-scroll list-group-item">Professional</a>
            <a href="#skills" onclick="changer(this);" class="list-group-item">Skills</a>
            <a href="#projects" onclick="changer(this);" class="list-group-item">Projects</a>
            <a href="#certificates" onclick="changer(this);" class="list-group-item">Certifications</a>
            <a href="#contact" onclick="changer(this);" class="list-group-item">Contact</a>
            <a href="#download" onclick="changer(this);" class="list-group-item">Download</a>
            <a href="javascript:window.print();" onclick="changer(this);" class="list-group-item">Print</a>

          </div>
        </div>
        <div id="about" class="col-xs-12 col-sm-9">
         
          <div  style="border-bottom:5px solid #5cb85c;border-top:5px solid #5cb85c;"  class="jumbotron">
            <div  class="row">

                <div   class="col-md-3">
                <center>
                <?php echo'<img src="userpics/'.$pid.'.jpg" style="border:1px solid black; padding:2px;" height="150px" width="150px">';?>
                </center>
                  <hr>
                </div>
                <div  class="col-md-9">
                <div style="margin-top:0px;"class="page-header">
            <h3 style="margin-top:0px;"><b style="font-family:mainfont; font-size:35px;"><?php echo "$personal[tname]";?></b></h3>

            </div>
                <b style="margin-top:0px;"><i>&quot;<?php echo "$personal[aboutme]";?>&quot;</i></b>
                </div>

            </div>
          </div>

          <div class="row">

            <div class="panel panel-primary">
             <div id="personal" class="panel-heading"> <h4><b>Personal Information</b></h4></div>
              
                           <div style="margin-left:5px">
                        <?php 
                        $today=date("Y-m-d");
$ages=abs($today-$personal['dob']);
                        echo"<b>Name:</b> <br>
<p>$personal[fname] $personal[lname]</p><hr>
<b>Father's name:</b> <br><p>$personal[father] $personal[lname]</p><hr>
<b>Date of Birth:</b> <br><p>$personal[dob] ($ages years)</p><hr>
<b>Nationality</b>: <br><p>$personal[nationality]</p><hr> 

<b>Hobbies:</b><br>
<p>$personal[hobbies]</p>";?>
</div>          </div><!--/span-->
          
            <div id= "professional" class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading"><h4></span><b>Professional Porfile</b></h4></div>
  <div class="panel-body">
    <p>...</p>
  </div>

  <!-- Table -->
  <table class="table">
  <tr bgcolor='#428bca'  style='color:white;'  height=50px><td><b>Grade</b></td><td><b>Institution</b></td><td><b>Discipline</b></td><td><b>Year</b></td><td><b>Syllabus</b></td></b></tr>
    <?php echo $professional; ?>
  </table>
</div>

<div id="skills" class="panel panel-primary">
<div class="panel-heading"><h4><b>Categorized skillset</b></h4></div>
<div class="panel-body">

<?php echo $cskills; echo $sskills; echo $oskills;?>

</div>

</div>

 <a name="projects"></a>
            <div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading"><h4><b>Projects</b></h4></div>
  <div class="panel-body">
    <p>Number of projects dealt <b><?php echo $cn ;?></b></p>
  </div>

  <!-- Table -->
  <table class="table">
   
   <?php echo "<tr>".$projects."</tr>" ; ?>
  </table>
</div>



            <div  id="certificates" class="panel panel-primary">
  <!-- Default panel contents -->
  <div  class="panel-heading"><h4><b>Certifications</b></h4></div>
  <div class="panel-body">
    <p>...</p>
  </div>

  <!-- Table -->
  <table class="table">
    <?php echo $certificates; ?>
  </table>
</div>
      <div id="contact" class="panel panel-primary">
             <div  class="panel-heading"> <h4><b>Contact me</b></h4></div>
              
                           <div style="margin-left:5px">
                        <?php echo"<img src='images/mail.png' height='30px' width='30px'>  <b>Email :</b> $personal[email]
<hr>
<img src='images/phone.png' height='30px' width='30px'> <b>Phone :</b> $personal[phone]
<hr>
<img src='images/home.png' height='30px' width='30px'> <b>Address :</b> $personal[address]
<hr>
</div>
<div class='panel-footer'>
<p><b>I ($personal[fname] $personal[lname]) hereby assure that all the information mentioned above is true to the my best knowledge. I will be responsible for correctness of the same.</p></b>

";?>
</div>
 </div>  


 <div id="download" class="panel panel-primary">
             <div  class="panel-heading"> <h4><b>Download</b></h4></div>
              
                           <div style="margin-left:5px">
                                  <center><h2>You can download my webume</h2></center>
                                      <hr>
                                <center><a href='docs/fcreate.php?uid=<?php echo "$pid";?>' onclick='down(this)'><h4  id='download'> Click here to download</h4></a></center>
                                  <hr>
                          </div>
             </div>  


            
           
          </div><!--/row-->
        </div><!--/span-->

        <!--/span-->
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
    function changer(x)
    {
       var y = document.getElementsByClassName("list-group-item active");
    y[0].setAttribute("class","list-group-item");

      x.setAttribute("class","list-group-item active");
    }

    </script>
</body></html>