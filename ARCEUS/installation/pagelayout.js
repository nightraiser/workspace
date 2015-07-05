$(

		function()
		{
				if(window.location.hash=="")
				{
					loadPage("introduction");
				}
				else
				{
					loadPage(window.location.hash.slice(1));
				}
				$(window).on("hashchange",function()
				{
					var url = window.location.hash;
					loadPage(url.slice(1));

				});




});	
//function which loads each view
function loadPage(view)
{

	var request = $.get(view+".html");
	request.success(function(data)
	{
		
		$("#content").html(data);
	});
	request.error(function(data)
		{
			$("#content").html("<h1>404 Content not found!!! :(</h1>");
		});
}

$('.progress-bar').on('load',function(){
alert("loaded");
});