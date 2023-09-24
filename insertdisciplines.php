<?php

include "config.php";

if (isset($_POST['dname'])){


$discipline_name = $_POST['dname'];

echo $discipline_name .  "<br>";

$sql_statement = "INSERT INTO Disciplines(discipline_name)
          VALUES ('$discipline_name')";

$result = mysqli_query($db, $sql_statement);

header ("Location: discipline_insert.php");

}

else
{

  echo "The form is not set.";

}


?>