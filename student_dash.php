<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="CSS/style1.css">
		<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

		<nav class="navbar navbar-fixed-top" id="top-nav">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand"  href="index.html">Campus Recruitment Management System</a>
				</div>
				<ul id="list1" class="nav navbar-nav">
					<li class="active" id="h1"><a href="index.html">Home</a></li>
					<li class="active"><a href="delete_student.php">Delete Account</a></li>
					<li class="active"><a href="index.html">Logout</a></li>
				</ul>
			</div>
		</nav>

		<style>

			*{
				font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			}

			
			body{
				background-color: #7f7fc6a1;
	
			}

			.container-fluid{
				margin:2px 10px;
				
			} 
			.navbar-header{
			font-size: 16px;
			font-weight: bold;

		}

		#top-nav {

			background-color: #47477e;
			box-shadow: 1px 7px 15px -1px;
			padding:7px 10px;
			}

		.navbar-nav a {
			margin-left: 15rem;
			font-size: 16px;
			font-weight: bold;
		}

		.navbar-nav>li>a:hover{
			color:black;
		}

		.navbar-header a:hover{
			color:black;
		}

			#dash {
				margin-right:20rem;
				margin-left:60rem;
				width:100%;
			}


			.well {
				box-sizing: border-box;
    			min-height: 20px;
   				padding: 19px;
  				margin-bottom: 20px;
   				background-color: white;
    			border-radius: 20px;
    			box-shadow: 4px 3px 10px 2px;
				margin-left:-60rem;
				}

				#box2{
					background-color: #ffffffb8;
   					height: auto;
    				margin: 10px;
    				margin-left: -105px;
    				color: black;
    				border: none;
				}

				#box3{
					background-color: #ffffffb8;
					height:auto;
					margin:10px;
					margin-left: 30px;
				}


			.row{
				height:auto; 
				margin:10px 20px;
				border-radius:10px;
			}

			.row .well{
				border-radius: 25px;
    			background-color: #ffffffb8;
    			height: auto;
    			margin: 13px;
    			margin-left: -59rem;
   		 		color: black;
    			border: none;
			}

			.table>tbody>tr:hover{
				background-color:white;
				color:black;
			}


			.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    		padding: 8px;
    		line-height: 1.42857143;
    		vertical-align: top;
    		/* border-top: 1px solid #ddd; */
			border:none;
			}
			

			.table-bordered {
    			border: none
			}

			#bottom-nav {
				background-color: #47477e;
   				 bottom: -100px;
    			/* position: fixed; */
    			overflow: hidden;
    			width: 100%;
				}

			#bottom-nav a{
				font-size:15px;
				font-weight:600;
			}

			#bottom-nav a:hover{
				text-decoration:none;
				color:black;
			}


				h2{
					font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
					font-size:30px;
					margin-top:50px;
				}

				select{
					padding: 7px 10px;
    				background: #272766d4;
    				color: #dadadae6;
    				border: none;
    				border-radius: 8px;
					box-shadow: 4px 3px 10px 2px;
					font-size:12px;
				}

				input{
					padding: 7px 26px;
    				background: #272766d4;
   				 	color: #ffffffe6;
    				border: none;
    				border-radius: 8px;
    				box-shadow: 4px 3px 10px 2px;
    				margin-left: 10px;
    				font-family: sans-serif;
    				font-weight: 700;
				}


				#blist3 {
					display: inline;
					/* flex-wrap: wrap; */
					cursor: pointer;
					/* margin-top: -10rem; */
					margin-left: -23rem;
				}

				#col3 {
					margin-top: 8rem;
					margin-left: 12rem;
					    /* background: blue; */
    				/* width: 220px;
					height: 100px; */
    				float: right;
   					 /* margin: 10px; */
    				/* display: table-cell; */
				}

				#dispv th{
					background:#47477e;
					color:white;
					text-align:center;
					
				}

				#dispv td{
					font-weight:500;
					text-align:center;
				}

				#table2 td{
					font-weight:700;
				}

				#box3 th{
					background:#47477e;
					color:white;
					text-align:center;
				}

				#box3 td{
					font-weight:500;
					text-align:center;
				}

				#btn{
					background-color:#47477e;
					color:white;
				}

				#btn:hover{
					background:black;
					color:white;
				}

				#btn::after{
					background-color:white;
					color:black;
				}


		</style>
		
		<script>
		
			function trclick(value,nme,object){
				//alert("tr clicked "+value);
				
				document.getElementById("nouse").innerHTML = "";
				
				if (value == "") {
					return;
				} else { 
					if (window.XMLHttpRequest) {
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp1 = new XMLHttpRequest();
						xmlhttp2 = new XMLHttpRequest();
					} else {
						// code for IE6, IE5
						xmlhttp1 = new ActiveXObject("Microsoft.XMLHTTP");
						xmlhttp2 = new ActiveXObject("Microsoft.XMLHTTP");
					}
					xmlhttp1.onreadystatechange = function() {
						if (xmlhttp1.readyState == 4 && xmlhttp1.status == 200) {
							document.getElementById("display").innerHTML = xmlhttp1.responseText;
						}
					};
					xmlhttp2.onreadystatechange = function() {
						if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
							document.getElementById("dispv").innerHTML = xmlhttp2.responseText;
						}
					};
					xmlhttp1.open("GET","getcompany.php?email="+value,true);
					xmlhttp2.open("GET","getvacancies.php?name="+nme,true);
					xmlhttp1.send();
					xmlhttp2.send();
				}
			};
			
			function msg(job_id,s_mail,object){
			//	alert("Checking!");
				if (job_id == "") {
					return;
				} else { 
					if (window.XMLHttpRequest) {
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp1 = new XMLHttpRequest();
						
					} else {
						// code for IE6, IE5
						xmlhttp1 = new ActiveXObject("Microsoft.XMLHTTP");
						
					}
					xmlhttp1.onreadystatechange = function() {
						if (xmlhttp1.readyState == 4 && xmlhttp1.status == 200) {
							document.getElementById("nouse").innerHTML = xmlhttp1.responseText;
						}
					};
					xmlhttp1.open("GET","check.php?job_id="+job_id+"&s_mail="+s_mail,true);
					xmlhttp1.send();
				}
			};
			
			function apply_fun(job_id,s_mail,c_name,object){
				//alert("Applied!!");
				if (job_id == "") {
					return;
				} else { 
					if (window.XMLHttpRequest) {
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp1 = new XMLHttpRequest();
						
					} else {
						// code for IE6, IE5
						xmlhttp1 = new ActiveXObject("Microsoft.XMLHTTP");
						
					}
					xmlhttp1.onreadystatechange = function() {
						if (xmlhttp1.readyState == 4 && xmlhttp1.status == 200) {
							document.getElementById("nouse").innerHTML = xmlhttp1.responseText;
						}
					};
					xmlhttp1.open("GET","apply.php?job_id="+job_id+"&s_mail="+s_mail+"&c_name="+c_name,true);
					xmlhttp1.send();
				}
			}
		</script>
		
	</head>
	
	<body>
	 <h2 align="center"><b>STUDENT DASHBOARD</b></h2>
		<div class=" container-fluid" id="dash">
		  <div class="row">
		    <div class="well col-sm-4">
			<h3 style="margin-left:100px; margin-bottom:20px;"><b>STUDENT DETAILS</b></h3>
			 <img class="img-responsive " src="CSS/Image/c1.jpg" height="120px" width="120px" align="center" style="border-radius:50%"></img> 
			  <br>
			  <br>
			 
			 
			 <?php
			  
					$servername="localhost";
					$username="root";
					$password="";
					$dbname="crms";
					
					$conn = new mysqli($servername,$username,$password,$dbname);

					if($conn->connect_error){
						die("Connection failed: ".$conn->connect_error);
					}
					$sql="Select * from students where email=\"".$_SESSION['email']."\"";
					$result = $conn->query($sql);
					$row=$result->fetch_assoc();
					
               echo "<div class=\"table-responsive table-bordered\" >";            
			   echo	"  <table class=\"table table-hover\">";
				      echo "<tr>
					  		<th>ID</th>
							<td>".$row['id']."</td>
							</tr>
					  <tr>
				        <th>Name</th>
						<td>".$row['name']."</td>
				        </tr>
				      <tr>
					    <th>Email</th>
				        <td>".$row['email']."</td>

				      </tr>
					  <tr>
					    <th>Date of Birth</th>
				        <td>".$row['dob']."</td>

				      </tr>
					  <tr>
				        <th>Branch</th>
						<td>".$row['branch']."</td>
				        </tr>
				      <tr>
					    <th>Year of Passing</th>
				        <td>".$row['year']."</td>

				      </tr>
					  <tr>
					    <th>Degree</th>
				        <td>".$row['degree']."</td>

				      </tr>
					  
				      <tr>
				        <th>Contact No.</th>
						<td>".$row['phone']."</td>
				        </tr>";
				echo"
				    </tbody>
				  </table>
				</div>
				";
				?>
			</div>
			<div class="well col-sm-4" id="box2">
			
		      <h3 style="margin-left:20px; margin-bottom:20px;"><b>DETAILS ABOUT THE COMPANY</b></h3>
			  <div id="display">
			  <img class="img-responsive " src="CSS/Image/c1.jpg" height="120px" width="120px" align="center" style="border-radius:50% ; margin-bottom:30px;"></img>
			  <div class="table-responsive table-bordered"  id="table2">            
				  <table class="table table-hover" style="margin-left:20px;" align="center">
				      <tr>
				        <th>Name</th>
						<td>---</td>
				        </tr>
				      <tr>
					    <th>Email</th>
				        <td>---</td>

				      </tr>
					  <tr>
					    <th>Phone</th>
				        <td>---</td>

				      </tr>
					  <tr>
				        <th>Location</th>
						<td>---</td>
				        </tr>
				      <tr>
					    <th>C.E.O</th>
				        <td>---</td>

				      </tr>
					  <tr>
					    <th>C.T.O.</th>
				        <td>---</td>

				      </tr>
					  
				      <tr>
				        <th>H.R.</th>
						<td>---</td>
				        </tr>
				      <tr>
					    <th>Net Worth</th>
				        <td>---</td>

				      </tr>
					  <tr>
					    <th>Founded on</th>
				        <td>---</td>

				      </tr>
					  
					  <tr>
				        <th>Founder</th>
						<td>---</td>
				      </tr>

					  
				    
				  </table>
				</div>
				</div>
				<hr>
				<div id="nouse" style="border: thin solid black"> </div>
				<hr>
				<div id="dispv">
				<div class="table-responsive table-bordered" >            
				  <table class="table table-hover">
				  <tr>
				   <th>Job Title</th>
				   <th>Salary</th>
				   <th>Location</th>
				   <th>Eligiblity</th>
				   
				   </tr>
				   
				   <tr>
				   <td>-----</td>
				   <td>-----</td>
				   <td>-----</td>
				   <td>
				   <input type="button" value="Check eligiblity" onclick="msg()" id="btn">
				   
				   </td>
				   </tr>
				   </table>
				</div>
			  </div>
				
			</div>
		    
			
			<div class="well col-sm-3" id="box3">
			    <h2><b>LIST OF COMPANIES</b></h2>
				<p><b>Click for more details about the company</b></p>
				
				<?php
				
					$servername="localhost";
					$username="root";
					$password="";
					$dbname="crms";
					
					$conn = new mysqli($servername,$username,$password,$dbname);

					if($conn->connect_error){
						die("Connection failed: ".$conn->connect_error);
					}
					$sql="Select name,email from companys";
					$result = $conn->query($sql);
					
					  echo "<div class=\"table-responsive table-bordered\" >            
						  <table class=\"table table-hover\">
							<thead>
							  <tr>
								<th>Name</th>
								<th>Email</th>
							  </tr>
							</thead>
							<tbody>
							";
								
							while($row = $result->fetch_assoc()){
							  echo "<tr id=\"clist\" onclick=\"trclick('".$row['email']."','".$row['name']."',this)\">";
							  echo "<td>".$row['name']. "</td>";
							  echo "<td>".$row['email']."</td>";
							  echo "</tr>";
							}
						echo	"</tbody>
						  </table>
						</div>
						";
						
						
						
	/*	 echo  " <form method=\"POST\" action=\"\">
        <input type=\"text\" name=\"name\" placeholder=DELETE ACCOUNT></input>
       <input type=\"submit\"></input>
        </form>" ;
				  if(isset($_POST['name']) && $_POST['name']=="DELETE ACCOUNT") {
                     
               	 $sql = "Delete FROM students where email=$row['email']";
                $result = $conn->query($sql);
				
               echo "<h4 align=\"center\">ACCOUNT DELETED!!</h4>";
			   header('Location: index.html');
			        }
				  */
				 
				  
						
				?>
				
		    </div>
		  </div>
		</div>


	</body>

	<footer>
		<nav class="navbar navbad-default" id="bottom-nav">
			<div class="container-fluid">
				<div id="col1" >
					<ul id="blist1">
						<li><a href='#'>About Us</a></li>
						<li><a href='#'>FAQs</a></li>
						<li><a href='#'>Contact Us</a></li>
					</ul>
				</div>
				
				<div id="col2" >
					<ul id="blist1">
						<li><a href='#'>Privacy Policy</a></li>
						<li><a href='#'>Legal</a></li>
						<li><a href='#'>Work With Us</a></li>
					</ul>
				</div>
				
				<div id="col3" class=" container-fluid">
				
					<ul id="blist3" >
						<li><i class="fa fa-facebook fa-2x" ><a href='#'></a></i></li>
						<li><i class="fa fa-twitter fa-2x"><a href='#'></a></i></li>
						<li><i class="fa fa-instagram fa-2x"><a href='#'></a></i></li>
						<li><i class="fa fa-linkedin fa-2x"><a href='#'></a></i></li>
					</ul>
					<ul>
					<!--<p id="lic">site design / logo (c) Company_Name Inc.<br> licensed under Company_Name inc. </p>-->
					<!-- <li id="blist4">site design / logo (c) Company_Name Inc.<br> licensed under Company_Name inc.</li> -->
					</ul>
				</div>
			</div>
		</nav>
	</footer>
</html>