 <?php
  if(isset($_POST['credentials']))
  {
  
   
  
    $db = "$_POST[project_name]";
    $steps="";
    $mydata = '$mydata';
    $steps.= shell_exec("cp -avr theme ../$_POST[project_name]") or die("Unable to open folder!");
    mysql_connect($_POST['host_name'],$_POST['db_id'],$_POST['db_password']);
    mysql_query("CREATE DATABASE IF NOT EXISTS $_POST[project_name]") or die(mysql_error());
    mysql_select_db($_POST['project_name']) or die(mysql_error());
    $database = file_get_contents('Database schema/db.sql') or die("error");
    //echo $database;
    //delete comments

    $lines = explode(";",$database);
    $commands = '';
    foreach($lines as $line)
    {
      mysql_query($line);
    }
    echo "created";
    mysql_close();
    shell_exec("chmod -R 777 ../$_POST[project_name]");
    $myfile = fopen("../$_POST[project_name]/dbconfig.php", "w") or die("Unable to open file!");
$txt = "<?php 
mysql_connect("."'$_POST[host_name]'".","."'$_POST[db_id]'".","."'$_POST[db_password]'".") or die(mysql_error());
mysql_select_db("."'$db'".") or die(mysql_error());
$mydata  = array('projectName' => '".$_POST['project_name']."' );
?>";

fwrite($myfile, $txt) or die("Write error of the DB Configuration file");
fclose($myfile);

  chmod("../$_POST[project_name]/dbconfig.php", 0777) or die("Changing mode of file failed");
   $steps.="DB file cofigutation done!!\n"."<h1>Installation done!!!</h1>";
   
  header("Location:index.html#success");
  }
  
  ?>
