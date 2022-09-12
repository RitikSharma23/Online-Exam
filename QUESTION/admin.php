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

	<title>Faculty | Dashboard</title>

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
    num=sessionStorage.getItem("userid");
    ph=sessionStorage.getItem("pass");

    ss=new XMLHttpRequest
    ss.open("GET","../api/login.php?number="+num+"&password="+ph+"&obj=1",true)
    ss.onload=function(){
    res=JSON.parse(this.responseText);
    fname=res['data'][0].fname;
    lname=res['data'][0].lname;
    email=res['data'][0].email;
    phone=res['data'][0].phone;
    pass=res['data'][0].pass;
    userid=res['data'][0].userid;
	sessionStorage.setItem("fname",fname);
	sessionStorage.setItem("lname",lname);
	sessionStorage.setItem("email",email);
	sessionStorage.setItem("phone",phone);
	sessionStorage.setItem("userid",userid);
	sessionStorage.setItem("pass",pass);
    }
    ss.send();
        fname=sessionStorage.getItem("fname");
        lname=sessionStorage.getItem("lname");
        email=sessionStorage.getItem("email");
        phone=sessionStorage.getItem("phone");
        userid=sessionStorage.getItem("userid");
    
        document.getElementById("n_name").innerHTML=fname+" "+lname

        document.getElementById("profilepage").addEventListener("click",()=>{
            location.replace("profile.php")
        })

        document.getElementById("homepage").addEventListener("click",()=>{
            location.replace("admin.php")
        })
		document.getElementById("test").addEventListener("click",()=>{
            location.replace("sem.php")
        })

        document.getElementById("panel").addEventListener("click",()=>{
            location.replace("panel.php")
        })
        document.getElementById("logout").addEventListener("click",()=>{
			sessionStorage.clear();
            location.replace("../home.html")
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