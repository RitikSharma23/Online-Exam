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

	<title>Edit &nbsp;| &nbsp;Student</title>

	<link href="../css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<script>
		fname=sessionStorage.getItem("fname")
	if(fname==null){
		alert("please login  first");
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
						<center><span style="font-size: 25pt;">Edit Profile</span></center>
						<div class="text-center mt-4">
							<img src="../uploads/profile.png" width="150px" id="profileimg" style="width: 150px;height:150px;border-radius:100px">
						</div>


						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
								<?php
										if(isset($_FILES['profile'])){
											$name=$_FILES['profile']['name'];
											$size=$_FILES['profile']['size'];
											$tmp=$_FILES['profile']['tmp_name'];
											$type=$_FILES['profile']['type'];
											move_uploaded_file($tmp,"../uploads/".$name);
											echo "<span id='file' style='display:none;'> ";
											print_r($_FILES['profile']['type']);
											echo "</span>";
											echo "<span id='filename' style='display:none;'>";
											print_r($_FILES['profile']['name']);
											echo "</span>";
										}
										?>
										<form action="" method="post" enctype="multipart/form-data">
											<input type="file" name="profile">
											<input type="submit" value="Upload image" id="uploaded">
										</form><br><br>
										
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
											<input class="form-control form-control-lg" type="number" id="phone" placeholder=" Phone Number" />
										</div>
										<div class="mb-3">
											<label class="form-label">DOB </label>
											<input class="form-control form-control-lg" type="date" id="dob" placeholder="DOB" />
										</div>
										<div class="mb-3">
											<label class="form-label">Email Id</label>
											<input class="form-control form-control-lg" type="email" id="email" placeholder="Email Id" />
										</div>
										<div class="mb-3">
											<label class="form-label">Roll No.</label>
											<input class="form-control form-control-lg" type="number" id="roll" placeholder="Roll no" />
										</div>
										<div class="mb-3">
											<label class="form-label">Sem </label>
											<input class="form-control form-control-lg" type="number" id="sem" placeholder="Sem" />
										</div>
										<div class="mb-3">
											<label class="form-label">Division</label>
											<input class="form-control form-control-lg" type="text" id="div" placeholder="Division" />
										</div>
										<div class="mb-3">
											<label class="form-label">Academic Year</label>
											<input class="form-control form-control-lg" type="number" id="year" placeholder="Year" />
										</div>
										<div class="mb-3">
											<label class="form-label">Flat/House-No</label>
											<input class="form-control form-control-lg" type="text" id="flat" placeholder="Flat / House-No" />
										</div>
										<div class="mb-3">
											<label class="form-label">Pincode</label>
											<input class="form-control form-control-lg" type="number" id="pin" placeholder="Pincode" />
										</div>
										<div class="mb-3">
											<label class="form-label">Area</label>
											<input class="form-control form-control-lg" type="text" id="area" placeholder="Area" />
										</div>
										<div class="mb-3">
											<label class="form-label">City</label>
											<input class="form-control form-control-lg" type="text" id="city" placeholder="City" />
										</div>
										<div class="mb-3">
											<label class="form-label">State</label>
											<input class="form-control form-control-lg" type="text" id="state" placeholder="State" />
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
	fname=sessionStorage.getItem("fname")
	lname=sessionStorage.getItem("lname")
	email=sessionStorage.getItem("email")
	phone=sessionStorage.getItem("phone")
	image="";

	if(fname==null){
		alert("please login first");
		location.replace("admin.php")
	}

	try{
	fil=document.getElementById("file").innerHTML;
    filename=document.getElementById("filename").innerHTML;
	if(fil==""){
        }else{
            if(fil==""){
                alert("please select file")
            }else if(fil!=" image/jpeg" && fil!=" image/png"){
                alert("please select only image file in png,jpej,jpg format only")
				document.getElementById("submit").disabled=true;
            }else{
				console.log(filename)
				console.log(fil)
			document.getElementById("profileimg").src="../uploads/"+filename
			}
        }
	}catch{}

	document.getElementById("pin").addEventListener("keyup",()=>{
	pin=document.getElementById("pin").value;
			if(pin.length==6){
				ss=new XMLHttpRequest
				ss.open("GET","../admin/api.php?pincode="+pin+"&obj=11",true)
				ss.onload=function(){
					res=JSON.parse(this.responseText)
					try{
					document.getElementById("area").value=res['data'][0]['area'];
					document.getElementById("city").value=res['data'][0]['city'];
					document.getElementById("state").value=res['data'][0]['state'];
					}catch{
						
					}
					if(res['success']==1){
						document.getElementById("area").disabled=true;
						document.getElementById("city").disabled=true;
						document.getElementById("state").disabled=true;
					}else{
						alert("pincode not found \n please enter manually")
						document.getElementById("area").disabled=false;
						document.getElementById("city").disabled=false;
						document.getElementById("state").disabled=false;						
						document.getElementById("area").value="";
						document.getElementById("city").value="";
						document.getElementById("state").value="";						
					}
					console.log(res['data'])
				}
				ss.send();
			}
		})

		roll=sessionStorage.getItem("roll")
        fname=sessionStorage.getItem("fname")
        lname=sessionStorage.getItem("lname")
        uid=sessionStorage.getItem("uid")
        sem=sessionStorage.getItem("sem")
        email=sessionStorage.getItem("email")
        phone=sessionStorage.getItem("phone")
        dev=sessionStorage.getItem("dev")
        img=sessionStorage.getItem("img")

		image=img

		ss=new XMLHttpRequest
		ss.open("GET","../admin/api.php?uid="+uid+"&obj=3",true)
		ss.onload=function(){
		res=JSON.parse(this.responseText)

		console.log(res['data'][0]['div'])
		document.getElementById("fname").value=res['data'][0]['fname'];
		document.getElementById("lname").value=res['data'][0]['lname'];
		document.getElementById("email").value=res['data'][0]['email'];
		document.getElementById("dob").value=res['data'][0]['dob'];
		document.getElementById("phone").value=res['data'][0]['phone'];
		

		document.getElementById("roll").value=res['data'][0]['roll'];
		document.getElementById("sem").value=res['data'][0]['sem'];
		document.getElementById("div").value=res['data'][0]['div'];
		document.getElementById("year").value=res['data'][0]['year'];
		document.getElementById("flat").value=res['data'][0]['flat'];
		document.getElementById("pin").value=res['data'][0]['pin'];
		document.getElementById("area").value=res['data'][0]['area'];
		document.getElementById("city").value=res['data'][0]['city'];
		document.getElementById("state").value=res['data'][0]['state'];
		document.getElementById("password").value=res['data'][0]['pass'];
		document.getElementById("cpassword").value=res['data'][0]['pass'];
		document.getElementById("profileimg").src="../uploads/"+res['data'][0]['img'];
		console.log(res['data'][0]['img'])
		if(fil!=""){
			document.getElementById("profileimg").src="../uploads/"+filename
		}else{
		document.getElementById("profileimg").src="../uploads/"+res['data'][0]['img'];
		image=res['data'][0]['img'];

		}
		}
		ss.send();
		
		document.getElementById("submit").addEventListener("click",()=>{
		uid=sessionStorage.getItem("uid");
		fname=document.getElementById("fname").value;
		lname=document.getElementById("lname").value;
		email=document.getElementById("email").value;
		dob=document.getElementById("dob").value;
		phone=document.getElementById("phone").value;
		if(phone.length<10){
		alert("Phone number should be atleast 10 digit.");
		document.getElementById("phone").focus()}
		else{
		roll=document.getElementById("roll").value;
		sem=document.getElementById("sem").value;
		div=document.getElementById("div").value;
		year=document.getElementById("year").value;
		flat=document.getElementById("flat").value;
		pin=document.getElementById("pin").value;
		if(pin.length!=6){
		alert("Pincode should be 6 digit only");
		document.getElementById("pin").focus()}
		else{
		area=document.getElementById("area").value;
		city=document.getElementById("city").value;
		state=document.getElementById("state").value;
		pass=document.getElementById("password").value;
		if(pass.length<8){
		alert("Password length should be atleast 8 character.");
		}
		else{
		cpass=document.getElementById("cpassword").value;
		if(cpass!=pass){
		alert("Password not matched!!!.");
		}
		else{
		try{
		image=document.getElementById("filename").innerHTML;
		}catch{
			pass;
		}

		

		data="fname="+fname+"&lname="+lname+"&email="+email+"&dob="+dob+"&phone="+phone+"&roll="+roll+"&sem="+sem+"&div="+div+"&year="+year+"&flat="+flat+"&pin="+pin+"&area="+area+"&city="+city+"&state="+state+"&pass="+pass+"&uid="+uid+"&obj=2"+"&img="+image;

		ss=new XMLHttpRequest
		ss.open("GET","../admin/api.php?"+data,true)
		ss.onload=function(){
		res1=(this.responseText)
		res=(this.responseText)
		console.log(res)
		}
		ss.send();
		
		location.replace("studentdashboard.php")
		}}}}})
	</script>

</body>

</html>