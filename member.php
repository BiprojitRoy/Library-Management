<html>
<body>

<?php 
session_start();
require 'connect.php';


$email=$_GET["email"];
$pass=$_GET["Password"];

$query="select * from member where Email='$email' and Password='$pass'";
$resultset = mysql_query($query);
$row = mysql_fetch_array($resultset);
if(!$row)
    {
        header('location: m_login.php');
    }
else
    {
        $_SESSION['Email'] = $email;
		echo $_SESSION["Email"];
        header('location: member_ex.php');       
    }	

/*if($is_query_run=mysql_query($query)){
	while($query_exq=mysql_fetch_assoc($is_query_run)){
	$check=mysql_query($query);
	if(mysql_num_rows($check)<1){
	echo "invalid";}
	else{
		$mid=$query_exq['ID'];
		$iid=$query_exq['Item_id'];
		$query2="slect Name,Item_id from item where Item_id='$iid'";
		echo "<p align='center' style='color:red;'>"."<font size='100'>".$query_exq['Name']."</font>"."</p>";
		$check2=mysql_query($query2);
		if(mysql_num_rows($check2)>0){
		$user = mysql_fetch_array($check2);
		print_r($user);
		}
		}
	}
	}*/

?>

</body>
</html>