<?php
session_start();
include('connect.php');

$email=$_SESSION["Email"];
$query= "select * from member where Email='$email'";
if($is_query_run=mysql_query($query)){
	while($query_exq=mysql_fetch_assoc($is_query_run)){
		echo'<table border="1" style="width:300px"><tr><td>'.$query_exq['Name'].'</td><td>'.$query_exq['ID'].'</td></tr> </table>' ;
		//echo $query_exq['Name'].'<br>';
	}
	
}
?>