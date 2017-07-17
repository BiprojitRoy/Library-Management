<html>
<body>
<p align="right"><font size="3"><a href="logout.php">logout</a></font></p>
<?php
session_start();
$email=$_SESSION["Email"];
$query="select item.Name,item.ID,hold.Return_date from member join item on member.Item_id=item.ID join hold on member.ID=hold.Member_id";
if($is_query_run=mysql_query($query)){
	while($query_exq=mysql_fetch_assoc($is_query_run)){
		echo'<table border="1" style="width:300px"><tr><td>'.$query_exq['Name'].'</td><td>'.$query_exq['ID'].'</td><td>'.$query_exq['Return_date'].'</td></tr> </table>' ;
		//echo $query_exq['Name'].'<br>';
	}
	
}
?>
<form action="search.php" method="get">
<p align='center'>
Search Item: <input type="text" name="search"><br>
<input type="submit">
</p>
</form>
<p><font size="5"><a href="renew.php">Renew Current Item</a></font></p>
<p><font size="5"><a href="Show_all_books.php">View all Items</a></font></p>
<p><font size="5"><a href="show_all.php">View items by category</a></font></p>
<p><font size="5"><a href="show_all.php">Request for a Item</a></font></p>
<p><font size="5"><a href="#">Find Item</a></font></p>
<p><font size="5"><a href="my_information.php">Show My Info</a></font></p>

</body>
</html>