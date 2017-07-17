<?php
require 'connect.php';

$query="select * from category where Name='science'";
if($is_query_run=mysql_query($query)){
	while($query_exq=mysql_fetch_assoc($is_query_run)){
		echo'<table border="1" style="width:300px"><tr><td>'.$query_exq['Name'].'</td><td>'.$query_exq['ID'].'</td></tr> </table>' ;
		//echo $query_exq['Name'].'<br>';
	}
	
}
?>