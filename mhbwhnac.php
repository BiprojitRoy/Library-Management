<?php
require 'connect.php';
$query1="select * from item";
$query="select member.Name, Item.Name from member left join item on member.Item_id=item.Item_id where (item.Available_copies=0)";
if($is_query_run=mysql_query($query)){
	while($query_exq=mysql_fetch_assoc($is_query_run)){
	     
		//echo'<table border="1" style="width:300px"><tr><td>'.$query_exq[Name].'</td><td>'.$query_exq[Item_id].'</td><td>'.$query_exq[author_name].'</td></tr> </table>' ;
		echo "<table border='1' style='width:300px'>
		<tr>
		<td style='width:5000px;height:40px'>".$query_exq['Name']."</td>
		<td style='width:1500px;height:40px'>".$query_exq['Item_id']."</td>
		</tr>
		</table>";
		//echo $query_exq['Name'].'<br>';
	}
	
}

?>