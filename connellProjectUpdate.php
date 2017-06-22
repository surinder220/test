<?php
$con = mysqli_connect("localhost","connellr394","", "connellr394")
or die("Failed to connect to database");
// mysqli_select_db("avitabij", $con);
$benefits = $_GET['benefits'];
$dosage = $_GET['dosage'];
$vitaminid = $_GET['vitaminid'];
$sql_command =
"UPDATE VITAMINS SET BENEFITS = '" . $benefits . "', DOSAGE = '" . $dosage . "' WHERE VITAMINID = " . $vitaminid . ";";
if (mysqli_query($con, $sql_command))
echo "<p>Vitamin added</p>";
else{
echo "<p>Failed to insert</p>";
echo("Error description: " . mysqli_error($con));}
mysqli_close($con);
?>