<html>
<?php require('header.php'); ?>





<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ziyaretçi Defteri - Mesaj Yaz
</title>

<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>


</head>




<body>






<p align="right"><button id="myBtn">Yardım</button></p>
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p><?php require('xssaciklama.php'); ?></p>
  </div>

</div>
<?php require('popupfooter.php'); ?>


<h1>Siteler Arasi Betik Calistirma - XSS</h1>




<form name="frm_msj_kaydet" method="GET" action="msave.php">
<table width="298" height="193" border="1">
<tr>
<td colspan="2" align="center">
<b>Ziyaretçi Defteri - Mesaj Yaz
</b>
</td>
</tr>
<tr>
<td> İsim:
</td>
<td>
<input type="text" name="f_ad" />
</td>
</tr>

<tr>
<td>Mesaj
</td>
<td>
<textarea name="f_mesaj">
</textarea>
</td>
</tr>
<tr>
<td colspan="2">
<input type="submit" name="button" value="Kaydet" />
</td>
</tr>
</table>
</form>





<br><br><br>
XSS Açığı Örnekleri: <textarea rows="2" cols="50">
<s cript>alert("XSS Açığı Örneği")</script>

 <IMG src= "resimurl">
 https://image.flaticon.com/teams/new/1-freepik.jpg
</textarea>
<br><br><br>

XSS Sömürü URL'si:  http://localhost/msave.php?f_ad=""&f_mesaj=""
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<?php

include("sqlconnect.php");

$sql    = "  SELECT * FROM ziyaretcidefteri "; 
$result = mysql_query( $sql );

echo "<table border=1>";
echo "<tr>";    
echo "<td><b>İsim</b></td>";
echo "<td><b>Mesaj</b></td>";
echo "<td><b>Zaman</b></td>";
echo "</tr>";    
while( $row = mysql_fetch_array($result) ) { 
echo "<tr>";    
echo "<td>".$row["isim"]."</td>";
echo "<td>".$row["mesaj"]."</td>";
echo "<td>".$row["tarih"]."</td>";
echo "</tr>";    
}  
echo "</table>";



?>
<?php require('footer.php'); ?>
</body>
</html>