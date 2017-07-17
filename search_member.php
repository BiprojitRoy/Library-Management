<?php
require 'connect.php';
$mid=$_GET['m_id'];
$a1="Name";
$a2="ID";
$a3="Address";
$a4="Phone";
$a5="Email";
$a6="Fines";
$a7="Activity_id";
$query="Select * from member where ID='$mid'";
if($is_query_run=mysql_query($query)){
	while($query_exq=mysql_fetch_assoc($is_query_run)){
	     
		//echo'<table border="1" style="width:300px"><tr><td>'.$query_exq[Name].'</td></tr> </table>' ;
		echo "<table border='1' style='width:300px'>
		<tr>
		<td style='width:5000px;height:40px'>".$a1."</td>
		<td style='width:5000px;height:40px'>".$a2."</td>
		<td style='width:5000px;height:40px'>".$a3."</td>
		<td style='width:5000px;height:40px'>".$a4."</td>
		<td style='width:5000px;height:40px'>".$a5."</td>
		<td style='width:5000px;height:40px'>".$a6."</td>
		<td style='width:5000px;height:40px'>".$a7."</td>
		</tr>
		<tr>
		<td style='width:5000px;height:40px'>".$query_exq['Name']."</td>
		<td style='width:5000px;height:40px'>".$query_exq['ID']."</td>
		<td style='width:5000px;height:40px'>".$query_exq['Address']."</td>
		<td style='width:5000px;height:40px'>".$query_exq['Phone']."</td>
		<td style='width:5000px;height:40px'>".$query_exq['Email']."</td>
		<td style='width:5000px;height:40px'>".$query_exq['Fines']."</td>
		<td style='width:5000px;height:40px'>".$query_exq['Activity_id']."</td>
		</tr>
		</table>";
		//echo $query_exq['Name'].'<br>';
	}
	
}

?>