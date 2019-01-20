<?php

//getting user upload file

$file=$_FILES["file"];
//saving file in uploads folder

move_uploaded_file($file["tmp_name"],"uploads/" . $file["name"]);

//redirecting back to home

header("Location: studyzone.php");