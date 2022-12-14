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

	<title>Manage&nbsp;|&nbsp;Student</title>

	<link href="../css/app.css" rel="stylesheet">
	<link href="../https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<script>
		fname=sessionStorage.getItem("fname")
	if(fname==null){
		alert("please login first");
		location.replace("admin.php")
	}
	</script>
</head>

<body>
	<div style="display: none;">
		<?php
		$fname=$_REQUEST['fname'];
		$lname=$_REQUEST['lname'];
		$email=$_REQUEST['email'];
		$phone=$_REQUEST['phone'];
		echo "<span id='fname'>".$fname."</span>";
		echo "<span id='lname'>".$lname."</span>";
		echo "<span id='email'>".$email."</span>";
		echo "<span id='phone'>".$phone."</span>";
		?>
	</div>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" >
            <span class="align-middle">ADMIN</span>
            </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" id="mstudent">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Manage Student</span>
            </a>
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" id="mfaculty">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Manage Faculty</span>
            </a>
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" id="astudent">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Add Student</span>
            </a>
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" id="afaculty">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Add Faculty</span>
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
								
								<a class="dropdown-item" id="logout"> Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content" style="overflow-y: scroll;">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Manage Students</h1>

					<div class="row">
						<div class="col-12">
							<center>
							<input type="number" id="uid" placeholder="Enter Enrollment">
							<button id="search" class="btn btn-success">Search</button>
							</center>
							<div class="card" style="height: 80vh;" >

								<div class="card-header">
                                <div id="div1">

                                </div>  

                                
								</div>
								
							</div>
							

							
							
						</div>
                        
					</div>
                    

				</div>
                
	
			</main>


		</div>
	</div>

    <style>
        td{
            border: solid;
			padding: 10px;
			text-align: center;
        }
		table{
			width: 100%;
		}
		#uid{
			margin: 30px;
			height: 30px;
		}
    </style>

    <script src="student.js"></script>
	<script src="../js/app.js"></script>
    <script>
	fname=sessionStorage.getItem("fname")
	lname=sessionStorage.getItem("lname")
	email=sessionStorage.getItem("email")
	phone=sessionStorage.getItem("phone")

	if(fname==null){
		alert("please login first");
		location.replace("admin.php")
	}


        document.getElementById("n_name").innerHTML="ADMIN";


        document.getElementById("mstudent").addEventListener("click",()=>{
            location.replace("student.php")
        })
		document.getElementById("astudent").addEventListener("click",()=>{
            location.href=("s_register.php")
        })

        document.getElementById("mfaculty").addEventListener("click",()=>{
            location.replace("faculty.php")
        })

        document.getElementById("afaculty").addEventListener("click",()=>{
            location.href=("f_register.php")
        })
        document.getElementById("logout").addEventListener("click",()=>{
            location.replace("admin.php")
			sessionStorage.clear();
        })
     

    </script>



</body>

</html>

