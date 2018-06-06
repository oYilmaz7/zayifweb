<?php require('header.php'); ?>


<?php require('popupheader.php'); ?>

<p align="right"><button id="myBtn">Yardım</button></p>
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p><?php require('sqlaciklama.php'); ?></p>
  </div>

</div>
<?php require('popupfooter.php'); ?>


<h1>SQL Injection</h1>


<center>
Sömürü için: ' OR ''='  SQL Injection Sömürü URL'si: http://localhost/login.php?kadi=' OR ''='&sifre=' OR ''='
</center>
<form action="login.php" method="GET">
<table align="center">
<tr>
<td>Kullanıcı Adı</td>
<td>:</td>
<td><input type="text" name="kadi"></td>
</tr>
<tr>
<td>Şifre</td>
<td>:</td>
<td><input type="password" name="sifre"></td>
</tr>
<tr>
<td></td>
<td></td>
<td><input type="submit" value="Giriş"></td>
</tr>
</table>
</form>





<?php require('footer.php'); ?>