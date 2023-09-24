<?php 

include "config.php";

include "trainstable.php";

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
<form action="deletetrains.php" method="POST">
<select name="athletes">

<?php

$sql_command = "SELECT athlete_name FROM Trains";

$myresult = mysqli_query($db, $sql_command);

while($athlete_name_rows = mysqli_fetch_assoc($myresult))
{
  $athlete_name = $athlete_name_rows['athlete_name'];
  echo "<option value='$athlete_name'>".$athlete_name."</option>";
}

?>

</select>
<button class="button2">DELETE</button>
</form>

<form action="send8.php" method="POST">
<input type="text" id="name" name="atname" placeholder="Updated Athlete name"><br>
<input type="text" id="name" name="chname" placeholder="Updated Coach name"><br>
<select name="athlete">

<?php

$sql_command = "SELECT athlete_name FROM Trains";

$myresult = mysqli_query($db, $sql_command);

while($athlete_name_rows2 = mysqli_fetch_assoc($myresult))
{
  $athlete_name2 = $athlete_name_rows2['athlete_name'];
  echo "<option value='$athlete_name2'>".$athlete_name2."</option>";
}

?>

</select>
<button class="button3">UPDATE SELECTED ATHLETE'S ROW</button>
</form>
<form action="join8.php" method="POST">
<input type="text" id="name" name="nname" placeholder="NOC name"><br>
<button class="button3">UPDATE TABLE </button>
</form>