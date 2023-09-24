<?php 

include "config.php";

include "registeredtable.php";

?>

<!DOCTYPE html>
<html>
<head>
  <title>DELETE PAGE</title>
  <link rel="stylesheet" href="styles.css">
<div align="center">
<br>
<br>
You can perform delete operation on our National Olympic Commitees of Tokyo2020 database Registered table: 
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
<form action="deleteregistered.php" method="POST">
<select name="nocs">

<?php

$sql_command = "SELECT noc_name FROM registered";

$myresult = mysqli_query($db, $sql_command);

while($noc_name_rows = mysqli_fetch_assoc($myresult))
{
  $noc_name = $noc_name_rows['noc_name'];
  echo "<option value='$noc_name'>".$noc_name."</option>";
}

?>

</select>
<button class="button2">DELETE</button>
</form>

<form action="registeredupdate.php" method="POST">
<input type="text" id="name" name="nname" placeholder="Updated Noc name"><br>
<input type="text" id="name" name="cname" placeholder="Updated Coach name"><br>

<select name="athlete">

<?php

$sql_command = "SELECT athlete_name FROM registered";

$myresult = mysqli_query($db, $sql_command);

while($athlete_name_rows = mysqli_fetch_assoc($myresult))
{
  $athlete_name = $athlete_name_rows['athlete_name'];
  echo "<option value='$athlete_name'>".$athlete_name."</option>";
}

?>

</select>
<button class="button3">UPDATE SELECTED ATHLETE'S ROW</button>
</form>