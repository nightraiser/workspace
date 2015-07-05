<?php
session_start();
if(!isset($_SESSION['uid']))
{
	header("Location:index.html");

}
include ('dbconfig.php');
$query = mysql_query("SELECT * FROM posts order by pid DESC");
$str ="";
if(mysql_num_rows($query)>0)
{
	$i=1;
while(($res=mysql_fetch_assoc($query))!==false)
{
	if(($i%4)==0)
	{
		$str.='<div class="row">';
	}
	$str .=' <div class="col-lg-3  thumb" >
                <a class="thumbnail" onclick="return photviewer(this);" id='.$res['pid'].' href="#">
                    <img class="img-responsive" width="400px" height="300px" src="uploads/'.$res['pid'].'.jpg" alt="">
                    <p id="c'.$res['pid'].'">'.$res['comment'].' <br>~<b>'.$res['name'].'</b></p>
                </a>
            </div>';
    if(($i%4)==0)
	{
		$str.='</div><hr>';
	}
	$i+=1;
}
}
else
{
	$str = "<center><h3>&quot;Oops! no snaps have been uploaded!!&quot;</h3><h4>Be the first one to post a snap</h4></center><hr>";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>SnapFession</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
  

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    body
    {
    	background: white;
    	color: black;
    }
   .pic
   {
   	width:410px;
   	height:370px;
   	border:1px solid black;
   	margin: 5px;
   	background:#eee;
   }
   .pic img
   {
   	width:400px;
   	height:300px;
   	padding:5px; 
   }
   .thumbnail p
   {
   	color:black;
   }
   #checkfail
   {
   	display: none;
   }
   #mask
   {
   	position: fixed;
   	top:0%;
   	left: 0%;
   	width:100%;
   	height: 100%;
   	background: rgba(0,0,0,0.8);
   	z-index: 999;
   	display: none;
   }
   #frame
   {
   	background: white;
   	border-radius: 10px;
   	padding: 10px;
   	position: absolute;
   	top:10%;
   	left:10%;
   	width:80%;
   	height: 80%;
text-align: center;
   }
   #frame img
   {
   	width:auto;
   	height: 80%;
   }
   #frame p
   {
   	padding-bottom: 5px;
   	font-weight: bold;
   	
   }
   #frame a
   {
   	position: absolute;
   	right: 2%;
   	top:0.5%;
   	cursor: pointer;
   	font-weight: bold;
   	font-size: 20px;
   }
a:hover
{
text-decoration: none;
}
    </style>
  </head>

  <body>
  	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">#SnapFession</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav pull-right">
                <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <br><br><br>
  <div class="container">
    <div class="jumbotron">

    <center><h3>Hi there,<?php echo$_SESSION['nuid']; ?></h3><h2>Post your snaps here</h2></center>
 	  <form class="well" onsubmit="return check();" action="post.php" method="post" enctype="multipart/form-data">
                <div class="alert alert-danger" id="checkfail" role="alert">Slogan can contain max 15 words only</div>
                <div class="form-group" onsubmit = "return check();" >
                  <textarea class="form-control" id="comment" name="comment" placeholder="Your slogan within 15 words" rows="5" required> </textarea>
                </div>
                <div class="form-group">
                  <input class="form-control" name="snap"  placeholder="Upload" type="file" required> 
                </div>
                <div class="form-group">
                <input class="btn btn-success"  type="submit" value="Post my snap">
                </div>

              </form>
    </div>

 </div>
 <hr>
<div class="container" style="background:#eee;">
<center><h2>Gallery</h2></center><hr style="border-color:black;">
<div class="row">
 
          <?php 
          echo $str;

          ?>


</div>
<div  id="mask">
	<div id="frame" onclick="nodo();">

	</div>
</div>


</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/jquery.min.js"></script>
    <script type="text/javascript">
    $(
    	function()
    	{
    		$("#comment").val("");

    	}

    	
    );
  
function undo()
{
	$("#mask").fadeOut();
	
}
 function photviewer(n)
    {
    	
    	$("#mask").fadeIn();
    $("#frame").html("<a id='close' onclick='undo();'>X Close</a><p>&quot;"+$("#c"+n.id).text()+"&quot;</p><hr><img src='uploads/"+n.id+".jpg'>");

  
    }
    	 function check()
    	 {
    	 	var words = $("#comment").val().split(' ').length;
    	 	if(words>15)
    	 	{
    	 		$('#checkfail').fadeIn();
    	 		return false;
    	 	}
    	 	else
    	 	{
    	 		return true;
    	 	}
    	 }


    </script>
    <script src="assets/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
