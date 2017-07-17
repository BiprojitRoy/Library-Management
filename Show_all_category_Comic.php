<?php
require 'connect.php';
$query1="select * from item";
$query="select item.Name from item left join categorized_in on item.Item_id=categorized_in.Item_ID left join on category categorized_in.Cat_ID=category.ID where (category.Name=Comic)";
if($is_query_run=mysql_query($query)){
	while($query_exq=mysql_fetch_assoc($is_query_run)){
	     
		//echo'<table border="1" style="width:300px"><tr><td>'.$query_exq[item.Name].'</td</tr> </table>' ;
		echo "<table border='1' style='width:300px'>
		<tr>
		<td style='width:5000px;height:40px'>".$query_exq['item.Name']."</td>
				</tr>
		</table>";
		//echo $query_exq['Name'].'<br></br>';
	}
	
}

?>