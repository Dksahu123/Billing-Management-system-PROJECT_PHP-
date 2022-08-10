<?php 
include('connection.php');

if(isset($_POST['submit']))

{
	$pn=$_POST['pnn'];
	$pc=$_POST['pcc'];
	$pq=$_POST['quantity'];
	$pp=$_POST['price'];
	$pgst=$_POST['gst'];
	if($pn!="")
	{

$rs=mysqli_query($con,"INSERT INTO adddata set productname='$pn',sku='$pc',qty='$pq',price='$pp',gst='$pgst'");

if ($rs) 
{
echo "<span style='color:green;'>Submitted Successfully!</span>";
	
	}
	else

	{ 
		echo "OOOopppss";

	}
}
}
?>
<?php

$hostname="localhost";
$user="root";
$pass="";
$con=mysqli_connect($hostname,$user,$pass);
mysqli_select_db($con,"billingdata");

$sno = 1;

$qry = "SELECT * from adddata order by id desc ";
$result=mysqli_query($con,$qry);

while($row=mysqli_fetch_array($result))
{

?>
   <tr data-expanded="true">
    
            <td><?php echo $sno++; ?></td>
            <td><?php echo $row["productname"]; ?></td>
            <td><?php echo $row["price"]; ?></td>
            <td><?php echo $row["qty"]; ?></td>
            <td><?php echo $row["gst"]; ?></td>
            <td><?php echo $row["sku"]; ?></td>

    <td><a href="editproduct.php?id=<?php echo $row['id']; ?> "> Edit  </a> </td>
    <td><a href="delete.php?delete_id=<?php echo $row['id']; ?> "> Delete  </a> </td>

</tr>

<?php
}
?>        