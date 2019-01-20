<?php

//getting user upload file

$file=$_FILES["file"];
//saving file in uploads folder

move_uploaded_file($file["tmp_name"],"ce/" . $file["name"]);

//redirecting back to home

header("Location: studyzone.php");