<?php
$fn = $_POST['fname'];
$sn = $_POST['sname'];
$dob = $_POST['dob'];
$sal = $_POST['salary'];

include("DBcon.php");

$sql = "INSERT INTO gym_employee(firstname,surname,dateofbirth,salary) VALUES
('tom','smith','2002-01-01',30000.00)


?>