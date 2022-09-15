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
		alert("please login");
        location.replace("../home.php")
	}
	</script>
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
						<a class="sidebar-link" id="test">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Create Test</span>
            		</a>
					</li>

					<li class="sidebar-item " >
						<a class="sidebar-link" id="panel">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">View Panel</span>
            		</a>
					</li>
					
				</ul>

			</div>
		</nav>
        <div style="display: none">

        <?php
    $sem = $_REQUEST['sem'];
    $subject = $_REQUEST['subject'];
    $unit = $_REQUEST['unit'];
    $dev = $_REQUEST['dev'];
    $userid=$_REQUEST['userid'];

    echo "sem : <span id='sem'>".$sem."</span><br>";
    echo "subject : <span id='subject'>".$subject."</span><br>";
    echo "unit : <span id='unit'>".$unit."</span><br>";
    echo "Division : <span id='dev'>".$dev."</span><br>";
    echo "userid : <span id='userid'>".$userid."</span><br>";
    $id=$_REQUEST['id'];

    echo "<span id='quid' style='display:none'>".$id."</span>";


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

			<main class="content" style="overflow-y: scroll;">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Create Questions</h1>

					<div class="row">
						<div class="col-12">
							<div class="card" style="height: 80vh;" >
								<div class="card-header">
                                <div id="div1">
                                </div> 
                                <br><br>
                                <button id="sub" class="btn btn-success" style="float: right;">submit</button>

								</div>
								
							</div>
						</div>
                        
					</div>
                    

				</div>
                
	
			</main>

		</div>
	</div>

<script src="../js/ADMIN/edit.js"></script>



	<script src="../js/app.js"></script>
    <script>
        fname=sessionStorage.getItem("fname");
	lname=sessionStorage.getItem("lname");
	email=sessionStorage.getItem("email");
	phone=sessionStorage.getItem("phone");
	userid=sessionStorage.getItem("userid");
        details="&fname="+fname+"&lname="+lname+"&email="+email+"&phone="+phone+"&userid="+userid;  

        document.getElementById("n_name").innerHTML=fname+" "+lname
        
        document.getElementById("profilepage").addEventListener("click",()=>{
            location.replace("profile.php?")
        })

        document.getElementById("homepage").addEventListener("click",()=>{
            location.replace("admin.php?")
        })
		document.getElementById("test").addEventListener("click",()=>{
            location.replace("sem.php?")
        })

        document.getElementById("panel").addEventListener("click",()=>{
            location.replace("panel.php?")
        })
        document.getElementById("logout").addEventListener("click",()=>{
			sessionStorage.clear();
            location.replace("../home.html")
        })

    </script>


<style>
    #d1{
        padding: 30px;
        border-radius: 15px;
    }
    legend{
        color: black;
        padding: 10px;
    }
    input[type='text']{
        margin-left: 10px;
        width: 30%;
    }
    .hhh{
    border: solid;
  }
</style>

</body>

</html>