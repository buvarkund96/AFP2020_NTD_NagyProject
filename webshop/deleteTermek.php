<?php
include_once "kapcsolat.php";
if(!isset($_SESSION)){
  session_start();
}
$tid=$_REQUEST['tid'];



$sql= "DELETE FROM `termekek`WHERE tid='$tid'";
if ($conn->query($sql) === TRUE) {
    echo "Sikeres törlés";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("Location:termekek.php");
?>