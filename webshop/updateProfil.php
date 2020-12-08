<?php
if(!isset($_SESSION)){
    session_start();
  }
include_once ("../kapcsolat.php");
$fjelszo = $_REQUEST["fjelszo"];
$femail = $_REQUEST["femail"];
$flakcim = $_REQUEST["flakcim"];
$fid = $_REQUEST["fid"];

$sql= "UPDATE `felhasznalok` SET `fjelszo`='$fjelszo',`femail`='$femail',`flakcim`='$flakcim' WHERE `fid`='$fid'";
$result = $conn->query($sql);
echo "Sikeres";
header("location:../profil.php")

?>