<?php
require 'connect.php';

$query="select item.Name, category.Cat_Name, author.Author_Name,publisher.Publisher_Name, shelves.Shelf_id, item.Item_id, Available_copies,Total_copies, Price, shelves.st_range, shelves.end_range from item left join shelves on item.Shelf_id=shelves.Shelf_id left join categorized_in on item.Item_ID=categorized_in.Item_ID left join category on categorized_in.CAT_ID=category.ID left join authored_by on item.Item_ID=authored_by.Author_ID left join author on authored_by.Author_ID=author.Author_ID left join publisher on item.Publisher_id=publisher.Publisher_ID";



if($is_query_run=mysql_query($query)){
	while($query_exq=mysql_fetch_assoc($is_query_run)){
	     
		//echo'<table border="1" style="width:300px"><tr><td>'.$query_exq[Name].'</td><td>'.$query_exq[Item_id].'</td><td>'.$query_exq[author_name].'</td></tr> </table>' ;
		echo "<table border='1' style='width:300px'>
		<tr>
		<td style='width:5000px;height:40px'>".$query_exq['Name']."</td>
		<td style='width:5000px;height:40px'>".$query_exq['Shelf_id']."</td>
		</tr>
		</table>";
		//echo $query_exq['Name'].'<br>';
	}
	
}

?>