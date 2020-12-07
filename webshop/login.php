<?php
if(!isset($_SESSION)){
    session_start();
  }
include('kapcsolat.php');

    $fnev = $_REQUEST['fnev'];
    $fjelszo = $_REQUEST['fjelszo'];
    $sql="SELECT fid FROM felhasznalok WHERE fnev='$fnev' && fjelszo='$fjelszo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
         while($row = $result->fetch_assoc()) {
         echo $row["fid"];
         $_SESSION['fid'] = $row["fid"];
         echo $_SESSION['fid'];
         header("Location: index.php");
        }
      } else {
        echo "Hibás felhasználónév vagy jelszó";
        header("Location: bejelentkezes.php");
      }

?>