
<?php 

include('sidebar.php');


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<title>Temporary Bill</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
	

</head>
<body>

	<div class="container" style="margin-top:-50px;">
		<div class="row">
			<div class="col-sm-12" style="background-color: lightgray; width: 100%; height: 80px;padding: 15px;">

				<u><h1 align="center" style="color:black;">BILLING SYSTEM PROJECT</h1></u>
				


			</div>
		</div>
	
	<div class="row" >
		
         <div class="col-sm-12 mt-2" style=" background-image: url(bill1.jpg) ;height: 450px; background-repeat: no-repeat;background-size: cover;">

     

         	
         	


           
         	NAME:
         	<input type="text" name="v1" id="n1" class="form-control"><br>
         		MOBILE:
         	<input type="text" name="v1" id="n2" class="form-control"><br>
         		course:
         	<input type="text" name="v1" id="n3" class="form-control"><br>
         		AADHAR:
         	<input type="text" name="v1" id="n4" class="form-control"><br>
         		<input type="submit" name="submit" value="click me" class="btn btn-primary" onclick="myfunction()">
         		<input type="submit" name="submit" value="multiply" class="btn btn-success" onclick="dk()">
         

         </div>
<!-- javascript practice -->
<script type="text/javascript">
	
function myfunction()

 {


   var x = document.getElementById("n1").value;
   var y = document.getElementById("n2").value;
   var z = document.getElementById("n3").value;
   var a = document.getElementById("n4").value;

  document.getElementById("demo").innerHTML = x;
  document.getElementById("demo2").innerHTML = y;
  document.getElementById("demo3").innerHTML = z;
  document.getElementById("demo4").innerHTML = a;


}
function dk()
{
	 var x = document.getElementById("n1").value;
   var y = document.getElementById("n2").value;

   var z=parseInt(x) *parseInt (y);
    document.getElementById("r1").innerHTML = z;

  

}
</script>

TOTAL:<h2 id="r1"></h2>



  <table class="table table-bordered" style="background-color:black;color:white;">
  	<tr>
  		<td>NAME</td>
  		  		<td>mobile</td>
  		<td>cource</td>
  		<td>aadhar</td>
</tr>
<tr>
	<td id="demo"></td>
	<td id="demo2"></td>
	<td id="demo3"></td>
	<td id="demo4"></td>

</tr>



  </table>


         	</div>
         	

         </div>	
         
		</div>
	



</body>
</html>


