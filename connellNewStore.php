<?php
$con = mysqli_connect("localhost","connellr394","", "connellr394")
or die("Failed to connect to database");
// mysqli_select_db("avitabij", $con);
$storename = $_GET['storename'];
$location = $_GET['location'];
$sql_command =
"INSERT INTO VITAMINSTORE(STORENAME, LOCATION) VALUES ('" . $storename . "','" . $location . "');";
if (mysqli_query($con, $sql_command))
echo "<p>Store added</p>";
else{
echo "<p>Failed to insert</p>";
echo("Error description: " . mysqli_error($con));}
mysqli_close($con);
?>