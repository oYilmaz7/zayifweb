<?php
ob_start();
// vt ba�lant�s�n� kuruyoruz.
include("sqlconnect.php");
// VT kay�t ekliyoruz.
$sql = "insert into ziyaretcidefteri values ('".$_GET["f_ad"]."','".$_GET["f_mesaj"]."',NOW())";


if ( mysql_query( $sql ) ){
echo "<br>Mesaj�n�z kaydedildi.<br>";
header("Location: xss.php");
} else {
echo "<br>Hata olu�tu!";
}
ob_end_flush();
?>