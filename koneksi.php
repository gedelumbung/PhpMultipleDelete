<?
$host="localhost";
$user="root";
$pass="";
$db="data_multiple";

mysql_connect($host,$user,$pass) or die (mysql_error());
mysql_select_db($db);
?>