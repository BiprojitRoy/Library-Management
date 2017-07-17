<?php
require 'connect.php';
$query1="select * from category";
$query="select * from requested order by Requested_date";
if($is_query_run=mysql_query($query)){
	while($query_exq=mysql_fetch_assoc($is_query_run)){
	     
		//echo'<table border="1" style="width:300px"><tr><td>'.$query_exq[Activity_id].'</td><td>'.$query_exq[Requested_date].'</td></tr>.$query_exq[re_exp_date].'</td></tr>  </table>' ;
		echo "<table border='1' style='width:300px'>
		<tr>
		<td style='width:5000px;height:40px'>".$query_exq['Activity_id']."</td>
		<td style='width:1500px;height:40px'>".$query_exq['Requested_date']."</td>
		<td style='width:1500px;height:40px'>".$query_exq['req_exp_date']."</td>
		
		</tr>
		</table>";
		//echo $query_exq['Name'].'<br>';
	}
	
}

?>