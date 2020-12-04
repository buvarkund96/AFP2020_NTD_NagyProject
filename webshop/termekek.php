<?php
include_once 'top_nav.php';
include 'kapcsolat.php';
if(!isset($_SESSION)){
  session_start();
}
echo '<link rel="stylesheet" href="css/termekek.css" type="text/css">';
echo '<div class="page">';
$sql= "SELECT * FROM termekek";
$result = $conn->query($sql);
//----------------------------------------------------------------------------------------------------
$sid ='4';

//----------------------------------------------------------------------------------------------------


if($sid ==''){
  if ($result->num_rows > 0) {
    // output data of each row
     while($row = $result->fetch_assoc()) {
      $kep=$row["kep"].".jpg";

      echo '<div class="page termekek">';
      echo "<form method='post' action='termLap.php'>";
      echo "<button type='submit' name='id' value='".$row["tid"]."'><img src='img/$kep'></button>";
      echo "<p name='id'>cikkszám: " .$row["tid"];
      echo "| Terméknév: " . $row["tnev"];
      echo "| Leírás:" . $row["tleiras"];
      echo "</form>";
      echo '</div>';
    }
  } else {
    echo "0 results";
  }
}
else{
  if ($result->num_rows > 0) {
    // output data of each row
     while($row = $result->fetch_assoc()) {
      $kep=$row["kep"].".jpg";
      $tid=$row["tid"];
      echo '<div class="page termekek">'; 
      echo "<form method='post' action='termLap.php'>";
      echo "<button type='submit' name='id' value='".$row["tid"]."'><img src='img/$kep'></button>";
      echo "<p name='id'>cikkszám: " .$row["tid"];
      echo "| Terméknév: " . $row["tnev"];
      echo "| Leírás:" . $row["tleiras"];
      echo "| Ár:" . $row["tar"];
      echo "</form>";
      echo '</div>';
    }
  } else {
    echo "0 results";
  }
}

echo '</div>';
echo '<div class="delete">';
if ($sid < 5 && $sid != null) {
  echo "Termék hozzáadása";
  echo '<form action="newTermek.php">';
    echo "Termék név:<br><input type='text' name='tnev'><br>";
    echo "Ár:<br><input type='text' name='tar'><br>";
    echo "Leírás:<br><textarea name='tleiras' cols='50' rows='3'></textarea><br>";
    echo '<input type="submit" value="Új termék hozzáadása" />';
  echo '</form><br>';

  echo "Törlés cikkszám alapján";
  echo '<form action="deleteTermek.php">';
    echo "Cikkszám:<br><input type='text' name='tid'><br>";
    echo '<input type="submit" value="Törlés" />';
  echo '</form><br>';

}
echo "</delete>";
?>