<link rel="stylesheet" href="css/nav_bar.css" type="text/css">
<div class="cim">
    <h1 class="cimSor"><a href="index.php"> AFP_NTD Webshop </a><h1>
</div>
<div class="topnav">
<a href="index.php" style="border-left:2px solid black">---</a>
<a href="termekek.php">Termékek</a>
<a href="impresszum.php">Impresszum</a>
<a href="contact.php">Kapcsolat</a>
<a href="bejelentkezes.php">Bejelentkezés - Regisztráció</a>
<?php if ($_SESSION['fid'] != null) {
    echo '<a href="profil.php">Profilom</a>';
}?>
</div>