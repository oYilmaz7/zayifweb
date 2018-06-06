<?php require('header.php'); ?>





<?php
// define variables and set to empty values
$name =$dosyaadi="";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $name = test_input($_GET["name"]);
  $dosyaadi = test_input($_GET["dosyaadi"]);
  $pingadresi = test_input($_GET["pingadresi"]);
  
  
  
}

function test_input($data) {
  
  return $data;
}
?>

<?php require('popupheader.php'); ?>

<p align="right"><button id="myBtn">Yardım</button></p>
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p><?php require('cominaciklama.php'); ?></p>
  </div>

</div>
<?php require('popupfooter.php'); ?>


<h1>Komut Enjeksiyonu</h1>










Dosya Kaydetme için Sömürü URL:http://localhost/comin.php?name=""&dosyaadi=""|dir
<br><br>

<form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Yazı: <input type="text" name="name">
  
  <br><br>
  Hedef Dosya İsmi: <input type="text" name="dosyaadi">
<br><br>

  
  <input type="submit" name="submit" value="Kaydet">  
</form>
<br><br>




<br><br>
Ping Adresi için Sömürü URL: http://localhost/comin.php?pingadresi=localhost|dir
<br><br>

<form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

  Ping Gönder: <input type="text" name="pingadresi">
  
  <input type="submit" name="submit" value="Gönder">  
</form>







<?php
exec("echo ".$name.">>".$dosyaadi."",$sonuc);

exec("ping ".$pingadresi." ",$sonuc2);
print_r($sonuc2);

print_r($sonuc);



?>
<pre>





<?php require('footer.php'); ?>