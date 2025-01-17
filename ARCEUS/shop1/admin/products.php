<?php
if(isset($_POST['newproduct']))
{
   require('../dbconfig.php');
    mysql_query("INSERT INTO products (scid,product_name,price,availability,description,keywords) VALUES ($_GET[scid],'$_POST[pname]',$_POST[price],$_POST[availability],'$_POST[description]','$_POST[keywords]')") or die(mysql_error());
    $result = mysql_query("SELECT MAX(pid) AS max_pid FROM products");
$row = mysql_fetch_array($result);
$numb = $row['max_pid']+1;
$newfilename = $numb.".".end(explode('.', $_FILES['file']['name']));
//echo $_FILES['file']['name'];
move_uploaded_file($_FILES["file"]["tmp_name"], "../assets/products/" . $newfilename) or die($_FILES['file']['error']);
    chmod("../assets/products/$newfilename", 0766) or die("no");
    $result = "Product added";
}


?>
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
                    <h1 class="page-header">Manage Prdoucts</h1>
                   <a href="#addproducts" class="btn btn-lg btn-success">Add new products</a>
                    
                </div>
                <!-- /.col-lg-12 -->
            </div><br>
            <!-- /.row -->
            <div class="row">
               
                <div class="col-lg-6">
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
                                            <th>Product name</th>
                                            <th>Edit Product</th>
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

                 <div class="col-lg-6" id="addproducts">
                 <h2><?php echo $result; ?></h2>
                    <form class="well" method="post" action="products.php?scid=<?php echo $_GET['scid']; ?>" enctype= "multipart/form-data">
                        <div class="form-group">
                            <div class="row">
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="pname">Product name</label>
                                    <input class="form-control" placeholder = "Product name" name="pname">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input class="form-control" placeholder="Price" name="price">
                                </div>
                                <div class="form-group">
                                    <label for="availability">Availability</label>
                                     <input class="form-control" placeholder="Availability" name="availability">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" name="description"></textarea>
                                </div>
                                   <div class="form-group">
                                    <label for="keywords">Keywords</label>
                                    <textarea class="form-control" name="keywords"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="file">Add image</label>
                                    <input type="file" name="file" class="form-control">
                                </div>
                                <div class="form-group">
                                  <input type="submit" class="btn btn-primary" value="Add" name="newproduct">
                                </div>
                            </div>
                           
                          
                           
                            </div>
                        </div>

                    </form>
                </div>
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
         $.post("framework/requests.php",{products:<?php echo $_GET['scid']; ?>},function (data) 
        {
            if(data!=false)
            {
            var d = JSON.parse(data);
            var output="";
            var i=1;
                for(k in d)
                {
                     output+="<tr><td>"+i+"</td><td>"+d[k]['product_name']+"</td><td><a href=edit.php?pid="+d[k]['pid']+" class='btn btn-success'>Edit</a></td><td><a onclick='return del(this);'id="+d[k]['pid']+" class='btn btn-danger'>Delete</a></td></tr>";
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

        $.post("framework/requests.php",{add_category:$('input[name="category"]').val()},
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
        $.post("framework/requests.php",{remove:button.id,type:"pid"},
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

