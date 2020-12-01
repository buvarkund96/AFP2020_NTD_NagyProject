<?php
include 'kapcsolat.php';
echo '<link rel="stylesheet" href="css/promoTermekek.css" type="text/css">' ;
$sql= "SELECT tid, tnev, tleiras, kep FROM termekek where tid < 17";
$result = $conn->query($sql);
echo '<div class="promo">';


if ($result->num_rows > 0) {
  // output data of each row
   while($row = $result->fetch_assoc()) {
   $kep=$row["kep"].".jpg";
    echo '<div class="promo termekek">';
        
        echo "<img src='img/$kep'>";
        echo "<p>Termék név: " . $row["tnev"];
        echo "<p>Termék leírás: " . $row["tleiras"];
        
    echo '</div>';
    
  }
} else {
  echo "0 results";
}
echo '</div>';


?>