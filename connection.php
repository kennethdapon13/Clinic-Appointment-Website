<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "id18532527_appointment_system";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
?>