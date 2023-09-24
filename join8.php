<?php 

include "config.php";

if (isset($_POST['nname'])){
$n_name = $_POST['nname'];

$sql_statement = "SELECT * FROM ((Trains
INNER JOIN Coaches ON Trains.coach_name=Coaches.coach_name)
INNER JOIN Noc ON Noc.noc_name=Coaches.noc_name)";

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