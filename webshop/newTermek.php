<?php
include_once "kapcsolat.php";
if(!isset($_SESSION)){
  session_start();
}
$tnev=$_REQUEST['tnev'];
$tar=$_REQUEST['tar'];
$tleiras=$_REQUEST['tleiras'];

echo $tnev;
echo $tar;
echo $tleiras;

$sql= "INSERT INTO `termekek`(`tnev`, `tleiras`, `tar`) VALUES ('$tnev','$tar','$tleiras')";
if ($conn->query($sql) === TRUE) {
    echo "Sikeres feltöltés";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("Location:termekek.php");
?>