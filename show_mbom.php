

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
   <h1 align="center">MBOM DATA</h1>
   <br />
   <div class="table-responsive">
   <br />
   <div align="right">
     <button type="button" name="add" id="add" class="btn btn-info" onclick="myfun()">generate_text_file</button>
    </div>
    <br />
    <div id="alert_message"></div>
    <table id="" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>part_name</th>
       <th>part-type</th>
	   <th>specification</th>
	   <th>units</th>
	   <th>cost</th>
      </tr>
	  
     </thead>
	 <tbody>
	 <?php
	 
	        $word="";
			$x=rand(1,10000);
			$file="mbom/test$x.txt";
			$fp=fopen($file,"w");
			
	       $con=mysqli_connect("localhost","root","","testing");
		   $result1=mysqli_query($con,"select * from ebom");
		   $count=mysqli_num_rows($result1);
		   $i=1;
		   while($i<=$count)
		   {
		   $result2=mysqli_query($con,"select * from supplier WHERE (supplier.type=(SELECT part_type from ebom where ebom.id='$i')AND supplier.part_id=(SELECT Specifications FROM ebom where ebom.id='$i'))");
		    $count1=mysqli_num_rows($result2);
			
			if($count1==1)
			{
				$row=mysqli_fetch_array($result2);
				$i++;
				
				$word.=$row['part_name'];
			$word.=' $$ ';
			$word.=$row['type'];
			$word.=' $$ ';
			$word.=$row['part_id'];
			$word.=' $$ ';
			$word.=$row['size'];
			$word.=' $$ ';
			$word.=$row['cost'];
			$word.="\r\n";
			
				 ?>
	     <tr>
		     <td><?php echo $row['part_name'];?></td>
			 <td><?php echo $row['type'];?></td>
			 <td><?php echo $row['part_id'];?></td>
			 <td><?php echo $row['size'];?></td>
			 <td><?php echo $row['cost'];?></td>
			 
		 </tr>
		 <?php
			}
				
			else if($count1!=1)
			{
				$result2=mysqli_query($con,"select * from supplier WHERE (supplier.type=(SELECT part_type from ebom where ebom.id='$i')AND supplier.part_id=(SELECT Alternative1 FROM ebom where ebom.id='$i'))");
		    $count2=mysqli_num_rows($result2);
			
			if($count2==1)
			{
				$row=mysqli_fetch_array($result2);
				$i++;
				$word.=$row['part_name'];
			$word.=' $$ ';
			$word.=$row['type'];
			$word.=' $$ ';
			$word.=$row['part_id'];
			$word.=' $$ ';
			$word.=$row['size'];
			$word.=' $$ ';
			$word.=$row['cost'];
			$word.="\r\n";
			
				 ?>
	     <tr>
		     <td><?php echo $row['part_name'];?></td>
			 <td><?php echo $row['type'];?></td>
			 <td><?php echo $row['part_id'];?></td>
			 <td><?php echo $row['size'];?></td>
			 <td><?php echo $row['cost'];?></td>

			 
		 </tr>
		 <?php
			}
				
			}else if($count2!=1)
			{
				$result2=mysqli_query($con,"select * from supplier WHERE (supplier.type=(SELECT part_type from ebom where ebom.id='$i')AND supplier.part_id=(SELECT Alternative2 FROM ebom where ebom.id='$i'))");
		    $count3=mysqli_num_rows($result2);
			
			
			
			if($count3==1)
			{
				$row=mysqli_fetch_array($result2);
				$word.=$row['part_name'];
			$word.=' $$ ';
			$word.=$row['type'];
			$word.=' $$ ';
			$word.=$row['part_id'];
			$word.=' $$ ';
			$word.=$row['size'];
			$word.=' $$ ';
			$word.=$row['cost'];
			$word.="\r\n";
			
				$i++;
				 ?>
	     <tr>
		     <td><?php echo $row['part_name'];?></td>
			 <td><?php echo $row['type'];?></td>
			 <td><?php echo $row['part_id'];?></td>
			 <td><?php echo $row['size'];?></td>
			 <td><?php echo $row['cost'];?></td>
			 
		 </tr>
		 <?php
			}
			}else if($count3!=1)
			{
				$result2=mysqli_query($con,"select * from supplier WHERE (supplier.type=(SELECT part_type from ebom where ebom.id='$i')AND supplier.part_id=(SELECT Alternative3 FROM ebom where ebom.id='$i'))");
		    $count4=mysqli_num_rows($result2);
			
			if($count4==1)
			{
				$row=mysqli_fetch_array(result2);
				
				$word.=$row['part_name'];
			$word.=' $$ ';
			$word.=$row['type'];
			$word.=' $$ ';
			$word.=$row['part_id'];
			$word.=' $$ ';
			$word.=$row['size'];
			$word.=' $$ ';
			$word.=$row['cost'];
			$word.="\r\n";
			
				$i++;
				 ?>
	     <tr>
		     <td><?php echo $row['part_name'];?></td>
			 <td><?php echo $row['type'];?></td>
			 <td><?php echo $row['part_id'];?></td>
			 <td><?php echo $row['size'];?></td>
			 <td><?php echo $row['cost'];?></td>

			 
		 </tr>
		 <?php
			}
			}
			else{
				
				$flag=0;
				?>
				   <tr> unable to fulfill ebom requriement access another supplier</tr>
				
				<?php
				
			}

			
			}
		  
		 ?>
		 
	 </tbody>
    </table>
   </div>
  </div>
  
  <script>
	function myfun(){
		<?php
		  
		  
		    
			//
		
			
			//$x=strlen($word);
			file_put_contents($file,$word);
			?>
			
		//$var=getElementById('alert_message');
		
		
		
			window.location.href="http://localhost:8080/dell1/profile.php?id='success'";
		
		
			<?php
			
		
		
		?>
		
		
	}
	
	
  </script>
 </body>
</html>