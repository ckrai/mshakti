<?php include_once("include/session.php");?>
<?php include_once("include/db_connect.php");?>
<?php include_once("include/functions.php");?>
<?php $token = $_SESSION["token"]; ?>
<?php  
if($token=isset($_POST["token"])){
  
    $user_id          = test_input($_POST["user_id"]);
    $user_role      = test_input($_POST["user_role"]);

    $event_id      = test_input($_POST["event_id"]);
    $pic_id        = test_input($_POST["pic_id"]);
    $pic_type      = test_input($_POST["pic_type"]);
    $pic_name      = test_input($_POST["pic_name"]);

    $update          = update_image($con,$user_id,$pic_id);

    if($update !=null){  
      $response =true;
      $message  ='Delete successfully';
      $data     =$pic_id;
    } 
    else{ 
      $response =false;
      $message  ='Something went wrong';
      $data     =null;
   }

  $response= array('Response'=>$response,'Message'=>$message,'Data'=>$data);
  echo json_encode($response); 

 
}  
                  
?>