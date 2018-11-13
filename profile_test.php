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
          margin-top:100px;
    
}
.editc {
		display: none;
	}


			 
          </style>
             
	</head>
	<body onload="viewData()">
      
	<?php include('navbar.html');?>

	
	
	<div class="container-fluid adjust">
		<div class="row">
			<div class="col-sm-4">
				<div class="panel">
					<div class="panel-body">
						<img id="pic" src="php/profile/161541592963.jpg" class="img-responsive img-rounded ppic" />
					</div>
					<div class="panel-body">
						<input id="fileupload" type="file" />
					</div>
					<div class="panel-body">
						<button id="uploadb" class="btn btn-primary">Upload Image</button>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="panel panel-info">
					<div class="panel-heading">
					<h3 class="display-2">PROFILE DETAILS <button id="editb" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i> Edit</button></h3>
					</div>
					<div class="panel-body">
						<label>NAME</label> : <span id="namefield">shaik hussain</span>
						<input id="editname" type="text" class="form-control editc" placeholder="Enter the Full name to edit"/>
						<span id="namespan"></span>
					</div>
					<div class="panel-body">
						<label>EMAIL</label> : hussaindmf@gmail.com					</div>
					<div class="panel-body">
						<label>PASSWORD</label> : Click on edit to change password
						<input id="editoldpass" type="password" class="form-control editc" placeholder="Old password"/>
						<br/><br/>
						<input id="editnepass" type="password" class="form-control editc" placeholder="New password"/>
						<span id="passspan"></span>
					</div>
					<div class="panel-body">
						<label>PROFESSION</label> : 
					</div>
					<div class="panel-body">
						<label>DATE OF BIRTH(AGE)</label> : <span id="dobfield">2018-11-07</span>
						<input id="editdob" type="date" class="form-control editc" placeholder="Enter your birthday"/>
						<span id="dobspan"></span>
					</div>
					<div class="panel-body">
						<label>GENDER</label> : male					</div>
					<div class="panel-body">
						<label>MEMBER</label> : 
					</div>
					<div class="panel-body">
						<label>ADMIN</label> : 
					</div>
					<div class="panel-body">
						<button id="saveb" class="btn btn-primary editc">Edit and Save</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	                 
	
	
	<script>
		logout = document.getElementById("logoutb");
	upload = document.getElementById("uploadb");
	fileupload = document.getElementById("fileupload");
	editb = document.getElementById("editb");
	editc = document.getElementsByClassName("editc");
	saveb = document.getElementById("saveb");
	editname = document.getElementById("editname");
	editoldpass = document.getElementById("editoldpass");
	editnepass = document.getElementById("editnepass");
	editdob = document.getElementById("editdob");
	editmale = document.getElementById("editmale");
	editfemale = document.getElementById("editfemale");
	
	for (var i = 0; i < editc.length; i++)
		editc[i].style.display = "none";
	
	
	
	upload.onclick = function () {
		file = new FormData();
		if (fileupload.files.length === 0)
			alert("select a file for profile picture");
		else
		{
			ftype = fileupload.files[0].name;
			fsize = fileupload.files[0].size;
			ftype = ftype.split(".");
			ftype = ftype[ftype.length - 1].toLowerCase();
			if (ftype == "png" || ftype == "jpg" || ftype == "jpeg" || ftype == "gif")
			{
				if (fsize > 2024000) {
					alert("file size should be under 2 MB");
				}
				else
				{
					file.append("uploads", fileupload.files[0]);
					alert(fileupload.files[0].value);
					var hr = new XMLHttpRequest();
					hr.onreadystatechange = function () {
						if (hr.readyState == XMLHttpRequest.DONE) {
							if (hr.status == 200) {
								if (hr.responseText != "0"){
									var image = "" + hr.responseText;
									document.getElementById("pic").src = image;
								}
								else
									alert("Error");
								window.location = "http://localhost:8080/rdbms/rdbmsproject/onlineclassroom/register.html";
							}
							else if (hr.status == 404) {
								alert("not found");
							}
						}
					}
					hr.open("POST", "http://localhost:8080/rdbms/rdbmsproject/onlineclassroom/profilepic.php", true);
					hr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
					hr.send(file);
					
				}
			}
			else
			{
				alert("Not a supported file type");
			}
		}
		
		
	}
	
	editb.onclick = function () {
		if (editc[0].style.display == "none") {
			for (var i = 0; i < editc.length; i++)
			{
				editc[i].style.display = "inline-block";
			}
			this.innerHTML = "<i class='glyphicon glyphicon-remove'></i> Close";
		} else {
			for (var i = 0; i < editc.length; i++)
			{
				editc[i].style.display = "none";
			}
			this.innerHTML = "<i class='glyphicon glyphicon-edit'></i> Edit";
		}
	}
	
	saveb.onclick = function () {
		if (editname.value != "" && editname.value.length < 5)
			alert("Enter a valid name !");
		else if (editoldpass.value != "" && editoldpass.value.length < 5)
			alert("Enter a valid old password");
		else if (editnepass.value != "" && editnepass.value.length < 5)
			alert("Enter a valid new password");
		else
		{
			var hr = new XMLHttpRequest();
			hr.onreadystatechange = function () {
			if (hr.readyState == XMLHttpRequest.DONE) {
				if (hr.status == 200) {
					if (hr.responseText == "2")
					{
						editb.click();
						if (editname.value.length != 0 && editname.value.length >= 5)
							document.getElementById("namefield").innerHTML = editname.value;
						if (editdob.value.length != 0)
							document.getElementById("dobfield").innerHTML = editdob.value;
						alert("Made the changes");
					}
					else if (hr.responseText == "1")
					{
						editb.click();
						if (editname.value.length != 0 && editname.value.length >= 5)
							document.getElementById("namefield").innerHTML = editname.value;
						if (editdob.value.length != 0)
							document.getElementById("dobfield").innerHTML = editdob.value;
						alert("Made the changes");
					}
					else
					{
						alert("old password is incorrect");
					}
				}
				else if (hr.status == 404) {
					alert("not found");
				}
			}
			}
			hr.open("POST", "http://localhost:8080/rdbms/rdbmsproject/onlineclassroom/editprofile.php", true);
			hr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			hr.send("fullname=" + editname.value + "&oldpassword=" + editoldpass.value + "&nepassword=" + editnepass.value + "&dob=" + editdob.value);
		}
			
	}
	
  </script>
  
	
	

       	
	
	 </body>

	 

</html>