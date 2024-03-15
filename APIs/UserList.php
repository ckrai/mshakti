<?php include_once("include/session.php");?>
<?php include_once("include/db_connect.php");?>
<?php include_once("include/functions.php");?>
<?php $token = $_SESSION["token"]; ?>
<?php  
if($token=isset($_POST["token"])){
    
    $user_id       = test_input($_POST["user_id"]);
    $user_role     = test_input($_POST["user_role"]);
    $user_district = test_input($_POST["user_district"]);
    $role     = test_input($_POST["role"]);
  
    $getList          = get_user_list($con,$user_id,$user_role,$user_district,$role);

    if($getList->rowCount() > 0){  
                
      while($row[] =$getList->fetch(PDO::FETCH_ASSOC)) {$tem =$row;}

      $response =true;
      $message  ='User list';
      $data     =$tem;
    } 
    else{ 

      $response =false;
      $message  ='User list not found';
      $data     =null;
   }

  $response= array('Response'=>$response,'Message'=>$message,'Data'=>$data);
  echo json_encode($response); 

 
}  
                  
?>