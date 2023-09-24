<?php 

include "config.php";

if (isset($_POST['coach']) && isset($_POST['cname'])&& isset($_POST['dname'])&& isset($_POST['nname'])&& isset($_POST['dname'])){

$selection_name = $_POST['coach'];
$d_name = $_POST['dname'];
$n_name = $_POST['nname'];
$c_name = $_POST['cname'];
$g_name = $_POST['gname'];


$sql_statement = "UPDATE Works_in SET discipline_name='$d_name', noc_name='$n_name', gender='$g_name', coach_name='$c_name'
WHERE coach_name = '$selection_name'";

$result = mysqli_query($db, $sql_statement);

header ("Location: works_in_delete.php");
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
