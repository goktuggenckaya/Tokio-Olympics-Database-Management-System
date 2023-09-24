<?php

include "config.php";

if (isset($_POST['name'])){

$noc_name= $_POST['name'];
$athlete_name = $_POST['aname'];
$discipline_name = $_POST['dname'];

echo $noc_name . " " . $athlete_name . " " .$discipline_name. "<br>";

$sql_statement = "INSERT INTO Athletes(noc_name,athlete_name,discipline_name)
					VALUES ('$noc_name','$athlete_name','$discipline_name')";

$result = mysqli_query($db, $sql_statement);

header ("Location: athlete_insert.php");

}

else
{

	echo "The form is not set.";

}


?>