<!DOCTYPE html>
<html>
<head>
	<title>Noc Selection</title>
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

<tr> <th> NOC </th> <th> MEDALS </th> </tr> 

<?php 

include "config.php";


if (isset($_POST['nocnames'])){
	$selection_id = $_POST['nocnames'];

	$sql_statement = "SELECT * FROM athletes WHERE noc_name = '".$selection_id."'"; 

	$result = mysqli_query($db, $sql_statement);

	echo $sql_statement;

	while($row = mysqli_fetch_assoc($result)) {
		$disc_name = $row['discipline_name'];
		$noc_name = $row['noc_name'];
		$athlete_name = $row['athlete_name'];
		echo "<tr>" . "<th>" . $disc_name . "</th>". "<th>" . $noc_name . "</th>" . "<th>" . $athlete_name . "</th>" . "</tr>";
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