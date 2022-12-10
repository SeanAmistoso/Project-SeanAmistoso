<?php

include ("DBcon.php");

$sql = "select * from gym_employees";


$result = mysqli_query($con,$sql);
while(mysqli_fetch_assoc($result)) {
	$fn = $row['firstname'];
	$sn = $row['surname'];
	$dob = $row['dateofbirth'];
	$salary = $row['salary'];
	
	echo "$fn, $sn, $dob, $salary<br>";
}


mysqli_close($con);



?>