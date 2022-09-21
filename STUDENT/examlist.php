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
		location.replace("../student/s_login.html")
	}
	</script>
</head>

<body>
<div style="display: none;">
<?php
$roll=$_REQUEST['roll'];
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$phone=$_REQUEST['phone'];
$email=$_REQUEST['email'];
$sem=$_REQUEST['sem'];
$dev=$_REQUEST['dev'];
$uid=$_REQUEST['uid'];
$id=$_REQUEST['id'];
$subcol=$_REQUEST['subcol'];


echo "roll : <span id='roll'>".$roll."</span><br>";
echo "fname : <span id='fname'>".$fname."</span><br>";
echo "lname : <span id='lname'>".$lname."</span><br>";
echo "phone : <span id='phone'>".$phone."</span><br>";
echo "email : <span id='email'>".$email."</span><br>";
echo "sem : <span id='sem'>".$sem."</span><br>";
echo "dev : <span id='dev'>".$dev."</span><br>";
echo "uid : <span id='uid'>".$uid."</span><br>";
echo "id : <span id='id'>".$id."</span><br>";
echo "subject : <span id='subcol'>".$subcol."</span><br>";

?>
</div>

	<div class="wrapper">
		

		<div class="main">
		

			
			</nav>

			<main class="content" style="overflow-y:  scroll;">
				<div class="container-fluid p-0">


					<div class="row">
						<div class="col-12">
							<div class="card" style="height: 80vh;" >
								<div class="card-header">
									<div id="div1">

                  </div>
                </div>
                    <button id="submit">Submit</button>
								<div class="card-body">
									
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>

		</div>
	</div>


  <script src="examlist.js"></script><br><br>



	<script src="../js/app.js"></script>
    <script>
		if(localStorage.getItem(document.getElementById("subcol").innerHTML)==1){
			alert("you have already attempted..")
			location.replace('studentdashboard.php')
		}else{
		sessionStorage.setItem(document.getElementById("subcol").innerHTML,0)
		img=sessionStorage.getItem("img")
        roll=sessionStorage.getItem("roll")
        fname=sessionStorage.getItem("fname")
        lname=sessionStorage.getItem("lname")
        uid=sessionStorage.getItem("uid")
        sem=sessionStorage.getItem("sem")
        email=sessionStorage.getItem("email")
        phone=sessionStorage.getItem("phone")
        dev=sessionStorage.getItem("dev")
		}

    </script>


<style>
	body{
		font-size: 18px;
	}
	table{
		width: 90%;
		margin-left: 5%;
		margin-top: 2%;
	}
  .hhh{
    border: solid;
    padding: 40px;
  }
  input[type="text"]{
    width: 100%;
    padding: 20px;

  }
  input[type="radio"]{
    padding: 40px;
	margin: 10px;
  }
  fieldset{
    padding: 20px 0px 20px 60px;
    border-radius: 20px;
  }

	td{
		border: solid grey;
    padding: 20px 0px 0px 0px;
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