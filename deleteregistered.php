<?php 

include "config.php";

if (isset($_POST['nocs'])){

$selection_name = $_POST['nocs'];

$sql_statement = "DELETE FROM registered WHERE noc_name = '$selection_name'";

$result = mysqli_query($db, $sql_statement);

header ("Location: reg_delete.php");

}

else
{

	echo "The form is not set.";

}

?>