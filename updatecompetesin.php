<?php 

include "config.php";

if (isset($_POST['dis']) && isset($_POST['aname'])&& isset($_POST['nname'])){

$selection_name = $_POST['dis'];
$a_name = $_POST['aname'];
$n_name = $_POST['nname'];



$sql_statement = "UPDATE competes_in SET noc_name='$n_name', athlete_name='$a_name'
WHERE discipline_name = '$selection_name'";

$result = mysqli_query($db, $sql_statement);

header ("Location: discipline_delete.php");
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