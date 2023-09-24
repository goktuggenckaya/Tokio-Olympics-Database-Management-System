<?php 

include "config.php";

include "coachestable.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>DELETE PAGE</title>
  <link rel="stylesheet" href="styles.css">
<div align="center">
<br>
<br>
You can perform delete operation on our National Olympic Commitees of Tokyo2020 database Coaches table: 
<br>
<br>
<style>

.button2 {
  background-color:#F88649;
  color: white;
  border: 2px solid #F88649;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  } /* Blue */



.button2:hover {
  background-color: #F95802;
  color: white;
}
.button3 {
  background-color:#FF9E5B;
  color: white;
  border: 2px solid #FF9E5B;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  } /* Blue */



.button3:hover {
  background-color: #FF572B;
  color: white;
}
</style>
<form action="deletecoach.php" method="POST">
<select name="coaches">

<?php

$sql_command = "SELECT coach_name FROM Coaches";

$myresult = mysqli_query($db, $sql_command);

while($coach_name_rows = mysqli_fetch_assoc($myresult))
{
	$coach_name = $coach_name_rows['coach_name'];
	echo "<option value='$coach_name'>".$coach_name."</option>";
}

?>

</select>
<button class="button2">DELETE</button>
</form>