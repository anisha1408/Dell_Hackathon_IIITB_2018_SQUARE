<DOCTYPE html>
<html>
	<head>
    <?php include('cdn.html');?>	

	<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
  <style>
     
		 
		 body {
           font-family: 'Chakra Petch', sans-serif;
           font-size: 13px;
            font-weight: 400;
            color: #4f5d6e;
             position: relative;
            background: rgb(26, 119, 149);
				  margin: 0;
	            padding: 0; 
	            
             }

            .body-wrap {
              min-height: 700px;
            }
            
            .body-wrap {
              position: relative;
              z-index: 0;
            }

            .body-wrap:before,
            .body-wrap:after {
              content: '';
              position: absolute;
              top: 0;
              left: 0;
              right: 0;
              z-index: -1;
              height: 260px;
              
            }
            
            .body-wrap:after {
             top: auto;
             bottom: 0;
             }
            
             nav {
             margin-top: 60px;
             box-shadow: 5px 4px 5px #000;
			 position: fixed;
             }
			 
			 /* Profile container */
.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 20px;
  background: #fff;
  min-height: 460px;
}
.adjust{
          margin-top:50px;
    
}


			 
          </style>
             
	</head>
	<body >
      
	<?php include('navbar.html');?>

	
	
	<div class="container adjust">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="https://static.change.org/profile-img/default-user-profile.svg" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						Hussain Shaik
					</div>
					<div class="profile-usertitle-job">
						Developer
					</div>
				</div>
				
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
						<li>
							<a href="#" target="_blank">
							<i class="glyphicon glyphicon-ok"></i>
							Tasks </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							Help </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9"  id="alert_message" style="background:white; height:50px;">
            
			
	</div>
</div>
</div>
<center>
<strong>Powered by <a href="" target="_blank"></a></strong>
</center>
<br>
<br>

	                 
	<script>
	
	
	if(window.location.href.indexOf("success")>-1)
	{
		$('#alert_message').html('<div class="alert alert-success">SUCCESS</div>');
		//window.location.href="http://localhost:8080/dell1/profile.php";
		<?php
		  $_GET['id']="";
		  ?>
	}
	
	setInterval(function(){
     $('#alert_message').html('');
    }, 2000);
   
	
	</script>
       	
	
	 </body>


</html>