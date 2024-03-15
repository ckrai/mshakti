<?php include_once("include/session.php");?>
<?php include_once("include/db_connect.php");?>
<?php include_once("include/functions.php");?>
<?php $token = $_SESSION["token"]; ?>
<?php  
if($token=isset($_POST["token"])){
    
    $user_id     = test_input($_POST["user_id"]);
    $event_id    = test_input($_POST["event_id"]);
    $media_type  = test_input($_POST["media_type"]);
    
  
    $getList  = get_event_image($con,$event_id,$media_type);

    if($getList->rowCount() > 0){  
                
      while($row[] =$getList->fetch(PDO::FETCH_ASSOC)) {$tem =$row;}

      $response =true;
      $message  ='Media list';
      $data     =$tem;
    } 
    else{ 

      $response =false;
      $message  ='Media not found';
      $data     =null;
   }

  $response= array('Response'=>$response,'Message'=>$message,'Data'=>$data);
  echo json_encode($response); 

 
}  
                  
?>