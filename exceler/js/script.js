	function csvdone()
	{
document.getElementById("data").innerHTML=document.getElementById("source").value;

var rows = document.getElementsByTagName("tr");
var csvData="data:text/csv;charset=utf-8,";
var i=0;

while(i<rows.length)
{
  var cols = rows[i].getElementsByTagName("td");
  for(var j=0;j<cols.length;j++)
  {
    csvData+=cols[j].innerHTML+"%2C";
  }
  csvData+="%0A";
  i++;
}
console.log(csvData);
var fname = "ExCeller-"+document.getElementById("fname").value;
document.getElementById("down").setAttribute("download",fname+".csv");
document.getElementById("down").setAttribute("href",csvData);

}

