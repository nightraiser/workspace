<?php

require("config.php");



$q = mysql_query("SELECT * from details WHERE id = ".$_GET['id'] ." ORDER BY id DESC");
$lat;
$long;
$str="";
while(($res=mysql_fetch_assoc($q))!==false)
{

$lat = $res['latitude'];
  $long = $res['longitude'];
  $str.='<div class=col-md-6><img style="border:1px solid black; padding:10px; marging-bottom:5px;" src="'.$res[source].'"'." width=500px height=500px> <br><br> $lat, $long</div>
  <div class=col-md-6 ><div id='map_canvas'></div></div>";

  

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Project x</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

  

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/offcanvas.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../css/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="css/ie-emulation-modes-warning.js"></script>
    
   
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

     <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
      /*  var mapCanvas = document.getElementById('map_canvas');
        var mapOptions = {
          center: new google.maps.LatLng(<?php echo $lat; ?>, <?php echo $long; ?>),
          zoom: 16,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);*/

      var myLatlng = new google.maps.LatLng(<?php echo $lat; ?>, <?php echo $long; ?>);
  var mapOptions = {
    zoom: 16,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Hello World!'
  });
}
google.maps.event.addDomListener(window, 'load', initialize);

    </script>
    <style type="text/css">
    #map_canvas
    {
      width:500px;
      height:500px;
    }
    </style>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          
          
          <a class="navbar-brand" href="index.php"><b class="logo">Projectx</b></a>
        </div>
        
      </div>
    </div>

    <!---container- -->
      <div class="container">

  <Br><Br>
 
     <div class="row">
     <br><br>
     <?php echo $str; ?>
     			
     </div>
     </div>

  <script src="js/jquery.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
   

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  

  
</body>
</html>