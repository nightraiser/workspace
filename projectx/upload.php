<?php

require("config.php");

//
$img_file = $_FILES["file"]["tmp_name"];

$imgData = base64_encode(file_get_contents($img_file)) or die(mysql_error());

// Format the image SRC:  data:{mime};base64,{data};
$src = 'data: '.mime_content_type($img_file).';base64,'.$imgData;
$str = explode(",", $_POST['latlong']);
mysql_query("INSERT INTO details (latitude,longitude,source) values ('$str[0]','$str[1]','$src')") or die(mysql_error());
header("Location:index.php");

?>