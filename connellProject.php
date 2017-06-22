<?php 
$con = mysqli_connect("localhost","connellr394","", "connellr394") or 
die("Failed to connect to database " . mysqli_error());
$name = $_GET["name"];
// mysqli_select_db("avitabij", $con);
$sql_command = "SELECT V.NAME, V.BENEFITS, V.DOSAGE, B.BRANDNAME, VS.STORENAME FROM VITAMINS V INNER JOIN BRAND B on B.BRANDID = V.BRANDID INNER JOIN VITAMINSTORE VS on VS.STOREID = B.STOREID WHERE V.NAME = '". $name . "';";
$result = mysqli_query($con, $sql_command);
$returnValue = "";
while($row = mysqli_fetch_array($result))
{
$returnValue .= "<TR>";
$returnValue .= "<TD>" . $row['NAME'] . "</TD>" ;
$returnValue .= "<TD>" . $row['BENEFITS'] . "</TD>" ;
$returnValue .= "<TD>" . $row['DOSAGE'] . "</TD>" ;
$returnValue .= "<TD>" . $row['BRANDNAME'] . "</TD>" ;
$returnValue .= "<TD>" . $row['STORENAME'] . "</TD>" ;
$returnValue .= "</TR>";
}
echo $returnValue;
mysqli_close($con);
?>