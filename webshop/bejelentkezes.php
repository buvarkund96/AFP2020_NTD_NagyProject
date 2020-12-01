<html>
<head>
<title>Bejelentkezés/Regisztráció</title>
<meta charset="UTF-8">
</head>
<body>
<?php
include 'kapcsolat.php';

?>
<div>

	<?php print "<form method='post' action='login.php'>";
    print "<form method='post' action='login.php'>";
    print "Felhasználónév: <input type='text' name='fnev'><br>";
    print "Jelszó: <input type='password' name='fjelszo'><br>";
    print "<input type='submit' value='Bejelentkezés'>";
    print "</form>";
	?>
</div>
<div>

</div>
</body>
</html>