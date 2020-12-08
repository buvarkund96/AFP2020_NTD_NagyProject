<?php
include_once("../kapcsolat.php");
if(!isset($_SESSION)){
  session_start();
}
echo $tid=$_REQUEST['id'];
echo $mennyiseg=$_REQUEST['mennyiseg'];
echo $fid=$_SESSION['fid'];

$sql= "INSERT INTO `kosar`(`fid`, `tid`, `mennyiseg`,`kfizetve`) VALUES ('$fid','$tid','$mennyiseg','0')";
if ($conn->query($sql) === TRUE) {
    echo "Sikeresen hozzáadva a kosrához! ";
    header("location:../termekek.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>