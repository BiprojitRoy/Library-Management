<html>
<body>
<?php
require 'connect.php';
$searched_item=$_GET["search"];
$query1="select distinct item.Name, category.Cat_Name, author.Author_Name,publisher.Publisher_Name, shelves.Shelf_id, item.Item_id, Available_copies,Total_copies, Price from item left join shelves on item.Shelf_id=shelves.Shelf_id left join categorized_in on item.Item_ID=categorized_in.Item_ID left join category on categorized_in.CAT_ID=category.ID left join authored_by on item.Item_ID=authored_by.Author_ID left join author on authored_by.Author_ID=author.Author_ID left join publisher on item.Publisher_id=publisher.Publisher_ID where (item.Name=$searched_item)";
if($is_query_run=mysql_query($query1)){
	while($query_exq=mysql_fetch_assoc($is_query_run)){
		echo'<table border="1" style="width:300px"><tr><td>'.$query_exq['Name'].'</td><td>'.$query_exq['ID'].'</td></tr> </table>' ;
		//echo $query_exq['Name'].'<br>';
	}
	
}
?>

</body>


</html>