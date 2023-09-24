<!DOCTYPE html>
<html>
<head>
	<title> Main Page</title>
  <link rel="stylesheet" href="styles.css">

<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #F2B2DF;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #F2B2DF;
}

.button2 {
  background-color:#F88649;
  color: white;
  border: 2px solid #F88649;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  } /* Blue */



.button2:hover {
  background-color: #F95802;
  color: white;
}
.button3 {
  background-color:#FF9E5B;
  color: white;
  border: 2px solid #FF9E5B;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  } /* Blue */



.button3:hover {
  background-color: #FF572B;
  color: white;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>


</head>
<body>


<div align="center">
<b>NOCTODBMS</b>
<br>
<br>
Here is our National Olympic Commitees of Tokyo2020 database Registered table: 
<br>
<br>

<?php
include "registeredtable.php";
?>

<form action="insertregistered.php" method="POST">
	<input type="text" id="fname" name="aname" placeholder="Athlete name"><br>
	<input type="text" id="fname" name="cname" placeholder="Coach name"><br>
	<input type="text" id="fname" name="name" placeholder="Noc name"><br>
  <button class="button2">SEND</button>
</form>
</div>
</body>
</html>