<!DOCTYPE html>

<html>

<head>
<style>
body {
    background-color: #d9d9d9;
}
</style>
<style>
<!– body {background-image: url("img/back.png");}–>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</style>
<center>
<img src="img/banner.png" alt="banner">
</center>
<style>


ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #f3f3f3;
	
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: #666;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #f9f9f9;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>

<ul>
  <li><a href="index.php">Anasayfa</a></li>
  <li><a href="kurulum.php">Kurulum</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Zaafiyetler</a>
    <div class="dropdown-content">
      <a href="sqlin.php">SQL Enjeksiyonu </a>
      <a href="xss.php">Siteler Arasi Betik Calistirma - XSS</a>
      <a href="comin.php">Komut Enjeksiyonu </a>
    </div>
  </li>
</ul>


</body>
</html>
