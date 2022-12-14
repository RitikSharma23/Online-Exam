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

					<li class="sidebar-item ">
						<a class="sidebar-link" id="homepage">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" id="profilepage">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
            </a>
					</li>

					

					<li class="sidebar-item active">
						<a class="sidebar-link" id="marks">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Marks</span>
            </a>
					</li>


					
				</ul>

			</div>
		</nav>

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

					<h1 class="h3 mb-3">Your Result</h1>

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


	<script src="result.js"></script>


	<script src="../js/app.js"></script>
    <script>
		img=sessionStorage.getItem("img")
		document.getElementById("profileimgm").src="../uploads/"+img

        roll=sessionStorage.getItem("roll")
        fname=sessionStorage.getItem("fname")
        lname=sessionStorage.getItem("lname")
        uid=sessionStorage.getItem("uid")
        sem=sessionStorage.getItem("sem")
        email=sessionStorage.getItem("email")
        phone=sessionStorage.getItem("phone")
        dev=sessionStorage.getItem("dev")


        document.getElementById("n_name").innerHTML=fname+" "+lname

        document.getElementById("profilepage").addEventListener("click",()=>{
            location.replace("profile.php")
        })

        document.getElementById("homepage").addEventListener("click",()=>{
            location.replace("studentdashboard.php")
        })
        document.getElementById("logout").addEventListener("click",()=>{
			sessionStorage.clear();
            location.replace("s_login.html")
        })

        // document.getElementById("exam").addEventListener("click",()=>{
        //     location.replace("loadsubjet.php")
        // })


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
