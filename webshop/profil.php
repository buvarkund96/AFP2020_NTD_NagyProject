<?php
if(!isset($_SESSION)){
    session_start();
}  
include 'kapcsolat.php';
include_once 'top_nav.php';
echo '<link rel="stylesheet" href="css/profil.css" type="text/css">';
echo "<div class='profil'>";
$fid=$_SESSION['fid'];
$sql= "SELECT * FROM felhasznalok where fid ='$fid'";
$felhasznalo = $conn->query($sql);

if ($felhasznalo != null) {
    while($row = $felhasznalo->fetch_assoc()) {
    echo '<form action="updateProfil.php">';
      echo "Jelszó:<br><input type='text' name='fjelszo' value='".$row['fjelszo']."'><br>";
      echo "Email cím:<br><input type='email' name='femail' value='".$row["femail"]."'><br>";
      echo "Lakcím:<br><input class='lakcim' type='text' name='flakcim' value='".$row["flakcim"]."'><br>";
      echo '<button onclick="felhasznaloAlert()" type="submit" name="fid" value="'.$row["fid"].'"> Frissítés </button>';
      echo '<script type="text/javascript" src="JS/scripts.js"></script>';
    echo '</form>';
    }
}
echo "Előző megrendelések: <br>";
// kosar
$rendeles="SELECT kosar.fid,kosar.tid,kosar.mennyiseg,kosar.kfizetve from kosar, termekek WHERE kosar.fid = '$fid' GROUP by kosar.kid";
$kosar=$conn->query($rendeles);

if($kosar != null){
    while($row = $kosar->fetch_assoc()) {
        echo "<div class='rendeles'>";
        echo "Termék cikkszáma:".$row["tid"]."<br>";
        echo "Termék mennyisége:".$row["mennyiseg"]."<br>";
        echo "Termék állapot:".$row["kfizetve"]."<br>";
        echo "</div>";
    }
} else{
    echo "hiba";
}

?>
<footer>
    Termék állapotok: <br>
    0 - Megrendelve
    1 - Kifizetve
    2 - Csomagolás alatt
    3 - Kiszállítás alatt
    4 - Kész 
</footer>
</div>