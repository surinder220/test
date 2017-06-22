<?php 
$con = mysqli_connect("localhost","connellr394","", "connellr394") or 
die("Failed to connect to database " . mysqli_error());
$storename = $_GET["storename"];
// mysqli_select_db("avitabij", $con);
$sql_command = "SELECT STORENAME, LOCATION FROM VITAMINSTORE WHERE STORENAME = '". $storename . "';";
$result = mysqli_query($con, $sql_command);
$returnValue = "";
while($row = mysqli_fetch_array($result))
{
$returnValue .= "<TR>";
$returnValue .= "<TD>" . $row['STORENAME'] . "</TD>" ;
$returnValue .= "<TD>" . $row['LOCATION'] . "</TD>" ;
$returnValue .= "</TR>";
}
echo $returnValue;
mysqli_close($con);
?>