<?php
require_once "commonutilities.php";

$ds          = DIRECTORY_SEPARATOR;  //1
$storeFolder = "uploads";
 
if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3             
      
    $targetPath =  $storeFolder . $ds;  //4

    $fileName = $_FILES['file']['name']; 
     
    $targetFile =  $targetPath . $fileName ; //5
 
    move_uploaded_file($tempFile,$targetFile); //6

    searchImg($fileName);
    
}

?>   
