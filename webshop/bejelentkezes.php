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
<div>

	<?php
	ession_start();
	$vid=$_SESSION['SESS_FID'];
	
if($vid==''){		
	print "<form method='post' action='login.php'>";
    print "<form method='post' action='login.php'>";
    print "Felhasználónév: <input type='text' name='fnev'><br>";
    print "Jelszó: <input type='password' name='fjelszo'><br>";
    print "<input type='submit' value='Bejelentkezés'>";
    print "</form>";
  }
  else{
	  print "<a href='logout.php'>Kijelentkezés</a><br>";
  }
	?>
</div>
<div>
<?php
	print "<form method='post' action='regisztracio.php'>";
    print "Felhasználónév: <input type='text' name='fnev' required><br>";
    print "Jelszó: <input type='password' name='fjelszo' required><br>";
	print "Email: <input type='text' name='femail' required><br>";
	print "Lakcím: <input type='text' name='flakcim'><br>";
    print "<input type='submit' value='Regisztráció'>";
    print "</form>";
	?>
</div>
</body>
</html>