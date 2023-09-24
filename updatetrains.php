<?php 

include "config.php";

if (isset($_POST['athlete']) && isset($_POST['atname'])&& isset($_POST['chname'])){

$selection_name = $_POST['athlete'];
$coach_name = $_POST['chname'];
$athlete_name = $_POST['atname'];

$sql_statement = "UPDATE Trains SET athlete_name='$athlete_name', coach_name='$coach_name' 
WHERE athlete_name = '$selection_name'";

$result = mysqli_query($db, $sql_statement);

header ("Location: trains_delete.php");
	if($mysqli->query($sql_statement) === true){
    echo "Records was updated successfully.";
    } else{
    echo "ERROR: Could not able to execute $sql. " 
                                        . $mysqli->error;
 }
 $mysqli->close();
}
else
{

	echo "The form is not set.";

}

?>
