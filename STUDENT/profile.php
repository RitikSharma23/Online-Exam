<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="../https://fonts.gstatic.com">
	<link rel="shortcut icon" href="../img/icons/icon-48x48.png" />

	<link rel="canonical" href="../https://demo-basic.adminkit.io/" />

	<title>Student | Profile</title>

	<link href="../css/app.css" rel="stylesheet">
	<link href="../https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<script>
	fname=sessionStorage.getItem("fname")
	if(fname==null){
		alert("please login first");
		location.replace("../home.html")
	}
	</script>
</head>

<body>
	<div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand">
				<span class="align-middle">Student</span>
				</a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" id="adminpage">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" id="profilepage">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
            </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" id="marks">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Marks</span>
            </a>
					</li>

				</ul>

			</div>
	    </nav>

        <div style="display: none">

                <?php
                $roll=$_REQUEST['roll'];
				$fname=$_REQUEST['fname'];
				$lname=$_REQUEST['lname'];
				$phone=$_REQUEST['phone'];
				$email=$_REQUEST['email'];
				$sem=$_REQUEST['sem'];
				$dev=$_REQUEST['dev'];
				$uid=$_REQUEST['uid'];
				
				echo "roll : <span id='roll'>".$roll."</span><br>";
				echo "fname : <span id='fname'>".$fname."</span><br>";
				echo "lname : <span id='lname'>".$lname."</span><br>";
				echo "phone : <span id='phone'>".$phone."</span><br>";
				echo "email : <span id='email'>".$email."</span><br>";
				echo "sem : <span id='sem'>".$sem."</span><br>";
				echo "dev : <span id='dev'>".$dev."</span><br>";
				echo "uid : <span id='uid'>".$uid."</span><br>";

                ?>

        </div>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						
					
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="../#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="../#" data-bs-toggle="dropdown">
                <img src="../img/avatars/profile.png" id="profileimgm" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark" id="n_name">User</span>
              </a>
							<div class="dropdown-menu dropdown-menu-end">
								
								
								<a class="dropdown-item" id="logout">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<div class="row">
						<div class="col-md-4 col-xl-3" style="border: solid;width: 100%;">
							<div class="card mb-3">
								<div class="card-header">
									<h5 class="card-title mb-0">Profile Details</h5>
								</div>
								<div class="card-body text-center">
									<img src="../img/avatars/profile.png" id="profileimg" alt="Christina Mason" class="img-fluid rounded-circle mb-2" width="128" height="128" />
									<h5 class="card-title mb-0" id="n_nam" style="text-transform: capitalize;">user name</h5><br>
									<h5 class="card-title mb-0" id="n_uid" style="text-transform: capitalize;">user uid</h5><br>
									<h5 class="card-title mb-0" id="n_sem" style="text-transform: capitalize;">user sem</h5><br>
									<h5 class="card-title mb-0" id="n_dev" style="text-transform: capitalize;">user div</h5><br>
									<h5 class="card-title mb-0" id="n_email" style="text-transform: capitalize;">user email</h5><br>
									<h5 class="card-title mb-0" id="n_phone" style="text-transform: capitalize;">user phone</h5><br>

									<button id="edit">Edit Profile</button>
									
								</div>
		
					
							</div>
						</div>

					
					</div>

				</div>
			</main>

		</div>
	</div>

	<script src="../js/app.js"></script>
    <script>

        roll=sessionStorage.getItem("roll")
        fname=sessionStorage.getItem("fname")
        lname=sessionStorage.getItem("lname")
        uid=sessionStorage.getItem("uid")
        sem=sessionStorage.getItem("sem")
        email=sessionStorage.getItem("email")
        phone=sessionStorage.getItem("phone")
        dev=sessionStorage.getItem("dev")
        img=sessionStorage.getItem("img")

        details="?roll="+roll+"&fname="+fname+"&lname="+lname+"&phone="+phone+"&email="+email+"&sem="+sem+"&uid="+uid+"&dev="+dev;
        
        document.getElementById("n_name").innerHTML=fname+" "+lname
        document.getElementById("n_nam").innerHTML=fname+" "+lname
        document.getElementById("n_email").innerHTML="Email : "+email
        document.getElementById("n_uid").innerHTML="En no.: "+uid
        document.getElementById("n_sem").innerHTML="Sem : "+sem
        document.getElementById("n_phone").innerHTML="No +91 "+phone
        document.getElementById("n_dev").innerHTML="Div : "+dev
		document.getElementById("profileimg").src="../uploads/"+img
		document.getElementById("profileimgm").src="../uploads/"+img

        document.getElementById("profilepage").addEventListener("click",()=>{
            location.replace("profile.php")
        })

        document.getElementById("adminpage").addEventListener("click",()=>{
            location.replace("studentdashboard.php")
        })
        document.getElementById("edit").addEventListener("click",()=>{
            location.href=("s_edit.php?uid="+uid)
        })
		document.getElementById("logout").addEventListener("click",()=>{
			sessionStorage.clear();
            location.replace("s_login.html")
        })
		document.getElementById("marks").addEventListener("click",()=>{
            location.replace("result.php")
        })
    </script>



</body>

</html>


