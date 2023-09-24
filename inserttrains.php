<?php

include "config.php";

if (isset($_POST['aname'])){

$coach_name = $_POST['cname'];
$athlete_name = $_POST['aname'];
echo  $coach_name . " " .$athlete_name.  "<br>";

$sql_statement = "INSERT INTO Trains(coach_name,athlete_name)
					VALUES ('$coach_name','$athlete_name')";

$result = mysqli_query($db, $sql_statement);

header ("Location: trains_insert.php");

}

else
{

	echo "The form is not set.";

}


?>