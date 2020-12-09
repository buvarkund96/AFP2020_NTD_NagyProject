<?php
include_once "kapcsolat.php";
if(!isset($_SESSION)){
  session_start();
}
echo $tid=$_REQUEST['tid'];

echo $sql= "DELETE FROM `termekek`WHERE tid='$tid'";
if ($conn->query($sql) === TRUE) {
    echo "Sikeres törlés";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
echo "A teszt sikeresen elvégezve, a termék törlése sikeres.";
?>