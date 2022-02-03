<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "myuserdatabase";
$con = mysqli_connect($server, $user, $pass, $db);

if ($con)
{
 echo "connected";
}
 else
 {
echo "error";
 }
// testing

?>

