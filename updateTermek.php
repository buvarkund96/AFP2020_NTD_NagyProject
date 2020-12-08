<?php
if(!isset($_SESSION)){
    session_start();
  }
include_once ("kapcsolat.php");
$tnev = $_REQUEST["tnev"];
$tar = $_REQUEST["tar"];
$tleiras = $_REQUEST["tleiras"];
$tid = $_REQUEST["id"];
$sql= "UPDATE `termekek` SET `tnev`='$tnev',`tleiras`='$tleiras',`tar`='$tar' WHERE tid=$tid";
$result = $conn->query($sql);



echo $tid;
echo $tnev;
echo $tar;
echo $tleiras;
header("location:termekek.php");
?>