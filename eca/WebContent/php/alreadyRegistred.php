
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Already Registered!!</title>
 	<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
 </head>
 <body>
 <script >
 	$(document).ready(function () {
 		// body...
 		$(document).on
 		Swal.fire({
					icon: 'info',
					title: 'Already registered!!',
					button: "Ok",
					}).then(function(){
						window.location.replace('http://localhost/phpsandbox/eca/WebContent/home.php');
					});
 	});
 </script>
 </body>
 </html>