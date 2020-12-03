<?php
include_once 'top_nav.php';
include 'kapcsolat.php';
if(!isset($_SESSION)){
  session_start();
}
echo '<link rel="stylesheet" href="css/termekek.css" type="text/css">';
echo '<div class="page">';
$sql= "SELECT * FROM termekek Where tar > 1000";
$result = $conn->query($sql);


if($_SESSION['fid'] ==''){
  if ($result->num_rows > 0) {
    // output data of each row
     while($row = $result->fetch_assoc()) {
      $kep=$row["kep"].".jpg";

      echo '<div class="page termekek">';
      echo "<img style='width:42px;height:42px' src='img/$kep'>";
      echo "cikkszám: " . $row["tid"]. " | Terméknév: " . $row["tnev"]. " | Leírás:" . $row["tleiras"];
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

      echo "<img style='width:42px;height:42px' src='img/$kep'>";
      echo "cikkszám: " . $row["tid"]. " | Terméknév: " . $row["tnev"]. " | Leírás:" . $row["tleiras"]. " | Ár " .$row["tar"];
      echo '</div>';
    }
  } else {
    echo "0 results";
  }
}

echo '</div>';


?>