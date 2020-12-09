<?php
if(!isset($_SESSION)){
    session_start();
  }
include_once ("kapcsolat.php");
echo $fjelszo = $_REQUEST["fjelszo"];
echo $femail = $_REQUEST["femail"];
echo $flakcim = $_REQUEST["flakcim"];
echo $fid = $_REQUEST["fid"];

echo $sql= "UPDATE `felhasznalok` SET `fjelszo`='$fjelszo',`femail`='$femail',`flakcim`='$flakcim' WHERE `fid`='$fid'";
$result = $conn->query($sql);
echo "Sikeres";
echo "A teszt sikeresen elvégezve, a profil frissítése sikeres."
?>