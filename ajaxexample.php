<?php
include('connection.php');
?>

<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>


	</head>
<body>
	

	<form action="" method="POST">

<input type="text" name="name" id="name" placeholder="Name" >
<input type="number" name="name" id="mobile" placeholder="enter number" >
<input type="button" onclick="myfunction();" id="submit" value="submit" placeholder="Save">

</form>
<div id="show_data"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	myfunction();


 function myfunction()
{
	var name = document.getElementById("name").value;
		var mobile = document.getElementById("mobile").value;

		var submit = document.getElementById("submit").value;
    

$.ajax({ 
    
	url : "newaj.php",
	method : "POST",
	data : {

		name:name,
		mobile:mobile,
		submit:submit
	},

	success: function(data)
	{ 
		document.getElementById("show_data").innerHTML=data;
		document.getElementById("name").value="";
		 document.getElementById("mobile").value="";

		
  }
})


}

</script>
</body>
</html>




