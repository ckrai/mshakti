<?php include_once("include/session.php");?>
<?php include_once("include/db_connect.php");?>
<?php include_once("include/functions.php");?>
<?php $token = $_SESSION["token"]; ?>
<?php  
if($token=isset($_POST["token"])){
        
  $user_id      = test_input($_POST["user_id"]);

  $u_logout=  user_logout($con,$user_id);

 if($u_logout !=null){  
      $response =true;
      $message  ='Logout successfully';
      $data     =$user_id;
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