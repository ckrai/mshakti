<?php include_once("include/session.php");?>
<?php include_once("include/db_connect.php");?>
<?php include_once("include/functions.php");?>
<?php $token = $_SESSION["token"]; ?>
<?php  
if($token=isset($_POST["token"])){
    
    $user_id     = test_input($_POST["user_id"]);
    $event_id   = test_input($_POST["event_id"]);
    $date        = test_input($_POST["date"]);
    
  
    $getList  = get_trainee_attendance($con,$user_id,$event_id,$date);

    if($getList->rowCount() > 0){  
                
      while($row[] =$getList->fetch(PDO::FETCH_ASSOC)) {$tem =$row;}

      $response =true;
      $message  ='Trainee attendance list';
      $data     =$tem;
    } 
    else{ 

      $response =false;
      $message  ='Trainee attendance list not found';
      $data     =null;
   }

  $response= array('Response'=>$response,'Message'=>$message,'Data'=>$data);
  echo json_encode($response); 

 
}  
                  
?>