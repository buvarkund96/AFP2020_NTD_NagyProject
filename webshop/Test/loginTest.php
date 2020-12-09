<?php
if(!isset($_SESSION)){
    session_start();
  }
include('kapcsolat.php');

	
    echo $fnev = $_REQUEST['fnev'];
    echo $fjelszo = $_REQUEST['fjelszo'];
    echo $sql="SELECT fid FROM felhasznalok WHERE fnev='$fnev' && fjelszo='$fjelszo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
         while($row = $result->fetch_assoc()) {
         echo $row["fid"];
         $_SESSION['fid'] = $row["fid"];
         echo $_SESSION['fid'];
         echo "A Teszt sikeresen lefutott, a bejelentkezés sikeres.";
        }
      } else {
        echo "Hibás felhasználónév vagy jelszó";
        echo "A teszt sikeresen lefutott, hibás felhasználónév vagy jelszó esetén.";
      }
?>