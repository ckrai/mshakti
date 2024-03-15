<?php require_once("session.php"); ?>
<?php

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


//----------------------------------------------------------------------------------------------TrainingAPI Functions------------------------------------------------------------------------------------------------------

//function for checking user before registration
function check_mobile($con,$mobile){
 $stmt = $con->prepare("SELECT * FROM users WHERE u_mobile = :mobile");
 $stmt->execute(array(':mobile' => $mobile));
 return $stmt;
}


//function for supervisor/cooedinator registration
function add_cooedinator($con,$user_id,$user_name,$user_role,$name,$mobile,$pass,$address,$district,$state,$role){
 
  date_default_timezone_set('Asia/Calcutta'); 
  $date=date("Y-m-d H:i:s");
  
  $stmt = $con->prepare("INSERT INTO users(u_name,u_mobile,u_password,u_address,u_district,u_state,u_role,u_added_by,created_at) VALUES(?,?,?,?,?,?,?,?,?)");
  $stmt->execute(array($name,$mobile,$pass,$address,$district,$state,$role,$user_id,$date));
  
  
//   $user_id = $con->lastInsertId();
//   create_activity($con,$user_id,'Account created','Account has been created');
      
  return $stmt;
}

//function for trainer registration
function add_new_trainer($con,$user_id,$event_id,$name,$mobile,$training_date,$training_topic){
 
  date_default_timezone_set('Asia/Calcutta'); 
  $date=date("Y-m-d H:i:s");
  
  $stmt = $con->prepare("INSERT INTO trainers(event_id,name,mobile,topic,training_date,added_by,created_at) VALUES(?,?,?,?,?,?,?)");
  $stmt->execute(array($event_id,$name,$mobile,$training_topic,$training_date,$user_id,$data));
  
      
  return $stmt;
}


//function for guest registration
function add_new_guest($con,$user_id,$event_id,$name,$designation,$date,$comment){

 
  date_default_timezone_set('Asia/Calcutta'); 
  $date2=date("Y-m-d H:i:s");
  
  $stmt = $con->prepare("INSERT INTO guest(e_id,name,designation,v_date,comment,added_by,created_at) VALUES(?,?,?,?,?,?,?)");
  $stmt->execute(array($event_id,$name,$designation,$date,$comment,$user_id,$date2));

  
      
  return $stmt;
}








//function for login with password and mobile
function user_login($con,$mobile,$password,$device){

  $stmt = $con->prepare("SELECT * FROM  users WHERE u_mobile = :mobile LIMIT 1");
  $stmt->execute(array(':mobile' => $mobile));
 

  if($stmt->rowCount()>0) {

    $row   = $stmt->fetch();
    
    if ($row['u_status']==1) {
        
        if(password_verify($password, $row['u_password'])) {  
          
            $user[] = array('id'=>$row['u_id'],
                      'name'=>$row['u_name'],
                      'mobile'=>$row['u_mobile'],
                      'address'=>$row['u_address'],
                      'district'=>$row['u_district'],
                      'state'=>$row['u_state'],
                      'training_center'=>$row['training_center'],
                      'status'=>$row['u_status'],
                      'added_by'=>$row['u_added_by'],
                      'role'=>$row['u_role']);
                      
            create_login_session($con,$row['u_id'],$row['u_name'],$device);

             //create_activity($con,$row['u_id'],$row['u_name'],'Login Successfully','Login in');
             return $user;
       }
       else {
             //create_activity($con,$row['u_id'],$row['u_name'],'Enter wrong password','Login in');
             return 1;
       }
    }
    else{
      return 0;
    }
  }
  else {
    return 2;
  }
}


//function for creating activity
function create_activity($con,$user_id,$user_name,$a_message,$a_type){
    
  date_default_timezone_set('Asia/Calcutta'); 
  $date=date("Y-m-d H:i:s");
  
  $stmt = $con->prepare("INSERT INTO activity(u_id,u_name,a_message,a_type,created_at) VALUES(?,?,?,?,?)");
  $stmt->execute(array($user_id,$user_name,$a_message,$a_type,$date));

}


//function for creating login sessions
function create_login_session($con,$user_id,$user_name,$device){
  date_default_timezone_set('Asia/Calcutta'); 
  $date=date("Y-m-d H:i:s");
  $session=md5($date);
  
  $stmt = $con->prepare("INSERT INTO sessions(u_id,u_name,u_device,u_session) VALUES(?,?,?,?)");
  $stmt->execute(array($user_id,$user_name,$device,$session));

}


//function for check login sessions
function user_session($con,$user_id){

    $stmt = $con->prepare("SELECT * FROM sessions WHERE u_id=:u_id");
    $stmt->execute(array(':u_id' =>$user_id));
    
    return $stmt;

}


//function for getting event by status
function get_event_list_by_status($con,$user_id,$user_district,$user_role,$status){
    
    if($user_role=='Super Admin'){
      $stmt = $con->prepare("SELECT * FROM events WHERE e_status=:e_status AND status=:status  ORDER BY created_at DESC");
      $stmt->execute(array(':status' =>'1',':e_status' =>$status));
    }
    else if($user_role=='Supervisor'){
      $stmt = $con->prepare("SELECT * FROM events WHERE status=:status AND e_status=:e_status  AND supervisor_id=:supervisor_id ORDER BY created_at DESC");
      $stmt->execute(array(':status' =>'1',':e_status' =>$status,':supervisor_id' =>$user_id));
    }
    else if($user_role=='Coordinator'){
      $stmt = $con->prepare("SELECT * FROM events WHERE status=:status AND e_status=:e_status AND coordinator_id=:coordinator_id  ORDER BY created_at DESC");
      $stmt->execute(array(':status' =>'1',':e_status' =>$status,':coordinator_id' =>$user_id));
    }
    
    
    
    return $stmt;    
}


//function for getting event by status
function get_event_list_by_user($con,$user_id,$user_district,$user_role){
    
    if($user_role=='Super Admin'){
        $stmt = $con->prepare("SELECT * FROM events ORDER BY created_at ASC");
        $stmt->execute();
    }
   else if($user_role=='Coordinator'){
        $stmt = $con->prepare("SELECT * FROM events WHERE coordinator_id=:coordinator_id AND status=:status ORDER BY created_at DESC");
        $stmt->execute(array(':status' =>'1',':coordinator_id' =>$user_id));
    }
    else if($user_role=='Supervisor'){
        $stmt = $con->prepare("SELECT * FROM events WHERE supervisor_id=:supervisor_id AND status=:status ORDER BY created_at DESC");
        $stmt->execute(array(':status' =>'1',':supervisor_id' =>$user_id));
    }

    return $stmt;    
}


//function for getting supervisor list
function get_supervisor_list($con,$user_id,$user_role) {

    if($user_role=='Super Admin'){
         $stmt = $con->prepare("SELECT * FROM users where u_role=:role ORDER BY u_name ASC");
        $stmt->execute(array(':role' =>'Supervisor'));
    }
  return $stmt;
}



//function for getting coordinator list
function get_coordinator_list($con,$user_id,$user_role) {

    if($user_role=='Super Admin'){
         $stmt = $con->prepare("SELECT * FROM users where u_role=:role ORDER BY u_name ASC");
        $stmt->execute(array(':role' =>'Coordinator'));
    }
    else if($user_role=='Supervisor'){
      $stmt = $con->prepare("SELECT * FROM users where u_role=:role AND u_added_by=:u_added_by ORDER BY u_name ASC");
     $stmt->execute(array(':role' =>'Coordinator',':u_added_by' =>$user_id));
    }
  
  return $stmt;
}


//function for getting event trainee list
function get_event_trainee_list($con,$user_id,$event_id) {

    $stmt = $con->prepare("SELECT * from trainees where e_id=:e_id AND status=:status ORDER BY name ASC");
    $stmt->execute(array(':e_id' =>$event_id,':status' =>'1'));
  
    return $stmt;
}

//function for getting event trainer list
function get_event_trainer_list($con,$user_id,$event_id) {

  $stmt = $con->prepare("SELECT * from trainers where event_id=:event_id ORDER BY training_date DESC");
  $stmt->execute(array(':event_id' =>$event_id));

  return $stmt;
}


//function for getting event trainer list
function get_event_guest_list($con,$user_id,$event_id) {

  $stmt = $con->prepare("SELECT * from guest where e_id=:e_id");
  $stmt->execute(array(':e_id' =>$event_id));

  return $stmt;
}




//function for getting trainee list
function get_trainee_list($con,$user_id,$user_role) {
  if($user_role=='Super Admin'){
    $stmt = $con->prepare("SELECT trainees.*,events.name as event_name,events.start_date,events.end_date FROM trainees LEFT JOIN events ON trainees.e_id=events.id where trainees.status=:status ORDER BY id DESC LIMIT 500");
    $stmt->execute(array(':status' =>'1'));
  }

    else if($user_role=='Supervisor'){
      $stmt = $con->prepare("SELECT trainees.*,events.name as event_name,events.start_date,events.end_date FROM trainees LEFT JOIN events ON trainees.e_id=events.id where trainees.supervisor_id=:supervisor_id AND trainees.status=:status");
      $stmt->execute(array(':supervisor_id' =>$user_id,':status' =>'1'));
    }
    else if($user_role=='Coordinator'){
      $stmt = $con->prepare("SELECT trainees.*,events.name as event_name,events.start_date,events.end_date FROM trainees LEFT JOIN events ON trainees.e_id=events.id where trainees.added_by=:added_by AND trainees.status=:status");
      $stmt->execute(array(':added_by' =>$user_id,':status' =>'1'));
    }
  
  return $stmt;
}





//function for getting trainee list
function get_batch_list($con) {

  $stmt = $con->prepare("SELECT * FROM batch ORDER BY id ASC");
  $stmt->execute();
   return $stmt;
}



//function to update user status
function update_user($con,$user_id,$user_status){
  $stmt =$con->prepare("UPDATE users SET u_status =:status WHERE u_id = :id");
  $stmt->execute(array(':id' => $user_id,':status' => $user_status));
  return $stmt;
 
 
}

//function to update image status
function update_image($con,$user_id,$pic_id){
  $stmt =$con->prepare("UPDATE medias SET status =:status WHERE id = :id");
  $stmt->execute(array(':id' => $pic_id,':status' =>'0'));
  return $stmt;
}



//function to update trainee status
function update_trainee_status($con,$user_id,$id,$status){
  $stmt =$con->prepare("UPDATE trainees SET status =:status WHERE id = :id");
  $stmt->execute(array(':id' => $id,':status' =>$status));
  return $stmt;

}

//function to update trainee status
function update_trainee($con,$user_id,$id,$name,$mobile,$email,$aadhaar,$address){
  $stmt =$con->prepare("UPDATE trainees SET name =:name,mobile=:mobile,email=:email,aadhar=:aadhar,address=:address WHERE id = :id");
  $stmt->execute(array(':id' => $id,':name' => $name,':mobile' => $mobile,':email' => $email,':aadhar' => $aadhaar,':address' => $address));
  return $stmt;

}

//function batch
function check_batch($con,$batch,$district){
  $stmt = $con->prepare("SELECT * FROM events WHERE batch =:batch AND district=:district");
  $stmt->execute(array(':batch' =>$batch,':district' => $district));
  return $stmt;
 }


//function for creating new event
function add_new_event($con,$user_id,$user_name,$user_role,$supervisor_id,$supervisor_name,$coordinator_id,$coordinator_name,$event_name,$batch_name,$start_date,$end_date,$address,$district,$state){
    
    $stmt = $con->prepare("INSERT INTO events(name,batch,start_date,end_date,district,state,address,supervisor_id,supervisor_name,coordinator_id,coordinator_name,created_at) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->execute(array($event_name,$batch_name,$start_date,$end_date,$district,$state,$address,$supervisor_id,$supervisor_name,$coordinator_id,$coordinator_name,$date));

    $lastInsertedID = $con->lastInsertId();
    create_aws_channel($con,$lastInsertedID,$event_name,$district);

    return $stmt;
}

function create_aws_channel($con,$lastInsertedID,$event_name,$district){

   // Now, let's make an HTTP POST request to the specified URL
   $url = 'http://65.0.5.30/stream/create_channel';

   $post_data = array(
       'event_name' => $event_name,
       'event_id' => $lastInsertedID,
       'district' => $district,
   );

   $ch = curl_init($url);
   curl_setopt($ch, CURLOPT_POST, 1);
   curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

   $response_from_api = curl_exec($ch);

   if ($response_from_api === false) {
      // Handle any errors that occurred during the request
      echo 'Curl error: ' . curl_error($ch);
   } 
   else {
      // Handle the response from the API (if needed)
      //echo 'Response from API: ' . $response_from_api;

      // Parse the JSON response
      $responseData = json_decode($response_from_api, true);

      // Check if parsing was successful
      if ($responseData !== null && isset($responseData['Data'][0]['stream_key'])) {

           // Extract the stream_key and store it in a variable
           $streamKey = $responseData['Data'][0]['stream_key'];

           // Now $streamKey contains the value of the stream_key
           add_stream_key($con,$lastInsertedID,$streamKey);
      } 
      else {
            echo "Unable to extract the Stream Key from the response.";
      }    
   }
   curl_close($ch);
}

//function to update event status
function add_stream_key($con,$lastInsertedID,$stream_key){
  $stmt =$con->prepare("UPDATE events SET link =:link WHERE id = :id");
  $stmt->execute(array(':id' => $lastInsertedID,':link' => $stream_key));
  return $stmt;

}


//function to update event status
function update_event_status($con,$user_id,$event_id,$event_status){
  $stmt =$con->prepare("UPDATE events SET e_status =:e_status WHERE id = :id");
  $stmt->execute(array(':id' => $event_id,':e_status' => $event_status));
  return $stmt;

}

//function for getting user seesion
function check_session($con,$user_id) {
    
  $stmt = $con->prepare("SELECT * FROM sessions WHERE u_id=:u_id");
  $stmt->execute(array(':u_id' => $user_id));
  return $stmt;
}


//function for logout user
function user_logout($con,$user_id){
    
  $stmt =$con->prepare("DELETE From sessions WHERE u_id = :u_id");
  $stmt->execute(array(':u_id' => $user_id));
  return $stmt;
}


//function for getting event by status
function get_event_details($con,$user_id,$event_id){
    
    $stmt = $con->prepare("SELECT * FROM events WHERE id=:event_id");
    $stmt->execute(array(':event_id' =>$event_id));
    return $stmt;    
}


//function to update user profile
function update_user_profile($con,$user_id,$first_name,$last_name,$user_mobile,$password){
  $stmt =$con->prepare("UPDATE users SET first_name =:first_name,last_name=:last_name,mobile=:mobile WHERE id = :id");
  $stmt->execute(array(':id' => $user_id,':first_name' => $first_name,':last_name' => $last_name,':mobile' => $user_mobile));
  return $stmt;
}


//function to get unit profile
function get_user_profile($con,$user_id){
  $stmt = $con->prepare("SELECT * FROM users WHERE u_id=:id");
  $stmt->execute(array(':id' => $user_id));
  return $stmt;
}



function check_trainee($con,$mobile,$aadhaar){
 $stmt = $con->prepare("SELECT * FROM trainees WHERE aadhar = :aadhar AND status=:status");
 $stmt->execute(array(':aadhar' => $aadhaar,':status' =>'1'));
 return $stmt;
}

//function for trainee registration
function trainee_registration($con,$user_id,$supervisor_id,$user_name,$user_role,$event_id,$name,$mobile,$email,$org,$aadhaar,$address,$district,$state){
 
  date_default_timezone_set('Asia/Calcutta'); 
  $date=date("Y-m-d H:i:s");
  
  $stmt = $con->prepare("INSERT INTO trainees(e_id,name,mobile,email,aadhar,address,district,state,organisation,added_by,supervisor_id,created_at) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
  $stmt->execute(array($event_id,$name,$mobile,$email,$aadhaar,$address,$district,$state,$org,$user_id,$supervisor_id,$date));
  
  
//   $user_id = $con->lastInsertId();
//   create_activity($con,$user_id,'Account created','Account has been created');
      
  return $stmt;
}

//function for trainee registration
function trainee_registration_new($con,$user_id,$supervisor_id,$user_name,$user_role,$event_id,$name,$mobile,$dob,$email,$org,$aadhaar,$address,$district,$state){
 
  date_default_timezone_set('Asia/Calcutta'); 
  $date=date("Y-m-d H:i:s");
  
  $stmt = $con->prepare("INSERT INTO trainees(e_id,name,mobile,dob,email,aadhar,address,district,state,organisation,added_by,supervisor_id,created_at) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
  $stmt->execute(array($event_id,$name,$mobile,$dob,$email,$aadhaar,$address,$district,$state,$org,$user_id,$supervisor_id,$date));
  
  
//   $user_id = $con->lastInsertId();
//   create_activity($con,$user_id,'Account created','Account has been created');
      
  return $stmt;
}



//function to get event images
function get_event_image($con,$event_id,$media_type){
 $stmt = $con->prepare("SELECT * FROM medias WHERE e_id = :e_id AND type=:type AND status=:status ORDER BY created_at DESC");
 $stmt->execute(array(':e_id' => $event_id,':type' =>$media_type,':status' =>1));
 return $stmt;
}



//function for add event image
function add_event_image($con,$user_id,$event_id,$image_type,$image_name){
 
  date_default_timezone_set('Asia/Calcutta'); 
  $date=date("Y-m-d H:i:s");
  
  $stmt = $con->prepare("INSERT INTO medias(e_id,type,name,created_at) VALUES(?,?,?,?)");
  $stmt->execute(array($event_id,$image_type,$image_name,$date));
      
  return $stmt;
}

//function for checking attendance
function check_attendance($con,$event_id,$trainee_id){
  date_default_timezone_set('Asia/Calcutta'); 
  $date=date("Y-m-d");
  
  $stmt = $con->prepare("SELECT * FROM attendances WHERE e_id = :e_id AND t_id=:t_id AND att_date=:att_date");
  $stmt->execute(array(':e_id' => $event_id,':t_id' =>$trainee_id,':att_date' =>$date));
  return $stmt;
}

//function for marking attendance
function mark_attendnace($con,$event_id,$trainee_id){

 
  date_default_timezone_set('Asia/Calcutta'); 
  $date=date("Y-m-d");
  $time=date("H:i:s");
  
  $stmt = $con->prepare("INSERT INTO attendances(e_id,t_id,att_date,att_time) VALUES(?,?,?,?)");
  $stmt->execute(array($event_id,$trainee_id,$date,$time));
      
  return $stmt;
}


//function for getting trainee attendance
function get_trainee_attendance($con,$user_id,$event_id,$date) {
    date_default_timezone_set('Asia/Calcutta'); 
    $t_date=date("Y-m-d");
    
    if ($date =='0'){
    $stmt = $con->prepare("SELECT attendances.*,trainees.name,trainees.mobile,trainees.aadhar FROM attendances LEFT JOIN trainees ON attendances.t_id=trainees.id 
                           where attendances.att_date='$t_date' and attendances.e_id='$event_id'");
    $stmt->execute();
    
    }
    else{
        $stmt = $con->prepare("SELECT attendances.*,trainees.name,trainees.mobile,trainees.aadhar FROM attendances LEFT JOIN trainees ON attendances.t_id=trainees.id 
                               where attendances.att_date='$date' and attendances.e_id='$event_id'");
    $stmt->execute();
    
    }
        
    
    
  
   return $stmt;
}


//function for changing user password 
function change_password($con,$user_id,$old_password,$new_password){

  $stmt = $con->prepare("SELECT * FROM users WHERE u_id =:id  LIMIT 1");
  $stmt->execute(array(':id' => $user_id));
  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  if($stmt->rowCount()==1){

      if(password_verify($old_password, $row['u_password'])){

        $pass = password_hash($password, PASSWORD_DEFAULT);
   

        $stmt =$con->prepare("UPDATE users SET u_password =:password WHERE u_id = :id");
        $stmt->execute(array(':id' => $user_id,':password' => $newpass));
        return 1;
        
      }
    else {
      return 2;
    }
    
  }

}


//function for  count
function get_user_count($con,$user_id,$user_district,$user_role){

  if ($user_role =='Super Admin') {
    $stmt = $con->prepare("SELECT 
    (select count(id) from events where e_status='Completed' and status='1') as completed_event,
    (select count(id) from events where e_status='Running'and status='1') as running_event,
    (select count(u_id) from users where u_role='Supervisor' and u_status='1') as supervisor,
    (select count(u_id) from users where u_role='Coordinator' and u_status='1') as coordinator,
    (select count(id) from trainees where status='1') as trainee");
    $stmt->execute();
    return $stmt;
  }

  else if ($user_role =='Supervisor') {
     $stmt = $con->prepare("SELECT 
                            (select count(id) from events where e_status='Completed' and supervisor_id='$user_id' and status='1') as completed_event,
                            (select count(id) from events where e_status='Running' and supervisor_id='$user_id' and status='1') as running_event,
                            (select count(u_id) from users where u_role='Supervisor' and u_added_by='$user_id' and u_status='1') as supervisor,
                            (select count(u_id) from users where u_role='Coordinator'  and u_added_by='$user_id' and u_status='1') as coordinator,
                            (select count(id) from trainees where supervisor_id='$user_id' and status='1') as trainee");
       $stmt->execute();
       return $stmt;
 }

 else if ($user_role =='Coordinator') {
  $stmt = $con->prepare("SELECT 
                         (select count(id) from events where e_status='Completed' and coordinator_id='$user_id' and status='1') as completed_event,
                         (select count(id) from events where e_status='Running' and coordinator_id='$user_id' and status='1') as running_event,
                         (select count(u_id) from users where u_role='Supervisor' and u_added_by='$user_id'and u_status='1') as supervisor,
                         (select count(u_id) from users where u_role='Coordinator'  and u_added_by='$user_id' and u_status='1') as coordinator,
                         (select count(id) from trainees where added_by='$user_id' and status='1') as trainee");
    $stmt->execute();
    return $stmt;
}

    
   

}


//function for event  count
function get_event_count($con,$user_id,$event_id){

   date_default_timezone_set('Asia/Calcutta'); 
    $date=date("Y-m-d");
    $stmt = $con->prepare("SELECT 
                            (select count(id) from trainees where e_id='$event_id' and status='1') as trainee,
                            (select count(id) from medias where e_id='$event_id' and type='Picture' and status='1') as picture,
                            (select count(id) from medias where e_id='$event_id' and type='Attendance' and status='1') as attendance_sheet,
                            (select count(id) from medias where e_id='$event_id' and type='Mudra' and status='1') as mudra_form,
                            (select count(id) from medias where e_id='$event_id' and type='Registration' and status='1') as registration_form,
                            (select count(id) from trainers where event_id='$event_id') as trainers,
                            (select count(id) from guest where e_id='$event_id') as guest,
                            (select count(id) from attendances where e_id='$event_id' AND att_date='$date') as attendance");
    $stmt->execute();
    
    return $stmt;

}





