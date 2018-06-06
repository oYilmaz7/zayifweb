<!DOCTYPE html>
<html>

<body>


<h1>SQL Injection</h1>

<p>1.1 Sql Injection (SQL Enjeksiyonu) web uygulamalarinda ucuncu kisi tarafindan gorulmesi istenmeyen veya kullanici girisi ardina gizlenen
verilerin istenmeyen sekilde elde edilmesidir. Yontem olarak ise kullanicinin veri girdigi yerlerde (Or:textbox) bir meta-karakter kullanilmasidir.
SQL icin " ' " (tek tirnak) onemli bir meta-karakterdir. Kullanicinin doldurdugu ve SQL sorgusu icine gomulen texboxlarda meta-karakter kullanimi SQL
Injection'a sebebiyet verir.</p>
<p>
1.2 Ornek olarak uygulamamizin SQL Enjeksiyonu sayfasinda kullanici girisi yapilirken bir kullanici adi ve bir parola istenmektedir. Sayfaya giris yapabilecek 
kullanici adi ve parolalari da bir veritabaninda saklanmaktadir. kullanicinin textbox'a yazdigi kullanici adi ve parolanin veritabaninda bulunup bulunmadigi 
asagidaki kodla kontrol edilmektedir:
</p>
<img src="img/kodss.png">

<p>
1.3 Buradaki "kadi" ve "sifre" veritabanindan kontrol edilmektedir. Simdi kullanici girisi yaparken " ' OR ''=' " ifadesini kullanici adi ve sifre kismina
 yazalim:
</p>

<img src="img/sqlinss.png">
<p>1.4 Bu islemi yaptiktan sonra ise uygulamanin arkaplaninda kadi ve sifre degiskenlerine " ' OR ''=' " ifadesini atamis olduk. Boylece uygulamamizin yaptigi
sorgu su sekli aldi:
</p>
<img src="img/yogss.png">

<p>
1.5 Sonuclarda da gordugumuz gibi sorgumuz dogru calisti ve bu yuzden sisteme giris yapabildik. Cunku yazdigimiz ifade aslinda sorguya ''=''
degerini yedirmis oldu. Yani aslinda uygulamamiz null=null sorgusu yapti. Bu sorgu da her zaman dogru calisacagi icin SQL Injection zaafiyetini kullanarak
uygulamamiza somuru yapmis olduk.
</p>
<p>
1.6 Ayni islemi adres cubuguna " http://localhost/login.php?kadi=' OR ''='&sifre=' OR ''=' " url'ini yazarak da yapabiliriz.
</p>
<h1>Cozumu</h1>
<p>
2.1 Ilk cozum yolumuz girilen veriyi kontrol etmek. Kullanici adi veya parola icerisinde zararli karakterler varsa (Or: ',/,\) bu text'i kabul etmemek.
Kullanicidan tekrar veri girilmesi istenebilir veya zararli karakterler gormezden gelinebilir. Bu yontemle SQL Injection'in onune gecebiliriz ancak
uygulamamizi da kisitlamis oluruz. Buna ragmen bu yontem cok kullanilan yontemler arasindadir.
</p>




<p>
2.2 Prepare yontemi kullanarak ilk yontemden daha kuvvetli bir sekilde SQL Injection engellemesi yapilabilir. Bu yontemde ise sorgularimizi parametrelerle
baglayarak calistiriyoruz. Birden fazla parametre alan sorgular icin cok uygun bir yontemdir.
</p>
Kaynak: http://www.zskblog.com/detay.aspx?id=22 <br>
<img src="img/param.png">



<p>
2.3 Bir diger yontem ise kullanici yetkilerini kisitlamaktir. Bu yontemde yapilacak en mantikli sey kullaniciya sadece SELECT yetkilerinin verilmesidir.
Yetkiler bu sekilde kisitlandirilirsa olasi bir saldiri durumunda uygulama iceriginiz zarar gormez veya degistirilemez. Ancak verileriniz erisilebilir
durumda kalacaktir. Bu yuzden sizin uygulamaniz icin bu yontem mantikli olmayabilir.
</p>
<p>
2.4 En guzel yontem, kendi uygulamanizin kusursuz olduguna asla inanmamanizdir. Kendi uygulamanizi her tehlikeye karsi test etmeli ve yeniliklere acik
olmalisiniz. Uygulama altyapisi el veriyor ise cesitli encrypt algoritmalarindan faydalanilmalidir.
</p>
<p> <br>
</p>
<p> <br>
</p>
<p> <br>
</p>
</body>
</html>