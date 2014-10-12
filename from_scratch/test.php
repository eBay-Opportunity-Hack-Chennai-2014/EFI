<?php
$arr = array('(1/1) uploads/C8.jpg', '', 'database\bird3\C8.jpg,database\bird3\C4.jpg,database\bird3\C2.jpg,database\bird3\C5.jpg,database\bird3\C6.JPGans = database\bird3\C8.jpg,database\bird3\C4.jpg,database\bird3\C2.jpg,database\bird3\C5.jpg,database\bird3\C6.JPG' );

$required = $arr[2];
$paths = substr($required, 0, strpos($required, '=') - 4);

$paths = explode(',', $paths);

print_r($paths);

?>
