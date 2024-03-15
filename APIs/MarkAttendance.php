<?php include_once("include/session.php");?>
<?php include_once("include/db_connect.php");?>
<?php include_once("include/functions.php");?>
<?php $token = $_SESSION["token"]; ?>
<?php  
if($token=isset($_POST["token"])){
    
    
  $user_id          = test_input($_POST["user_id"]);
  $event_id         = test_input($_POST["event_id"]);
  $trainee_id       = test_input($_POST["trainee_id"]);
  
  $check=check_attendance($con,$event_id,$trainee_id);
 
   if($check->rowCount()==0){
      
     $add   = mark_attendnace($con,$event_id,$trainee_id);
	
	 $response =true;
     $message  ='Attendance marked successfully';
     $data     =$trainee_id;
     
    }
	else {
	    
       $response =false;
       $message  ='Attendance already marked';
       $data     =null;
    }

  $response= array('Response'=>$response,'Message'=>$message,'Data'=>$data);
  echo json_encode($response); 

}  
                  
?>