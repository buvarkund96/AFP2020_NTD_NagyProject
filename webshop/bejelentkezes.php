<html>
<head>
<title>Bejelentkezés/Regisztráció</title>
<meta charset="UTF-8">
</head>
<body>
<?php
include 'kapcsolat.php';

?>
<div class="navBar">
    <?php include_once 'top_nav.php'; ?>
</div>
<div class="bejreg">
<div class="bej">

	<?php
	ession_start();
	$fid=$_SESSION['SESS_FID'];
	
if($fid==''){		
	print "<form method='post' action='login.php'>";
    print "<form method='post' action='login.php'>";
    print "Felhasználónév: <br><input type='text' name='fnev'><br>";
    print "Jelszó: <br><input type='password' name='fjelszo'><br>";
    print "<input type='submit' value='Bejelentkezés'>";
    print "</form>";
  }
  else{
	  print "<a href='logout.php'>Kijelentkezés</a><br>";
  }
	?>
</div>
<div class="reg">
<?php
	print "<form method='post' action='regisztracio.php'>";
    print "Felhasználónév: <br><input type='text' name='fnev' required><br>";
    print "Jelszó: <br><input type='password' name='fjelszo' required><br>";
	print "Email: <br><input type='text' name='femail' required><br>";
	print "Lakcím: <br><input type='text' name='flakcim'><br>";
    print "<input type='submit' value='Regisztráció'>";
    print "</form>";
	?>
</div>
</div>
</body>
</html>