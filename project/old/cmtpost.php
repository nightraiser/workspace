<?php
session_start();
$_SESSION['dbid']=$_POST['dashbs'];
header('Location:article.php');
?>
