<?php require_once('manage/app/app_include/session.php'); ?>
<?php require_once('manage/app/app_include/function.php'); ?>
<?php include 'manage/app/action/class/front-class.php'; ?>
<!doctype html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

   <!--Google Analytics Start-->
   <?php include 'web_include/google_analytics.php'; ?>
   <!--Google Analytics End-->

   <!-- Title -->
   <title>Mission Shakti | Report </title>

   <!--Meta Data-->
   <?php include 'web_include/meta_data.php'; ?>
   <!--/Meta Data-->



   <link rel="stylesheet" href="assets/fonts/fonts/font-awesome.min.css">
   <!-- Bootstrap Css -->
   <link id="style" href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <!-- Dashboard Css -->
   <link href="assets/css/style.css" rel="stylesheet" />
   <link href="assets/css/dark-style.css" rel="stylesheet" />
   <link href="assets/css/transparent-style.css" rel="stylesheet" />
   <!-- Font-awesome  Css -->
   <link href="assets/css/transparent-style.css" rel="stylesheet" />
   <!--Select2 Plugin -->
   <link href="assets/plugins/select2/select2.min.css" rel="stylesheet" />
   <!-- Owl Theme css-->
   <link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />
   <!-- Custom scroll bar css-->
   <link href="assets/plugins/pscrollbar/pscrollbar.css" rel="stylesheet" />
   <!--  ratings2 Plugin -->
   <link href="assets/plugins/ratings-2/star-rating-svg.css" rel="stylesheet" />
   <!-- COLOR-SKINS -->
   <link id="theme" rel="stylesheet" type="text/css" media="all" href="assets/color-skins/color-skins/color10.css" />
   <link rel="stylesheet" href="assets/color-skins/demo.css" />
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
</head>

<body>

   <!--Loader-->
   <div id="global-loader">
      <img src="assets/images/loader.svg" class="loader-img" alt="">
   </div>

   <!--Topbar-->
   <?php include 'web_include/web_navbar.php'; ?>
   <!--/Topbar-->

   <div class="bannerimg cover-image bg-background3">
      <div class="header-text mb-0">
         <div class="container">
            <div class="text-center text-white ">
               <h1 class="">Report</h1>
               <ol class="breadcrumb text-center">
                  <li class="breadcrumb-item"><a href="index">Home</a></li>
                  <li class="breadcrumb-item active text-white" aria-current="page">Report</li>
               </ol>
            </div>
         </div>
      </div>
   </div>

   <!--Numbers Highlights-->
   <section class="sptb pb-2 pt-2 bg-white">
      <div class="container">
         <div class="row no-gutters  row-deck find-job">
            <div class="col-md-2 col-sm-2">
               <div class="p-0 mt-5 mt-md-0 w-100">
                  <div class="card-body text-center">
                     <div class="icon-bg  icon-service  text-purple mb-4" style="width:100px; height:100px;">
                        <img src="images/home/home_event.png" class="brround avatar-md w-100 h-100" alt="To be Trained">
                     </div>
                     <?php
                     $eventcount  = new Front();
                     $result = $eventcount->event_count();
                     ?>
                     <h2 class="font-weight-bold mb-0 fs-20  MT-0 leading-tight" style="color: #DF1755;"><?php echo $result; ?></h2>
                     <p>Event</p>
                  </div>
               </div>
            </div>
            <div class="col-md-2 col-sm-2">
               <div class="p-0 mt-5 mt-md-0 w-100">
                  <div class="card-body text-center">
                     <div class="icon-bg  icon-service  text-purple mb-4" style="width:100px; height:100px;">
                        <img src="images/home/home_training.png" class="brround avatar-md w-100 h-100" alt="District">
                     </div>
                     <?php
                     $tacount  = new Front();
                     $resultc = $tacount->training_application_count();
                     ?>
                     <h2 class="font-weight-bold mb-0 fs-20  MT-0 leading-tight" style="color: #DF1755;"><?php echo $resultc; ?></h2>
                     <p>Training Application </p>
                  </div>
               </div>
            </div>
            <div class="col-md-2 col-sm-2">
               <div class="p-0 mt-5 mt-md-0 w-100">
                  <div class="card-body text-center">
                     <div class="icon-bg  icon-service  text-purple mb-4" style="width:100px; height:100px;">
                        <img src="images/home/home_ev.png" class="brround avatar-md w-100 h-100" alt="Trained">
                     </div>
                     <?php
                     $evcount  = new Front();
                     $resultt = $evcount->erickshaw_application_count();
                     ?>
                     <h2 class="font-weight-bold mb-0 fs-20  MT-0 leading-tight" style="color: #DF1755;"><?php echo $resultt; ?></h2>
                     <p>EV Application</p>
                  </div>
               </div>
            </div>
            <div class="col-md-2 col-sm-2">
               <div class="p-0 mt-5 mt-md-0 w-100">
                  <div class="card-body text-center">
                     <div class="icon-bg  icon-service  text-purple mb-4" style="width:100px; height:100px;">
                        <img src="images/home/home_supervisor.png" class="brround avatar-md w-100 h-100" alt="Trained">
                     </div>
                     <?php
                     $scount  = new Front();
                     $resultt = $scount->supervisor_count();
                     ?>
                     <h2 class="font-weight-bold mb-0 fs-20  MT-0 leading-tight" style="color: #DF1755;"><?php echo $resultt; ?></h2>
                     <p>Supervisor</p>
                  </div>
               </div>
            </div>
            <div class="col-md-2 col-sm-2">
               <div class="p-0 mt-5 mt-md-0 w-100">
                  <div class="card-body text-center">
                     <div class="icon-bg  icon-service  text-purple mb-4" style="width:100px; height:100px;">
                        <img src="images/home/home_trainer.png" class="brround avatar-md w-100 h-100" alt="Trained">
                     </div>
                     <?php
                     $tcount  = new Front();
                     $resultt = $tcount->coordinator_count();
                     ?>
                     <h2 class="font-weight-bold mb-0 fs-20  MT-0 leading-tight" style="color: #DF1755;"><?php echo $resultt; ?></h2>
                     <p>Coordinator</p>
                  </div>
               </div>
            </div>
            <div class="col-md-2 col-sm-2">
               <div class="p-0 mt-5 mt-md-0 w-100">
                  <div class="card-body text-center">
                     <div class="icon-bg  icon-service  text-purple mb-4" style="width:100px; height:100px;">
                        <img src="images/home/home_trainee.png" class="brround avatar-md w-100 h-100" alt="Trained">
                     </div>
                     <?php
                     $trainee  = new Front();
                     $resulttr = $trainee->trainee_count();
                     ?>
                     <h2 class="font-weight-bold mb-0 fs-20  MT-0 leading-tight" style="color: #DF1755;"><?php echo $resulttr; ?></h2>
                     <p>Trainee</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--/Numbers Highlights-->

   <!--Pie graph-->
   <section class="sptb pb-2 pt-2 bg-white">
      <div class="container">
         <div class="row">

            <div class="col-xl-6 col-lg-4 col-md-12">
               <div class="card">
                  <div class="card-header" style="background-color: #FBD3D5;">
                     <h3 class="card-title">Our mission: Empowering Women Through Education and Training</h3>
                  </div>

                  <div class="col-md-12 col-sm-2">
                     <div id="piechart"></div>
                     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                     <script type="text/javascript">
                        // Load google charts
                        google.charts.load('current', {
                           'packages': ['corechart']
                        });
                        google.charts.setOnLoadCallback(drawChart);

                        // Draw the chart and set the chart values
                        function drawChart() {
                           var data = google.visualization.arrayToDataTable([
                              ['Trained', 'To be Trained'],
                              ['Trained', <?php echo $resulttr; ?>],
                              ['To be Trained', 75000]
                           ]);

                           // Optional; add a title and set the width and height of the chart
                           var options = {
                              'title': ' ',
                              'width': 500,
                              'height': 250
                           };

                           // Display the chart inside the <div> element with id="piechart"
                           var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                           chart.draw(data, options);
                        }
                     </script>
                  </div>
               </div>
            </div>

            <div class="col-xl-6 col-lg-4 col-md-12">
               <div class="card">
                  <div class="card-header" style="background-color: #E8F3E3;">
                     <h3 class="card-title">Empowering Women: Our Mission - Successfully Achieving</h3>
                  </div>

                  <div class="col-md-12 col-sm-2">
                     <div id="piechart2"></div>
                     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                     <script type="text/javascript">
                        // Load google charts
                        google.charts.load('current', {
                           'packages': ['corechart']
                        });
                        google.charts.setOnLoadCallback(drawChart);

                        // Draw the chart and set the chart values
                        function drawChart() {
                           // Create a JavaScript array to store the data
                           var chartData = [
                              ['Women', 'Count']
                           ];

                           // Add data from PHP to the chartData array
                           <?php
                           $allevent  = new Front();
                           $result    = $allevent->get_trainee_report();
                           while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                              $district = $row['district'] . '-' . $row['total'];
                              $total = $row['total'];
                              echo "chartData.push(['$district', $total]);";
                           }
                           ?>

                           // Convert the JavaScript array to a Google DataTable
                           var data = google.visualization.arrayToDataTable(chartData);

                           // Optional; add a title and set the width and height of the chart
                           var options = {
                              'title': ' ',
                              'width': 500,
                              'height': 250
                           };

                           // Display the chart inside the <div> element with id="piechart"
                           var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
                           chart.draw(data, options);
                        }
                     </script>
                  </div>
               </div>
            </div>

            <!-- <div class="col-xl-4 col-lg-4 col-md-12">
                  <div class="card">
                     <div class="card-header" style="background-color: #E8F3E3;">
                        <h3 class="card-title">Empowering Women: Our Mission - Successfully Achieving</h3>
                     </div>
                     <div class="card-body">
                        <div class="table-responsive border-top mb-0 ">
                           <table class="table table-bordered table-hover  mb-0">
                              <thead class="text-white text-nowrap"style="background-color: #FDD9AE;" >
                                 <tr>
                                    <th class="text-white">S.N</th>
                                    <th class="text-white">District</th>
                                    <th class="text-white">Count</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                 $treport  = new Front();
                                 $result    = $treport->get_trainee_report();
                                 $i = 0;
                                 while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                    $i++;
                                 ?>
                                 <tr>
                                    <td><?php echo $i; ?>.</td>
                                    <td><?php echo $row['district']; ?></td>
                                    <td><?php echo $row['total']; ?></td>
                                   </tr>
                                 <?php } ?>
                              </tbody>
                           </table>
                        </div>
                     </div>

                  </div>
               </div> -->

         </div>
      </div>
   </section>
   <!--/Pie graph-->


   <!--District list-->
   <section class="sptb bg-white">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 web-news ajax-table-data">
               <div class="card">
                  <div class="section-title center-block text-center">
                     <br>
                     <h2 class="font-weight-bold mb-0 fs-22  MT-0 leading-tight" style="color: #DF1755;">Report</h2>
                     <p>District wise Report</p>
                  </div>
                  <div class="card-body">
                     <div class="table-responsive border-top mb-0 ">
                        <table class="table table-bordered table-hover  mb-0">
                           <thead class="text-white text-nowrap" style="background-color: #FDD9AE;">
                              <tr>
                                 <th class="text-white">S.N</th>
                                 <th class="text-white">District</th>
                                 <th class="text-white">Training Application</th>
                                 <th class="text-white">E-Rickshaw Application</th>
                                 <th class="text-white">Events</th>
                                 <th class="text-white">Trainee</th>

                              </tr>
                           </thead>
                           <tbody>
                              <?php
                              $taresult  = new Front();
                              $result    = $taresult->get_district();
                              $i = 0;
                              $total_tac = 0;
                              $total_eac = 0;
                              $total_ec = 0;
                              $total_tc = 0;
                              while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                 $i++;
                                 $tac    = $taresult->district_training_application_count($row['district']);
                                 $eac    = $taresult->district_ev_application_count($row['district']);
                                 $ec     = $taresult->district_event_count($row['district']);
                                 $tc     = $taresult->district_trainee_count($row['district']);

                                 $total_tac = $total_tac + $tac;
                                 $total_eac = $total_eac + $eac;
                                 $total_ec = $total_ec + $ec;
                                 $total_tc = $total_tc + $tc;

                              ?>
                                 <tr>
                                    <td><?php echo $i; ?>.</td>
                                    <td><a href="district-information?district=<?php echo $row['district'];?>" class="me-4 text-dark "><?php echo $row['district']; ?></a></a></td>
                                    <!-- <td><?php echo $row['district']; ?></td> -->
                                    <td><?php echo $tac; ?></td>
                                    <td><?php echo $eac; ?></td>
                                    <td><?php echo $ec; ?></td>
                                    <td><?php echo $tc; ?></td>

                                 </tr>
                              <?php } ?>
                           </tbody>
                           <thead class="text-white text-nowrap" style="background-color: #FDD9AE;">
                              <tr>
                                 <th class="text-white"> </th>
                                 <th class="text-white">Total</th>
                                 <th class="text-white"><?php echo $total_tac; ?></th>
                                 <th class="text-white"><?php echo $total_eac; ?></th>
                                 <th class="text-white"><?php echo $total_ec; ?></th>
                                 <th class="text-white"><?php echo $total_tc; ?></th>

                              </tr>
                           </thead>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--/District list


   <!--Report list-->
   <!-- <section class="sptb bg-white">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 web-news ajax-table-data">
               <div class="card">
                  <div class="section-title center-block text-center">
                     <br>
                     <h2 class="font-weight-bold mb-0 fs-22  MT-0 leading-tight" style="color: #DF1755;">Training</h2>
                     <p>Application Report</p>
                  </div>
                  <div class="card-body">
                     <div class="table-responsive border-top mb-0 ">
                        <table class="table table-bordered table-hover  mb-0">
                           <thead class="text-white text-nowrap" style="background-color: #FDD9AE;">
                              <tr>
                                 <th class="text-white">S.N</th>
                                 <th class="text-white">District</th>
                                 <th class="text-white">Count</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                              $taresult  = new Front();
                              $result    = $taresult->get_training_application_report();
                              $i = 0;
                              while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                 $i++;
                              ?>
                                 <tr>
                                    <td><?php echo $i; ?>.</td>
                                    <td><?php echo $row['district']; ?></td>
                                    <td><?php echo $row['total']; ?></td>
                                 </tr>
                              <?php } ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 web-news ajax-table-data">
               <div class="card">
                  <div class="section-title center-block text-center">
                     <br>
                     <h2 class="font-weight-bold mb-0 fs-22  MT-0 leading-tight" style="color: #DF1755;">E-Rickshaw</h2>
                     <p>Application Report</p>
                  </div>
                  <div class="card-body">
                     <div class="table-responsive border-top mb-0 ">
                        <table class="table table-bordered table-hover  mb-0">
                           <thead class="text-white text-nowrap" style="background-color: #FDD9AE;">
                              <tr>
                                 <th class="text-white">S.N</th>
                                 <th class="text-white">District</th>
                                 <th class="text-white">Count</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                              $evreport  = new Front();
                              $result    = $evreport->get_ev_application_report();
                              $i = 0;
                              while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                 $i++;
                              ?>
                                 <tr>
                                    <td><?php echo $i; ?>.</td>
                                    <td><?php echo $row['district']; ?></td>
                                    <td><?php echo $row['total']; ?></td>
                                 </tr>
                              <?php } ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <!--/Report list-->

   <!--Report list-->
   <!-- <section class="sptb bg-white">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 web-news ajax-table-data">
               <div class="card">
                  <div class="section-title center-block text-center">
                     <br>
                     <h2 class="font-weight-bold mb-0 fs-22  MT-0 leading-tight" style="color: #DF1755;">Events</h2>
                     <p>Event Report</p>
                  </div>
                  <div class="card-body">
                     <div class="table-responsive border-top mb-0 ">
                        <table class="table table-bordered table-hover  mb-0">
                           <thead class="text-white text-nowrap" style="background-color: #FDD9AE;">
                              <tr>
                                 <th class="text-white">S.N</th>
                                 <th class="text-white">District</th>
                                 <th class="text-white">Count</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                              $evreport  = new Front();
                              $result    = $evreport->get_event_report();
                              $i = 0;
                              while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                 $i++;
                              ?>
                                 <tr>
                                    <td><?php echo $i; ?>.</td>
                                    <td><?php echo $row['district']; ?></td>
                                    <td><?php echo $row['total']; ?></td>
                                 </tr>
                              <?php } ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 web-news ajax-table-data">
               <div class="card">
                  <div class="section-title center-block text-center">
                     <br>
                     <h2 class="font-weight-bold mb-0 fs-22  MT-0 leading-tight" style="color: #DF1755;">Trainee</h2>
                     <p>Trainee Report</p>
                  </div>
                  <div class="card-body">
                     <div class="table-responsive border-top mb-0 ">
                        <table class="table table-bordered table-hover  mb-0">
                           <thead class="text-white text-nowrap" style="background-color: #FDD9AE;">
                              <tr>
                                 <th class="text-white">S.N</th>
                                 <th class="text-white">District</th>
                                 <th class="text-white">Count</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                              $treport  = new Front();
                              $result    = $treport->get_trainee_report();
                              $i = 0;
                              while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                 $i++;
                              ?>
                                 <tr>
                                    <td><?php echo $i; ?>.</td>
                                    <td><?php echo $row['district']; ?></td>
                                    <td><?php echo $row['total']; ?></td>
                                 </tr>
                              <?php } ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <!--/Report list-->

   <!--Supervisor list-->
   <section class="sptb bg-white">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 web-news ajax-table-data">
               <div class="card">
                  <div class="section-title center-block text-center">
                     <br>
                     <h2 class="font-weight-bold mb-0 fs-22  MT-0 leading-tight" style="color: #DF1755;">Supervisors</h2>
                     <p>Supervisor List</p>
                  </div>
                  <div class="card-body">
                     <div class="table-responsive border-top mb-0 ">
                        <table class="table table-bordered table-hover  mb-0">
                           <thead class="text-white text-nowrap" style="background-color: #FDD9AE;">
                              <tr>
                                 <th class="text-white">S.N.</th>
                                 <th class="text-white">UID</th>
                                 <th class="text-white">Firm</th>
                                 <th class="text-white">Owner</th>
                                 <th class="text-white">Mobile</th>
                                 <!-- <th class="text-white">TAC</th>
                                    <th class="text-white">EAC</th> -->
                                 <!-- <th class="text-white">Status</th> -->
                                 <th class="text-white">Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                              $sfront  = new Front();
                              $result    = $sfront->get_supervisor_list();
                              $i = 0;
                              while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                 $i++;
                                 $active      = $row['u_status'];
                              ?>
                                 <tr>
                                    <td><?php echo $i; ?>.</td>
                                    <td><strong><?php echo $row['u_id']; ?></strong></td>
                                    <td><strong><?php echo $row['firm_name']; ?></strong><br>(<?php echo $row['training_center']; ?>)</td>
                                    <td><?php echo $row['u_name']; ?></td>
                                    <td><?php echo $row['u_mobile']; ?></td>
                                    <!-- <td><strong><?php echo $row['t_count']; ?></strong></td>
                                    <td><strong><?php echo $row['ev_count']; ?></strong></td> -->
                                    <?php
                                    $activeText = "";
                                    if ($active == 0) {
                                       $activeText = "Deactivated";
                                    } else {
                                       $activeText = "Active";
                                    }
                                    ?>
                                    <!-- <td><?php echo $activeText ?></td> -->
                                    <!-- <td><a href="supervisor" class="btn btn-outline-primary btn-sm employers-btn">View <i class="fa fa-eye"></i></a></td>   -->
                                    <td><a href="supervisor?u_id=<?php echo $row['u_id']; ?>" class="btn btn-outline-primary btn-sm employers-btn">View <i class="fa fa-eye"></i></a></td>
                                 </tr>
                              <?php } ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--/Supervisor list-->

   <!--AOE list-->
   <section class="sptb bg-white">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 web-news ajax-table-data">
               <div class="card">
                  <div class="section-title center-block text-center">
                     <br>
                     <h2 class="font-weight-bold mb-0 fs-22  MT-0 leading-tight" style="color: #DF1755;">Area Operations Executive</h2>
                     <p>Area Operations Executive List</p>
                  </div>
                  <div class="card-body">
                     <div class="table-responsive border-top mb-0 ">
                        <table class="table table-bordered table-hover  mb-0">
                           <thead class="text-white text-nowrap" style="background-color: #FDD9AE;">
                              <tr>
                                 <th class="text-white">S.N.</th>
                                 <th class="text-white">UID</th>
                                 <th class="text-white">Firm</th>
                                 <th class="text-white">AOE Name</th>
                                 <th class="text-white">Mobile</th>
                                 <!-- <th class="text-white">TAC</th>
                                    <th class="text-white">EAC</th> -->
                                 <!-- <th class="text-white">Status</th> -->
                                 <th class="text-white">Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                              $sfront  = new Front();
                              $result    = $sfront->get_supervisor_list_new();
                              $i = 0;
                              while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                 $i++;
                                 $active      = $row['u_status'];
                              ?>
                                 <tr>
                                    <td><?php echo $i; ?>.</td>
                                    <td><strong><?php echo $row['u_id']; ?></strong></td>
                                    <td><strong><?php echo $row['firm_name']; ?></strong><br>(<?php echo $row['training_center']; ?>)</td>
                                    <td><?php echo $row['u_name']; ?></td>
                                    <td><?php echo $row['u_mobile']; ?></td>
                                    <!-- <td><strong><?php echo $row['t_count']; ?></strong></td>
                                    <td><strong><?php echo $row['ev_count']; ?></strong></td> -->
                                    <?php
                                    $activeText = "";
                                    if ($active == 0) {
                                       $activeText = "Deactivated";
                                    } else {
                                       $activeText = "Active";
                                    }
                                    ?>
                                    <!-- <td><?php echo $activeText ?></td> -->
                                    <!-- <td><a href="supervisor" class="btn btn-outline-primary btn-sm employers-btn">View <i class="fa fa-eye"></i></a></td>   -->
                                    <td><a href="supervisor?u_id=<?php echo $row['u_id']; ?>" class="btn btn-outline-primary btn-sm employers-btn">View <i class="fa fa-eye"></i></a></td>
                                 </tr>
                              <?php } ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--/Supervisor list-->


   <!--Footer Section-->
   <?php include 'web_include/web_footer.php'; ?>
   <!--Footer Section-->


   <!--Chat Section-->
   <script src="//code.tidio.co/qzcv6uu0f30uubc7ji0mti2sumkxxcf3.js" async></script>
   <!--/Chat Section-->

   <!-- Back to top -->
   <div class="top-bar d-none d-sm-block">
      <a href="#top" id="back-to-top"><i class="fa fa-arrow-up"></i></a>
   </div>

   <!-- Back to top -->
   <!-- <a href="#top" id="back-to-top"><i class="fa fa-arrow-up"></i></a> -->
   <!-- /Back to top -->

   <!-- JQuery js-->
   <script src="assets/js/vendors/jquery.min.js"></script>
   <!-- Bootstrap js -->
   <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
   <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
   <!--JQuery Sparkline Js-->
   <script src="assets/js/vendors/jquery.sparkline.min.js"></script>
   <!-- Circle Progress Js-->
   <script src="assets/js/vendors/circle-progress.min.js"></script>
   <!-- Star Rating Js-->
   <script src="assets/plugins/rating/jquery-rate-picker.js"></script>
   <script src="assets/plugins/rating/rating-picker.js"></script>
   <!-- Star Rating-1 Js-->
   <script src="assets/plugins/ratings-2/jquery.star-rating.js"></script>
   <script src="assets/plugins/ratings-2/star-rating.js"></script>
   <!--Owl Carousel js -->
   <script src="assets/plugins/owl-carousel/owl.carousel.js"></script>
   <script src="assets/js/owl-carousel.js"></script>
   <!--Horizontal Menu-->
   <script src="assets/plugins/horizontal/horizontal-menu/horizontal.js"></script>
   <!--Counters -->
   <script src="assets/plugins/counters/counterup.min.js"></script>
   <script src="assets/plugins/counters/waypoints.min.js"></script>
   <script src="assets/plugins/counters/numeric-counter.js"></script>
   <!--JQuery TouchSwipe js-->
   <script src="assets/js/jquery.touchSwipe.min.js"></script>
   <!--Select2 js -->
   <script src="assets/plugins/select2/select2.full.min.js"></script>
   <script src="assets/js/select2.js"></script>
   <!-- Cookie js -->
   <script src="assets/plugins/cookie/jquery.ihavecookies.js"></script>
   <script src="assets/plugins/cookie/cookie.js"></script>
   <!-- Count Down-->
   <script src="assets/plugins/count-down/jquery.lwtCountdown-1.0.js"></script>
   <!-- Ion.RangeSlider -->
   <script src="assets/plugins/jquery-uislider/jquery-ui.js"></script>
   <!-- Custom scroll bar Js-->
   <script src="assets/plugins/pscrollbar/pscrollbar.js"></script>
   <!-- Vertical scroll bar Js-->
   <script src="assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js"></script>
   <script src="assets/plugins/vertical-scroll/vertical-scroll.js"></script>
   <!-- sticky Js-->
   <script src="assets/js/sticky.js"></script>
   <!-- Swipe Js-->
   <script src="assets/js/swipe.js"></script>
   <!-- Scripts Js-->
   <script src="assets/js/scripts2.js"></script>
   <!-- Showmore Js-->
   <script src="assets/js/jquery.showmore.js"></script>
   <script src="assets/js/showmore.js"></script>
   <!-- Custom Js-->
   <script src="assets/js/themecolors.js"></script>
   <script src="assets/js/custom.js"></script>
   <script src="assets/notiflix/notiflix-notify-aio-3.2.5.min.js"></script>
   <script src="assets/notiflix/notiflix-report-aio-3.2.5.min.js"></script>
   <script src="assets/notiflix/notiflix-confirm-aio-3.2.5.min.js"></script>
   <script src="assets/notiflix/notiflix-loading-aio-3.2.5.min.js"></script>
   <script src="assets/notiflix/notiflix-block-aio-3.2.5.min.js"></script>
   <script src="assets/js/admin.js"></script>
   <script src="assets/js/web.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>