<!DOCTYPE html>
<html>
<head>
	<title>Noc Selection Panel</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>

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
<?php
include "config.php";
include "noctable.php";

?>


<div align="center">
	<br>
<form action="selectnoc.php" method="POST">
<select name="medalnums"> <!-- this area should changed through all tables -->

<?php

$sql_command = "SELECT medal_num FROM Noc"; // this area should changed through all tables

$myresult = mysqli_query($db, $sql_command);

while($medal_num_rows = mysqli_fetch_assoc($myresult))
{
  $medal_num= $medal_num_rows['medal_num'];
  echo "<option value=$medal_num>".$medal_num."</option>";
}

?>
</select>

<button class="button2">SELECT</button>
</form>
</div>
</body>
</html>