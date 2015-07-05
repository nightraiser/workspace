$(function()
{
	window.location.href="#/index/";
window.addEventListener("hashchange", function()
	{
		var hash = window.location.hash;
		var arr = hash.split('/');
		document.body.innerHTML="<h1>"+"page name="+arr[1]+"</h1>";

	});


	});

function getParameters()
{
	var arr = (window.location.href).split('?');
	var json = {};
	var ps = arr[1];
	var  paras = ps.split('&');
	for(var i=0;i<paras.length;i++)
	{
		var data = paras[i].split('=');
		json[data[0]]=data[1];
	}
	return JSON.stringify(json);

}