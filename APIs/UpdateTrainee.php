<?php include_once("include/session.php");?>
<?php include_once("include/db_connect.php");?>
<?php include_once("include/functions.php");?>
<?php $token = $_SESSION["token"]; ?>
<?php  
if($token=$_POST['token']){
    
  $user_id        = test_input($_POST["user_id"]);
  
  $id              = test_input($_POST["id"]);
  $name            = test_input($_POST["name"]);
  $mobile         = test_input($_POST["mobile"]);
  $email          = test_input($_POST["email"]);
  $aadhaar         = test_input($_POST["aadhaar"]);
  $address        = test_input($_POST["address"]);


    $update          = update_trainee($con,$user_id,$id,$name,$mobile,$email,$aadhaar,$address);

    if($update !=null){  
      $response =true;
      $message  ='Updated successfully';
      $data     =$id;
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