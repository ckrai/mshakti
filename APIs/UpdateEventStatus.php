<?php include_once("include/session.php");?>
<?php include_once("include/db_connect.php");?>
<?php include_once("include/functions.php");?>
<?php $token = $_SESSION["token"]; ?>
<?php  
if($token=$_POST['token']){
    
  $user_id        = test_input($_POST["user_id"]);
  $event_id       = test_input($_POST["event_id"]);
  $event_status   = test_input($_POST["event_status"]);
  



    $update          = update_event_status($con,$user_id,$event_id,$event_status);

    if($update !=null){  
      $response =true;
      $message  ='Updated successfully';
      $data     =$event_id;
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