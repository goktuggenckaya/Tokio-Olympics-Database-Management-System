<!DOCTYPE html>
<html>
<head>
	<title>Registered Selection</title>
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

<tr> <th> NOC </th> <th>ATHLETES</th>  <th>COACHES</th> </tr> 

<?php

include "config.php";


if (isset($_POST['nocnames'])){
	$selection_id = $_POST['nocnames'];

	$sql_statement = "SELECT * FROM registered WHERE noc_name = '"$selection_id"'"; 

	$result = mysqli_query($db, $sql_statement);

	while($noc_rows = mysqli_fetch_assoc($result)) {
		$noc_name = $noc_rows['noc_name'];
 		$athlete_name = $noc_rows['athlete_name'];
 		$coach_name = $noc_rows['coach_name'];
  		echo "<tr>" . "<th>" . $noc_name . "</th>" . "<th>" . $athlete_name . "</th>" .  "<th>" . $coach_name . "</th>"."</tr>";
	}
}

else {

	echo "<br> The form is not set.";

}


?>


</table>
</div>

</body>
</html>