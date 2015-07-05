  <?php

session_start();
if($_SESSION['name']=="")
{
header('Location:login.php');
}
require('dbconfig.php');
$b=$_SESSION['branch'];
$y=$_SESSION['year'];
$sid=$_SESSION['sid'];
$w=mysql_query("SELECT * FROM favs WHERE studid = '$sid'") or die("query problem");
$fb = mysql_query("SELECT * FROM articles ORDER BY aid DESC") or die("article problem");
$dbarr;
$j=0;
while(($res=mysql_fetch_assoc($w)) !== false)
{
$dbarr[$j]=$res['dbid'];
$j=$j+1;
}
$nsql1=mysql_query("SELECT COUNT(*) FROM favs") or die("ass array prob");
$nscomb1=mysql_fetch_array($nsql1);
$j=0;
$serial=1;

while(($fbres=mysql_fetch_assoc($fb)) !== false)
  {
    $i=0;
    $mn=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
    $date = $fbres['time'];
    $d = date_parse_from_format("Y/m/d H:i:s", $date);
    $numb=$d['month']-1;
    $nsql=mysql_query("SELECT COUNT(aid) FROM comments WHERE aid LIKE $fbres[aid] ORDER BY aid DESC") or die("ass array prob");
    $nscomb=mysql_fetch_array($nsql);
    if($nscomb1[0]>0)
    {
      
    while($i<=$nscomb1[0])
    {
    
    if($fbres['dbid']==$dbarr[$i])
    {
      $dbname=mysql_query("SELECT dbname FROM dbs WHERE dbid=$fbres[dbid]") or die("query probs");
      $dbn=mysql_fetch_array($dbname);
      $output.="<tr>
  
                    
        <td>$serial</td> <td><b>$dbn[dbname]</b></td>
             <td> $d[day]-$mn[$numb]-$d[year]</td>
<td>$fbres[postby]</td>
      
    
      
    
      
     <td> <p>  ".substr($fbres['message'],0,30)."...</p></td>
      
     <td><span class='badge' >$nscomb[0]</span> </td> <td><a class='btn btn-danger' href='fullview.php?aid=$fbres[aid]'>View</a></td>
      </tr>";
      $serial=$serial+1;;
    }
$i=$i+1;
  }
}
    else
      {

      $output = "<tr><td>No favourties available</td></tr>";
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
        <div class="row">
        <div class="col-md-12">
        <div class="panel panel-success">
        <table class="table">
        <thead ><tr style="background:#2ecc71;color:white;font-weight:bold;"><td>Sno</td><td>Dasboard</td><td>Posted on</td><td>Posted By</td><td>Message</td><td>Replies</td><td>View</td></tr></thead>
       <tbody>
        <?php echo $output;?>
        </tbody>
         </table>
         </div>
       </div>
        </div>
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