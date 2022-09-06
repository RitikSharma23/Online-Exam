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
	<div>
		<?php
		$fname=$_REQUEST['fname'];
		$lname=$_REQUEST['lname'];
		$email=$_REQUEST['email'];
		$dob=$_REQUEST['dob'];
		$phone=$_REQUEST['phone'];
		$enroll=$_REQUEST['enroll'];
		$roll=$_REQUEST['roll'];
		$sem=$_REQUEST['sem'];
		$div=$_REQUEST['div'];
		$year=$_REQUEST['year'];

		echo "<span id='fname'>".$fname."</span";
		echo "<span id='lname'>".$lname."</span";
		echo "<span id='email'>".$email."</span";
		echo "<span id='dob'>".$dob."</span";
		echo "<span id='phone'>".$phone."</span";
		echo "<span id='enroll'>".$enroll."</span";
		echo "<span id='roll'>".$roll."</span";
		echo "<span id='sem'>".$sem."</span";
		echo "<span id='div'>".$div."</span";
		echo "<span id='year'>".$year."</span";
		
		?>
	</div>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">
						<div class="text-center mt-4">
							<h1 class="h2">Residencial Details</h1>
							
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form>
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
										<div class="text-center mt-3">
											<!-- <a href="index.html" class="btn btn-lg btn-primary">Next</a> -->
											<!-- <a href="student_reg1.html"><input type="submit" class="btn btn-lg btn-primary" value="submit"></a> -->
											<button id="submit" class="btn btn-lg btn-primary">Next</button>

											
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->
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
		fname=document.getElementById("fname").innerHTML;
		lname=document.getElementById("lname").innerHTML;
		email=document.getElementById("email").innerHTML;
		dob=document.getElementById("dob").innerHTML;
		phone=document.getElementById("phone").innerHTML;
		enroll=document.getElementById("enroll").innerHTML;
		roll=document.getElementById("roll").innerHTML;
		sem=document.getElementById("sem").innerHTML;
		div=document.getElementById("div").innerHTML;
		year=document.getElementById("year").innerHTML;
		flat=document.getElementById("flat").innerHTML;
		pin=document.getElementById("pin").innerHTML;
		area=document.getElementById("area").innerHTML;
		city=document.getElementById("city").innerHTML;
		state=document.getElementById("state").innerHTML;




		details="&fname="+fname+"&lname="+lname+"&email="+email+"&dob="+dob+"&phone="+phone+"&enroll="+enroll+"&roll="+roll+"&sem="+sem+"&div="+div+"&year="+year+"&flat="+flat+"&pin="+pin+"&area="+area+"&city="+city+"&state="+state;

		location.href="student_reg4.php?"+details;
		})
	</script>

</body>

</html>