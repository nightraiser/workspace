$(
	function()
	{
		if(window.location.hash.length>0)
		{
		pageContent(window.location.hash);
		}
		else
		{

			window.location.href="#/installation/step/1";
		}
		window.addEventListener('hashchange',function()
			{
				
				//alert(window.location.hash);
				pageContent(window.location.hash);

			});
		$('form[id="credentials"]').submit(credentials_submit);
	});

		function credentials_submit()
		{
			
				$.post("requests.php",
				{

					credentials : "posted",
					project_name : $('input[name="project_name"').val(),
					host_name :  $('input[name="host_name"').val(),
					db_id : $('input[name="db_id"').val(),
					db_password : $('input[name="db_password"').val(),

				},
				function(data,status)
				{
					var xyz = data.split('\n');
					data = xyz[0]+xyz[1]+xyz[2];
					
					
						window.location.href="#/success/"+data;
					
					
				});

				return false;
				
		}
function pageContent(url)

{

	var arr = (url).split('/');
	
		var pageName = arr[1];
		var parameterName = arr[2];
		var parameterValue = arr[3];
		switch(pageName)
		{
			case "installation": page_Installation(parameterValue);
			break;
			case "success":page_Success(parameterName);
			break;
		}

	
}

function page_Installation(val)
{
	if(val==1)
	{
		$('#page-view').html("<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmotempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunkkt mollit anim id est laborum</p> <a href='#/installation/step/2' class='btn btn-primary'>Next</a>");
	}
	if(val==2)
	{
		$('#page-view').html('<div class="progress progress-success"><div class="bar" style="width: 40%"></div></div><h1>Step 2</h1><h2>Project detials</h2><center><div class="row"><div class="col-md-12"><form onsubmit="return credentials_submit();"action="#" method="#" id="credentials" class="well"><label for="project_name">Enter your Ecommerce site name</label><input required type="text" class="form-control" name="project_name"><br><div class="row"><div class="col-md-4"><label for="host_name">Enter Hostname</label><input class="form-control" required type="text" name="host_name" placeholder="Ex:Localhost"></div><div class="col-md-4"><label for="db_id">Enter Database ID</label><input class="form-control" required type="text" name="db_id" placeholder="Ex:Root"></div><div class="col-md-4"><label for="db_password">Enter Database Password</label><input class="form-control" type="password" name="db_password" placeholder="Password"></div></div><br><input type="submit"  name="credentials" class="btn btn-primary" value="Next"></form></div>');
	}

	if(val==3)
	{
		$('#page-view').html('<div class="progress progress-success"><div class="bar" style="width: 40%"></div></div><h1>Step 3</h1><h2>Configuring admin details</h2><center><div class="row"><div class="col-md-12"><form onsubmit="return admin_credentials_submit();"action="#" method="#" id="admin"><div class="row"><div class="col-md-6"><label for="host_name">Enter Hostname</label><input class="form-control" required type="text" name="host_name" placeholder="Ex:Localhost"></div><div class="col-md-6"><label for="admin_password">Enter Database Password</label><input class="form-control" type="password" name="admin_password" placeholder="Password"></div></div><br><input type="submit"  name="credentials" class="btn btn-primary" value="Next"></form></div>');
	}

}
function page_Success(val)
{
	
	$('#page-view').html("<p>"+val+"</p>");
	
	
}