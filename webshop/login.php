<?php
session_start();
include('kapcsolat.php');

$nev			= $_REQUEST['fnev'];
$jelszo			= $_REQUEST['fjelszo'];
//$jelszo			= md5($jelszo);


$sql = "SELECT fid FROM felhasznalok WHERE fnev = '$nev' AND fjelszo = '$jelszo'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$active = $row['active'];
$count = mysqli_num_rows($result);
		
if($count == 1){
    $_SESSION['SESS_FID'] = $nev;	
}
else{
	$error = "Your Login Name or Password is invalid";
}

header("Location: bejelentkezes.php");
?>