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
	<link rel="shortcut icon" href="./img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />

	<title>Admin Login</title>

	<link href="../css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
<main class="d-flex w-100" >
<div class="container d-flex flex-column" >
<div class="row vh-100" style="border: none; margin-top: -7%">
<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100" style="border: none; width:50%;">
<div class="d-table-cell align-middle">

<div class="text-center mt-4">
<h1 class="h2">Admin Login</h1>
<p class="lead">
Sign in to your account to continue
</p>
</div>

<div class="card">
<div class="card-body">
<div class="m-sm-4">
	<div class="text-center">
		<img src="../img/avatars/profile.png" class="img-fluid rounded-circle" width="132" height="132" />
	</div>

		<div class="mb-3">
			<label class="form-label">User-Id</label>
			<input class="form-control form-control-lg" type="phone" name="number" id="number" placeholder="Enter your phone" required/>
		</div>
		<div class="mb-3">
			<label class="form-label">Password</label>
			<input class="form-control form-control-lg" type="password" name="password" id="password" placeholder="Enter your password" required/>
			
		</div>
		
		<div class="text-center mt-3">
			<button class="btn btn-lg btn-primary" id="submit"> Sign-in</button>
		</div>

</div>
</div>
</div>

</div>
</div>
</div>
</div>
</main>

<script>
var data=[[]];
var obj=1;
fname="";
lname="";
email="";
phone="";
    
document.getElementById("submit").addEventListener("click",()=>{

num=document.getElementById("number").value;
ph=document.getElementById("password").value;

ss=new XMLHttpRequest
ss.open("GET","../api/login.php?number="+num+"&password="+ph+"&obj=7",true)
ss.onload=function(){
res=JSON.parse(this.responseText)
succ=res['success']


if(num==""){
	alert("Please enter userid")
}else if(num.match(/[0-9]/)==null){
	alert("Please enter userid in proper format only")
}else if(ph==""){
	alert("Please enter password")
}else if(succ==1){
    fname=res['data'][0].fname;
    lname=res['data'][0].lname;
    email=res['data'][0].email;
    phone=res['data'][0].phone;
    pass=res['data'][0].pass;
    location.replace("student.php")

	sessionStorage.setItem("fname",fname)
	sessionStorage.setItem("lname",lname)
	sessionStorage.setItem("email",email)
	sessionStorage.setItem("phone",phone)

}else{
    alert("User-ID or Password not found")
}

}
ss.send()

})

</script>

<script src="../js/app.js"></script>


</body>

</html>
