<?php
require 'connect.php';
$iname=$_GET["name"];
$itemID=$_GET["iid"];
$pid=$_GET["pid"];
$tc=$_GET["tcop"];
$ac=$_GET["acop"];
$tid=$_GET["tid"];
$sid=$_GET["sid"];
$avl=$_GET["av"];
$prc=$_GET["price"];
$req=$_GET["rq"];
$hd=$_GET["hd"];

echo $iname;

$query_insert=" insert into item values('$iname','$itemID','$pid','$sid','$prc','$tid','$ac','$tc','$hd','$req' ";
$result=mysql_query($query_insert);
if(!$result){
	die("error occured");
}

?>