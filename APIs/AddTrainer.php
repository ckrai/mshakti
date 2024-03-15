<?php include_once("include/session.php");?>
<?php include_once("include/db_connect.php");?>
<?php include_once("include/functions.php");?>
<?php $token = $_SESSION["token"]; ?>
<?php  
if($token=$_POST['token']){
    
  $user_id         = test_input($_POST["user_id"]);
  $user_role       = test_input($_POST["user_role"]);
  
  $event_id        = test_input($_POST["event_id"]);
  $name            = test_input($_POST["name"]);
  $mobile          = test_input($_POST["mobile"]);
  $training_date   = test_input($_POST["training_date"]);
  $training_topic  = test_input($_POST["training_topic"]);


  $add_trainer=add_new_trainer($con,$user_id,$event_id,$name,$mobile,$training_date,$training_topic);
   
  if($add_trainer!=null){
      
       $response =true;
       $message  ='Trainer added successfully';
       $data     =$event_id;
      
  }
  else{
      
       $response =false;
       $message  ='Something went wrong';
       $data     =$event_id;
  }

   $response= array('Response'=>$response,'Message'=>$message,'Data'=>$data);
   echo json_encode($response); 


 


 } 

?>