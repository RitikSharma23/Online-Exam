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

	<title>Edit | Profile</title>

	<link href="../css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<script>
	fname=sessionStorage.getItem("fname")
	if(fname==null){
		alert("please login first");
		location.replace("../home.html")
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
							<h1 class="h2">Edit Profile</h1>
							
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
										
									<div class="mb-3">
											<label class="form-label">First Name</label>
											<input class="form-control form-control-lg" type="text" id="fname" placeholder=" First name" />
										</div>
										<div class="mb-3">
											<label class="form-label">Last Name</label>
											<input class="form-control form-control-lg" type="text" id="lname" placeholder=" Last name" />
										</div>
										<div class="mb-3">
											<label class="form-label">Phone </label>
											<input class="form-control form-control-lg" type="phone" id="phone" placeholder=" Phone Number" />
										</div>
										<div class="mb-3">
											<label class="form-label">Email Id</label>
											<input class="form-control form-control-lg" type="email" id="email" placeholder="Email Id" />
										</div>
										<div class="mb-3">
											<label class="form-label">Pasword</label>
											<input class="form-control form-control-lg" type="password" id="password" placeholder="Passcord" />
										</div>
										<div class="mb-3">
											<label class="form-label">Confirm Pasword</label>
											<input class="form-control form-control-lg" type="password" id="cpassword" placeholder=" Confirm Passcord" />
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
        details=""  
		userid=sessionStorage.getItem("userid");

		ss=new XMLHttpRequest
		ss.open("GET","../admin/api.php?userid="+userid+"&obj=6",true)
		ss.onload=function(){
		res1=(this.responseText)
		res=JSON.parse(this.responseText)

		document.getElementById("fname").value=res['data'][0]['fname'];
		document.getElementById("lname").value=res['data'][0]['lname'];
		document.getElementById("email").value=res['data'][0]['email'];
		document.getElementById("phone").value=res['data'][0]['phone'];
		document.getElementById("password").value=res['data'][0]['pass'];
		document.getElementById("cpassword").value=res['data'][0]['pass'];
		}
		ss.send();
		
		document.getElementById("submit").addEventListener("click",()=>{
		fname=document.getElementById("fname").value
		lname=document.getElementById("lname").value
		email=document.getElementById("email").value
		phone=document.getElementById("phone").value
		if(phone.length<10){
		alert("Phone number should be atleast 10 digit.");
		document.getElementById("phone").focus()}
		else{

		pass=document.getElementById("password").value
		if(pass.length<8){
		alert("Password length should be atleast 8 character.");
		}
		else{
		cpass=document.getElementById("cpassword").value
		if(cpass!=pass){
		alert("Password not match!!!");
		}
		else{

		if(pass==cpass){


		data="userid="+userid+"&fname="+fname+"&lname="+lname+"&email="+email+"&phone="+phone+"&pass="+pass+"&obj=7"
			
		details="userid="+userid+"&fname="+fname+"&lname="+lname+"&email="+email+"&phone="+phone;
		
		ss=new XMLHttpRequest
		ss.open("GET","../admin/api.php?"+data,true)
		ss.onload=function(){
		res1=(this.responseText)
		res=JSON.parse(this.responseText)
		}
		ss.send();

		location.href="admin.php?"+details;
		}else{
			alert("Password Not Match")
		}


		}}}})
	</script>

</body>

</html>