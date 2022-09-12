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
<div style="display: none;">

        <?php
        $fname=$_REQUEST['fname'];
        $lname=$_REQUEST['lname'];
        $email=$_REQUEST['email'];
        $phone=$_REQUEST['phone'];
        $sem = $_REQUEST['sem'];
        $sub = $_REQUEST['sub'];
        $unit = $_REQUEST['unit'];
        $dev = $_REQUEST['dev'];
        $userid=$_REQUEST['userid'];
        $filename=$_REQUEST['filename'];


        echo "fname : <span id='fname'>".$fname."</span><br>";
        echo "lname : <span id='lname'>".$lname."</span><br>";
        echo "email : <span id='email'>".$email."</span><br>";
        echo "phone : <span id='phone'>".$phone."</span><br>";
        echo "sem : <span id='sem'>".$sem."</span><br>";
        echo "subject : <span id='sub'>".$sub."</span><br>";
        echo "unit : <span id='unit'>".$unit."</span><br>";
        echo "Division : <span id='dev'>".$dev."</span><br>";
        echo "phone : <span id='userid'>".$userid."</span><br>";
        echo "filename : <span id='filename'>".$filename."</span><br>";


        ?>
</div>
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
							<div class="card" style="height: 80vh;" >
								<div class="card-header">
                                <div id="div1">

                                <center>The CSV Has Less rows Then expected <br> Please Upload CSV In Proper Format As Shown</center>

                                </div>  

                                <br><br>

                                <button id="submit" style="display: none;">Submit</button>
								</div>
								
							</div>
							

							
							
						</div>
                        
					</div>
                    

				</div>
                
	
			</main>


		</div>
	</div>

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
    button{
        width: 9%;
        margin:0% 3%;
    }
    input{
        margin: 6px;
    }
    
    </style>



	<script src="../js/app.js"></script>
    <script>
                
            l=0;
            res={}
        fname=document.getElementById("fname").innerHTML;
        lname=document.getElementById("lname").innerHTML;
        email=document.getElementById("email").innerHTML;
        phone=document.getElementById("phone").innerHTML;
        userid=document.getElementById("userid").innerHTML;
        details="&fname="+fname+"&lname="+lname+"&email="+email+"&phone="+phone+"&userid="+userid;  

        document.getElementById("n_name").innerHTML=fname+" "+lname;
        filename=document.getElementById("filename").innerHTML;
            ss=new XMLHttpRequest
            ss.open("GET","../excel.php?filename="+filename,true)
            ss.onload=function(){
            res=JSON.parse(this.responseText)

            console.log(res['data'].length);
            l=res['data'].length;

            div=document.getElementById("div1")
            div.innerHTML=""


            if(res['row']>6){
                div.innerHTML="<center>The CSV has Much Rows Then Required <br> Please Upload CSV In proper Format as Shown </center> "
            }else if(res['data'][0]['question']!='question' && res['data'][0]['question']!='Question' ){
                div.innerHTML="<center>The CSV First cell :A1 not match <br> contains \'question\'</center> "
            }else if(res['data'][0]['a']!='a' && res['data'][0]['a']!='A' ){
                div.innerHTML="<center>The CSV First cell :B1 not match <br> contains \'a\'</center> "
            }else if(res['data'][0]['b']!='b' && res['data'][0]['b']!='B' ){
                div.innerHTML="<center>The CSV First cell :C1 not match <br> contains \'b\'</center> "
            }else if(res['data'][0]['c']!='c' && res['data'][0]['c']!='C' ){
                div.innerHTML="<center>The CSV First cell :D1 not match <br> contains \'c\'</center> "
            }else if(res['data'][0]['d']!='d' && res['data'][0]['d']!='D' ){
                div.innerHTML="<center>The CSV First cell :E1 not match <br> contains \'d\'</center> "
            }else if(res['data'][0]['correct']!='correct' && res['data'][0]['correct']!='Correct' ){
                div.innerHTML="<center>The CSV First cell :F1 not match <br> contains \'correct\'</center> "
            }else{
            table=document.createElement('table')
            table.border="1"
            document.getElementById("submit").style.display="block";

            for(i=0;i<res['data'].length;i++){
            row=document.createElement('tr')
            td=document.createElement('td')

            td0=document.createElement('td')
            text0=document.createTextNode(i)
            td0.appendChild(text0)

            td1=document.createElement('td')
            text1=document.createTextNode(res['data'][i]['question'])
            td1.appendChild(text1)

            td2=document.createElement('td')
            text2=document.createTextNode(res['data'][i]['a'])
            td2.appendChild(text2)

            td3=document.createElement('td')
            text3=document.createTextNode(res['data'][i]['b'])
            td3.appendChild(text3)

            td4=document.createElement('td')
            text4=document.createTextNode(res['data'][i]['c'])
            td4.appendChild(text4)

            td5=document.createElement('td')
            text5=document.createTextNode(res['data'][i]['d'])
            td5.appendChild(text5)

            td6=document.createElement('td')
            text6=document.createTextNode(res['data'][i]['correct'])
            td6.appendChild(text6)

            td7=document.createElement('td')
            text7=document.createTextNode(res['data'][i]['total'])
            td7.appendChild(text7)

            td8=document.createElement('td')
            text8=document.createTextNode(res['data'][i]['status'])
            td8.appendChild(text8)

            td9=document.createElement('td')
            var a=document.createElement('a')
            a.href="edit.php?id="+res['data'][i]['question_id']
            text9=document.createTextNode('Edit')
            a.appendChild(text9)
            td9.appendChild(a)


            row.appendChild(td0)
            row.appendChild(td1)
            row.appendChild(td2)
            row.appendChild(td3)
            row.appendChild(td4)
            row.appendChild(td5)
            row.appendChild(td6)
            table.appendChild(row)
            div.appendChild(table)
            }
        }
    }
    ss.send()


    document.getElementById("submit").addEventListener("click",()=>{
        function pad(d){return (d < 10) ? '0' + d.toString() : d.toString();}
    y=new Date;
    id=pad(y.getMinutes())+pad(y.getDate())+pad(y.getMonth())+pad(y.getSeconds());
    
        ss=new XMLHttpRequest
            ss.open("GET","../excel.php?filename="+filename,true)
            ss.onload=function(){
            res=JSON.parse(this.responseText)
            for(i=1;i<res['data'].length;i++){
                no=i+1;
                nam=document.getElementById("fname").innerHTML;
                sub=document.getElementById("sub").innerHTML;
                sem=document.getElementById("sem").innerHTML;
                unit=document.getElementById("unit").innerHTML;
                dev=document.getElementById("dev").innerHTML;
                q1=res['data'][i]['question']
                o1=res['data'][i]['a']
                o2=res['data'][i]['b']
                o3=res['data'][i]['c']
                o4=res['data'][i]['d']
                selectedSize=res['data'][i]['correct']

                console.log(id)
                console.log(nam)
                console.log(sub)
                console.log(div)
                console.log(unit)

            ss=new XMLHttpRequest
            ss.open("GET","../api/question.php?dev="+dev+"&quid="+nam+"&id="+id+"&no="+no.toString()+"&sem="+sem+"&subject="+sub+"&unit="+unit+"&question="+q1+"&a="+o1+"&b="+o2+"&c="+o3+"&d="+o4+"&correct="+selectedSize+"&obj=1",true)
            ss.onload=function(){
            res=this.responseText
            }
            ss.send()

            
            }

            tot=res['data'].length-1;
    
            ss=new XMLHttpRequest
            ss.open("GET","../api/question.php?dev="+dev+"&quid="+phone+"&id="+id+"&sem="+sem+"&subject="+sub+"&unit="+unit+"&total="+tot+"&obj=2",true)
            ss.onload=function(){
            res=this.responseText
            }
            ss.send()
            }
            ss.send()

            window.location.href = "panel.php?"+details+"&obj=1";
    })

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