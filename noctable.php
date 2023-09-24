<!DOCTYPE html>
<html>
<head>
	<title>Nocs</title>
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

<tr> <th> NOC </th> <th>MEDALS</th> </tr> 

<?php

include "config.php";

$sql_statement = "SELECT * FROM Noc";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $mynoc = $row['noc_name'];
	$medal = $row['medal_num'];

	echo "<tr>" . "<th>" . $mynoc . "</th>" . "<th>" . $medal . "</th>" . "</tr>";
}

?>

</table>
</div>

</body>
</html>