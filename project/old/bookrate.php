<!DOCTYPE HTML>
<html oncontextmenu="alert('Samrtie!!! dont try to view the code'); return false">
	<head>









		<title>MRCET</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700|Open+Sans+Condensed:300,700" rel="stylesheet" />
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
<link rel="stylesheet" href="css/bootstrap.css" />
<script src="js/shorcuts.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->
	</head>
	<!--
		Note: Set the body element's class to "left-sidebar" to position the sidebar on the left.
		Set it to "right-sidebar" to, you guessed it, position it on the right.
	-->
	<body class="left-sidebar" >
<script>
shortcut.add("F12",function() {
	alert("Smartie!! even this key is blocked");
});
shortcut.add("Ctrl+S",function() {
	alert("Smartie!! You cant save the page");
});
</script>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Content -->
					<div id="content">
						<div id="content-inner">
					
							<!-- Post -->
								<article class="is-post is-post-excerpt">
									<header>
										
										<h2>Welcome to MRCET's LMS</h2><hr>
										<?php 

session_start();
if($_SESSION['name']=="")
{
header('Location:login.php');
}

echo"<span class='byline'>Hey <b>$_SESSION[name]</b></span>";


?>

<?php
function drop()
{
$con=mysql_connect('localhost','root','livetolearn');
$db=mysql_select_db('updates') or die("selection of db problem");
$q1=mysql_query("SELECT * FROM books ORDER BY sub ASC");
while($res1=mysql_fetch_assoc($q1))
{
echo "<option value='".$res1['sub']."'>".$res1['sub']."</option>";
}
mysql_close();
}


function droping()
{
$con=mysql_connect('localhost','root','livetolearn');
$db=mysql_select_db('updates') or die("selection of db problem");
$q1=mysql_query("SELECT * FROM books ORDER BY sub ASC");
while($res1=mysql_fetch_assoc($q1))
{
echo "<option value='".$res1['sub']."'>".$res1['sub']."</option>";
}
}












?>






									</header>
									<div class="info">
Date
										<!--
	
											
											
										-->
<?php
$date = date('Y-m-d');
$d = date_parse_from_format("Y-m-d", $date);
$mn=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
$numb=$d['month']-1;
									echo"<span class='date'><span class='month'><b>$mn[$numb]</b></span> <span class='day'>$d[day]</span><span class='year'>$d[year]</span></span>";?>
										
										
									</div>
<ul>
			<div class="gradrate">
<header2><h4>Rate your books</h4><br><br><br></header2><br><br>						
<form id='myform'  method='post' action='bookrate.php' align='center' >

<b>Subject</b> <select class="pre-scrollable" name="subject">
<option value="0">Select</option>
<?php  drop();  ?>

</select><BR>

<b>Name *</b>&nbsp;&nbsp;<select class="pre-scrollable" name="nameofbook">

  <option value="0">Select</option>
  <?php
$con=mysql_connect('localhost','root','livetolearn');
$db=mysql_select_db('updates') or die("selection of db problem");
$subname=$_GET['sv'];
$subn=$_POST['subject'];
$q1=mysql_query("SELECT * FROM  books ORDER BY sub ASC") or die("hiphop");
while($res1=mysql_fetch_assoc($q1))
{
echo "<option value='".$res1['id']."'>".$res1['name']."</option>";
}

mysql_close();?>
</select><br>
<b>Ratings</b> <select name="ratinggiven">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
<option value="5">5</option>
</select><br>
<br><br>
<input type='submit' value="Rate" name="ok" class="button">
</form>
</div>
<?php
$con=mysql_connect('localhost','root','livetolearn');
$db=mysql_select_db('updates') or die("selection of db problem");
$nid=$_POST['nameofbook'];
$r=$_POST['ratinggiven'];
$q3=mysql_query("SELECT * FROM books WHERE id='$nid'");
$res3=mysql_fetch_assoc($q3);
$temp=$res3['rating'];
$temp=$temp+$r;
if(isset($_POST['ok']))
{
if($_POST['nameofbook']==0)
{
echo"<script> alert('Please fill book name')</script>";
}
else
{
if($usq=mysql_query("UPDATE books SET rating=$temp,hits=hits+1 WHERE id=$nid"))
{
echo"<script> alert('Your rating is accepted')</script>";
}
}
}






mysql_close($con);
if(isset($_POST['Logout']))
{
session_destroy();
header('Location:login.php');
}
?>

</ul>
								</article>
						
							

						
							

						</div>
					</div>


				<!-- Sidebar -->
					<div id="sidebar">
					
						<!-- Logo -->
							<div id="logo">
								<h1><a href="index.php">MRCET</a></h1>
							</div>
					
						<!-- Nav -->


							<nav id="nav">
								<ul>
									<li ><a href="index.php">About LMS</a></li>
									<li><a href="mydash.php">Quick Fedds</a></li>
									<li ><a href="dash.php">Dash Boards</a></li>
										
									<?php
									
									if($_SESSION['status']=='student')
									{
									echo"<li ><a href='student.php'>Latest Updates</a></li>";
									}
									else
									{
									echo"<li><a href='faculty.php'>Post Updates</a></li>";
									}
									?>
									<li><a href="books.php">Library</a></li>
									<li class='current_page_item'><a href="bookrate.php">Rate books</a></li>
<li><a href='feedback.php'>Feed Back</a></li>
									<li><form action="logout.php" method="post"  align="center"><input class="button" type="submit" value="Logout" name="Logout" /></form></li>
								</ul>
							</nav>

						
					
						<!-- Text -->
							<section class="is-text-style1">
								<div class="inner">
									<p>
										<strong>Designed by:</strong> <a href="https://www.facebook.com/Ramblerssolutions">Ramblers Solutions</a>
									</p>
								</div>
							</section>
					
					

						<!-- Copyright -->
							<div id="copyright">
								<p>
									&copy; 2013 MRCET.<br />
									Visit@: <a href="http://www.mrcet.ac.in">MRCET</a>, 
								</p>
							</div>

					</div>

			</div>

	</body>
</html>
