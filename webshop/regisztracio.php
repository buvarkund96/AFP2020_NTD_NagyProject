<?php
session_start();
include('kapcsolat.php');

$email		= $_REQUEST['femail'];
$jelszo		= $_REQUEST['fjelszo'];
$nev		= $_REQUEST['fnev'];
$cim		= $_REQUEST['flakcim'];

$emailCheck = $conn->query( "SELECT * FROM felhasznalok WHERE femail = '{$cim}' ");
$felhasznaloCheck = $conn->query("SELECT * FROM felhasznalok WHERE fnev = '{$nev}' ");

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

header("Location: bejelentkezes.php");   
?>