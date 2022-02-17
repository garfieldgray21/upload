<?php

$userDirName;
$userEmail;
$userDir = "../students/22";
$scriptDir = getcwd();
$time = time();

if(isset($_POST['upload'])){
	/* get form data
		
	*/

	$userDirName = $_POST['firstName'] . "_". $_POST['lastName'] . "_" . $time;
		chdir($userDir);
			if(!is_dir($userDirName)){
    			mkdir($userDirName, 0755);
    			chdir($userDirName);

    			//upload user files here

    			/* IMPORTANT :: PERFORM SECURITY CHECKS */
    			
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


?>