<?php
	// $userid = $_GET["userid"];
  // echo "hello ajax";
  $userid = 1;
  

  $serverAddr = 'localhost';
  $dbms_username = 'root';
  $dbms_password = '';
  $db_name = 'lecuntao';

  $conn = new mysqli($serverAddr, $dbms_username, $dbms_password, $db_name);

  $conn->query("set names utf8");

  $sql = "
  	SELECT `cart`.`id`,`cart`.`cart_id`, `store`.`store_name`,`store`.`store_id`,`cart`.`checked`,`cart`.`checkgroup`
  	FROM `store` RIGHT JOIN `cart`
  	ON `cart`.`store_id` = `store`.`store_id`
  	WHERE `cart`.`userid` = '$userid'
  ";
  
  $result = $conn->query($sql);

  if($result->num_rows > 0) {
  	$row = $result->fetch_assoc();
  	header("content-type: text/json");
  	$data = array();
  	while($row != null) {
  		$data[] = $row;
  		$row = $result->fetch_assoc();
  	}
  	// echo json_encode($data);

  	// echo '------------------------------------------------------------------';
  	 $idstore = array();
  	 // echo  json_encode($idstore);
  	for($i=0;$i<count($data);$i++){
  		// echo '索引索引索引索引索引索引：';
  		// echo $i;
  		// echo count($data);
  		// echo '         store_id:';
  		// echo  $data[$i]["store_id"];

  		$data[$i]["checkgroup"] = array();
		
        //处理重复的store_id
        $iskey =  array_search($data[$i]["store_id"],$idstore);
        // 在$idStore数组中查询$data[$i]["store_id"] 店铺id是否存在，存在返回其key名，不存在返回false
        
        // echo '         店铺ID查询结果:';
        $iskey= json_encode($iskey);
        // $iskey = boolval($iskey);
          // echo '         key值2222222:';
          // echo  $iskey;
        if( !$iskey=='false'){
        	// 如果存在结束本次循环
   		     // echo '         结束本次循环!!!!!!!---------------';
   		      $iskey = (int)$iskey;
        	 // unset($data[$i]);
   		      array_splice($data, $i, 1);
   		      $i--;
        	 continue;
        };
        $idstore[] = $data[$i]["store_id"];
       

  	 	// echo  json_encode($idstore);
       
  		$store_id = $data[$i]["store_id"];

				
  		$sql_good = "
  			SELECT `goods`.`good_id`,`goods`.`good_name`, `goods`.`good_img`,`goods`.`good_price`,`goods`.`good_Yprice`,`goods`.`store_id`,`cart`.`good_num`,`cart`.`good_spec`,`cart`.`isChecked`
  			FROM `goods` RIGHT JOIN `cart`
  			ON `cart`.`good_id` = `goods`.`good_id`
  			WHERE `cart`.`store_id` = '$store_id'
  		";



		$result_good = $conn->query($sql_good);
  		// 		echo '         num_rows:';
		// echo $result_good->num_rows;
		if($result_good->num_rows > 0){
  			$row_good = $result_good->fetch_assoc();
  			$data_good = array();
  			while($row_good != null) {
  				$data_good[] = $row_good;
  				$row_good = $result_good->fetch_assoc();
			}
		}
		// echo '       $data_good:   ';
		// echo json_encode($data_good);

		$data[$i]["goods"]  = $data_good;

  	}

  	// echo '   -------------------------------------------------';

  	// echo '最后的数据数组444444';
  	echo json_encode($data);
  	
  }

  $conn->close();

?>
     

			
        	