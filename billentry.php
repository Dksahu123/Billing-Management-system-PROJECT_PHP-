<?php 



include('header.php');
include('sidebar.php');
include('connection.php');
$amt="";
if(isset($_POST['submit']))

{

	$cn=$_POST['firstname1'];
	$cno=$_POST['lastname1'];
	$add=$_POST['address1'];
	$ct=$_POST['city1'];
	$pd=$_POST['select'];
	$pcode=$_POST['pcode'];
	$qty=$_POST['qty'];
	$prc=$_POST['price'];
	$amt=$qty * $prc ;
	if($cn!="")
	{

	$rs=mysqli_query($con,"INSERT INTO billentry set cname='$cn',phone='$cno',address='$add',city='$ct',pname='$pd',pcode='$pcode',qty='$qty',price='$prc'");
	if($rs)
	{
		echo "<script>alert('data has been submited')</script>";
	}
	else
	{
		echo "opss something wrong";
	}



}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Product Entry</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>


</head>


<body>
	
	<div class="container mt-3" id="3">

		    <div class="row">
			<div class="col-sm-12" style="height:30px;background-color:lightcoral;text-align: center;"> BILL ENTRY

			</div>

		    </div>

</div>
<div class="container mt-3" id="body">
<form  class="form-inline" action="" method="POST">

<br>

<label><b>Cust. Name:</b><input  type="text" name="firstname1" class="form-control" id="n1"></label>
<label><b>Contact No:</b><input  type="number" name="lastname1"class="form-control" required="" id="n2"></label>
<label><b>Address:</b>
	<input  type="text" name="address1" class="form-control" id="n3"></label>
<label><b>City:</b><input  type="text" name="city1"class="form-control"></label>
<br>
<br>

<label><b>Product Name:</b>
	<select name="select" id="myselect" class="form-control" onchange="getdata()">
		<option value="">choose product</option>
				<?php


$qry = "SELECT * from adddata";
$result=mysqli_query($con,$qry);

while($row=mysqli_fetch_array($result))
{
	?>

				<option value="<?php echo $row['id'];?>"><?php echo $row['productname'];?></option>
<?php 
}
 ?>
		
		


	</select>


</label>&nbsp&nbsp&nbsp
<label><b>Product Code:</b><input  type="text" id="pc" name="pcode"class="form-control"></label>&nbsp&nbsp
<label><b>Quantity:</b><input  type="text"  name="qty"class="form-control" ></label>&nbsp&nbsp
<label><b>Price:</b><input  type="text" id="pr" name="price"class="form-control"></label>
<br><br>
<label><b>Total Amount:<?php echo $amt;    ?></b></label>
<input type="submit" name="submit" value="Save " class="btn btn-success" style="margin-left: 300px;width: 100px;">


</div>

<div class="container mt-5">

	    <div class="row mt-5">
		<div class="col-sm-12"style="height:30px;background-color:lightseagreen;text-align:center;"> Delivery Invoice
			</div>
		    </div>
</div>


<br>
<p id="data"></p>



<div class="container" >


<label><b>Same as Billing address:</b><input type="checkbox" name="sub" value="click me" class="btn btn-primary" onclick="gta()">
<br>
<br>
<label>Cust. Name:<input type="text" name="firstname2" id="demo"></label>
<label>Contact No:<input type="text" name="lastname2" id="l2"></label>
<label>Address:<input type="text" name="address2" id="demo3"></label>
<label>City:<input  type="text" name="city2"></label>



<input type="submit" name="submit" value="Submit" class="btn btn-primary">

</div>

</form>
</body>
TOTAL:<h2 id="r1"></h2>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	
	function gta()

 {

   var x = document.getElementById("n1").value;
   var y = document.getElementById("n2").value;
   // var z = document.getElementById("n3").value;
   

  document.getElementById("demo").value = x;
  document.getElementById("l2").value = y;
  // document.getElementById("data").innerHTML = z;
  // document.getElementById("demo4").innerHTML = a;
  //   document.getElementById("r1").innerHTML = x;


}


 function getdata()
{
  	var x = document.getElementById("myselect").value;
	
    
$.ajax({ 
    
	url : "bentry.php",
	method : "POST",
	data : {

		myselect:x
		
	},

	success: function(e)
	{ 
		let str=e;
		let arr=str.split("||");
	

     document.getElementById('pc').value=arr[0];


     document.getElementById('pr').value=arr[1];


				
  }
})

}


</script>
</html> 