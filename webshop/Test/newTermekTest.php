<?php
include_once "kapcsolat.php";
if(!isset($_SESSION)){
  session_start();
}
echo $tnev=$_REQUEST['tnev'];
echo $tar=$_REQUEST['tar'];
echo $tleiras=$_REQUEST['tleiras'];

echo $tnev;
echo $tar;
echo $tleiras;

$sql= "INSERT INTO `termekek`(`tnev`, `tar`,`tleiras`) VALUES ('$tnev','$tar','$tleiras')";
if ($conn->query($sql) === TRUE) {
    echo "Sikeres feltöltés";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
echo "A teszt sikeresen lefutott, új termék sikeresen feltöltve.";
?>