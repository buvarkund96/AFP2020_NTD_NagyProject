<?php
include_once "kapcsolat.php";
if(!isset($_SESSION)){
  session_start();
}
echo $tid=$_REQUEST['id'];
echo $mennyiseg=$_REQUEST['mennyiseg'];
echo $fid=$_SESSION['fid'];

echo $sql= "INSERT INTO `kosar`(`fid`, `tid`, `mennyiseg`,`kfizetve`) VALUES ('$fid','$tid','$mennyiseg','0')";
if ($conn->query($sql) === TRUE) {
    echo "Sikeresen hozzáadva a kosrához! ";
    echo "A teszt sikeresen elvégezve, a kosárba sikeresen behelyezi a termékeket.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo "A teszt sikertelen. A terméket nem lehetett kosárba tenni.";
}
?>