

$(document).ready(function () {
	// body...

	
		$.ajax({
      url: 'http://localhost/phpsandbox/eca/WebContent/php/logout.php',
      type: 'post',
    });
		// body...

	$("button").click(function(){
		  event.preventDefault();

		  $.ajax({
		  	url:'http://localhost/phpsandbox/eca/WebContent/php/login.php',
		  	type:'post',
		  	data:{
		  		username:username.value,
		  		password:password.value,
		  	},
		  	success:function(response)
		  	{
		  		if(response=='student')
		  		{
			  			Swal.fire({
					icon: 'success',
					title: 'Login successful!!',
					text: 'You are being redirected!',
					button: "Ok",
					}).then(function(){
						window.location.replace("http://localhost/phpsandbox/eca/WebContent/home.php");
					});
			  		
			  	}

			  	else if(response=='admin')
			  	{
			  		Swal.fire({
					icon: 'success',
					title: 'Login successful!!',
					text: 'You are being redirected!',
					button: "Ok",
					}).then(function(){
						window.location.replace("http://localhost/phpsandbox/eca/WebContent/admin/adminTimeTable.php");
					});
			  	}
		  		else
		  		{
		  			Swal.fire({
					icon: 'error',
					title: 'Oops...',
					text: 'Invalid username or password!Try again',
					button: "Ok",
					}).then(function(){
						window.location.replace("http://localhost/phpsandbox/eca/WebContent/login.html");
					});
		  		}
		  	}
		  });
	});
});