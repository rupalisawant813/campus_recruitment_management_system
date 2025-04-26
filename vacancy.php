<?php
	session_start();
?>
<html>
	<head>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="CSS/style1.css">
		<nav class="navbar navbar-fixed-top" id="top-nav">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Campus Recruitment Management System</a>
				</div>
				<ul id="list1" class="nav navbar-nav">
					<li class="active"><a href="index.html">Home</a></li>
					<li class="active"><a href="about.html">About Us</a></li>
				    <li class="active"><a href="index.html">Logout</a></li>
				</ul>
			</div>
		</nav>

		<style>

		*{
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

		}
		body {
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			background-color: #7f7fc6a1;
		}

		.navbar-brand {
			font-weight: bold;
			margin: 10px 20px;
			/* border: 2px solid black; */

		}

		#top-nav {

		background-color: #47477e;
		box-shadow: 1px 7px 15px -1px;
		/* padding:7px 10px; */
		}

		#list1 {
			/* border: 2px solid black; */
			width: 100%;
			margin-top: -74px;
    		margin-left: 23rem;
		}

		.navbar-brand:hover {
			color: black;
		}

		.navbar-nav a {
			margin-left: 9rem;
			font-size: 16px;
			font-weight: bold;

		}

		.navbar-nav a:hover {
			color: black;
			background: none;
		}

		.btn {
			padding: 10px 10px;
			margin: 12px 10px;
		}

		p {
			color: black;
			margin: 15px 8px;
		}


		h5 #a {
			color: black;
		}

			.container {
			margin: 0rem 0rem;
			width: 62%;
			height: auto;
			/* border: 2px solid black; */
			padding: 3px 7px;
			border-radius: 21px;
			box-shadow: 2px 3px 20px 5px;
			margin-left: -35rem;
			background-color: #ffffffb8;
		}

		.container input {
			text-align: center;
		}

		.container h3 {
			border: none;
			box-shadow: none;
			margin-left: 12rem;
			margin-bottom: 3rem;
			padding-left: 40px;
		}

		ol,
		ul {
   		 	margin-top: -52px;
    		padding: 15px 20px;
    		width: 40%;
    		margin-left: -2rem;

		}

		.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    		font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;;
    		font-weight: 500;
    		line-height: 1.1;
    			color: inherit;
			}

		.navbar>.container .navbar-brand,
		.navbar>.container-fluid .navbar-brand {
			margin: 9px 23px;
			margin-left: -20rem;
		}

		.navbar-nav>li>a {
    		padding-top: 15px;
    		padding-bottom: 13px;
    		margin-left: 150px;
		}

		.input1 {
			padding: 0px 8px;
			margin: 3px -10px;
			margin-bottom: -46px;

		}

		button,
		input,
		optgroup,
		select,
		textarea {
			margin: 8px 17rem;
			padding: 7px 46px;
			border-radius: 10px;
			border: none;
			box-sizing: border-box;
			box-shadow: 2px 4px 17px 0px;
		}

		.container #date{
			padding:6px 67px;
		}

		.container-fluid {
			/* background-color: black; */
			padding-right: 0px;
			padding-left: 0px;
			width: 70%;
			display: flex;
			flex-wrap: wrap;

		}

		.container select{
			padding:7px 94px;

		}

		#terms{
			margin-left:10rem;
			margin-top:-30px;
		}

		#terms a{
			color:#272766d4;
			font-weight:bold;
		}

		
		#terms1{
			margin-left:18rem;
			margin-top:10px;
			margin-bottom:50px;
		}

		#terms1 a{
			color:#272766d4;
			font-weight:bold;
			
		}

		.h3,
		h3 {
			font-size: 24px;
			margin-bottom: -23px;
			margin-top: 24px;
			margin-left: 150px;
			font-weight: 400;
		}

		.h5,
		h5 {
			font-size: 15px;
			padding: 2px 5px;
			margin-bottom: 4px;
		}

		.navbar-nav {
			float: left;
			margin: 2px 13px;
		}

		.ptag {
			margin-top: 10px;
			margin-left: 106px;
		}

		.registerbtn {
			margin-bottom: 15px;
    		margin-left: 19rem;
    		padding: 9px 52px;
    		background-color: #272766d4;
    		color: white;
    		font-weight: 600;
		}

		.registerbtn:hover{
			background:black;
		}
		.ptag a {
			color: #272766d4;
		}

		.ptag2 p {
			border: none;
			margin: 11px 80px;
			margin-bottom: 5rem;
		}

		.ptag2 a {
			color: #272766d4;
		}

		b,
		strong {
			font-weight: 800;
			margin-left: 19px;
		}

		.container-fluid h2 {
			margin: 0px -42rem;
			padding: 10px 0px;
			margin-left: -33rem;
			margin-bottom: 3rem;

		}

		#col1{
			width: 400px;
    		height: 100px;
    		float: left;
    		margin: 53px -73px;
    		display: table-cell;
		}

		#col3{

			width: 44%;
    		height: 100px;
    		float: right;
    		/* margin: 87px -108px; */
		    margin-top: 130px;
    		margin-left: -160px;
    		display: table-cell;
		}

		#col3 ol,ul{

			margin-left:20rem;
		}

		#blist3 li {
    		display: inline-block;
    		size: 100px;
    		padding: 6px;
    		cursor: pointer;
    		color: white;
		}

		#blist1 a:hover{
			color:black;
			text-decoration:none;
		}

		#blist1 {
    		list-style-type: none;
    		margin-top: 15px;
    		margin-left: -1rem;
			font-weight:600;
			
		}

		#blist1 li{
			padding:3px 0px;
		}

		#col2 {
   		 /* background: green; */
    		width:30%;
    		height: 100px;
    		float: left;
    		margin: 50px;
			margin-left:12rem;
    		display: table-cell;
			}


		</style>
	  </head>
	  <body>
	  
	  <?php
		
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="crms";

		$conn = new mysqli($servername,$username,$password,$dbname);

		if($conn->connect_error){
			die("Connection failed: ".$conn->connect_error);
		}

		
		

		if($_SERVER["REQUEST_METHOD"]=="POST"){
			$job_title=$_POST['job_title'];
			$salary=$_POST['salary'];
			$deadline=$_POST['deadline'];
			$bond=$_POST['bond'];
			$year=$_POST['year'];
			$cpi=$_POST['cpi'];
			$twp=$_POST['12p'];
			$tenp=$_POST['10p'];
			$branch=$_POST['branch'];
			$age=$_POST['age'];
			$degree=$_POST['degree'];
			$location=$_POST['location'];
			/*echo $name . "<BR>";
			echo $email. "<BR>";
			echo $dob. "<BR>";
			echo $branch. "<BR>";
			echo $year. "<BR>";
			echo $cpi. "<BR>";
			echo $twp. "<BR>";
			echo $tenp. "<BR>";
			echo $pwd. "<BR>";
			echo $phone. "<BR>";
			echo $degree. "<BR>";*/
			
			$sql="INSERT into vacancy(company_name,job_title,salary,location,deadline,bond,age_e,degree_e,cpi_e,year_e,12p_e,10p_e) values(\"".$_SESSION['name']."\",\"".$job_title."\",".$salary.",\"".$location."\",\"".$deadline."\",".$bond.",".$age.",\"".$degree."\",".$cpi.",".$year.",".$twp.",".$tenp." );";
			;
			
			if($conn->query($sql)===TRUE){
			$GLOBALS['conn']->close();
		echo "<SCRIPT type='text/javascript'> //not showing me this
								alert('Vacancy Created Succesfully!!');
								window.location.replace(\"company_dash.php\");
							</SCRIPT>";
		}else{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
			
			/*
			$GLOBALS['conn']->close();
			header('Location: company_dash.php ');
			echo '<script language="javascript">';
			echo 'alert("Vacancy succesfully created!")';
			echo '</script>';*/
		}
	  ?>
	  
		<div class=" container-fluid " id="dash" >
		<h2 align="center" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;margin-left:-20rem;"><b>CREATE VACANCY</b></h2>
		<form action="vacancy.php" method="POST" enctype="multipart/form-data">
        <div class="container">
		   <h3 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;margin-left:17rem;"><b>Job Details</b></h3>
           <hr>
           <ol>
          
		   
		   <!-- <li><label for="job_title"><b>Job Title:</b></label> -->
           <input type="text" name="job_title" placeholder="Enter Job Title" required></li>

          <!-- <li><label for="salary"><b>Salary:</b></label> -->
          <input type="decimal" placeholder="Enter Salary(LPA)" name="salary" required> </li>
	
			<!-- <li><label for="location"><b>Location:</b></label> -->
          <input type="text" placeholder="Enter Location" name="location"></li>
		  
		  
	      <!-- <li><label for="deadline"><b>Deadline:</b></label> -->
          <input type="date" placeholder="Enter Deadline" name="deadline" id="date"></li>
	
          <!-- <li><label for="bond"><b>Bond:</b></label> -->
          <input type="number" placeholder="Enter Bond" name="bond"></li>
	
	      <!-- <li><label for="10p"><b>10th Percentage:</b></label> -->
          <input type="decimal" placeholder="Enter 10th Percentage" name="10p"></li>
		  
		  <!-- <li><label for="12p"><b>12th Percentage:</b></label> -->
          <input type="decimal" placeholder="Enter 12th Percentage" name="12p"></li>
		  
		  <!-- <li><label for="year"><b>Year:</b></label> -->
          <input type="text" placeholder="Enter Year" name="year"></li>
		  
		  <!-- <li><label for="cpi"><b>CPI:</b></label> -->
          <input type="decimal" placeholder="Enter Minimum CGPA Required" name="cpi"></li>
		  
		  <!-- <li><label for="degree"><b>Course:</b></label> -->
	      <select name="degree" placeholder="Select Course">
          <option label="btech">B.Tech</option>
		  <option label="btech">M.Tech</option>
		  <option label="be">B.E</option>
		  <option label="me">M.E</option>
		   <option label="bca">BCA</option>
          <option label="mca">MCA</option>
	      <option label="msc">MSC</option>
		  </select></li>
		  
		  <!-- <li><label for="branch"><b>Branch:</b></label> -->
	      <select name="branch" placeholder="Select Branch">
          <option label="cse">CSE</option>
          <option label="it">IT</option>
          <option label="ece">ECE</option>
	      <option label="mee">MEE</option>
	      <option label="msme">MSME</option>
	      <option label="che">CHE</option>
	      </select></li>
		  
		  <!-- <li><label for="age"><b>Maximum age:</b></label> -->
          <input type="text" placeholder="Enter Maximum Age" name="age"></li>
		  
		  
		  </ol>
          <hr>
		<!-- </div> -->
    <p id="terms">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Create Vacancy</button>
  
	<!-- <div class="container signin"> -->
    <p id="terms1">Already have an account? <a href="#">Sign in</a>.</p>
  </div>
		</form>
 
	</div>

	</body>
		<footer>
		<nav class="navbar navbar-footer" id="bottom-nav" style="width:110%">
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