<?php

setcookie("userid","",time()-1000);
header("Location:index.php");

?>