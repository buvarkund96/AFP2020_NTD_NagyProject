<?php
if(!isset($_SESSION)){
    session_start();
  }
include_once ("kapcsolat.php");
echo $tnev = $_REQUEST["tnev"];
echo $tar = $_REQUEST["tar"];
echo $tleiras = $_REQUEST["tleiras"];
echo $tid = $_REQUEST["id"];
echo $sql= "UPDATE `termekek` SET `tnev`='$tnev',`tleiras`='$tleiras',`tar`='$tar' WHERE tid=$tid";
$result = $conn->query($sql);



echo $tid;
echo $tnev;
echo $tar;
echo $tleiras;

echo "A teszt sikeresen lefutott, a termk update sikeres.";
?>