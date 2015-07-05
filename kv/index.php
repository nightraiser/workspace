<?php 

require('dbconfig.php');

$com = mysql_query("SELECT * FROM companies");
$clist="";
while(($res1=mysql_fetch_assoc($com))!=false)
{
$clist.="<option value=".$res1['cid'].">$res1[cname]</option>";
}

?>  
<!DOCTYPE html>
<!-- saved from url=(0043)http://getbootstrap.com/examples/offcanvas/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Kautilya Vyuham</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/circle.css">

    <!-- Custom styles for this template -->
    <link href="assets/offcanvas.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/ie-emulation-modes-warning.js"></script>
   
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style type="text/css">
@font-face {
    font-family: mainfont;
    src: url(fonts/circula-medium.otf);
}
    body
    {
      background: #2c3e50;
      color:black;

    }
    .logo
    {
      font-family: mainfont;
      color: white;
      font-size:30px;
    }
    .panel
    {
      cursor: pointer;
    }
    .col-md-12
    {
      background: white;
      padding:10px;
      border: 1px solid rgba(0,0,0,0);
      border-radius: 4px;
      margin-bottom:10px;
      box-shadow: -5px 5px 25px rgba(0,0,0,0.5);
    }
    
  </style>

  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
     <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           
          <a class="navbar-brand" href="index.php"><b class="logo">Kautilya Vyuham</b></a>
        </div>
        <div class="navbar-collapse collapse">

              <form  method="get" onsubmit="return getdata();" class="navbar-form navbar-right" >
  <div class="form-group">
    <select id="cnames" class="form-control"><?php echo $clist; ?></select>
    <input class="form-control" id="day" placeholder="Ex:01-DEC-12" type="date"> 
    <button class="btn btn-success" >Submit</button>
  </div>
  
</form>
           
        </div><!--/.navbar-collapse -->
      </div>
    </div>
<div class="container">

    <div class="row">
    

    <!--col start-->
            <div class="col-md-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                            <b>Perdiction 1</b>
                    </div>
                    
                       <div id ="1" style="height:150px;padding:10px;margin-left:35%;" id="1"> 
                                <div class="c100 p0 green">
                                <span>0%</span>
                                 <div class="slice">
                                 <div class="bar"></div>
                                 <div class="fill"></div>
                                </div>
                                 </div>


                       </div>
                      
                        <div class="panel-footer">
                        <a href="fullview.php?id=1" class="btn btn-success" target="_blank">View Details</a>
                     </div>
                    
                </div>
            </div>
    <!--col end-->
    <!--col start-->
            <div class="col-md-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                            <b>Perdiction 2</b>
                    </div>
                    
                       <div id="2" style="height:150px;padding:10px;margin-left:35%;" id="1"> 
                                <div class="c100 p0 green">
                                <span>0%</span>
                                 <div class="slice">
                                 <div class="bar"></div>
                                 <div class="fill"></div>
                                </div>
                                 </div>


                       </div>
                      
                        <div class="panel-footer">
                        <a href="fullview.php?id=2" class="btn btn-success" target="_blank">View Details</a>
                     </div>
                    
                </div>
            </div>
    <!--col end-->
        <!--col start-->
            <div class="col-md-3">
                <div class="panel panel-success">
                    <div class="panel-heading">
                            <b>Perdiction 3</b>
                    </div>
                    
                       <div id="3" style="height:150px;padding:10px;margin-left:35%;" id="1"> 
                                <div class="c100 p0 green">
                                <span>0%</span>
                                 <div class="slice">
                                 <div class="bar"></div>
                                 <div class="fill"></div>
                                </div>
                                 </div>


                       </div>
                      
                        <div class="panel-footer">
                        <a href="fullview.php?id=3" class="btn btn-success" target="_blank">View Details</a>
                     </div>
                    
                </div>
            </div>
    <!--col end-->
        <!--col start-->
            <div class="col-md-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                            <b>Perdiction 4</b>
                    </div>
                    
                       <div id="4" style="height:150px;padding:10px;margin-left:35%;" id="1"> 
                                <div class="c100 p0 green">
                                <span>0%</span>
                                 <div class="slice">
                                 <div class="bar"></div>
                                 <div class="fill"></div>
                                </div>
                                 </div>


                       </div>
                      
                        <div class="panel-footer">
                        <a href="fullview.php?id=4" class="btn btn-success" target="_blank">View Details</a>
                     </div>
                    
                </div>
            </div>
    <!--col end-->
        <!--col start-->
            <div class="col-md-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                            <b>Perdiction 5</b>
                    </div>
                    
                       <div id="5" style="height:150px;padding:10px;margin-left:35%;" id="1"> 
                                <div class="c100 p0 green">
                                <span>0%</span>
                                 <div class="slice">
                                 <div class="bar"></div>
                                 <div class="fill"></div>
                                </div>
                                 </div>


                       </div>
                      
                        <div class="panel-footer">
                        <a href="fullview.php?id=5" class="btn btn-success" target="_blank">View Details</a>
                     </div>
                    
                </div>
            </div>
    <!--col end-->

   
    </div>
</div>

</div>
      

      <footer style="background:#f5f5f5;">
        <p> Copyright of the content &copy; Held by <b>T.V.Prasad</b></p>
      </footer>

    </div><!--/.container-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
    <script type="text/javascript">
    function numtomon(k)
    {
        
        switch(k)
        {
            case "01" : return "Jan";
            break;
             case "02" : return "Feb";
            break;
             case "03" : return "Mar";
            break;
             case "04" : return "Apr";
            break;
             case "05" : return "May";
            break;
             case "06" : return "Jun";
            break;
             case "12" : return "Dec";
            break;
             case "07" : return "Jul";
            break;
             case "08" : return "Aug";
            break;
             case "09" : return "Sep";
            break;
             case "10" : return "Oct";
            break;
             case "11" : return "Nov";
            break;

        }
    }
    function getdata()
    {
        var cname = document.getElementById("cnames").value;
       
        var g= document.getElementById("day").value;
        var item = g.split("-");
        var year = item[0].toString();
        var month= item[1];
        var day=item[2];
        if(day.toString().charAt(0)=='0')
        {
            day=day.substring(1);
           
        }
        var year1 = year.substring(2);
        
       var exact = day+"-"+numtomon(month)+"-"+year1;

        $.post( "vuya.php",{cid:cname,day:exact}, function( data )
 {
  
  var rows = data.split(",");
  
  
  var i=0;
  while(i<5)
  {
    rows[i]=parseFloat(rows[i]*100);
    var str = rows[i].toFixed(2); 
    rows[i]=rows[i].toFixed();
  
    document.getElementById(i+1).innerHTML="<div class='c100 p"+rows[i]+" green'>  <span>"+str+"</span> <div class='slice'> <div class='bar'></div>  <div class='fill'></div> </div> </div>";
    
i++;

  }

  
 
});
  
        
        return false;
    }

    </script>
    
    <script src="assets/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/ie10-viewport-bug-workaround.js"></script>

    <script src="assets/offcanvas.js"></script>
     
      <script src="assets/easing.js"></script>
  
  
</body></html>