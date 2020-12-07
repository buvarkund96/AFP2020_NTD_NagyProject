<?php
session_start();
include('kapcsolat.php');

$email		= $_REQUEST['femail'];
$jelszo		= $_REQUEST['fjelszo'];
$nev		= $_REQUEST['fnev'];
$cim		= $_REQUEST['flakcim'];

$emailCheck = $conn->query( "SELECT * FROM felhasznalok WHERE femail = '{$cim}' ");
$felhasznaloCheck = $conn->query("SELECT * FROM felhasznalok WHERE fnev = '{$nev}' ");

if(!empty($nev) && !empty($jelszo) && !empty($cim) && !empty($email)){
	if($emailCheck->num_rows > 0) {
        echo ="Már létező email cím!";                
    } else {
		if($felhasznaloCheck->num_rows > 0){
			echo ="Már létező felhasználónév!";
		}
		else{
			$sql ="INSERT INTO felhasznalok (fnev, fjelszo, femail, flakcim) 
				VALUES ('{$nev}', '{$jelszo}', '{$email}', '{$cim}')";
			$result = $conn->query($sql);
        }
        if(!$sql){
            die("MySQL query failed!" . mysqli_error($conn));
        } else {
            echo = "Sikeres regisztráció!";				
        }
	}
}
else {
    if(empty($nev)){
		echo "Üres felhasználónév mező!";
    }
    if(empty($jelszo)){
        echo "Üres jelszó mező!";
    }
    if(empty($email)){
        echo "Üres email cím mező!";
    }
    if(empty($cim)){
        echo "Üres lakcím mező!";
    } 
}
header("Location: bejelentkezes.php");   
?>