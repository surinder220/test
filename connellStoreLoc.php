<?php
$con = mysqli_connect("localhost","connellr394","", "connellr394")
or die("Failed to connect to database");
// mysqli_select_db("avitabij", $con);
$storename = $_GET['storename'];
$location = $_GET['location'];
$sql_command =
"UPDATE VITAMINSTORE SET LOCATION = '" . $location . "' WHERE STORENAME = '" . $storename . "';";
if (mysqli_query($con, $sql_command))
echo "<p>Store Updated</p>";
else {
echo "<p>Failed to Update</p>";
echo("Error description: " . mysqli_error($con));}
mysqli_close($con);
?>