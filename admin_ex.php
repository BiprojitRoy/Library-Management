<html>
<body>
<?php
session_start();
require 'connect.php';

?>
<form action="search.php" method="get">
<p align='center'>
Search Item: <input type="text" name="search">
<input type="submit">
</p>
</form>
<form action="search_member.php" method="get">
<p align='center'>
Search Member: <input type="Number" name="m_id">
<input type="submit">
</p>
</form>
</form>
<form action="search_member2.php" method="get">
<p align='center'>
Search Member: <input type="Number" name="iid">
<input type="submit">
</p>
</form>
<p><font size="5"><a href="mem_with_fine.php">Show Members With Fines</a></font></p>
<p><font size="5"><a href="show_taken_item.php">Show taken Items</a></font></p>
<p><font size="5"><a href="mhbwhnac.php">Members having 0 available item</a></font></p>
<p><font size="5"><a href="all_books.php">All Items</a></font></p>


</body>
</html>
