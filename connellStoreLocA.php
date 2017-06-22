<?php 
$con = mysqli_connect("localhost","connellr394","","connellr394") or 
die("Failed to connect to database " . mysqli_error());
// mysqli_select_db("avitabij", $con);
$sql_command = "SELECT STORENAME, LOCATION FROM VITAMINSTORE;";
$result = mysqli_query($con, $sql_command);
$returnValue .= "<p>Location: <input type='text' id='location'></p>";
$returnValue .= "<SELECT id='storename' " . 
" >";
while($row = mysqli_fetch_array($result))
{
$returnValue .= "<OPTION VALUE='" . $row['STORENAME'] . "'>" . 
$row['STOREID'] . " " . $row['STORENAME'] . "</OPTION>";
}
$returnValue .= "</SELECT>";
echo $returnValue;
mysqli_close($con);
?>