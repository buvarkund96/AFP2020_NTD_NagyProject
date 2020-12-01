<html>
<head>
<title>Bejelentkezés/Regisztráció</title>
<meta charset="UTF-8">
</head>
<body>
<?php
include 'kapcsolat.php';

?>
<div class="bejelentkezes">

	<?php print "<form method='post' action='login.php'>";
    print "E-mail cím: <input type='text' name='email'><br>";
    print "Jelszó: <input type='password' name='jelszo'><br>";
    print "<input type='submit' value='Bejelentkezés'>";
    print "</form>"; ?>
</div>
<div>

</div>
</body>
</html>