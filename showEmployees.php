<?php

include ("DBcon.php");

$sql = "select * from gym_employees";

mysqli_query($con,$sql);
mysqli_close($con);

?>