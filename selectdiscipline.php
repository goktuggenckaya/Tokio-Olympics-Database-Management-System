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

<tr> <th> DISCIPLINE NAME </th> </tr> 

<?php 

include "config.php";


if (isset($_POST['disciplinenames'])){
	$selection_id = $_POST['disciplinenames'];

	$sql_statement = "SELECT * FROM disciplines WHERE discipline_name = '".$selection_id."'"; 

	$result = mysqli_query($db, $sql_statement);

	echo $sql_statement;

	while($row = mysqli_fetch_assoc($result)) {
		$disc_name = $row['discipline_name'];
		echo "<tr>" . "<th>" . $disc_name . "</th>". "</tr>";
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