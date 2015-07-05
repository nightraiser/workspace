<html>
<head>
<title>
search results</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css">

</style>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
<script lang="javascript">
$(document).ready(function() 
{
$('a.signupmenu2').click(function()
{
var popupbox = $(this).attr('href');
$(popupbox).fadeIn(400);
$('body').append('<div id="mask"></div>');
$('#mask').fadeIn(400);
return false;
});
$('a.close').click(function()
{
var popupbox = $('a.signupmenu2').attr('href');
$(popupbox).fadeOut(400);
$('#mask').fadeOut(400);
return false;
});
$('a.signupmenu1').click(function()
{
var popupbox = $(this).attr('href');
$(popupbox).fadeIn(400);
$('body').append('<div id="mask"></div>');
$('#mask').fadeIn(400);
return false;
});
$('a.close').click(function()
{
var popupbox = $('a.signupmenu2').attr('href');
$(popupbox).fadeOut(400);
$('#mask').fadeOut(400);
return false;
});
$('a.close1').click(function()
{
var popupbox = $('a.signupmenu1').attr('href');
$(popupbox).fadeOut(400);
$('#mask').fadeOut(400);
return false;
});

});

</script>
<script>
$(document).ready(function() 
{
sliderNext=1;
$('#mainpageimg>img#1').fadeIn(100);
startslider();
});
function startslider()
{
loop=setInterval(function(){
if(sliderNext<=3)
{
sliderNext=silerNext+1;
}
else
{
sliderNext=1;
}
$('#mainpageimg>img').fadeOut(300);
$('#mainpageimg>img#'+sliderNext+).fadeIn(300);
});
</script>
<body>

<div class="header">


<a href="index.php" ><span class="logo">&nbsp;Webume</span></a>

	<form method="post" action="search.php" class="search">
	<input type="text" class="text" name="uname" placeholder="Search here.." />
	</form>

<a href="#popup-signin" class="signupmenu2"><div class="signupmenu"><b>Sign in</b></div></a>
<a href="#popup-signup" class="signupmenu1"><div class="signupmenu"><b>Sign up</b></div></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
<div id="popup-signin" class="popup-info">
<center><h1>Login here</h1></center>
<hr>
<form action="logcheck.php" method="post">
&nbsp;&nbsp;&nbsp;&nbsp;<b><i>Username &nbsp;&nbsp;</b></i><input type="text" name="username" placeholder="Username"><br>
&nbsp;&nbsp;&nbsp;&nbsp;<b><i>Password &nbsp;&nbsp;</b></i> <input type="password" name="password" placeholder="Password"><br>
<center><a href="#"><b>Forgot Password?</b></a><br></center><br>
<center><input class="btn btn-primary"type="submit" value="Login" ></center>
<center><a class="close"><b>Cancel</b></a></center>
<br>
<br>
</form>
</div>
<div id="popup-signup" class="popup-info">
<center><h1>Sign up</h1></center>
<hr>
<form action="signup.php" method="post">
&nbsp;&nbsp;&nbsp;&nbsp;<b><i>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></i><input type="text" name="username" placeholder="Username"><br>
&nbsp;&nbsp;&nbsp;&nbsp;<b><i>Password &nbsp;&nbsp;</b></i> <input type="password" name="password" placeholder="Password"><br>

<center><input class="btn btn-primary"type="submit" value="Next" ></center>
<br>
<br>
<center><a class="close1"><b>Cancel</b></a></center>
<br>
<br>
</form>
</div>
<div>
<br>
<br><br><br>
<br>
<div class='searchresult'>
<?php
$name = $_POST['uname'];
mysql_connect("localhost","root","livetolearn") or die("1");
mysql_select_db("webume") ;
$query = mysql_query("SELECT * FROM users WHERE username LIKE '%$name%'  ") or die("query");

if(mysql_num_rows($query)>0)
{
while (($res=mysql_fetch_assoc($query)) != false)
{
    $query1 = mysql_query("SELECT * FROM personal WHERE userid LIKE '%$res[userid]%' ") or die("query");
    while (($res1=mysql_fetch_assoc($query1)) != false)
    {
        echo "<br> &nbsp;&nbsp;&nbsp; <img src='userpics/$res1[userid].jpg'> &nbsp;&nbsp;&nbsp;&nbsp;<a href='view.php?pageinfo=aboutme&uid=$res1[userid]'><b>$res[username]</b></a><hr>";
    }
}
}
else
{
    echo "<div class='searchresult'><br> <h5>Sorry no results found</h5> <br><a href='index.php' >Go back </a></div>";
}

?>
</div>
</body>
</html>
