

<?php


$host="localhost";
$username="root";
$password="sour78bin";
$db_name="pass";
$tbl_name="login";


$conn = mysql_connect ("$host", "$username", "$password", "$db_name") or die ("cannot connect");
$db=mysql_select_db($db_name,$conn) or ("die");





$myusername=$_POST ['user'];
$mypassword=$_POST ['pwd'];


$myusername = stripslashes($myusername);
$mypassword= stripslashes($mypassword);


$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);


$sql="select * from $tbl_name where passwd='$mypassword' AND name ='$myusername'";

$result=mysql_query($sql, $conn);
$count=mysql_num_rows($result);

if ($count == 1)
{
 echo "login was succesfull";
}
else
{
echo "sorry, login failed";
}


?>














