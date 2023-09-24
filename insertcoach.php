<?php

include "config.php";

if (isset($_POST['name'])){

$noc_name= $_POST['name'];
$coach_name = $_POST['cname'];
$discipline_name = $_POST['dname'];
$gender = $_POST['gname'];
echo $discipline_name . " " . $coach_name . " " .$noc_name. " " .$gender .  "<br>";

$sql_statement = "INSERT INTO Coaches(discipline_name,coach_name,noc_name,gender)
					VALUES ('$discipline_name','$coach_name','$noc_name', '$gender')";

$result = mysqli_query($db, $sql_statement);

header ("Location: coach_insert.php");

}

else
{

	echo "The form is not set.";

}


?>