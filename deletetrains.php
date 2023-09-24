<?php 

include "config.php";

if (isset($_POST['athletes'])){

$selection_name = $_POST['athletes'];

$sql_statement = "DELETE FROM Trains WHERE athlete_name = '$selection_name'";

$result = mysqli_query($db, $sql_statement);

header ("Location: trains_delete.php");

}

else
{

	echo "The form is not set.";

}

?>