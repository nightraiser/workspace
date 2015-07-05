<?php
$date = date('Y-m-d');
$d = date_parse_from_format("Y-m-d", $date);
$output="";
$mn=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
$numb=$d['month']-1;

                 ?>
                    
                    
                  </div>
<?php                 
$con=mysql_connect('localhost','root','livetolearn');
$db=mysql_select_db('updates');
$q=mysql_query("SELECT * FROM articles WHERE aid LIKE  $_GET[aid] ORDER BY aid DESC") or die("query problem");
$res=mysql_fetch_assoc($q);
$aids=  $_GET['aid'] ;
$q1=mysql_query("SELECT * FROM comments WHERE aid LIKE '$aids' ORDER BY cid ASC") or die(" problem");
$number=mysql_num_rows($q1);
$res1=mysql_fetch_assoc($q1);

$output.="<div class='row'><div class='col-md-12'><div class=jumbotron>
<p>$res[message]</p>
<hr>
<b>Posted by :: </b> $res[postby]
<form onSubmit='checking(this)'action='fullview.php?aid=$aids' method='post' >
<div class='fom-group'>
<textarea rows='2' cols='95' class='form-control' name='art' class='span9'> </textarea>
</div>
<br>
<div class='fom-group'>
<input type='submit'  value='Post' class='btn btn-primary' name='artpost'/></div>
</form>

</div></div></div>";
?>

<?php
$output.="<div class='row'><div class='col-md-12'>
<div class=jumbotron>

<b>Comments</b>";
?>
<?php
if(mysql_num_rows($q1)==0)
{
$output.="<h2>No comments</h2>";
}
else
{
do
{
$output.=
"
<hr>

<b>$res1[cmntby]</b> said ::
<p><b>$res1[comment]</b></p>

"."";
}
while(($res1=mysql_fetch_assoc($q1)) != false);

}
?>

<?php

$cmnt=htmlspecialchars($_POST['art']);
if(isset($_POST['artpost']))
{
if($_POST['art'] != "")
{
$fsub=mysql_query("INSERT INTO comments (aid,comment,cmntby) VALUES ('$aids','$cmnt','$_SESSION[name]')") or die("insertion fail");

$_POST['art']="";
unset($_POST['art']);
header("Location:fullview.php?aid=$aids");

}
else
{
echo"<script>alert('Fill the comment')</script>";

}
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

    <title>Quick feeds</title>
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
.jumbotron p
{
  font-size: 15px;
}
    body
    {
      background: #ecf0f1;
      color:black;

    }
    .logo
    {
      font-family: mainfont;
      color: white;
      font-size:30px;
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
    a h1
    {
      color:black;
      text-decoration: none;
    }
    a h1:hover
    {
      color:blue;
      text-decoration: none;

    }

   tr:nth-child(2n)
   {
    background: #EBF4FA;
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
          <a class="navbar-brand" href="index.php"><b class="logo">L.M.S</b></a>
        </div>
        <div class="navbar-collapse collapse">

        </div><!--/.navbar-collapse -->
      </div>
    </div>
 <div class="modal fade" id="Composetalk" tabindex="-1" role="dialog" aria-labelledby="ComposetalkLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background:#1abc9c;color:white;">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="ComposetalkLabel">Share here</h4>
      </div>
      <div class="modal-body">
       <form id="myform" method="post" align="center" enctype="multipart/form-data">

Year <select name="year">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select><br>
Branch <select name="branch">
  <option value="IT">IT</option>
  <option value="CSE">CSE</option>
  <option value="AERO">AERO</option>
  <option value="MECH">MECH</option>
<option value="ECE">ECE</option>
</select><br>
Subject <input type="text" name="sub" class="span3"><br>
Message <textarea rows="10" cols="30" name="message" class="span3"> </textarea><br>

      <input type="checkbox" value="1" name="upload"> Upload a file <br><br>
  
<input type="file" name="file"><br><br>
<input class="btn btn-success" type="submit" value="Post" name="ok" class="button">

</form>
      </div>
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>
    <div class="container">
    <div  class="row">
    <div class="col-xs-12 col-sm-9">
         
          </div>
    </div>
      <div class="row row-offcanvas row-offcanvas-left">
      <div class="col-xs-6 col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation" >
          <div data-spy="affix" class="list-group" >
          <a href="#about" class="page-scroll list-group-item active">Quick Feeds</a>
          <a href="#about" class="page-scroll list-group-item ">Dashboards</a>
        <?php  if($_SESSION['status']=='student')
                  {
                  echo"<a href='student.php' class='page-scroll list-group-item '>Latest Updates</a>";
                  }
                  else
                  {
                  echo"<a href='faculty.php' class='page-scroll list-group-item '>Post Updates</a>";
                  }
                  ?>
            <a href="#about" class="page-scroll list-group-item ">Library</a>
             <a href="#about" class="page-scroll list-group-item ">Rate Books</a>
              <a href="#about" class="page-scroll list-group-item ">Feed Back</a>

            
          </div>
        </div>
          <div class="col-md-10">
          <br>
        
        <?php echo $output;?>
        
        
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
    <script type="text/javascript" src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
     
    </script>
    <script src="assets/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/ie10-viewport-bug-workaround.js"></script>

    <script src="assets/offcanvas.js"></script>
     
      <script src="assets/easing.js"></script>
  
    <script type="text/javascript">
    

    </script>
</body></html>