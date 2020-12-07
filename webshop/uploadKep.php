<?php
include_once ("../kapcsolat.php");
if(!isset($_SESSION)){
  session_start();
}

$tid=$_REQUEST['submit'];
$sql= "UPDATE `termekek` SET `kep`='$tid' WHERE tid=$tid";
$result = $conn->query($sql);

if (isset($_POST['submit']))
{
	$filename = $_FILES["file"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$filesize = $_FILES["file"]["size"];
	$allowed_file_types = array( ".jpeg", ".jpg", ".png");	

	if (in_array($file_ext,$allowed_file_types) && ($filesize < 200000))
	{	
		// Rename file
		$newfilename = $_REQUEST['submit'] . $file_ext;
		if (file_exists("img/" . $newfilename))
		{
			// file already exists error
			echo "You have already uploaded this file.";
		}
		else
		{		
			move_uploaded_file($_FILES["file"]["tmp_name"], "../img/" . $newfilename);
			header("location:../termekek.php");	
		}
	}
	elseif (empty($file_basename))
	{	
		// file selection error
		echo "Please select a file to upload.";
	} 

}

?>