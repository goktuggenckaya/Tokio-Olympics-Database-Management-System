<?php 

include "config.php";

if (isset($_POST['coaches'])){

$selection_name = $_POST['coaches'];

$sql_statement = "DELETE FROM Works_in WHERE coach_name = '$selection_name'";

$result = mysqli_query($db, $sql_statement);

header ("Location: works_in_delete.php");

}

else
{

	echo "The form is not set.";

}

?>