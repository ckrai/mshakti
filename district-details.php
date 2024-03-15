<?php
require_once('manage/app/app_include/session.php');
require_once('manage/app/app_include/function.php');
include 'manage/app/action/class/front-class.php';

$district = $_GET['district'];
?>
<? 
if ($district == 'All') {
    $allevent  = new Front();
    $result = $allevent->get_event_list_quality();
} else {
    $allevent  = new Front();
    $result    = $allevent->get_district_event_list($district);
}
?>


<thead class="text-white text-nowrap" style="background-color: #FDD9AE;">
    <tr>
        <th class="text-white">SN</th>
        <th class="text-white">Event Name</th>
        <th class="text-white">Event Date</th>
        <th class="text-white">District</th>
        <th class="text-white">Trainee</th>
        <th class="text-white">Reg.</th>
        <th class="text-white">Mudra</th>
        <th class="text-white">Attend.</th>
        <th class="text-white">Picture</th>
        <th class="text-white">Trainer</th>
        <th class="text-white">Guest</th>
        <th class="text-white">Status</th>
        <th class="text-white">Action</th>
    </tr>
</thead>
<tbody>
    <?php
    
    $trainee  = new Front();

    $i = 0;
    $total_trainee = 0;
    $total_registration = 0;
    $total_mudra = 0;
    $total_attendance = 0;
    $total_picture = 0;
    $total_trainer = 0;
    $total_guest = 0;
    

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

        $i++;
        $trainee_count = $trainee->event_trainee_count($row['id']);
        $trainee_reg   = $trainee->event_trainee_registration_form_count($row['id']);
        $trainee_mudra = $trainee->event_trainee_mudra_form_count($row['id']);
        $trainee_attendance = $trainee->event_trainee_attendance_form_count($row['id']);
        $picture = $trainee->event_trainee_picture_count($row['id']);
        $trainer = $trainee->event_trainer_count($row['id']);
        $guest = $trainee->event_guest_count($row['id']);

        $total_trainee = $total_trainee + $trainee_count;
        $total_registration = $total_registration + $trainee_reg;
        $total_mudra = $total_mudra + $trainee_mudra;
        $total_attendance = $total_attendance + $trainee_attendance;
        $total_picture = $total_picture + $picture;
        $total_trainer = $total_trainer + $trainer;
        $total_guest = $total_guest + $guest;

        $start_date = $row['start_date'];
        $s_dateTime = new DateTime($start_date);
        $newDateFormat = $s_dateTime->format('j M');

        $end_date = $row['end_date'];
        $e_dateTime = new DateTime($end_date);
        $new2DateFormat = $e_dateTime->format('j M, y');
    ?>
        <tr>
            <td><?php echo $i; ?>.</td>
            <!-- <td><a href="event-information?event_id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></td> -->
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $newDateFormat.' - '.$new2DateFormat; ?></td>
            <td><?php echo $row['district']; ?></td>
            <td><?php echo $trainee_count; ?></td>
            <td><?php echo $trainee_reg; ?></td>
            <td><?php echo $trainee_mudra; ?></td>
            <td><?php echo $trainee_attendance; ?></td>
            <td><?php echo $picture; ?></td>
            <td><?php echo $trainer; ?></td>
            <td><?php echo $guest; ?></td>
            <td><?php echo $row['e_status']; ?></td>
            <td><a href="event-information?event_id=<?php echo $row['id']; ?>" class="btn btn-outline-primary btn-sm employers-btn" target="_blank">View <i class="fa fa-eye"></i></a></td>
            <!-- <td><a href="#" class="btn btn-outline-primary btn-sm employers-btn">View <i class="fa fa-eye"></i></a></td>   -->
        </tr>
    <?php } ?>
</tbody>
<thead class="text-white text-nowrap" style="background-color: #FDD9AE;">
    <tr>
        <th class="text-white"></th>
        <th class="text-white"></th>
        <th class="text-white"></th>
        <th class="text-white"></th>
        <th class="text-white"><?php echo $total_trainee; ?></th>
        <th class="text-white"><?php echo $total_registration; ?></th>
        <th class="text-white"><?php echo $total_mudra; ?></th>
        <th class="text-white"><?php echo $total_attendance; ?></th>
        <th class="text-white"><?php echo $total_picture; ?></th>
        <th class="text-white"><?php echo $total_trainer; ?></th>
        <th class="text-white"><?php echo $total_guest; ?></th>
        <th class="text-white"></th>
        <th class="text-white"></th>
    </tr>
</thead>