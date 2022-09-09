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

<body  onload="column()">
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
                $fname=$_REQUEST['fname'];
                $lname=$_REQUEST['lname'];
                $email=$_REQUEST['email'];
                $phone=$_REQUEST['phone'];
                $obj=$_REQUEST['obj'];
                $userid=$_REQUEST['userid'];


                echo "fname : <span id='fname'>".$fname."</span><br>";
                echo "lname : <span id='lname'>".$lname."</span><br>";
                echo "email : <span id='email'>".$email."</span><br>";
                echo "phone : <span id='phone'>".$phone."</span><br>";
                echo "userid : <span id='userid'>".$userid."</span><br>";


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

					<h1 class="h3 mb-3">Your Pending Tests</h1>

					<div class="row">
						<div class="col-12">
							<div class="card" style="height: 20vh;" >
								<div class="card-header">
                                <div id="division">
                                    <br><br> <span> Select Division : </span><br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A : <input type="radio" name="dev" id="A" value="A">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B : <input type="radio" name="dev" id="B" value="B">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C : <input type="radio" name="dev" id="C" value="C">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D : <input type="radio" name="dev" id="D" value="D"><br>
                                    <button id="devision" class="btn btn-info">submit</button>
                                </div>
								</div>
								
							</div>
							<div class="card" style="height: 20vh;" >
								<div class="card-header">
                                <div id="sem">Select Sem : <br></div>
                                <button id="se" class="btn btn-info" disabled>Submit</button>
    
								</div>
								
							</div>
							<div class="card" style="height: 20vh;margin-top: 50px;" >
								<div class="card-header">
                                <div id="sub">Select Subject : <br><br></div>
                                <button id="su" class="btn btn-info"  disabled>Submit</button>

							</div><br><br>

							<div class="card" style="height: 20vh" >
								<div class="card-header">
                                <div id="unit">Select Unit : <br><br></div>
                                <button id="uni" class="btn btn-info" disabled>Submit</button>
                                <div id="total" style="display: none;"></div>

                                <br><br><br>  
                                <button id="submit" style="float: right;" class="btn btn-warning" disabled> Next</button>

								</div>


					
							</div>
							
						</div>
                        
					</div>
                    

				</div>
                
	
			</main>


		</div>
	</div>

    <script src="../js/ADMIN/sem.js"></script>

	<script src="../js/app.js"></script>
    <script>
        fname=document.getElementById("fname").innerHTML;
        lname=document.getElementById("lname").innerHTML;
        email=document.getElementById("email").innerHTML;
        phone=document.getElementById("phone").innerHTML;
        userid=document.getElementById("userid").innerHTML;
        details="&fname="+fname+"&lname="+lname+"&email="+email+"&phone="+phone+"&userid="+userid;  

        document.getElementById("n_name").innerHTML=fname+" "+lname
        
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
        })
        document.getElementById("logout").addEventListener("click",()=>{
            location.replace("../home.html")
        })

    </script>


<style>
    #division{
        border: none;
        font-size: 20px;
        padding-left: 6%;
        margin-top: -60px;
    }
    #sem{
        border: none;
        font-size: 20px;
        padding-left: 6%;
        /* margin-top: -60px; */
    }
    #sub{
        border: none;
        font-size: 20px;
        padding-left: 6%;
        /* margin-top: -60px; */
    }
    #unit{
        border: none;
        font-size: 20px;
        padding-left: 6%;
        /* margin-top: -60px; */
    }
    #se,#su,#uni{margin-left: 6%;}
    input[type='radio']{
        margin-top: 10px;
        width: 17px;
        height: 17px;
        margin-left: 10px;
    }
    button{
        margin-top: 10px;
    }
</style>




</body>

</html>














<!-- <!DOCTYPE html>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body onload="column()">



<div id="division">
        <br><br> Select Division : <br>
        A : <input type="radio" name="dev" id="A" value="A">
        B : <input type="radio" name="dev" id="B" value="B">
        C : <input type="radio" name="dev" id="C" value="C">
        D : <input type="radio" name="dev" id="D" value="D"><br><br>
    </div>

   

    <div id="sem">Select Sem : <br><br></div>
    <button id="se" disabled>Submit</button>
    
    <br><br>
    <br>

    <div id="sub">Select Subject : <br><br></div>
    <button id="su" disabled>Submit</button>

    <br><br>
    <br>

    <div id="unit">Select Unit : <br><br></div>

    <button id="uni" disabled>Submit</button>


    <br><br>
    <br>

    total : <div id="total"></div>
    <br>

    <button id="submit" disabled> Confirm</button>


</body>
</html>
	 -->