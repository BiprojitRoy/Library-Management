<?php

session_start();
$email=$_SESSION["Email"];
require 'connect.php';
$query="UPDATE classes 
SET Return_date = DATE_ADD(Return_Date , INTERVAL 7 DAY)
WHERE `id` = 161;";
$result=mysql_query($query);
if(!$result){
	die("couldnot upadte");
}
else{
	echo "updated successfully";
}
?>