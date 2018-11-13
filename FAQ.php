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
			 
			 #bg_ground{
				 position:absolute;
				 top:100px;
				 margin-left:200px;
				 
				 
				 
			 }
			 </style>    
	</head>
	<body >
      
	<?php include('navbar.html');?>

	   <div id="bg_ground"><img src='images/faq.jpeg'></div>
	
	 </body>


</html>