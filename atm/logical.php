<?php 

if(!isset($_COOKIE['userid']))
{
  header("Location:index.php");
}


?>








<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">
    <title>ATM</title>
<style>
*
{
margin:0px;
padding:0px;

}
body
{
background:#ecf0f1;
}
header,content
{
display:block;
}
header
{
background:#3498db;
height:80px;


}
.logo
{
color:white;
font-size:25px;
margin-top:20px;
}
content
{
background:#ecf0f1;
font-size:25px;
margin:20px;
padding:10px;
}

content p
{
padding:50px;

}
#timer
{
color:white;
font-size:20px;
font-weight:bold;
}
</style>
<script src="js/jquery.js"></script>
<script>
var y;
var numb=0;
var score = 0;
var attempted_ques=1;
var select;
function countdown()
{
var mins=34,sec=60;
setInterval(function()
{

if(sec>0)
{
sec--;

document.getElementById("timer").innerHTML=mins+":"+sec;

}
else
{
mins--;
sec=60;
}

if(mins<0)
{
   window.location.href="result.php?section=logical&score="+score;
}
}, 1000);
document.getElementById("next").disabled=true;



}
function que_display()
{
document.getElementById("next").disabled=true;
$.post("exam.php",
    {
      section:"logical"
     
    },
    function(data){
 var x =JSON.parse(data);;
y = x[numb].split("@#$");
//var btngrp = document.getElementById("footer").innerHTML;
$("#content").html("<div class=panel-heading> <h4><b>"+attempted_ques+")"+""+y[0]+"  ("+y[6]+")</h4></b></div><p style=padding:10px;><input onclick=checker(this); type=radio name=answer id="+y[1]+">"+y[1]+"<br><input onclick=checker(this); type=radio name=answer id="+y[2]+">"+y[2]+"<br> <input onclick=checker(this); type=radio name=answer id="+y[3]+">"+y[3]+"<br><input onclick=checker(this); type=radio name=answer id="+y[4]+">"+y[4]+"</p><br>");


    });

}
$(document).ready(function(){
  
    que_display();
  
});

function checker(ga)
{

select = ga.id;
document.getElementById("confirm").disabled=false;

}
function submit_answer(sbutton)
{
document.getElementById("confirm").disabled=true;
document.getElementById("next").disabled=false;


if(y[5]==select)
{


if(y[6].toLowerCase() == "we")
{

score=score+2;

}
if(y[6].toLowerCase() == "medium")
{

score=score+3;

}
if(y[6].toLowerCase() == "hard")
{

score=score+5;

}



}

}

function next_que()

{


if(attempted_ques>12)
{
  if(score>=16)
  {
    numb=25;
    //alert("medium");
  }

}
if(attempted_ques>20)
{
  if(score>=34)
    {
      numb=39;
      //alert("tough");
    }
}
if(attempted_ques==25)
{
  //POST THE RESULT USING JQUERY POST


  ///////////
  window.location.href="result.php?section=logical&score="+score;
}
attempted_ques++;


que_display();
}
</script>
</head>

<body onload="countdown();">
<div class="container">
<div style="background:#3498db; border-color:#3498db" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <center>
         <b class="logo">Time left: </b><b class="logo" id="timer"></b>
          </center>
        </div>
        <div class="navbar-collapse collapse">
          
        
           
        </div><!--/.navbar-collapse -->
      </div>
    </div>

<br><br><br><br><Br>
<div class="row">
<div  class="panel panel-primary">
<div id="content"></div>

<div class="panel-footer">

<center>
<button class="btn btn-info" id="confirm" disabled onclick="submit_answer(this);">Confirm</button>
<button class="btn btn-success" id="next" disabled onclick="next_que();">Next</button>
</center>
</div>
</body>
</html>

