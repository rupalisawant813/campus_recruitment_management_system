
 <?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
					<a class="navbar-brand" href="#">Campus Recruitment Management System</a>
				</div>
				<ul id="list1" class="nav navbar-nav">
					<li class="active"><a href="index.html">Home</a></li>
		           
				   <li class="active"><a href="delete_student_a.php">Delete Student</a></li>
				   <li class="active"><a href="delete_company_a.php">Delete Company</a></li>
				   <li class="active"><a href="index.html">Logout</a></li>
				</ul>
			</div>
		</nav>
		  
		<style>
			body{
				font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
				background-color: #7f7fc6a1;
			}
			.container-fluid{
				margin:2px 10px;
				/* background-color: #272766d4;*/
			}
				

			#top-nav {

    			background-color: #47477e;
				/* box-shadow: 4px 3.6px 22px 1px; */
				box-shadow: 1px 7px 15px -1px;
				padding:7px 10px;


			}

			.navbar-nav>li>a {
    			padding-top: 15px;
   			 	padding-bottom: 15px;
    			margin-left: 12rem;
				font-weight:bold;
				font-size:16px;
			}
			
		.navbar-nav>li>a:hover{
			color:black;
		}

			.navbar-header a{
				font-weight:bold;
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
				background-color: #ffffffb8;
    			border-radius: 20px;
				box-shadow: 4px 3.6px 14px 2px;
				margin-left:-60rem;
				}

			.row{
				height:auto; 
				margin:10px 20px;
				border-radius:10px;
				
			}

			.row .well{
				border: none;
				border-radius:10px;
			}

			#bottom-nav {
   				 background: #47477e;
   				 bottom: -100px;
    			/* position: fixed; */
    			overflow: hidden;
    			width: 100%;
				}

				h2{
					font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
					font-size:30px;
					margin-top:50px;
				}

				select{
					padding: 8px 20px;
    				background: #272766d4;
    				color: #dadadae6;
    				border: none;
    				border-radius: 8px;
					box-shadow: 4px 3px 10px 2px;
					font-size:15px;
				}

				input{
					padding: 9px 33px;
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
					margin-left: -18rem;
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

				option{
					/* padding: 10px 10px; */
					/* font-size:20px; */
				}

				#col1 li{
					font-weight:bold;
					font-size:15px;
					margin:10px 5px;
				}
				#col1 li a:hover{
					text-decoration:none;
					color:black;
				}

				#col2 li{
					font-weight:bold;
					font-size:15px;
					margin:10px 5px;
				}

				#col2 li a:hover{
					text-decoration:none;
					color:black;
				}


		</style>   



		
	</head>
	
	<body>
	 <h2 align="center"><b>ADMIN DASHBOARD</b></h2>
		<div class=" container-fluid" id="dash">
		  <div class="row" >
		    <div class="well col-sm-12" style="">
		      
			  
			  <br>
			  <br>
			  <div>
				
			  <?php
			  
					$servername="localhost";
					$username="root";
					$password="";
					$dbname="crms";

					// $c_id=$_POST['c_id'];
					
					// Create connection
                   $conn = new mysqli($servername, $username, $password, $dbname);
                 // Check connection
                 if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                          }  
			 echo "<style>
                table, th, td {
                   border:none;
                   border-collapse: collapse;
				// background:blue;
					
				   }

				   table{
					border-radius: 10px;
					box-shadow: 2px 2.6px 10px 2px;
					
				}

				th{
					// background:#888686b3;
					background-color: #272766d4;
					color:white;
					// border:2px solid black;
					// text-decoration:underline;

				}

				td{
					// border:2px solid black;
					// border-radius:10px;
					font-weight:600;
					// border-bottom:2px solid black;
				}

                th, td {
                   padding: 5px;
                    text-align: center;    
                          }
                 </style>";
						  
		 echo  " <form method=\"POST\" action=\"\">
            <select type=\"text\" name=\"name\" placeholder=\"Select\">
			<option label=\"Select to Check \">SELECT TO CHECK</option>
		   <option label=\"Total Registered Students\">TOTAL REGISTERED STUDENTS</option>
          <option label=\"Total Placed Students\">TOTAL PLACED STUDENTS</option>
	      <option label=\"Total Registered Companies\">TOTAL REGISTERED COMPANIES</option>
		  <option label=\"Students Placed in Bangalore\">STUDENTS PLACED IN BANGLORE</option>
		  <option label=\"Students Placed as Developers\">STUDENTS PLACED AS DEVELOPERS</option>
		  <option label=\"Total Vacancies\">TOTAL VACANCIES</option>
       <input type=\"submit\"></input>
        </form>" ;
				  if(isset($_POST['name']) && $_POST['name']=="TOTAL REGISTERED STUDENTS") {
                     
               	 $sql = "SELECT * FROM students";
                $result = $conn->query($sql);
				
               echo "<h4 align=\"center\"><b>REGISTERED STUDENTS</b></h4>";
			   echo "<br>";
             if ($result->num_rows > 0) {
                 echo "<table class=\"table table-hover\"><tr><th>ID</th><th>Name</th><th>Email</th><th>Contact No.</th><th>D.O.B</th><th>Degree</th><th>Branch</th><th>Year of Passing</th><th>C.P.I.</th><th>12th Percentage</th><th>10th Percentage</th></tr>";
     
               while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["dob"]."</td><td>".$row["degree"]."</td><td> ".$row["branch"]."</td><td>".$row["year"]."</td><td>".$row["cpi"]."</td><td>".$row["12p"]."</td><td>".$row["10p"]."</td></tr>";
                    }
              echo "</table>";
         }  else {
            echo "0 results";
               }
				  }
				  
			  if(isset($_POST['name']) && $_POST['name']=="TOTAL VACANCIES") {
                     
               	 $sql = "SELECT * FROM vacancy";
                $result = $conn->query($sql);
				
               echo "<h4 align=\"center\">TOTAL VACANCIES</h4>";
			   echo "<br>";
             if ($result->num_rows > 0) {
                 echo "<table class=\"table table-hover\"><tr><th>ID</th><th>Company Name</th><th>Job Title</th><th>Salary (in LPA)</th><th>Location</th><th>Bond</th></tr>";
     
               while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["job_id"]."</td><td>".$row["company_name"]."</td><td>".$row["job_title"]."</td><td>".$row["salary"]."</td><td>".$row["location"]."</td><td> ".$row["bond"]."</td></tr>";
                    }
              echo "</table>";
         }  else {
            echo "0 results";
               }
				  }
				  
				  
			if(isset($_POST['name']) && $_POST['name']=="TOTAL REGISTERED COMPANIES") {

                     
               	 $sql = "SELECT * FROM companys";
                $result = $conn->query($sql);
				echo "<h4 align=\"center\">REGISTERED COMPANIES</h4>";
				echo "<br>";
             if ($result->num_rows > 0) {
                 echo "<table class=\"table table-hover\"><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Location</th><th>C.E.O.</th><th>C.T.O</th><th>H.R.</th><th>Worth</th><th>Founded in</th><th>Founder</th></tr>";
                while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["c_id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td> ".$row["phone"]."</td><td> ".$row["location"]."</td><td> ".$row["ceo"]."</td><td> ".$row["cto"]."</td><td> ".$row["hr"]."</td><td> ".$row["worth"]."</td><td> ".$row["found"]."</td><td> ".$row["founder"]."</td></tr>";
                    }
              echo "</table>";
         }  else {
            echo "0 results";
               }
				  }
				  
		 if(isset($_POST['name']) && $_POST['name']=="TOTAL PLACED STUDENTS") {
                     
               	 $sql = "SELECT * FROM students as S,applications as A,vacancy as V where S.email=A.s_mail and A.job_id=V.job_id and A.status=1 ";
                $result = $conn->query($sql);
				
                   echo "<h4 align=\"center\">PLACED STUDENTS</h4>";
				   echo "<br>";
             if ($result->num_rows > 0) {
                 echo "<table class=\"table table-hover\"><tr><th>ID</th><th>Name</th><th>Email</th><th>Contact No.</th><th>Degree</th><th>Branch</th><th>C.P.I.</th><th>12th Percentage</th><th>10th Percentage</th><th>Company</th><th>Job Title</th><th>Salary (LPA)</th><th>Location</th></tr>";
     
               while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["degree"]."</td><td> ".$row["branch"]."</td><td>".$row["cpi"]."</td><td>".$row["12p"]."</td><td>".$row["10p"]."</td><td>".$row["company_name"]."</td><td>".$row["job_title"]."</td><td>".$row["salary"]."</td><td>".$row["location"]."</td></tr>";
                    }
              echo "</table>";
         }  else {
            echo "0 results";
               }
				  }
				  
		  if(isset($_POST['name']) && $_POST['name']=="STUDENTS PLACED IN BANGLORE") {
                     
               	 $sql = "SELECT * FROM students as S,applications as A,vacancy as V where S.email=A.s_mail and A.job_id=V.job_id and A.status=1 and V.location='Banglore'";
                $result = $conn->query($sql);
				
                   echo "<h4 align=\"center\">STUDENTS PLACED IN BANGLORE</h4>";
				   echo "<br>";
             if ($result->num_rows > 0) {
                 echo "<table class=\"table table-hover\"><tr><th>ID</th><th>Name</th><th>Email</th><th>Contact No.</th><th>Degree</th><th>Branch</th><th>C.P.I.</th><th>12th Percentage</th><th>10th Percentage</th><th>Company</th><th>Job Title</th><th>Salary (LPA)</th><th>Location</th></tr>";
     
               while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["degree"]."</td><td> ".$row["branch"]."</td><td>".$row["cpi"]."</td><td>".$row["12p"]."</td><td>".$row["10p"]."</td><td>".$row["company_name"]."</td><td>".$row["job_title"]."</td><td>".$row["salary"]."</td><td>".$row["location"]."</td></tr>";
                    }
              echo "</table>";
         }  else {
            echo "0 results";
               }
				  }
		
				  if(isset($_POST['name']) && $_POST['name']=="STUDENTS PLACED AS DEVELOPERS") {
                     
               	 $sql = "SELECT * FROM students as S,applications as A,vacancy as V where S.email=A.s_mail and A.job_id=V.job_id and A.status=1 and V.job_title='Developer'";
                $result = $conn->query($sql);
				
                   echo "<h4 align=\"center\">STUDENTS PLACED AS DEVELOPERS</h4>";
				   echo "<br>";
             if ($result->num_rows > 0) {
                 echo "<table class=\"table table-hover\" ><tr><th>ID</th><th>Name</th><th>Email</th><th>Contact No.</th><th>Degree</th><th>Branch</th><th>C.P.I.</th><th>12th Percentage</th><th>10th Percentage</th><th>Company</th><th>Job Title</th><th>Salary (LPA)</th><th>Location</th></tr>";
     
               while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["degree"]."</td><td> ".$row["branch"]."</td><td>".$row["cpi"]."</td><td>".$row["12p"]."</td><td>".$row["10p"]."</td><td>".$row["company_name"]."</td><td>".$row["job_title"]."</td><td>".$row["salary"]."</td><td>".$row["location"]."</td></tr>";
                    }
              echo "</table>";
         }  else {
            echo "0 results";
               }
				  }
           $conn->close();
          ?>


					
					
			</div>
		  </div>
		</div> 
 </div>

	</body>

<footer>
		<nav class="navbar navbad-default" id="bottom-nav">
			<div class="container-fluid">
				<div id="col1" >
					<ul id="blist1">
						<li><a href='about.html'>About Us</a></li>
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