<?php
echo "Name of the file: ".$_FILES['userfile']['name'];
echo "<br>";
echo "Type of the file: ".$_FILES['userfile']['type'];
echo "<br>";
echo "Size of the file: ".$_FILES['userfile']['size'];
echo "<br>";
echo "Temp name of the file: ".$_FILES['userfile']['tmp_name'];
echo "<br>";
echo "Error: ".$_FILES['userfile']['error'];
echo "<br>";

$uploaddir = 'D:/Documents/Temp/';

if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir.$_FILES['userfile']['name'])){
	echo "Successfully upload";
}else{
	echo "uploading error";
}