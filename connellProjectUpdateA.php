<?php 
$con = mysqli_connect("localhost","connellr394","","connellr394") or 
die("Failed to connect to database " . mysqli_error());
// mysqli_select_db("avitabij", $con);
$sql_command = "SELECT VITAMINID, NAME FROM VITAMINS;";
$result = mysqli_query($con, $sql_command);
$returnValue .= "<input id= 'brand' type='radio'  value='2'> Nature Made<br>";
$returnValue .= "<input id='brand' type='radio' value='1'> Swanson<br>";
$returnValue .= "<p>BENEFITS: <input type='text' id='benefits'></p><p>DOSAGE: <input type='text' id='dosage'></p>";
$returnValue .= "<SELECT id='vitaminid' " . 
" >";
while($row = mysqli_fetch_array($result))
{
$returnValue .= "<OPTION VALUE='" . $row['VITAMINID'] . "'>" . 
$row['VITAMINID'] . " " . $row['NAME'] . "</OPTION>";
}
$returnValue .= "</SELECT>";
echo $returnValue;
mysqli_close($con);
?>