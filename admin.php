

<?php 
session_start();
require 'connect.php';
$email=$_GET["email"];
$pass=$_GET["Password"];
//echo $email;
//echo $pass;
$sql="select * from employee where email='$email' and Password='$pass'";
$resultset = mysql_query($sql);
    $row = mysql_fetch_array($resultset);

    if(!$row)
    {
        header('location: a_login.php');
    }
    else
    {
        $_SESSION['email'] = $email;
        header('location: admin_ex.php');
    }
?>