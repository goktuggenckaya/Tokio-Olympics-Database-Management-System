<?php 

include "config.php";

if (isset($_POST['athlete']) && isset($_POST['nname'])&& isset($_POST['cname'])){

$selection_name = $_POST['athlete'];
$c_name = $_POST['cname'];
$n_name = $_POST['nname'];



$sql_statement = "UPDATE registered SET noc_name='$n_name', coach_name='$c_name'
WHERE athlete_name = '$selection_name'";

$result = mysqli_query($db, $sql_statement);

header ("Location: reg_delete.php");
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