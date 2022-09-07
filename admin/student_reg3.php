<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="../img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-up.html" />

	<title>Sign Up | AdminKit Demo</title>

	<link href="../css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<?php $uid=$_REQUEST['uid'];
	echo "<span id='uid'>".$uid."</span>";
	?>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Get started</h1>
							<p class="lead">
								With Basic Details
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form >
										
										<div class="mb-3">
											<label class="form-label">Email Id</label>
											<input class="form-control form-control-lg" type="email" id="email" placeholder="Email Id" required/>
										</div>
										<div class="mb-3">
											<label class="form-label">Flat/House-No</label>
											<input class="form-control form-control-lg" type="text" id="flat" placeholder="Flat / House-No" required/>
										</div>
										<div class="mb-3">
											<label class="form-label">Pincode</label>
											<input class="form-control form-control-lg" type="number" id="pin" placeholder="Pincode" required/>
										</div>
										<div class="mb-3">
											<label class="form-label">Area</label>
											<input class="form-control form-control-lg" type="text" id="area" placeholder="Area" required/>
										</div>
										<div class="mb-3">
											<label class="form-label">City</label>
											<input class="form-control form-control-lg" type="text" id="city" placeholder="City" required/>
										</div>
										<div class="mb-3">
											<label class="form-label">State</label>
											<input class="form-control form-control-lg" type="text" id="state" placeholder="State" required/>
										</div>
										<div class="mb-3">
											<label class="form-label">Pasword</label>
											<input class="form-control form-control-lg" type="text" id="password" placeholder="Passcord" required/>
										</div>
										<div class="mb-3">
											<label class="form-label">Confirm Pasword</label>
											<input class="form-control form-control-lg" type="text" id="cpassword" placeholder=" Confirm Passcord" required/>
										</div>
										<div class="text-center mt-3">
											<button id="submit" class="btn btn-lg btn-primary">Submit</button>
											
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="../js/app.js"></script>

	<script>
		document.getElementById("submit").addEventListener("click",()=>{
		email=document.getElementById("email").value;
		flat=document.getElementById("flat").value;
		pin=document.getElementById("pin").value;
		area=document.getElementById("area").value;
		city=document.getElementById("city").value;
		state=document.getElementById("state").value;
		pass=document.getElementById("password").value;
		cpass=document.getElementById("cpassword").value;




		details="email="+email+"&flat="+flat+"&pin="+pin+"&area="+area+"&city="+city+"&state="+state+"&pass="+pass+"&uid=21004500210167&obj=5";

		console.log(details)
		location.href="../api/login.php?"+details;
		})
	</script>

</body>

</html>