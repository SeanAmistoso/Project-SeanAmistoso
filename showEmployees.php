<?php

include ("DBcon.php");

$sql = "select * from gym_employee";
$result = mysqli_query($con,$sql);
echo "<TABLE border='2'>";

while($row=mysqli_fetch_assoc($result)) {
	$fn = $row['firstname'];
	$sn = $row['surname'];
	$dob = $row['dateofbirth'];
	$salary = $row['salary'];
	
	echo "<TR><TD>$fn</TD><TD>$sn</TD><TD>$dob</TD><TD>$salary</TD></TR>";
}
echo "</TABLE>";

mysqli_close($con);



?>