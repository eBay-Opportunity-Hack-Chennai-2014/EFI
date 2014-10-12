<?php

require_once "commonutilities.php";

searchImg('C8.jpg');

function searchImg($inputFile) {

    global $db;

    $inputFile = 'uploads/'.$inputFile;
    
    $cmd = 'octave -qf --persist --path script_path --eval (hack5('."'".$inputFile."'".'))';

    // $returnData = array();

     $cmdOutput = array();
     //exec($cmd, $commandData);
    $cmdOutput = array('(1/1) uploads/C8.jpg', '', 'database\snake\Sandbo6.png,database\bird3\C4.jpg,database\bird3\C2.jpg,database\bird3\C5.jpg,database\bird3\C6.JPGans = database\bird3\C8.jpg,database\bird3\C4.jpg,database\bird3\C2.jpg,database\bird3\C5.jpg,database\bird3\C6.JPG' );

    $required = $cmdOutput[2];
    $paths = substr($required, 0, strpos($required, '=') - 4);

    $paths = explode(',', $paths);

    $returnData = array();

    foreach ($paths as $path) {
        $obj = new StdClass();
         $obj->img = "http://localhost/efi/from_scratch/" . str_replace("\\", "/", $path);

         $returnData[] = $obj;
        # code...
    }

    // foreach ($paths as $path) {

    //     print $query = "SELECT * FROM image_table WHERE img_path LIKE '%$path%'";
    //     exit;
    //     $stmt = $db->query($query);

    //     // while ($res = $stmt->fetch(PDO::FETCH_ASSOC)) {
    //     //     print_r($res);
    //     //     # code...
    //     // }
    // }

     print "<pre>";
    print_r(json_encode($returnData));

    //$stmt = $db->query("SELECT * FROM `user_uploads` WHERE img in ('uploads/efi_44_1413052531.jpg', 'uploads/efi_45_1413052554.jpg')");

   
}

?>