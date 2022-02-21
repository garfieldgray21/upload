<?php
session_start();

$_SESSION["directoryFailure"] = "Failed create directory";
$_SESSION["invalidFormat"] = "";
$_SESSION["imageTooLarge"] = "";
$_SESSION["uploadSuccess"] = "";
$_SESSION["errorUploading"] = "";

?>

<?php


$userDirName;
$userEmail;
$stdDir = "../students/22";
$scriptDir = getcwd();
$collectTime = time();
$time = substr($collectTime,-5);

//Error messages


if($_SERVER["REQUEST_METHOD"] == "POST"){

	$firstName = $_POST['firstName'];
	$middleName = $_POST['middleName'];
	$lastName = $_POST['lastName'];
	$userEmail = $_POST['email'];
	$userDirName = $firstName . "_" . $lastName . "_" . $time;

	chdir($stdDir);
	if(!is_dir($userDirName)){
		mkdir($userDirName);
		chdir($userDirName);
	}
	else {
		echo "Something went wrong: try again;";
	}

	 if(isset($_FILES["schoolId"]) && $_FILES["schoolId"]["error"] == 0){
	 	
	 	$allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png");
	 		$filename = $_FILES["schoolId"]["name"];
        	$filetype = $_FILES["schoolId"]["type"];
        	$filesize = $_FILES["schoolId"]["size"];

        	// Verify file extension
        	$ext = pathinfo($filename, PATHINFO_EXTENSION);
        	if(!array_key_exists($ext, $allowed)) die("Error: Incorrect File type");

        	// Verify file size - 5MB maximum
        	$maxsize = 3 * 1024 * 1024;
        	if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

        	// Verify MYME type of the file
        	if(in_array($filetype, $allowed)){
            	// Check whether file exists before uploading it

            	if(file_exists($filename)){
                	echo $filename . " exists.";
            	} else{
                	move_uploaded_file($_FILES["schoolId"]["tmp_name"], $filename);
                	echo "Your file was uploaded successfully.";
            	} 
        	} else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        	}
	 }
	 else {
	 	echo "err";
	 }
}

/* 
if(isset($_POST['upload'])) {

	Collect user's data for confirmation email and folder creation 
	$firstName = $_POST['firstName'];
	$middleName = $_POST['middleName'];
	$lastName = $_POST['lastName'];
	$userEmail = $_POST['email'];

	/* User directory name 
	$userDirName = $firstName . "_" . $lastName . "_" . $time;

	/* Changing directory to students/22 
	chdir($stdDir);

	/* Check if Dir already exist 
	if(!is_dir($userDirName)){
		mkdir($userDirName, 0755);
		/* Change working directory to newly created directory 
			chdir($userDirName);
			
	}
	else {
		echo "Err::Duplicate Folder";
	}

}
else {
	echo "error on submission";
}
*/

/*

if(isset($_POST['upload'])){
	/* get form data **/ /*
		
	

	$userDirName = $_POST['firstName'] . "_". $_POST['lastName'] . "_" . $time;
		chdir($userDir);
			if(!is_dir($userDirName)){
    			mkdir($userDirName, 0755);
    			chdir($userDirName);

    			//upload user files here

    			/* IMPORTANT :: PERFORM SECURITY CHECKS ***
    			
				$userDirName = $userDirName . basename($_FILES["schoolId"]["name"]);
				$uploadOk = 1;
				$imageFileType = strtolower(pathinfo($userDirName,PATHINFO_EXTENSION));

				if (move_uploaded_file($_FILES["schoolId"]["tmp_name"], $userDirName)) {
    				echo "The file ". htmlspecialchars( basename( $_FILES["schoolId"]["name"])). " has been uploaded.";
  					} else {
    					echo "Sorry, there was an error uploading your file.";
  					}
			}
			else{
				echo "dir exist";
			}

}
else {
	echo "err";
}
*/

?>