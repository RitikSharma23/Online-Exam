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

	<title>Add &nbsp;|&nbsp; Student</title>

	<link href="../css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<script>
		fname=sessionStorage.getItem("fname")
	if(fname==null){
		alert("please login");
		location.replace("admin.php")
	}
	</script>
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Student Registration</h1>
							<br>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									
										<div class="mb-3">
											<label class="form-label">First Name</label>
											<input class="form-control form-control-lg" type="text" id="fname" placeholder=" First name" required/>
										</div>
										<div class="mb-3">
											<label class="form-label">Last Name</label>
											<input class="form-control form-control-lg" type="text" id="lname" placeholder=" Last name" required/>
										</div>
										<div class="mb-3">
											<label class="form-label">Phone </label>
											<input class="form-control form-control-lg" type="phone" id="phone" placeholder=" Phone Number" required/>
										</div>
										<div class="mb-3">
											<label class="form-label">DOB </label>
											<input class="form-control form-control-lg" type="date" id="dob" placeholder="yyyy/mm/dd"  required/>
										</div>
										<div class="mb-3">
											<label class="form-label">Enrollment Id</label>
											<input class="form-control form-control-lg" type="text" id="enroll" placeholder="Enrollment Id" required/>
										</div>
										<div class="mb-3">
											<label class="form-label">Roll No.</label>
											<input class="form-control form-control-lg" type="text" id="roll" placeholder="Roll no" required/>
										</div>
										<div class="mb-3">
											<label class="form-label">Sem </label>
											<input class="form-control form-control-lg" type="phone" id="sem" placeholder="Sem" required/>
										</div>
										<div class="mb-3">
											<label class="form-label">Division</label>
											<input class="form-control form-control-lg" type="text" id="div" placeholder="Division" required/>
										</div>
										<div class="mb-3">
											<label class="form-label">Academic Year</label>
											<input class="form-control form-control-lg" type="number" id="year" placeholder="Year" required/>
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
	fname=sessionStorage.getItem("fname")
	lname=sessionStorage.getItem("lname")
	email=sessionStorage.getItem("email")
	phone=sessionStorage.getItem("phone")

	if(fname==null){
		alert("please login");
		location.replace("admin.php")
	}

        details="&fname="+fname+"&lname="+lname+"&email="+email+"&phone="+phone; 
		
		console.log(details)  

		document.getElementById("submit").addEventListener("click",()=>{
		fname=document.getElementById("fname").value;
		lname=document.getElementById("lname").value;
		dob=document.getElementById("dob").value;
		phone=document.getElementById("phone").value;
		if(phone.length<10){
		alert("Phone number should be atleast 10 digit.");
		document.getElementById("phone").focus()}
		else{
		enroll=document.getElementById("enroll").value;
		roll=document.getElementById("roll").value;
		sem=document.getElementById("sem").value;
		div=document.getElementById("div").value;
		year=document.getElementById("year").value;


		data="fname="+fname+"&lname="+lname+"&dob="+dob+"&phone="+phone+"&uid="+enroll+"&roll="+roll+"&sem="+sem+"&div="+div+"&year="+year+"&obj=4";

		console.log(details)

		ss=new XMLHttpRequest
		ss.open("GET","api.php?"+data,true)
		ss.onload=function(){
		res=JSON.parse(this.responseText)
		}
		ss.send();

		location.href="student.php";

		}})
	</script>

</body>

</html>