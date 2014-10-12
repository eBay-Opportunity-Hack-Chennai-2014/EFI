<?php
     $lhost="Localhost";
     $uname="root";
     $pass="";
     $dbname="efi";
     $db;
        try{
          $db=new PDO("mysql:host=$lhost;dbname=$dbname",$uname,$pass);
          //var_dump($db);
          $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        }
        catch(PDOException $e) {
           
        }
    ?>