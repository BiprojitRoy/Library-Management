
<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='root';

@mysql_connect($mysql_host,$mysql_user,$mysql_password) or die('can not connect');
@mysql_select_db('library_final');
echo "Welcome to Library.<br>";

?>