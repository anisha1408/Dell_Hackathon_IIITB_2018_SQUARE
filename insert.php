<?php
$connect = mysqli_connect("localhost", "root", "", "testing");
if(isset( $_POST["part_id"],$_POST["part_name"],$_POST["size"],$_POST["type"],$_POST["quantity"],$_POST["cost"]))
{
 
 $part_id = mysqli_real_escape_string($connect, $_POST["part_id"]);
$part_name=mysqli_real_escape_string($connect,$_POST["part_name"]);
$size=mysqli_real_escape_string($connect,$_POST["size"]);
$type=mysqli_real_escape_string($connect,$_POST["type"]);
$quantity=mysqli_real_escape_string($connect,$_POST["quantity"]);
$cost=mysqli_real_escape_string($connect,$_POST["cost"]);
 $query = "INSERT INTO supplier(part_id,part_name,size,type,quantity,cost) VALUES('$part_id','$part_name','$size','$type','$quantity','$cost')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>


