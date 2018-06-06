<?php require('header.php'); ?>


<?php 
$kadi="";
$sifre="";

?>




<html>
<body>

<form action="login.php" method="get">
Kullanıcı Adı: <input type="text" name="kadi"><br>
Parola: <input type="password" name="sifre"><br>
<input type="submit">
</form>

</body>
</html>














<p>Sql Injection (SQL Enjeksiyonu) web uygulamalarinda ucuncu kisi tarafindan gorulmesi istenmeyen veya kullanici girisi ardina gizlenen
verilerin istenmeyen sekilde elde edilmesidir. Yontem olarak ise kullanicinin veri girdigi yerlerde (Or:textbox) bir meta-karakter kullanilmasidir.
SQL icin " ' " (tek tirnak) onemli bir meta-karakterdir. Kullanicinin doldurdugu ve SQL sorgusu icine gomulen texboxlarda meta-karakter kullanimi SQL
Injection'a sebebiyet verir.</p>



<?php require('footer.php'); ?>