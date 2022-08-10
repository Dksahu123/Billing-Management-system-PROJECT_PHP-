<?php 
include('connection.php');

	$ps=$_POST['myselect'];

	

$qry = "SELECT * from adddata where id='$ps' ";
$result=mysqli_query($con,$qry);

while($row=mysqli_fetch_array($result))
{
      echo $row['sku'];
      echo "||";
         echo $row['price'];
        

}
?> 
