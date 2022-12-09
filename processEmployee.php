<?php
$fn = $_POST['fname'];
$sn = $_POST['sname'];
$dob = $_POST['dob'];
$sal = $_POST['salary'];

include("DBcon.php");

$sql = "INSERT INTO gym_employee(firstname,surname,dateofbirth,salary) VALUES
('$fn','$sn','$dob','$sal')";

mysqli_query($con,$sql);
mysqli_close();

?>