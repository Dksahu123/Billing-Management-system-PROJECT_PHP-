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
	<div class="container mt-3">

		    <div class="row">
			<div class="col-sm-12" style="height:30px;background-color:lightcoral;text-align: center;"> PRODUCT ENTRY
			</div>
		    </div>

		    <div class="row mt-2">
			<div class="col-sm-12" style="height: 480px;background-color: #AAAAAA;background-image: url(productentry2.jfif);background-repeat: no-repeat;background-size: cover;">

			<button class="btn btn-danger" style="float: right;"><a href="admindashboard.php"  style="color: white;text-decoration: none;"> Back</a></button>

			<div class="col-sm-4">
 
	<input class="form-control" type="text" name="prodname" id="pnn" placeholder="PROCUCT NAME" required="" style="margin-top: 20px;width: 300px;">

	<input class="form-control" type="text" name="code" id="pcc" placeholder="Product CODE" required="" style="margin-top: 30px;width: 300px;">

	<input class="form-control" type="text" name="quantity" id="qt" placeholder="QUANTITY" required="" style="margin-top: 30px;width: 300px;">

	<input class="form-control" type="text" name="price" id="prr" placeholder="PRICE" required="" style="margin-top: 30px;width: 300px;">

	<input class="form-control" type="text" name="gst" id="gsst" placeholder="GST %" required="" style="margin-top: 30px;width: 300px;"> <br><br>

	<input type="submit" name="submit" value="SAVE" id="submit" onclick="myfunction();" class="form-control" style="width: 250px;margin-left: 4%;background-color: lightblue;">


</div>
</div>
</div>
</div>


<div class="container-fluid mt-3" style="background-color: #ECF0F1;height: 300px;border-radius: 20px;">


    <center><h2> Product Details</h2></center>
   
      <table class="table" >
        <thead>
          <tr>
            <th data-breakpoints="xs">S No.</th>
            <th> Product NAME</th>
            <th>Price</th>
            <th data-breakpoints="xs">Quantity</th>
           
            <th data-breakpoints="xs sm md" data-title="DOB">GST %</th>

            <th data-breakpoints="xs sm md" data-title="DOB">SKU</th>

            <th data-breakpoints="xs sm md" data-title="DOB">Action</th>

            <th data-breakpoints="xs sm md" data-title="DOB">Action</th>


        </tr>
        </thead>
        <tbody id="show_data">


        </tbody>
        </table>
      </div>

  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">

myfunction();
 function myfunction()
{
  	var name = document.getElementById("pnn").value;
		var mobile = document.getElementById("pcc").value;
		var qtt = document.getElementById("qt").value;
		var prrr = document.getElementById("prr").value;
		var gssst = document.getElementById("gsst").value;
		var s = document.getElementById("submit").value;
    
$.ajax({ 
    
	url : "save_pentry.php",
	method : "POST",
	data : {

		pnn:name,
		pcc:mobile,
		quantity:qtt,
		price:prrr,
		gst:gssst,
		submit:s

	},

	success: function(e)
	{ 

document.getElementById('show_data').innerHTML=e;
document.getElementById("pnn").value="";
document.getElementById("pcc").value="";
document.getElementById("qt").value="";
document.getElementById("prr").value="";
document.getElementById("gsst").value="";

				
  }
})

}
</script>
</body>
</html>

