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

	<title>Add &nbsp;| &nbsp;Faculty</title>

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
							<h1 class="h2">Faculty Registration</h1>
							<br>
							
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
											<input class="form-control form-control-lg" type="number" id="ph" placeholder=" Phone Number" required/>
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
	fname=sessionStorage.getItem("fname")
	lname=sessionStorage.getItem("lname")
	email=sessionStorage.getItem("email")
	phone=sessionStorage.getItem("phone")

	document.getElementById("userid").addEventListener("keyup",()=>{
		x=document.getElementById("userid").value;
		if(x.length==4){
			ss=new XMLHttpRequest
			ss.open("GET","api.php?obj=12&userid="+x,true)
			ss.onload=function(){
			res=JSON.parse(this.responseText)
			if(res['success']==1){
				alert("Userid Already Taken \n please select different one")
				document.getElementById("submit").disabled=true;
			}else{
				document.getElementById("submit").disabled=false;
			}
			}
			ss.send();

		}
	})
	
	if(fname==null){
		alert("please login");
		location.replace("admin.php")
	}

        details="&fname="+fname+"&lname="+lname+"&email="+email+"&phone="+phone; 
		
		console.log(details)  

		document.getElementById("submit").addEventListener("click",()=>{
		userid=document.getElementById("userid").value;
		fn=document.getElementById("fn").value;
		ln=document.getElementById("ln").value;
		em=document.getElementById("em").value;
		ph=document.getElementById("ph").value;
		if(ph.length<10){
		alert("Phone number should be atleast 10 digit.");
		document.getElementById("ph").focus()}
		else{




		data="userid="+userid+"&fname="+fn+"&lname="+ln+"&email="+em+"&phone="+ph+"&obj=8";

		console.log(details)

		ss=new XMLHttpRequest
		ss.open("GET","api.php?"+data,true)
		ss.onload=function(){
		res=JSON.parse(this.responseText)
		}
		ss.send();

		location.href="faculty.php";
		}})
	</script>

</body>

</html>