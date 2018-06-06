<?php
ob_start();
// vt baðlantýsýný kuruyoruz.
include("sqlconnect.php");
// VT kayýt ekliyoruz.
$sql = "insert into ziyaretcidefteri values ('".$_GET["f_ad"]."','".$_GET["f_mesaj"]."',NOW())";


if ( mysql_query( $sql ) ){
echo "<br>Mesajýnýz kaydedildi.<br>";
header("Location: xss.php");
} else {
echo "<br>Hata oluþtu!";
}
ob_end_flush();
?>