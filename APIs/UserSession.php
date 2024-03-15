<?php include_once("include/session.php");?>
<?php include_once("include/db_connect.php");?>
<?php include_once("include/functions.php");?>
<?php $token = $_SESSION["token"]; ?>
<?php  
if($token=isset($_POST["token"])){
        
  $user_id       = test_input($_POST["user_id"]);
   
  $get_session   = user_session($con,$user_id);

  if($get_session->rowCount() > 0){  

      $response =true;
      $message  ='Active session';
      $data     ='';
    } 
    else{ 

      $response =false;
      $message  ='You session has been expired.';
      $data     =null;
   }

  $response= array('Response'=>$response,'Message'=>$message,'Data'=>$data);
  echo json_encode($response); 

    
} 

?>