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
  $designation     = test_input($_POST["designation"]);
  $date            = test_input($_POST["date"]);
  $comment         = test_input($_POST["comment"]);


  $add_guest=add_new_guest($con,$user_id,$event_id,$name,$designation,$date,$comment);
   
  if($add_guest!=null){
      
       $response =true;
       $message  ='Guest added successfully';
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