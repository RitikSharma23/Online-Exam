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
	<div style="display: none;">
		<?php
		$fname=$_REQUEST['fname'];
		$lname=$_REQUEST['lname'];
		$email=$_REQUEST['email'];
		$phone=$_REQUEST['phone'];
		echo "<span id='fname'>".$fname."</span>";
		echo "<span id='lname'>".$lname."</span>";
		echo "<span id='email'>".$email."</span>";
		echo "<span id='phone'>".$phone."</span>";
		?>
</div>
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
									
										<div class="mb-3">
											<label class="form-label">User-Id</label>
											<input class="form-control form-control-lg" type="text" id="userid" placeholder="User Id" required/>
										</div>
										<div class="mb-3">
											<label class="form-label">First Name</label>
											<input class="form-control form-control-lg" type="text" id="fn" placeholder=" First name" required/>
										</div>
										<div class="mb-3">
											<label class="form-label">Last Name</label>
											<input class="form-control form-control-lg" type="text" id="ln" placeholder=" Last name" required/>
										</div>
										<div class="mb-3">
											<label class="form-label">Phone </label>
											<input class="form-control form-control-lg" type="phone" id="ph" placeholder=" Phone Number" required/>
										</div>
										<div class="mb-3">
											<label class="form-label">Email </label>
											<input class="form-control form-control-lg" type="email" id="em" placeholder="Email"  required/>
										</div>
										
										
										<div class="text-center mt-3">
											<button id="submit" class="btn btn-lg btn-primary">Submit</button>
											
										</div>
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
		fname=document.getElementById("fname").innerHTML;
        lname=document.getElementById("lname").innerHTML;
        email=document.getElementById("email").innerHTML;
        phone=document.getElementById("phone").innerHTML;
        details="fname="+fname+"&lname="+lname+"&email="+email+"&phone="+phone;  

		document.getElementById("submit").addEventListener("click",()=>{
		userid=document.getElementById("userid").value;
		fn=document.getElementById("fn").value;
		ln=document.getElementById("ln").value;
		em=document.getElementById("em").value;
		ph=document.getElementById("ph").value;



		data="userid="+userid+"&fname="+fn+"&lname="+ln+"&email="+em+"&phone="+ph+"&obj=8";

		console.log(details)

		ss=new XMLHttpRequest
		ss.open("GET","api.php?"+data,true)
		ss.onload=function(){
		res=JSON.parse(this.responseText)
		}
		ss.send();

		location.href="faculty.php?"+details;
		})
	</script>

</body>

</html>