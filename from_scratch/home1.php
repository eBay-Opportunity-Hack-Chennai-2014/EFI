 <?php
 		include('config.php');
            $statements= $db->prepare("select * from user_uploads");
            $statements->execute();
            $data = $statements->fetchAll(PDO::FETCH_ASSOC);
          // print_r($data);exit;
            foreach($data as $key => $value){
            	//print_r($value);exit;
            	$id = $value['id'];
            	$stmt = $db->prepare("select img_path from image_table where content_id='$id'");
	            $stmt->execute();
	            $imgpath = $stmt->fetch(PDO::FETCH_ASSOC);
	            $imgpath = str_replace("\\","/",$imgpath['img_path']);

	            $result[]=array(
	            	'id' => $id,
		            'title'=> $value['title'],
		            'desc'=> $value['description'],
		            'likes'=> 15,
		            'comments'=> 5,
		            'shares'=> 51,
		            'created'=> "47 minutes ago",
		            'imgPath'=> $imgpath
		            );

            };
      		
      		print json_encode($result);

    ?>         