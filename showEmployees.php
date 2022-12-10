<?php

include ("DBcon.php");

$sql = "select * from gym_employees";


$result = mysqli_query($con,$sql);
while(mysqli_fetch_assoc($result)) {
	
}


mysqli_close($con);

echo "Employee inserted"

?>