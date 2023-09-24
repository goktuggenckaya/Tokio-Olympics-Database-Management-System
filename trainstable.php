<!DOCTYPE html>
<html>
<head>
  <title>Trains</title>
<link rel="stylesheet" href="styles.css">
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #F9D3EE;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #F9D3EE;
}
</style>

</head>
<body>

<div align="center">

  <table>

<tr>  <th>ATHLETES</th>  <th>COACHES</th></tr> 

<?php

include "config.php";

$sql_statement = "SELECT * FROM Trains";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $medal = $row['athlete_name'];
  $c = $row['coach_name'];
  echo "<tr>" . "<th>" . $medal . "</th>" .  "<th>" . $c . "</th>"."</tr>";
}

?>

</table>
</div>

</body>
</html>