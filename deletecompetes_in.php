<?php 

include "config.php";

if (isset($_POST['disciplines'])){

$selection_name = $_POST['disciplines'];

$sql_statement = "DELETE FROM competes_in WHERE discipline_name = '$selection_name'";

$result = mysqli_query($db, $sql_statement);

header ("Location: competes_in_delete.php");

}

else
{

	echo "The form is not set.";

}

?>