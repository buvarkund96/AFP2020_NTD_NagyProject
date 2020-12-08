<?php
if(!isset($_SESSION)){
  session_start();
}

include 'kapcsolat.php';
echo '<link rel="stylesheet" href="css/promoTermekek.css" type="text/css">' ;
$sql= "SELECT tid, tnev, tleiras, tar, kep FROM termekek where tid < 17";
$result = $conn->query($sql);
echo '<div class="promo">';
//----------------------------------------------------------------------------------------------------

//$sid =$_SESSION['fid'];
//----------------------------------------------------------------------------------------------------

if ( $_SESSION['fid'] != null) {
  if ($result->num_rows > 0) {
    // output data of each row
     while($row = $result->fetch_assoc()) {
     $kep=$row["kep"].".jpg";
      echo '<div class="promo termekek">';
        echo "<form method='post' action='termLap.php'>";
          echo "<button type='submit'  name='id' value='".$row["tid"]."'><img style='width:40px; height:40px;'src='img/$kep'></button>";
          echo "<p>Termék név: " . $row["tnev"];
          echo "<p>Termék leírás: " . $row["tleiras"];
          echo "<p> Termék Ára: ".$row["tar"];
        echo "</form>";
      echo '</div>';
      
    }
  } else {
    echo "0 results";
  }
} else{
  if ($result->num_rows > 0) {
  // output data of each row
    while($row = $result->fetch_assoc()) {
      $kep=$row["kep"].".jpg";
      echo '<div class="promo termekek">';
        
        echo "<form method='post' action='termLap.php'>";
        echo "<button type='submit'  name='id' value='".$row["tid"]."'><img style='width:40px; height:40px;' class='img' src='img/$kep'></button>";
        echo "<p>Termék név:" .$row["tnev"];
        echo "<p>Termék leírás: " . $row["tleiras"];
        echo "</form>";
        
      echo '</div>';
    
    }
  } else {
    echo "0 results";
  }
}
echo '</div>';


?>