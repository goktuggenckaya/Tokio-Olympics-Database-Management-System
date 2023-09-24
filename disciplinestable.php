<!DOCTYPE html>
<html>
<head>
  <title>Disciplines</title>
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

<tr> <th>DISCIPLINE</th> </tr> 

<?php
include "config.php";


$sql_statement = "SELECT * FROM Disciplines";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{

  $mydis = $row['discipline_name'];

  echo "<tr>" ."<th>"  . $mydis. "</th>" .  "</tr>";
}

?>

</table>
</div>

</body>
</html>