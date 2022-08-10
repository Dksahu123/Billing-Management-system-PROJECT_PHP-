<?php

include('connection.php');

if(isset($_POST['submit']))

{
	$n=$_POST['name'];
		$m=$_POST['mobile'];
		if($n!="")
		{

	
$rs=mysqli_query($con,"INSERT INTO ajdata set name='$n',mobile='$m'");

if ($rs) 
{
	echo "<span style='color:green'>submitted successfully!</span>";
	
	}
	else

	{ 
		echo "OOOopppss";

	}
}
}
?>


<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</head>

<body>

<table class="table table-bordered">

<thead>
	<tr>
		<th><b> Sno </b></th>
		<th><b> NAME</b></th>
				<th><b> MOBILE</b></th>

	</tr>
</thead>
<tbody>

<?php
$sno = 1;

$qry = "SELECT * from ajdata order by id desc ";
$result=mysqli_query($con,$qry);

while($row=mysqli_fetch_array($result))
{

?>
            <tr data-expanded="true">
    
            <td><?php echo $sno++; ?></td>
            <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["mobile"]; ?></td>

            
            </tr>
        </tbody>
<?php
}
?>
</table>
</body>


