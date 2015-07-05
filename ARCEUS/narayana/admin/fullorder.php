<!DOCTYPE html>
<html>
<head>
	<title>Manage Orders</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<style type="text/css">
		.navbar-default .navbar-nav li a
		{
			color:white;
		}
		.navbar-default .navbar-brand
		{
			color:white;
		}
		

		</style>
</head>
<body>
<nav class="navbar navbar-static-top navbar-default" style="background:#e74c3c;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">ARCEUS Admin</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li ><a href="index.php">Home</a></li>
                <li><a href="categories.php">Manage Products</a></li>
            <li class="active"><a href="orders.php">Manage Orders</a></li>
            <li><a href="stats.php">Statistics</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav>



<div class="container">
  <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Orders list</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               <div class="col-md-12"  >
                    <div class="panel panel-primary">
                      <div class="panel-heading">
                      <b>Find on GMaps</b>
                      </div>
                      <div style="height:350px"id = "googleMap">
                    </div>
                      <div class="panel-footer">
                            <p id="address"></p>
                           </div>
                </div>
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           Order
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Sno</th>
                                            <th>Product name</th>
                                            <th>Quantity</th>
                                            <th>Amount (Rs)</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                        
                                    </tbody>
                                    <tfoot id="tfoot">
                                      
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                         
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
                
            </div>
            <!-- /.row -->



</div>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>

</script>
<script type="text/javascript">
var lat ,lon;
    $(
        function ()
        { 

             $.post("framework/requests.php",{fullorder:<?php echo $_GET['oid']; ?>},function (data) 
        {
               var out = JSON.parse(data);
            if(data!=false)
            {
              
       
              d = out['product_details'];
            var output="";
            var i=1;
                for(k in d)
                {
                     output+="<tr><td>"+i+"</td><td>"+d[k]['product_name']+"</td><td>"+d[k]['quantity']+"</td><td>"+d[k]['amount']+"</td></tr>";
                     i++;
                 }
                 $("#tbody").html(output);
                 $("#tfoot").html("<tr><td></td><td></td><td>Total</td><td>"+out['fullamount']+"</td></tr>");
             }
         
         else
         {
             $('#tbody').html("<tr><td>"+0+"</td><td>No data</td><td>No data</td><td>No data</td></tr>");
         }

         var addr = out['address'];
         $.get("https://maps.googleapis.com/maps/api/geocode/json?address="+addr,
          function(locdata)
          {
           
             lat =locdata['results'][0]['geometry']['location']['lat'];  
            lon =locdata['results'][0]['geometry']['location']['lng'];  

          });
         $('#address').html("<b>To be delevired to </b>:"+out['address']);
           

            });
        }
       


    );
function initialize() {
  var myLatlng = new google.maps.LatLng(lat,lon);
  var mapOptions = {
    zoom: 18,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Hello World!'
  });
}

google.maps.event.addDomListener(window, 'click', initialize);

</script>
</body>
</html>
