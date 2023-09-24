<?php 

include "config.php";

include "competes_intable.php";

?>

<!DOCTYPE html>
<html>
<head>
  <title>DELETE PAGE</title>
  <link rel="stylesheet" href="styles.css">
<div align="center">
<br>
<br>
You can perform delete operation on our National Olympic Commitees of Tokyo2020 database Competes_in table: 
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
<form action="deletecompetes_in.php" method="POST">
<select name="disciplines">

<?php

$sql_command = "SELECT discipline_name FROM competes_in";

$myresult = mysqli_query($db, $sql_command);

while($dis_name_rows = mysqli_fetch_assoc($myresult))
{
  $discipline_name = $dis_name_rows['discipline_name'];
  echo "<option value='$discipline_name'>".$discipline_name."</option>";
}

?>

</select>
<button class="button2">DELETE</button>
</form>
<form action="updatecompetesin.php" method="POST">
<input type="text" id="name" name="nname" placeholder="Updated Noc name"><br>
<input type="text" id="name" name="aname" placeholder="Updated Athlete name"><br>

<select name="dis">

<?php

$sql_command = "SELECT discipline_name FROM competes_in";

$myresult = mysqli_query($db, $sql_command);

while($dis_name_rows = mysqli_fetch_assoc($myresult))
{
  $discipline_name = $dis_name_rows['discipline_name'];
  echo "<option value='$discipline_name'>".$discipline_name."</option>";
}

?>

</select>
<button class="button3">UPDATE SELECTED DISCIPLINE'S ROW</button>
</form>