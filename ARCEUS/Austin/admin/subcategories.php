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
                <li class="active"><a href="categories.php">Manage Products</a></li>
            <li><a href="orders.php">Manage Orders</a></li>
            <li><a href="stats.php">Statistics</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav>



<div class="container">
  <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Categories</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <form onsubmit=" return add_category();">
                        <div class="form-group">
                            <div class="row">
                            <div class="col-lg-10">
                            <lable for="category">Select category</lable>
                            <input type="text" class="form-control" placeholder="Input category" name="category">
                            </div>
                            <div class="col-lg-2">
                            <br>
                            <input type="submit" class="btn btn-primary" value="Add">
                            </div>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Categories of products in store
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Sno</th>
                                            <th>Category name</th>
                                            <th>Add sub category</th>
                                            <th>Delete category</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                        
                                    </tbody>
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
 <script>
    $(document).ready(function() {

       category();
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    function category()
    {
         $.post("framework/requests.php",{sub_category:<?php echo $_GET['cid']; ?>},function (data) 
        {
            if(data!=false)
            {
            var d = JSON.parse(data);
            var output="";
            var i=1;
                for(k in d)
                {
                     output+="<tr><td>"+i+"</td><td>"+d[k]['sub_category_name']+"</td><td><a href=products.php?scid="+d[k]['cid']+" class='btn btn-success'>Add</a></td><td><a onclick='return del(this);'id="+d[k]['cid']+" class='btn btn-danger'>Delete</a></td></tr>";
                     i++;
                 }
                 $("#tbody").html(output);
             }
         
         else
         {
             $('#tbody').html("<tr><td>"+0+"</td><td>No data</td><td>No data</td><td>No data</td></tr>");
         }


            });

    }
    function add_category()
    {

        $.post("framework/requests.php",{add_subcategory:$('input[name="category"]').val(),cid:<?php echo $_GET['cid']; ?>},
            function (data)
            {
                if(data==true)
                {
                    alert("Added as a category");
                }
                else
                {
                    alert("Item already exits");
                }
                
                category();
            }


            );
        return false;
    }
    function del(button)
    {
        $.post("framework/requests.php",{remove:button.id,type:"scid"},
            function (data)
            {
                if(data==true)
                {
                    alert("Removed from category");
                }
                else
                {
                    alert(data);
                }
                
                category();
            }


            );
        return false;
    }
    </script>


</body>
</html>

