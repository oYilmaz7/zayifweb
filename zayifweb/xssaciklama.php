<!DOCTYPE html>
<html>

<body>


<h1>Siteler Arasi Betik Calistirma - XSS</h1>
<p>
1.2 Ornek olarak uygulamamizin XSS sayfasinda bir ziyaretci defteri uzerinden kulanicidan isim ve mesaj alinip veritabanina kaydedildikten sonra ekrana yazdirilmaktadir. Bir kullanici
mesaj kismina zararli bir javascript kodu 

<p>
1.1 XSS zaafiyeti kullanici tarafindan sayfaya birakilan yazilarla calismaktadir. Genelde javascript kodlariyla kullanilir. Tarayicida saklanan verilere ulasma amacina cok yatkindir.
</p>
yazip da kaydeder ise bu kod veri tabanina yazilip sayfa her acildiginda ekrana basilir. Yani yorumu birakan kullanici sayfaya istedigi
kod blogunu gomebilir.
</p>
1.3 Mesela ziyaretci defteri bolumunu asagidaki gibi doldurdugumuzda sayfaya giren her kullanici ayni bildirimle karsilacaktir.
<img src="img/xssyaz.png">
<br>
<img src="img/xssbildirim.png">

<p>
1.4 Bu zaafiyete sebep olan acik ise su kod bloklarindan gelmektedir:
</p>
<img src="img/xsskod.png">
<br>
<img src="img/xsskod2.png">
<p>
1.5 Burada uygulama kullanicidan aldigi yaziyi oldugu gibi veritabanina kaydedip bir kontrol mekanizmasindan gecirmeden ekrana yazdirmaktadir.
</p>
<p>
1.6 Ayni islemi adres cubuguna http://localhost/msave.php?f_ad=xssdenemesi&f_mesaj=< script>alert("XSS Acigi Ornegi")</ script> ifadesini script tagleri arasindaki bosluklari
kaldirip yazarak da yapabiliriz.
</p>
<h1>Cozumu</h1>



2.1 Kullanici tarafindan doldurulan textbox'lar kontrol edilip riskli durumlarda mesaji kaydetmeyip hata ekrani cikartilabilir. Ornegin yasakli kelime olarak < script> kelimesini
eklemek.
<p>
2.2 Yasakli kelime listesi eklemek cogu zaman bu acigi kapatamayabilir. Bazi filtrelerle yasakli kelime listesi asilabilir. Veya her komutu yasakli kelime listesine eklemek
mantikli olmayabilir. Bu yuzden whitelist kullanmak bizi blacklistin bir adim onune tasir. Ornegin kullanici sadece harf, sayi ve nokta, virgul gibi bazi noktalama isaretlerini
kullanabilir olsun.
</p>
2.3 En mantikli yontem ise hem blacklist hem whitelist yontemini kullanip iceride baska bir kontrol mekanizmayla yine de kullanicidan riskli bir text geldiyse icerisiden <, >, ', "
gibi meta karakterleri arindirarak ekrana yazdirmaktir.
<p> <br>
</p>
<p> <br>
</p>
<p> <br>
</p>
</body>
</html>