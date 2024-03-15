<?php include_once 'db-connect.php'; ?>
<?php 
class Front extends Database{

    
//Check ev aadhar pan
public function ev_check_aadhar_pan($aadhar,$pan_no)
{
    $stmt = $this->con->prepare("SELECT * FROM ev_application WHERE  aadhar = :aadhar OR pan=:pan");
    $stmt->execute(array(':aadhar' => $aadhar,':pan' => $pan_no));  
    return $stmt->rowCount();
}


//Add ev  Application
public function add_ev_application($name,$dob,$mobile,$a_mobile,$aadhar,$pan_no,$address,$email,$district,$business,$vahan,$supervisor)
{
            
    $stmt = $this->con->prepare("INSERT INTO ev_application (name,mobile,a_mobile,email,aadhar,pan,dob,address,district,business,vahan,added_by) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");

    if($stmt->execute(array($name,$mobile,$a_mobile,$email,$aadhar,$pan_no,$dob,$address,$district,$business,$vahan,$supervisor)))

        return $this->con->lastInsertId();
    else
        return false;
    
}

//Check training aadhar
public function training_check_aadhar($aadhar)
{
    $stmt = $this->con->prepare("SELECT * FROM training_application WHERE  aadhar = :aadhar");
    $stmt->execute(array(':aadhar' => $aadhar));  
    return $stmt->rowCount();
}

//Add training Application
public function add_training_application($name,$dob,$mobile,$a_mobile,$address,$aadhar,$district,$supervisor)
{
            
    $stmt = $this->con->prepare("INSERT INTO training_application (name,mobile,a_mobile,aadhar,dob,district,address,added_by) VALUES (?,?,?,?,?,?,?,?)");

    if($stmt->execute(array($name,$mobile,$a_mobile,$aadhar,$dob,$district,$address,$supervisor)))

        return $this->con->lastInsertId();
    else
        return false;
    
}


//Check feedback
public function training_check_mobile_district($mobile,$district)
{
   
    $stmt = $this->con->prepare("SELECT * FROM feedback WHERE  mobile = :mobile AND district=:district");
    $stmt->execute(array(':mobile' => $mobile,':district' => $district));  
    return $stmt->rowCount();
}

//function to add feedback
public function add_new_feedback($name,$mobile,$training_date,$district,$trainingQuality,$trainingKit,$foodQuality,$satisfaction,$benefit,$futureTraining,$comment){

     $rating='5';
    if($satisfaction=='पूर्ण संतुष्ट'){
        $rating='5';

    }
    else if($satisfaction=='संतुष्ट'){
        $rating='4';
    }
    else{
        $rating='3';
    }

    $stmt = $this->con->prepare("INSERT INTO feedback (name,mobile,training_date,district,training_quality,training_kit,food_quality,satisfaction,benefit,future_training,comments,rating) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");

    if($stmt->execute(array($name,$mobile,$training_date,$district,$trainingQuality,$trainingKit,$foodQuality,$satisfaction,$benefit,$futureTraining,$comment,$rating)))

        return $this->con->lastInsertId();
    else
        return false;

}


public function add_media($event_id,$image_type,$image)
{
            
    $stmt = $this->con->prepare("INSERT INTO medias (e_id,type,name,upload) VALUES (?,?,?,?)");

    if($stmt->execute(array($event_id,$image_type,$image,'1')))

        return $this->con->lastInsertId();
    else
        return false;
    
}





//********************************************************Count************************************************************** *//
//All event  count....
public function event_count()
{
    $stmt = $this->con->prepare("SELECT COUNT(id) FROM events WHERE status=:status");
    $stmt->execute(array(':status' =>1)); 
    $row = $stmt->fetchColumn();
    return $row;
}

//All event  count....
public function completed_event_count()
{
    $stmt = $this->con->prepare("SELECT COUNT(id) FROM events WHERE e_status=:e_status AND status=:status");
    $stmt->execute(array(':e_status' =>'Completed',':status' =>1)); 
    $row = $stmt->fetchColumn();
    return $row;
}

//All training application count....
public function training_application_count()
{
    $stmt = $this->con->prepare("SELECT COUNT(id) FROM training_application");
    $stmt->execute();
    $row = $stmt->fetchColumn();
     return $row;
}

//All ev application count....
public function erickshaw_application_count()
{
    $stmt = $this->con->prepare("SELECT COUNT(id) FROM ev_application");
    $stmt->execute();
    $row = $stmt->fetchColumn();
     return $row;
}

//All Supervisor  count....
public function supervisor_count()
{
    $stmt = $this->con->prepare("SELECT COUNT(u_id) FROM users WHERE u_role=:u_role AND u_status=:u_status");
    $stmt->execute(array(':u_role' =>'Supervisor',':u_status' =>1)); 
    $row = $stmt->fetchColumn();
    return $row;
}

//All coordinator  count....
public function coordinator_count()
{
    $stmt = $this->con->prepare("SELECT COUNT(u_id) FROM users WHERE u_role=:u_role AND u_status=:u_status");
    $stmt->execute(array(':u_role' =>'Coordinator',':u_status' =>1)); 
    $row = $stmt->fetchColumn();
    return $row;
}

//All Trainees count....
public function trainee_count()
{
    $stmt = $this->con->prepare("SELECT COUNT(id) FROM trainees WHERE status=:status");
    $stmt->execute(array(':status' =>1)); 
    $row = $stmt->fetchColumn();
     return $row;
}

//All Mudra count....
public function mudra_form_count()
{
    $stmt = $this->con->prepare("SELECT COUNT(id) FROM medias WHERE type='Mudra' AND status=:status");
    $stmt->execute(array(':status' =>1)); 
    $row = $stmt->fetchColumn();
     return $row;
}

//All Event Trainees count....
public function event_trainee_count($event_id)
{
    $stmt = $this->con->prepare("SELECT COUNT(id) FROM trainees WHERE e_id=:e_id AND status=:status");
    $stmt->execute(array(':status' =>1,':e_id' =>$event_id)); 
    $row = $stmt->fetchColumn();
     return $row;
}



//All Trainees count....
public function event_trainee_registration_form_count($event_id)
{
    $stmt = $this->con->prepare("SELECT COUNT(id) FROM medias WHERE e_id=:e_id AND type='Registration' AND status=:status");
    $stmt->execute(array(':e_id' =>$event_id,':status' =>1)); 
    $row = $stmt->fetchColumn();
     return $row;
}

//All Trainees count....
public function event_trainee_mudra_form_count($event_id)
{
    $stmt = $this->con->prepare("SELECT COUNT(id) FROM medias WHERE e_id=:e_id AND type='Mudra' AND status=:status");
    $stmt->execute(array(':e_id' =>$event_id,':status' =>1)); 
    $row = $stmt->fetchColumn();
     return $row;
}

//All Trainees count....
public function event_trainee_attendance_form_count($event_id)
{
    $stmt = $this->con->prepare("SELECT COUNT(id) FROM medias WHERE e_id=:e_id AND type='Attendance' AND status=:status");
    $stmt->execute(array(':e_id' =>$event_id,':status' =>1)); 
    $row = $stmt->fetchColumn();
     return $row;
}

//All Trainees count....
public function event_trainee_picture_count($event_id)
{
    $stmt = $this->con->prepare("SELECT COUNT(id) FROM medias WHERE e_id=:e_id AND type='Picture' AND status=:status");
    $stmt->execute(array(':e_id' =>$event_id,':status' =>1)); 
    $row = $stmt->fetchColumn();
     return $row;
}

//All Trainees count....
public function event_trainer_count($event_id)
{
    $stmt = $this->con->prepare("SELECT COUNT(id) FROM trainers WHERE event_id=:event_id AND status=:status");
    $stmt->execute(array(':event_id' =>$event_id,':status' =>1)); 
    $row = $stmt->fetchColumn();
     return $row;
}

//All Trainees count....
public function event_guest_count($event_id)
{
    $stmt = $this->con->prepare("SELECT COUNT(id) FROM guest WHERE e_id=:e_id AND status=:status");
    $stmt->execute(array(':e_id' =>$event_id,':status' =>1)); 
    $row = $stmt->fetchColumn();
     return $row;
}


//All training application count district wise....
public function district_training_application_count($district)
{
    $stmt = $this->con->prepare("SELECT COUNT(id) FROM training_application WHERE district=:district AND status=:status");
    $stmt->execute(array(':district' =>$district,':status' =>1)); 
    $row = $stmt->fetchColumn();
    return $row;
}

//All All ev application count district wise.....
public function district_ev_application_count($district)
{
    $stmt = $this->con->prepare("SELECT COUNT(id) FROM ev_application WHERE district=:district AND status=:status");
    $stmt->execute(array(':district' =>$district,':status' =>1)); 
    $row = $stmt->fetchColumn();
    return $row;
}

//All event count district wise....
public function district_event_count($district)
{
    $stmt = $this->con->prepare("SELECT COUNT(id) FROM events WHERE district=:district AND status=:status");
    $stmt->execute(array(':district' =>$district,':status' =>1)); 
    $row = $stmt->fetchColumn();
    return $row;
}

//All Trainees count district wise....
public function district_trainee_count($district)
{
    $stmt = $this->con->prepare("SELECT COUNT(id) FROM trainees WHERE district=:district AND status=:status");
    $stmt->execute(array(':district' =>$district,':status' =>1)); 
    $row = $stmt->fetchColumn();
    return $row;
}


//All Trainees count district wise....
public function district_rating_count($district)
{
    $stmt = $this->con->prepare("SELECT COUNT(id) FROM feedback WHERE district=:district AND status=:status");
    $stmt->execute(array(':district' =>$district,':status' =>1)); 
    $row = $stmt->fetchColumn();
    return $row;
}

public function district_rating_sum($district)
{
    $stmt = $this->con->prepare("SELECT SUM(rating) AS rating_sum  FROM feedback WHERE district=:district AND status=:status");
    $stmt->execute(array(':district' =>$district,':status' =>1)); 
    $row = $stmt->fetchColumn();
    return $row;
}


//********************************************************Listing************************************************************** *//

//Get district list....
public function get_district()
{
    $stmt = $this->con->prepare("SELECT * FROM districts WHERE state=:state ORDER BY district ASC");
    $stmt->execute(array(':state' =>'Uttar Pradesh'));  
    return $stmt;
}

//Get district list....
public function get_planned_district()
{
    $stmt = $this->con->prepare("SELECT * FROM districts WHERE state=:state AND planned=:planned ORDER BY district ASC");
    $stmt->execute(array(':state' =>'Uttar Pradesh',':planned' =>'1'));  
    return $stmt;
}

//Get district list....
public function get_completed_district()
{
    $stmt = $this->con->prepare("SELECT COUNT(id) AS total, district FROM events  WHERE status=:status AND e_status=:e_status GROUP BY district ASC");
    $stmt->execute(array(':status' =>1,':e_status' =>'Completed'));  
    return $stmt;
}

//Get district list....
public function get_running_district()
{
    $stmt = $this->con->prepare("SELECT COUNT(id) AS total, district FROM events  WHERE status=:status AND e_status=:e_status GROUP BY district ASC");
    $stmt->execute(array(':status' =>1,':e_status' =>'Running'));  
    return $stmt;
}

//Get training appliaction list....
public function get_training_application()
{
    $stmt = $this->con->prepare("SELECT * FROM training_application ORDER BY id DESC");
    $stmt->execute();  
    return $stmt;
}
  

//Get ev application list....
public function get_ev_application()
{
    $stmt = $this->con->prepare("SELECT * FROM ev_application ORDER BY id DESC");
    $stmt->execute();  
    return $stmt;
}


//Get training appliaction report....
public function get_training_application_report()
{
    $stmt = $this->con->prepare("SELECT *, COUNT(id) as total FROM training_application GROUP BY district ASC");
    $stmt->execute();  
    return $stmt;
}

//Get ev application list....
public function get_ev_application_report()
{
    $stmt = $this->con->prepare("SELECT *, COUNT(id) as total FROM ev_application GROUP BY district ASC");
    $stmt->execute();  
    return $stmt;
}


//Get Supervisor list info....
public function get_supervisor_list_new()
{

    $stmt = $this->con->prepare("SELECT users.*,COUNT(DISTINCT ta.id) AS t_count,COUNT(DISTINCT ev.id) AS ev_count FROM users LEFT JOIN training_application AS ta ON users.u_id = ta.added_by LEFT JOIN ev_application AS ev ON users.u_id = ev.added_by WHERE users.u_role = :u_role AND users.u_status = :u_status AND users.firm_name=:firm_name GROUP BY users.u_id ORDER BY users.u_name ASC");
    $stmt->execute(array(':u_role' =>'Supervisor',':firm_name' =>'UPICON', ':u_status' =>1));  
    
    return $stmt;
}

//Get Supervisor list info....
public function get_supervisor_list()
{

    $stmt = $this->con->prepare("SELECT * FROM users WHERE u_role = :u_role AND u_status = :u_status AND firm_name != :firm_name ORDER BY firm_name ASC");
    $stmt->execute(array(':u_role' => 'Supervisor', ':u_status' => 1, ':firm_name' => 'UPICON'));
      
    
    return $stmt;
}

//Get Supervisor list info....
public function get_supervisor_list_upicon()
{

    $stmt = $this->con->prepare("SELECT * FROM users WHERE u_role = :u_role AND u_status = :u_status AND firm_name = :firm_name ORDER BY u_name ASC");
    $stmt->execute(array(':u_role' => 'Supervisor', ':u_status' => 1, ':firm_name' => 'UPICON'));
      
    
    return $stmt;
}



// Get Event list.......
public function get_completed_event_list()
{
   
    $stmt = $this->con->prepare("SELECT * FROM events  WHERE status=:status AND e_status=:e_status ORDER BY district ASC");
    $stmt->execute(array(':status' =>1,':e_status' =>'Completed'));  
    return $stmt;
}

// Get Event list.......
public function get_running_event_list()
{
   
    $stmt = $this->con->prepare("SELECT * FROM events  WHERE status=:status AND e_status=:e_status ORDER BY district ASC");
    $stmt->execute(array(':status' =>1,':e_status' =>'Running'));  
    return $stmt;
}


// Get Event list.......
public function get_event_list_quality()
{
   
    $stmt = $this->con->prepare("SELECT * FROM events  WHERE status=:status AND e_status=:e_status ORDER BY district,id ASC");
    $stmt->execute(array(':status' =>1,':e_status' =>'Running'));  
    return $stmt;
}

//Get Event latest images....
public function get_event_img()
{
    $stmt = $this->con->prepare("SELECT * FROM medias WHERE type=:type AND e_id=:e_id ORDER BY id DESC");
    $stmt->execute(array(':type' => 'Picture',':e_id' => '0'));  
    return $stmt;
}


//Get Event by id....
public function get_allevent($event_id)
{
   
    $stmt = $this->con->prepare("SELECT * FROM events WHERE id=:event_id");
    $stmt->execute(array(':event_id' => $event_id)); 
    return $stmt;
}

//Get Event image by id....
public function get_event_image($event_id)
{
    $stmt = $this->con->prepare("SELECT * FROM medias WHERE e_id = :e_id and type=:type AND status=:status ORDER BY id DESC");
    $stmt->execute(array(':e_id' => $event_id,':type' => 'Picture',':status' =>1));  
    return $stmt;
}


//Get Event image by id....
public function get_event_registration($event_id)
{
    $stmt = $this->con->prepare("SELECT * FROM medias WHERE e_id = :e_id and type=:type AND status=:status ORDER BY id DESC");
    $stmt->execute(array(':e_id' => $event_id,':type' => 'Registration',':status' =>1));  
    return $stmt;
}

//Get Event image by id....
public function get_event_trainee($event_id)
{
    $stmt = $this->con->prepare("SELECT * FROM trainees WHERE e_id = :e_id and status=:status ORDER BY name ASC");
    $stmt->execute(array(':e_id' => $event_id,':status' => '1'));  
    return $stmt;
}

//Get Event image by id....
public function get_event_trainer($event_id)
{
    $stmt = $this->con->prepare("SELECT * FROM trainers WHERE event_id = :e_id and status=:status ORDER BY training_date ASC");
    $stmt->execute(array(':e_id' => $event_id,':status' => '1'));  
    return $stmt;
}


//Get Event image by id....
public function get_event_guest($event_id)
{
    $stmt = $this->con->prepare("SELECT * FROM guest WHERE e_id = :e_id and status=:status ORDER BY v_date ASC");
    $stmt->execute(array(':e_id' => $event_id,':status' => '1'));  
    return $stmt;
}

//Get Event video by id....
public function get_event_video($event_id)
{
    $stmt = $this->con->prepare("SELECT * FROM medias WHERE e_id = :e_id and type=:type ORDER BY id DESC");
    $stmt->execute(array(':e_id' => $event_id,':type' => 'Video'));  
    return $stmt;
}

//Get Event muda by id....
public function get_event_mudra($event_id)
{
    $stmt = $this->con->prepare("SELECT * FROM medias WHERE e_id = :e_id and type=:type AND status=:status ORDER BY id DESC");
    $stmt->execute(array(':e_id' => $event_id,':type' => 'Mudra',':status' =>1));  
    return $stmt;
}

//Get Event attendance by id....
public function get_event_attendance($event_id)
{
    $stmt = $this->con->prepare("SELECT * FROM medias WHERE e_id = :e_id and type=:type AND status=:status ORDER BY id DESC");
    $stmt->execute(array(':e_id' => $event_id,':type' => 'Attendance',':status' =>1));  
    return $stmt;
}

//Get Supervisor by id....
public function get_supervisor_details($u_id)
{
   
    $stmt = $this->con->prepare("SELECT * FROM users WHERE u_id=:u_id");
    $stmt->execute(array(':u_id' => $u_id)); 
    return $stmt;
}

// Get Event list.......
public function get_supervisor_event_list($u_id)
{
   
    $stmt = $this->con->prepare("SELECT * FROM events  WHERE status=:status AND supervisor_id=:supervisor_id ORDER BY id DESC LIMIT 10");
    $stmt->execute(array(':status' =>1,':supervisor_id' => $u_id));  
    return $stmt;
}

//Get Supervisor  training application by id....
public function get_supervisor_training_application($u_id)
{
   
    $stmt = $this->con->prepare("SELECT * FROM training_application WHERE status=:status AND added_by=:added_by LIMIT 10");
    $stmt->execute(array(':status' =>1,':added_by' => $u_id)); 
    return $stmt;
}

//Get Supervisor  training application by id....
public function get_supervisor_ev_application($u_id)
{
   
    $stmt = $this->con->prepare("SELECT * FROM ev_application WHERE status=:status AND added_by=:added_by LIMIT 10");
    $stmt->execute(array(':status' =>1,':added_by' => $u_id)); 
    return $stmt;
}


// Get Event list.......
public function get_supervisor_event_report($u_id)
{
   
    $stmt = $this->con->prepare("SELECT district,count(id) as total FROM events  WHERE status=:status AND supervisor_id=:supervisor_id GROUP BY district");
    $stmt->execute(array(':status' =>1,':supervisor_id' => $u_id));  
    return $stmt;
}

//Get Supervisor  ev application by id....
public function get_supervisor_ev_application_report($u_id)
{
   
    $stmt = $this->con->prepare("SELECT district,count(id) AS total FROM ev_application WHERE status=:status AND added_by=:added_by GROUP BY district");
    $stmt->execute(array(':status' =>1,':added_by' => $u_id)); 
    return $stmt;
}

//Get Supervisor  training application by id....
public function get_supervisor_t_application_report($u_id)
{
   
    $stmt = $this->con->prepare("SELECT district,count(id) AS total FROM training_application WHERE status=:status AND added_by=:added_by GROUP BY district");
    $stmt->execute(array(':status' =>1,':added_by' => $u_id)); 
    return $stmt;
}


//Get Event report ....
public function get_event_report()
{
   
    $stmt = $this->con->prepare("SELECT district,count(id) AS total FROM events WHERE status=:status GROUP BY district");
    $stmt->execute(array(':status' =>1)); 
    return $stmt;
}

//Get trainee report....
public function get_trainee_report()
{
   
    $stmt = $this->con->prepare("SELECT district,count(id) AS total FROM trainees WHERE status=:status GROUP BY district");
    $stmt->execute(array(':status' =>1)); 
    return $stmt;
}



// Get District Event list.......
public function get_district_event_list($district)
{
   
    $stmt = $this->con->prepare("SELECT * FROM events  WHERE district=:district AND status=:status ORDER BY id ASC");
    $stmt->execute(array(':district' =>$district,':status' =>1));  
    return $stmt;
}



}
?>