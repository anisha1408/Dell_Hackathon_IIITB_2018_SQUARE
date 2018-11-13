<?php session_start();?>

<DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Chakra+Petch" rel="stylesheet">
  <?php include('cdn.html');?>
  <style>
         body{
          font-family: 'Chakra Petch', sans-serif;
		  font-color:white;
		 }
		 .container{
			 height:650px;
			 border:1px solid rgba(0,0,0,0.1);
			 border-radius:5px;
			 background-color:rgba(45,45,45,0.5);
			 box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
 
		 }
		 body {
			  margin: 0;
	 padding: 0; 
	 background: url(images/dell.jpg);
	 background-size:cover;
	
		 }
		 .login{
			 font-color:white;
			
		 }
  </style>
  
	</head>
	<body>
	   
	   <?php
	      if(isset($_POST['submit']))
		  {
			  $program_id=$_POST['program_id'];
			  $password=$_POST['password'];
			  $con=mysqli_connect('localhost','root','','testing');
			  $result=mysqli_query($con,"select * from user where program_id='$program_id' and password='$password'");
			  $count=mysqli_num_rows($result);
			  if($count>0)
			  {
				  $_SESSION['program_id']=$program_id;
				  $_SESSION['password']=$password;
				  $_SESSION['id']=$_POST['id'];
				  header('Location:profile.php');
			  }
			  
		  }
	   
	   ?>
		<div class="container">
		<header class="primary">
			<br><h1 class="text-center text-success">DELL ENTERPRISES INC</h1></br>
			</header>
			
			<div class="row">
			   <div class="col-lg-3 col-md-3 col-sm-3"></div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="card">
						<div class="card card-header">
							<h2 class="text-center">LOGIN</h2>
						</div>
						<div class="card card-body">
							<form action="" method="POST">
								<div class="form-group p-3">
									<label>PROGRAM-ID</label>
									<input type="text" name="program_id" class="form-control" placeholder="program-id">
									
								</div>
								
								<div class="form-group p-3 mb-5">
									<label>PASSWORD</label>
									<input type="password" name="password" class="form-control" placeholder="password">
								</div>
								
								<button type="submit" name="submit" class="btn btn-primary btn-lg login">LOGIN</button>
								<a href="#">FORGOT PASSWORD</a>
							</form>
						</div>
					</div>
				</div>
				
				
			</div>
		</div>
		
			</body>
</html>

