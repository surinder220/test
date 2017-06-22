<?php 
$con = mysqli_connect("localhost","connellr394","","connellr394") or 
die("Failed to connect to database " . mysqli_error());
// mysqli_select_db("avitabij", $con);
$sql_command = "SELECT STORENAME, LOCATION FROM VITAMINSTORE;";
$result = mysqli_query($con, $sql_command);
$returnValue = "<form>Enter Store Name Here:<input id = 'storeSelect' type = 'text' name = 'textField' onKeyUp= 'alert(this.value)' ></form>";


echo $returnValue;
mysqli_close($con);
?>