<?php
require 'connect.php';
$query1="select * from item";
$query="select member.Name, member.Activity_id, hold.expire_date, Item_id from member left join hold on member.Activity_id=hold.Activity_id";
if($is_query_run=mysql_query($query)){
	while($query_exq=mysql_fetch_assoc($is_query_run)){
	     
		//echo'<table border="1" style="width:300px"><tr><td>'.$query_exq[Name].'</td><td>'.$query_exq[Item_id].'</td><td>'.$query_exq[member.Activity_id].'</td><td>'.$query_exq[hold.expire_date].'</td>td>'.$query_exq[Item_id].'</td></</</tr> </table>' ;
		echo "<table border='1' style='width:300px'>
		<tr>
		<td style='width:5000px;height:40px'>".$query_exq['Name']."</td><td style='width:5000px;height:40px'>".$query_exq['Activity_id']."</td><td style='width:5000px;height:40px'>".$query_exq['expire_date']."</td><td style='width:5000px;height:40px'>".$query_exq['Item_id']."</td>
		</tr>
		</table>";
		//echo $query_exq['Name'].'<br>';
	}
	
}

?>