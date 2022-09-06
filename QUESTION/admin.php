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
						<a class="sidebar-link" id="test">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Create Test</span>
            		</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" id="panel">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">View Panel</span>
            		</a>
					</li>
					
				</ul>

			</div>
		</nav>
        <div style="display: none">

                <?php
                $fname=$_REQUEST['fname'];
                $lname=$_REQUEST['lname'];
                $email=$_REQUEST['email'];
                $phone=$_REQUEST['phone'];
                $obj=$_REQUEST['obj'];

                echo "fname : <span id='fname'>".$fname."</span><br>";
                echo "lname : <span id='lname'>".$lname."</span><br>";
                echo "email : <span id='email'>".$email."</span><br>";
                echo "phone : <span id='phone'>".$phone."</span><br>";

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
								<a class="dropdown-item" id="logout">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3"><strong>Your</strong> Dashboard</h1>


				</div>
			</main>

		</div>
	</div>

	<script src="../js/app.js"></script>
    <script>
        fname=document.getElementById("fname").innerHTML;
        lname=document.getElementById("lname").innerHTML;
        email=document.getElementById("email").innerHTML;
        phone=document.getElementById("phone").innerHTML;
        details="&fname="+fname+"&lname="+lname+"&email="+email+"&phone="+phone;  

        document.getElementById("n_name").innerHTML=fname+" "+lname

        // document.getElementById("profilepage").addEventListener("click",()=>{
        //     document.getElementById("profilepage").href="profile.php?"+details
        // })

        // document.getElementById("homepage").addEventListener("click",()=>{
        //     document.getElementById("homepage").href="admin.php?"+details
        // })

        // document.getElementById("test").addEventListener("click",()=>{
        //     document.getElementById("test").href="sem.php?"+details+"&obj=1"
        // })

        // document.getElementById("panel").addEventListener("click",()=>{
        //     document.getElementById("panel").href="panel.php?"+details+"&obj=1"
        // })

		
        document.getElementById("profilepage").addEventListener("click",()=>{
            location.replace("profile.php?"+details)
        })

        document.getElementById("homepage").addEventListener("click",()=>{
            location.replace("admin.php?"+details)
        })
		document.getElementById("test").addEventListener("click",()=>{
            location.replace("sem.php?"+details+"&obj=1")
        })

        document.getElementById("panel").addEventListener("click",()=>{
            location.replace("panel.php?"+details+"&obj=1")
            // document.getElementById("panel").href=
        })
        document.getElementById("logout").addEventListener("click",()=>{
            location.replace("../home.html")
			// window.close();
        })

    </script>



</body>

</html>








<!-- 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
</head>
<body>

  
<a href="../panel.php"><button id="panel">PANEL</button></a>

    <button id="create">Create Questions</button>


</body>
</html> -->