<!DOCTYPE html>
<html>

<body>


<h1>Komut Enjeksiyonu</h1>
<p>1.1 Komut Enjeksiyonu, saldirganin dogrudan sunucu makineye ulasip istedigi her veriye sahip olup sunucu makineyi istedigi gibi kullanmasina sebep olabilecek bir aciktir.
</p>
<p>
1.2 Uygulamamizin Komut Enjeksiyonu sayfasina bu acigi test edebilmek icin bir ping gonderme araci ekledik. Bu arac kullanicidan aldigi domain veya IP adresine ping gonderip
sonucu ekrana yazdirmakta.
</p>
<img src="img/pingnormal.png">
<p>
1.3 Bakalim biz IP adresi yazacagimiz kisma zararli bir komut eklemeye calisirsak ne olacak?
</p>
<img src="img/pingxss.png">
<p>
1.4 Yazdigimiz domainin yanina pipe (|) isareti ekleyip DOS'ta bulundugumuz yerdeki dosya ve klasorleri gosteren "dir" komutunu yazdik ve komutun calistigini gorduk. 
</p>
<p>
1.5 Uygulamada bu zaafiyetin ortaya cikmasini saglayan kod blogu bu sekildedir:
</p>
<img src="img/pingkod.png">
<p>
1.6 Burada exec fonksiyonu sunucu tarafinda DOS'ta calistirilacak bir komut calistirir. Burada exec fonksiyonuna gidecek komutun tutuldugu ifadenin bir kismi kullanici tarafindan
girilecek veriyle doldurulur. Ve kullanici ping gonderilecek adresin tutuldugu textbox'i "google.com|dir" seklinde doldurursa bu exec komutunda "ping google.com|dir" komutunun
calisacagi anlamina gelir. Ve bu sekilde bir kullanici sunucu makinesini istedigi sekilde kullanabilir.
</p>
<p>
1.7 Ayni islemi adres cubuguna http://localhost/comin.php?pingadresi=google.com|dir url'ini yazarak da yapabilirsiniz.
</p>

<h1>Cozumu</h1>
<p>
2.1 Burada da akla ilk gelen cozum blacklist'e DOS komutlarini ve meta-karakterleri eklemektir. Cesitli DOS komutlarini blacklist'e ekleyerek kullanicinin yazdigi zararli 
cumlelerin hic birini sisteminize bulastirmadan yolunuza devam edebilirsiniz.
</p>
2.2 Ikinci yontem ise yine whitelist olusturup kullaniciya bir ID veya domain girmeye yetecek kadar izin vermektir.
<p>
2.3 Ucuncu yontem olarak ise ilk iki yontemi de kullandiktan sonra kullanici tarafindan yazilan ping gonderilecek adresin gercekten bir IP adresi veya domain olup olmadigini kontrol
ettikten sonra isleme sokmaktir.
</p>
<p>
</p>
<p>
</p>
<p>
</p>
<p> <br>
</p>
<p> <br>
</p>
<p> <br>
</p>






</body>
</html>