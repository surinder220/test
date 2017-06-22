<?php
$con = mysqli_connect("localhost","connellr394","", "connellr394")
or die("Failed to connect to database");
// mysqli_select_db("avitabij", $con);
$name = $_GET['name'];
$benefits = $_GET['benefits'];
$dosage = $_GET['dosage'];
$brand = $_GET['brand'];
$sql_command =
"INSERT INTO VITAMINS(NAME, BENEFITS, DOSAGE, BRANDID) VALUES ('" . $name . "','" . $benefits . "','" . $dosage . "'," . $brand . ");";
if (mysqli_query($con, $sql_command))
echo "<p>Vitamin added</p>";
else
echo "<p>Failed to insert</p>";
mysqli_close($con);
?>