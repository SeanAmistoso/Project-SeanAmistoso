<?php

include ("DBcon.php");

$sql = "select * from gym_employee";
$result = mysqli_query($con,$sql);
echo "<TABLE>";

while($row=mysqli_fetch_assoc($result)) {
	$fn = $row['firstname'];
	$sn = $row['surname'];
	$dob = $row['dateofbirth'];
	$salary = $row['salary'];
	
	echo "$fn, $sn, $dob, $salary<br>";
}
echo "</TABLE>";

mysqli_close($con);



?>