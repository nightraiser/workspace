<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	td
	{
		width:30px;
		height:40px
		}

	</style>
	<script type="text/javascript">

window.onload=function()
{
	var t1 = document.getElementById("row1");
	var t2= document.getElementById('row2');
	for(var i=0;i<2;i++)
	{
		var row = t1.insertRow(i);
		for(var j=0;j<10;j++)
		{
			var cell = row.insertCell(j);
			cell.id="t1"+i+""+j;
			cell.setAttribute("onclick","book(this);");
			cell.setAttribute("title","t1"+i+""+j);
			if((i==0)&&(j==0))
			{
					cell.setAttribute("title","t1"+i+""+j"+"100sq");
			}

		}
	}
	for(var i=0;i<2;i++)
	{
		var row = t2.insertRow(i);
		for(var j=0;j<10;j++)
		{
			var cell = row.insertCell(j);
			cell.id="t2"+i+""+j;
			cell.setAttribute("onclick","book(this);");
		cell.setAttribute("title","t1"+i+""+j);


		}
	}
}
function book(cell)
{
	cell.style.background="orange";
	alert("booked seat in "+cell.id);
}


	</script>

	
</head>
<body>
<div>
<table border="1.0"id="row1">
	
</table>
<be><br>
<table border="1.0" id="row2">
</table>
</body>
</html>