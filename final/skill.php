<?php

if(isset($_POST['cskill']))
{

	require("config.php");
	$set = htmlspecialchars($_POST['cskill']);

	$skill = explode(",", $set);


	$i=0;
	$id  = '933b9b3340a200b608b1a22c2292f49b';

	while($i<count($skill))
	{
		mysql_query("INSERT INTO skill (userid,type,skill) VALUES ('$id','Soft skills','$skill[$i]')") or die (mysql_error());
		$i=$i+1;
	}

	echo "done!";
}




?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="skill.php" method="post">
<textarea name="cskill"> 
</textarea>
<input name="done" type="submit">
</form>
</body>
</html>