<?php

include('header.php');
include('sidebar.php');
include('connection.php');

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Product Entry</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>


</head>
<body>
	<div class="container-fluid mt-3" style="background-color: #ECF0F1;height: 300px;border-radius: 20px;">


    <center><h2> Product Details</h2></center>
   
      <table class="table" >
        <thead>
          <tr>
            <th data-breakpoints="xs">S No.</th>
            <th> Customer NAME</th>
            <th>contact Number</th>
            <th data-breakpoints="xs">Address</th>
           
            <th data-breakpoints="xs sm md" data-title="DOB">City</th>

            <th data-breakpoints="xs sm md" data-title="DOB">Product Name</th>
              <th data-breakpoints="xs sm md" data-title="DOB">Product Code</th>
              <th data-breakpoints="xs sm md" data-title="DOB">Quantity</th>
              <th data-breakpoints="xs sm md" data-title="DOB">Price</th>




            <th data-breakpoints="xs sm md" data-title="DOB">Action</th>

            <th data-breakpoints="xs sm md" data-title="DOB">Action</th>


        </tr>
        </thead>
        <tbody >
        	<?php


$hostname="localhost";
$user="root";
$pass="";
$con=mysqli_connect($hostname,$user,$pass);
mysqli_select_db($con,"billingdata");

$sno=1;
$result=mysqli_query($con,"SELECT * from billentry order by id desc");
while($row=mysqli_fetch_array($result))
{
 
  ?>

  
   <tr data-expanded="true">
            <td><?php echo $sno++; ?> </td>
             
            <td><?php echo $row["cname"]; ?> </td>
            <td><?php echo $row["phone"]; ?> </td>
             <td><?php echo $row["address"]; ?> </td>
             <td><?php echo $row["city"]; ?> </td>

            <td><?php echo $row["pname"]; ?> </td>
             <td><?php echo $row["pcode"]; ?> </td>
             <td><?php echo $row["qty"]; ?> </td>
             <td><?php echo $row["price"]; ?> </td>





           
           
            <td style="background-color:blueviolet;"><a style="color:white;font-size: 20px;" href="print.php?id=<?php echo $row['id']; ?> "> PDF  </a>  </td>
        <td style="background-color:red;"> <a href="deletecource.php?delete_id=<?php echo $row['id']; ?> ">DELETE </a>  </td>

            
            
          </tr>
          <?php
        }

        ?>
          
    


        </tbody>
        </table>
      </div>