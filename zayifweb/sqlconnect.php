<?php
$host="localhost";
$db="zayifweb";
$user="root";
$pass="";
$conn=@mysql_connect($host,$user,$pass) or die("Mysql Baglanamadi");

mysql_select_db($db,$conn) or die("Veritabanina Baglanilamadi");

?>