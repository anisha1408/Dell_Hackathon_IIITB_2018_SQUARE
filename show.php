

<html>
 <head>
  <title>MBOM processing</title>
  
  <?php include('cdn.html');?>
  
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
 

 .box
  {
   width:1270px;
   padding:20px;
   background-color:#fff;
   border:1px solid #ccc;
   border-radius:5px;
   margin-top:75px;
   box-sizing:border-box;
  }
  </style>
 </head>
 <body>
 
 <?php include('navbar.html');?>

 
 
  <div class="container box">
   <h1 align="center">EBOM DATA</h1>
   <br />
   <div class="table-responsive">
   <br />
    <br />
    <div id="alert_message"></div>
    <table id="" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>part_name</th>
       <th>part-type</th>
	   <th>specification</th>
	   <th>quantity</th>
	   <th>values</th>
	   <th>cost</th>
      </tr>
	  
     </thead>
	 <tbody>
	 <?php
	 
	       $con=mysqli_connect("localhost","root","","testing");
		   $result1=mysqli_query($con,"select * from ebom");
		  
		   
		   while($row=mysqli_fetch_array($result1))
		   {
	   ?>
	     <tr>
		     <td><?php echo $row['part_name'];?></td>
			 <td><?php echo $row['part_type'];?></td>
			 <td><?php echo $row['Specifications'];?></td>
			 <td><?php echo $row['Quantity'];?></td>
			 <td><?php echo $row['values1'];?></td>
			 <td><?php echo $row['cost'];?></td>
			 
		 </tr>
		 <?php
		   }
		 ?>
		 
	 </tbody>
    </table>
   </div>
  </div>
 </body>
</html>