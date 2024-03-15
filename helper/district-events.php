<?php
require_once('manage/app/app_include/session.php');
require_once('manage/app/app_include/function.php');
include 'manage/app/action/class/front-class.php';

$district = $_GET['district'];

$allevent  = new Front();

$result    = $allevent->get_district_event_list($district);

$i = 0;

$response = [];

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

    $i++;

    $start_date = $row['start_date'];
    $s_dateTime = new DateTime($start_date);
    $newDateFormat = $s_dateTime->format('d-m-Y');

    $end_date = $row['end_date'];
    $e_dateTime = new DateTime($end_date);
    $new2DateFormat = $e_dateTime->format('d-m-Y');

    $temp = [
        "name" => $row['name'],
        "start_date" => $newDateFormat,
        "end_date" => $new2DateFormat,
        "district" => $row['district'],
    ];

    $response[$i] = $temp;
}   

echo json_encode($response);
?>
    