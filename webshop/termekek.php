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
//$sid = $_SESSION['fid'];

//----------------------------------------------------------------------------------------------------


if($_SESSION['fid'] ==''){
  if ($result->num_rows > 0) {
    // output data of each row
     while($row = $result->fetch_assoc()) {
      $kep=$row["kep"].".jpg";

      echo '<div class="page termekek">';
      echo "<form method='post' action='termLap.php'>";
      echo "<button class='kep' type='submit' name='id' value='".$row["tid"]."'><img src='img/$kep'></button>";
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
          echo "<name='id'>cikkszám: " .$row["tid"];
          echo "| Terméknév: " . $row["tnev"];
          echo "| Leírás:" . $row["tleiras"];
          echo "| Ár:" . $row["tar"];
        echo "</form>";
        echo "<form action='kosarba.php'>";
          echo "<input type='number' name='mennyiseg' min='1' value='1'>";
          echo "<button id='btn' onclick='showAlert()' class='kosar' type='submit' name='id' value='".$row["tid"]."'>Kosárba</button>";
          echo '<script type="text/javascript" src="JS/scripts.js"></script>';
        echo "</form>";
      echo '</div>';
    }
  } else {
    echo "0 results";
  }
}

echo '</div>';

if ($_SESSION['fid'] < 5 && $_SESSION['fid'] != null) {
  echo '<div class="delete">';
  echo "Termék hozzáadása";
    echo '<form action="newTermek.php">';
      echo "Termék név:<br><input type='text' name='tnev' required><br>";
      echo "Ár:<br><input type='text' name='tar' required/><br>";
      echo "Leírás:<br><input type='text' name='tleiras'><br>";
      echo '<input type="submit" value="Új termék hozzáadása" />';
    echo '</form><br>';

  echo "Törlés cikkszám alapján";
    echo '<form action="deleteTermek.php">';
     echo "Cikkszám:<br><input type='text' name='tid'><br>";
     echo '<input type="submit" value="Törlés" />';
    echo '</form><br>';
  echo "</delete>";
}

?>