<?php
session_start();

$_SESSION['fid']='';

header("Location: bejelentkezes.php");
?>