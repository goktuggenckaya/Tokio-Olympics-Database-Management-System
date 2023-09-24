<?php

include "config.php";

if (isset($_POST['name'])){

$noc_name= $_POST['name'];
$coach_name = $_POST['cname'];
$athlete_name = $_POST['aname'];
echo $noc_name . " " . $coach_name . " " .$athlete_name.  "<br>";

$sql_statement = "INSERT INTO registered(noc_name,athlete_name,coach_name)
					VALUES ('$noc_name','$athlete_name','$coach_name')";

$result = mysqli_query($db, $sql_statement);

header ("Location: reg_insert.php");

}

else
{

	echo "The form is not set.";

}


?>