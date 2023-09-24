<?php 

include "config.php";

if (isset($_POST['coaches'])){

$selection_name = $_POST['coaches'];

$sql_statement = "DELETE FROM Coaches WHERE coach_name = '$selection_name'";

$result = mysqli_query($db, $sql_statement);

header ("Location: coach_delete.php");

}

else
{

	echo "The form is not set.";

}

?>