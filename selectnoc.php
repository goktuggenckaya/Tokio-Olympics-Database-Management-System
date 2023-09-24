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


if (isset($_POST['medalnums'])){
	$selection_id = $_POST['medalnums'];

	$sql_statement = "SELECT * FROM noc WHERE medal_num = $selection_id"; 

	$result = mysqli_query($db, $sql_statement);

	while($row = mysqli_fetch_assoc($result)) {
		$medal_num = $row['medal_num'];
		$noc_name = $row['noc_name'];
		echo "<tr>" . "<th>" . $noc_name . "</th>" . "<th>" . $medal_num . "</th>" . "</tr>";
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