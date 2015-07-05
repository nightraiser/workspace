<!DOCTYPE html>
<html>
<head>
	<title>Statistics</title>
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
		.demo-container {
		position: relative;
		height: 400px;
	}
body
{
background:#f8f8f8;
}
	#placeholder {
		width: 520px;
		height:300px;
		
	}
#placeholder1 {
		width: 520px;
		height:300px;
		
	}
	.panel
	{
		background:-webkit-linear-gradient(#f6f6f6 0, #fff 50px);
	}
		</style>
<script language="javascript" type="text/javascript" src="js/jquery.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.flot.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.flot.pie.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.flot.categories.js"></script>
	<script type="text/javascript">

$(function() {
	var data=initialize(3);
draw(data);	
categories();
$("#cat1").click(function(){

var data = initialize(10);
draw(data);
});

$("#cat2").click(function(){

var data = initialize(0);
draw(data);
});

$("#cat3").click(function(){

var data = initialize(4);
draw(data);
});




});

	// A custom label formatter used by several of the plots

	
	//
function categories()
{
		var data = [ ["Product1", 10], ["Product2", 8], ["Product3", 4], ["Product5", 13], ["Product6", 100], ["Product7", 9], ["Product8", 6], ["Product9", 9] ];

		$.plot("#placeholder1", [ data ], {
			series: {
				bars: {
					show: true,
					barWidth: 0.6,
					align: "center"
				}
			},
			xaxis: {
				mode: "categories",
				tickLength: 0
			}
		});

}
function initialize(set)
{
var data=[],
			 series = set;

		for (var i = 0; i < series; i++) {
			data[i] = {
				label: "Series" + (i + 1),
				data: Math.floor(Math.random() * 100) + 1
			}
		}

return data;
}
function draw(data)
{
	var placeholder = $("#placeholder");


placeholder.unbind();

			$("#title").text("Default pie chart");
			$("#description").text("The default pie chart with no options set.");

			$.plot(placeholder, data, {
				series: {
					pie: { 
						show: true
					}
				}
			});

			setCode([
				"$.plot('#placeholder', data, {",
				"    series: {",
				"        pie: {",
				"            show: true",
				"        }",
				"    }",
				"});"
			]);

}
	function setCode(lines) {
		$("#code").text(lines.join("\n"));
	}

	</script>
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
            <li><a href="orders.php">Manage Orders</a></li>
            <li class="active"><a href="stats.php">Statistics</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav>

<div class="container">

</div>

<div class="container">
<div class="row">
<div class="col-md-6">
<div class="panel panel-primary">
<div class="panel-heading"><b>Sales among categories</b></div>
<div id="placeholder" class="demo-placeholder"></div>
<div class="panel-footer">
<a class="btn btn-primary" id="cat1" >Electronics</a>
<a class="btn btn-danger" id="cat2" >Computers</a>
<a class="btn btn-success" id="cat3" >Food and Bevarages</a>
</div>
</div>
</div>
<div class="col-md-6">
<div class="panel panel-primary">
<div class="panel-heading"><b>Sales among Products</b></div>
<div id="placeholder1" class="demo-placeholder"></div>
<div class="panel-footer">
<br><br>
</div>
</div>
</div>
</div>


</div>



</body>
</html>
