<?php
    include ('commonutilities.php');

    extract($_POST);
    //echo print_r($img_title);exit;

    $img_tag = serialize(explode(",", $img_tag));

    $time = time();

    $stmt = $db->prepare('INSERT INTO user_uploads(title,description,img,tags,highlight,created,status) VALUES(:title,:desc,:img,:tags,:highlight,:created,:status)');
    $stmt->execute(array(':title'=>$img_title,':desc'=>$img_description,':img'=>$fileName,':tags'=>$img_tag,':highlight'=>$img_highlight,':created'=>$time,':status'=>1));
    
  print "success";

?>