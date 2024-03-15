<?php include_once("include/session.php");?>
<?php include_once("include/db_connect.php");?>
<?php include_once("include/functions.php");?>
<?php $token = $_SESSION["token"]; ?>
<?php  
if($token=$_POST['token']){
    
   $user_id        = test_input($_POST["user_id"]);
  
   $id              = test_input($_POST["id"]);
   $status        = test_input($_POST["status"]);
 

    $update          = update_trainee_status($con,$user_id,$id,$status);

    if($update !=null){  
      $response =true;
      $message  ='Updated successfully';
      $data     =$status;
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