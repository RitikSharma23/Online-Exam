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

	<title>Dashboard</title>

	<link href="../css/app.css" rel="stylesheet">
	<link href="../https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="../index.html">
            <span class="align-middle">Faculty</span>
            </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" id="homepage">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" id="profilepage">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" id="exam">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Exam</span>
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
                <img src="../img/avatars/profile.png" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark" id="n_name">User</span>
              </a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="../pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="../#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="../index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
								<a class="dropdown-item" href="../#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="../home.html">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Your Pending Tests</h1>

					<div class="row">
						<div class="col-12">
							<div class="card" style="height: 80vh;" >
								<div class="card-header">
									<h5 class="card-title mb-0" id="div1">No Test Found</h5>
								</div>
								<div class="card-body">
									
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>

		</div>
	</div>


	<script src="studentdashboard.js"></script>


	<script src="../js/app.js"></script>
    <script>
        roll=document.getElementById("roll").innerHTML
        fname=document.getElementById("fname").innerHTML
        lname=document.getElementById("lname").innerHTML
        uid=document.getElementById("uid").innerHTML
        sem=document.getElementById("sem").innerHTML
        email=document.getElementById("email").innerHTML
        phone=document.getElementById("phone").innerHTML
        dev=document.getElementById("dev").innerHTML

        details="?roll="+roll+"&fname="+fname+"&lname="+lname+"&phone="+phone+"&email="+email+"&sem="+sem+"&uid="+uid+"&dev="+dev;
        

        document.getElementById("n_name").innerHTML=fname+" "+lname

        document.getElementById("profilepage").addEventListener("click",()=>{
            document.getElementById("profilepage").href="profile.php?"+details
        })

        document.getElementById("homepage").addEventListener("click",()=>{
            document.getElementById("homepage").href="admin.php?"+details
        })

        document.getElementById("exam").addEventListener("click",()=>{
            document.getElementById("exam").href="loadsubjet.php?"+details
        })


    </script>


<style>
	table{
		width: 90%;
		margin-left: 5%;
		margin-top: 2%;
	}
	td{
		border: solid grey;
		padding: 1%;
		font-size: 20px;
		color: black;
		border-radius: 10px;
		text-align: center;
		text-transform: capitalize;
	}
</style>

</body>

</html>
