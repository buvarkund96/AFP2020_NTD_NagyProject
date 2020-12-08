<?php
if(!isset($_SESSION)){
    session_start();
  }
include_once "kapcsolat.php";
include_once "top_nav.php";
echo '<link rel="stylesheet" href="css/termek.css" type="text/css">';
$id = $_POST['id'];
//----------------------------------------------------------------------------------------------------
//$sid =$_SESSION['fid'];
//----------------------------------------------------------------------------------------------------
$sql= "SELECT * FROM termekek where tid ='$id' ";
$result = $conn->query($sql);
echo '<div class="container">'; 
if ($_SESSION['fid']<5 && $_SESSION['fid'] != null) {
  while($row = $result->fetch_assoc()) {
  $kep=$row["kep"].".jpg";
  echo '<div class="termek">';
  echo "<img src='img/$kep'>";
    echo '<form action="updateTermek.php" id="upterm">';
      echo "Termék név:<br><input type='text' name='tnev' value='".$row['tnev']."'><br>";
      echo "Ár:<br><input type='text' name='tar' value='".$row["tar"]."'><br>";
      echo "Termék leírása: <br>";
      echo '<textarea rows="4" cols="50" name="tleiras">';
      echo $row["tleiras"];
      echo '</textarea><br>';
      echo '<button type="submit" name="id" value="'.$row["tid"].'"> Frissítés </button>';
    echo '</form>';
    echo '<form action="uploadKep.php" enctype="multipart/form-data" method="post">';
      echo '<input id="file" name="file" type="file" />';
      echo '<button id="Submit" name="submit" type="submit" value="'.$row["tid"].'">Feltöltés</button>';
    echo '</form>';
  }
} elseif($_SESSION['fid'] > 5 || $_SESSION['fid'] == null){
  while($row = $result->fetch_assoc()) {
    $kep=$row["kep"].".jpg";
    echo '<div class="termek">';
    echo "<img src='img/$kep'>";
    echo "<p> Termék neve: <br>" .$row['tnev'];
    echo "<p> Termék leírása: <br>" .$row["tleiras"];
    echo "<p> Termék ára: <br>" .$row["tar"];
    echo "</div>";
    }
  
} else{
  echo "0 results";
}
echo "</div>";
?>