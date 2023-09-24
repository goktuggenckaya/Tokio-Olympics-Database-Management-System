<?php

include "config.php";

if (isset($_POST['name'])){

$noc_name= $_POST['name'];
$medal_num = $_POST['medals'];

echo $noc_name . " " . $medal_num . "<br>";

$sql_statement = "INSERT INTO Noc(noc_name,medal_num)
					VALUES ('$noc_name','$medal_num')";

$result = mysqli_query($db, $sql_statement);

header ("Location: noc_insert.php");

}

else
{

	echo "The form is not set.";

}


?>