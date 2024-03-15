<?php require_once('manage/app/app_include/session.php'); ?> 
<?php require_once('manage/app/app_include/function.php'); ?>
<?php include 'manage/app/action/class/front-class.php';?> 
 
 <?php
   $u_id = $_GET['u_id'];
   $supervisor  = new Front();
   $result    = $supervisor->get_supervisor_details($u_id);
   $row       = $result->fetch(PDO::FETCH_ASSOC);
  ?>

<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <!--Google Analytics Start-->
     <?php include 'web_include/google_analytics.php';?>
    <!--Google Analytics End-->

    <!-- Title -->
    <title>Mission Shakti | Supervisor Details</title>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
  </head>
  <body>

    <!--Loader-->
    <div id="global-loader">
      <img src="assets/images/loader.svg" class="loader-img" alt="">
    </div>
   <!--/Loader-->


    <!--Topbar--> 
    <?php include 'web_include/web_navbar.php';?>
    <!--/Topbar-->
   
    <!--Breadcrumb-->
    <div class="bannerimg cover-image bg-background3">
      <div class="header-text mb-0">
        <div class="container">
          <div class="text-center text-white ">
            <h1 class=""> <?php echo $row['firm_name']; ?> </h1>
            <ol class="breadcrumb text-center">
              <li class="breadcrumb-item">
                <a href="index">Home</a>
              </li>
              <li class="breadcrumb-item active text-white" aria-current="page">Supervisor Details</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!--/Breadcrumb-->


    <!--Supervisor Deatails-->
    <section class="sptb pb-2 pt-2 bg-white">
      <div class="container">
        <div class="row">
           <div class="col-xl-12 col-lg-4 col-md-12">
              <div class="card-header" style="background-color: #FDD9AE;"><h3 class="card-title"> <?php echo $row["firm_name"]; ?> </h3></div>
                <div class="card">
                  <div class="wideget-user-tab">
                    <div class="tab-menu-heading">
                      <div class="tabs-menu1">
                        <ul class="nav">
                          <li><a href="#profile" data-bs-toggle="tab" class="active">Profile</a></li>
                          <li><a href="#district" data-bs-toggle="tab">Allotted Districts</a></li>
                          <li><a href="#event" data-bs-toggle="tab">Latest Events</a></li>
                          <li><a href="#training" data-bs-toggle="tab">Training Applications</a></li>
                          <li><a href="#ev" data-bs-toggle="tab" class="">E-Rickshwa Applications</a></li>
                          <li><a href="#report" data-bs-toggle="tab" class="">Report</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="border-0">
                      <div class="tab-content">

                          <div class="tab-pane active" id="profile">
                            <div class="card-body">
                             <div class="list-catergory">
                               <div class="item-list">
                                 <ul class="list-group mb-0">
                                   <li class="list-group-item"><a href="#" class="text-dark"><i class="fa fa-file-text-o bg-primary text-primary"></i> <?php echo "Mobile : " .$row["u_mobile"]; ?></a></li>
                                   <li class="list-group-item "><a href="#" class="text-dark"><i class="fa fa-file-text-o bg-success text-success"></i> <?php echo "Email : " .$row["u_email"]; ?></a></li>
                                   <li class="list-group-item "><a href="#" class="text-dark"><i class="fa fa-file-text-o bg-info text-info"></i> <?php echo "Firm : " .$row["firm_name"]; ?></a></li>
                                  </ul>
                               </div>
                             </div>
                           </div>
                          </div>

                          <div class="tab-pane" id="district">
                            <div class="card-body">
                             <div class="list-catergory">
                               <div class="item-list">
                                 <ul class="list-group mb-0">
                                   <!-- <li class="list-group-item"><a href="#" class="text-dark"><i class="fa fa-file-text-o bg-warning text-warning"></i> Allotted Districts :</a></li> -->
                                   <?php
                                      $districts = $row["training_center"];
                                      $districtList = explode(",", $districts);

                                     foreach ($districtList as $index => $district) {
                                         $number = $index + 1;
                                         echo '<li class="list-group-item" style="margin-bottom: 0.5em; list-style-type: disclosure-closed; margin-left: 10px;">' .$number .". " .$district ."</li>";
                                      }
                                    ?>
                                  </ul>
                               </div>
                             </div>
                           </div>
                          </div>

                          <div class="tab-pane" id="event">
                            <div class="card-body">
                              <div class="table-responsive border-top mb-0 ">
                               <table class="table table-bordered table-hover  mb-0">
                                 <thead class="text-white text-nowrap"style="background-color: #FDD9AE;" >
                                 <tr>
                                    <th class="text-white">S. No.</th>
                                    <th class="text-white">Name</th>
                                    <th class="text-white">Start Date</th>
                                    <th class="text-white">District</th>
                                    <th class="text-white">State</th>
                                    <th class="text-white">Status</th>
                                    <th class="text-white">Action</th>
                                 </tr>
                                 </thead>
                                 <tbody>
                                 <?php
                                    $allevent  = new Front();
                                    $result    = $allevent->get_supervisor_event_list($u_id);
                                    $i = 0;
                                    while($row = $result->fetch(PDO::FETCH_ASSOC))
                                    {
                                    $i++;
                                    $start_date=$row['start_date']." ".$row['start_time'];
                                    $s_dateTime = new DateTime($start_date);
                                    $newDateFormat = $s_dateTime->format('j F, y g:i A');
                                 ?>
                                 <tr>
                                    <td><?php echo $i; ?>.</td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $newDateFormat; ?></td>
                                    <td><?php echo $row['district']; ?></td>
                                    <td><?php echo $row['state']; ?></td>
                                    <td><?php echo $row['e_status']; ?></td>
                                    <td><a href="event-information?event_id=<?php echo $row['id']; ?>" class="btn btn-outline-primary btn-sm employers-btn">View <i class="fa fa-eye"></i></a></td>  
                                 </tr>
                                 <?php } ?>
                                 </tbody>
                               </table>
                             </div> 
                           </div>
                          </div>

                          <div class="tab-pane" id="training">
                            <div class="card-body">
                              <div class="table-responsive border-top mb-0 ">
                               <table class="table table-bordered table-hover  mb-0">
                                 <thead class="text-white text-nowrap"style="background-color: #FDD9AE;" >
                                 <tr>
                                    <th class="text-white">S. No.</th>
                                    <th class="text-white">Name</th>
                                    <th class="text-white">Mobile</th>
                                    <th class="text-white">Adhaar</th>
                                    <th class="text-white">DOB</th>
                                    <th class="text-white">District</th>
                                    <th class="text-white">Address</th>
                                    <!-- <th class="text-white">Action</th> -->
                                 </tr>
                                 </thead>
                                 <tbody>
                                 <?php
                                    $allevent  = new Front();
                                    $result    = $allevent->get_supervisor_training_application($u_id);
                                    $i = 0;
                                    while($row = $result->fetch(PDO::FETCH_ASSOC))
                                    {
                                    $i++;
                                 ?>
                                 <tr>
                                    <td><?php echo $i; ?>.</td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['mobile']; ?></td>
                                    <td><?php echo $row['aadhar']; ?></td>
                                    <td><?php echo $row['dob']; ?></td>
                                    <td><?php echo $row['district']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <!-- <td><a href="event-information?event_id=<?php echo $row['id']; ?>" class="btn btn-outline-primary btn-sm employers-btn">View <i class="fa fa-eye"></i></a></td>   -->
                                 </tr>
                                 <?php } ?>
                                 </tbody>
                               </table>
                             </div> 
                           </div>
                          </div>


                          <div class="tab-pane" id="ev">
                            <div class="card-body">
                              <div class="table-responsive border-top mb-0 ">
                               <table class="table table-bordered table-hover  mb-0">
                                 <thead class="text-white text-nowrap"style="background-color: #FDD9AE;" >
                                 <tr>
                                    <th class="text-white">S. No.</th>
                                    <th class="text-white">Name</th>
                                    <th class="text-white">Mobile</th>
                                    <th class="text-white">Adhaar</th>
                                    <th class="text-white">PAN</th>
                                    <th class="text-white">DOB</th>
                                    <th class="text-white">District</th>
                                    <th class="text-white">Address</th>
                                    <!-- <th class="text-white">Action</th> -->
                                 </tr>
                                 </thead>
                                 <tbody>
                                 <?php
                                    $allevent  = new Front();
                                    $result    = $allevent->get_supervisor_ev_application($u_id);
                                    $i = 0;
                                    while($row = $result->fetch(PDO::FETCH_ASSOC))
                                    {
                                    $i++;
                                 ?>
                                 <tr>
                                    <td><?php echo $i; ?>.</td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['mobile']; ?></td>
                                    <td><?php echo $row['aadhar']; ?></td>
                                    <td><?php echo $row['pan']; ?></td>
                                    <td><?php echo $row['dob']; ?></td>
                                    <td><?php echo $row['district']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <!-- <td><a href="event-information?event_id=<?php echo $row['id']; ?>" class="btn btn-outline-primary btn-sm employers-btn">View <i class="fa fa-eye"></i></a></td>   -->
                                 </tr>
                                 <?php } ?>
                                 </tbody>
                               </table>
                             </div> 
                           </div>
                          </div>

                          <div class="tab-pane" id="report">
                          <div class="row">
                                                    
                          <div class="col-xl-4 col-lg-4 col-md-4">
                                <canvas id="barChartE"></canvas>
                                <script>
                                  <?php
                                     $allevent  = new Front();
                                     $result    = $allevent->get_supervisor_event_report($u_id);
                                     $i = 0;
                                     $xValues = []; // Create an empty array for xValues
                                     $yValues = []; // Create an empty array for yValues
                                     $barColors = []; // Create an empty array for barColors
                                     while($row = $result->fetch(PDO::FETCH_ASSOC)){
                                        $i++;
                                        $district = $row['district'];
                                        $total = $row['total'];

                                        // Add the values to the arrays
                                        $xValues[] = $district;
                                        $yValues[] = $total;
                                        //  $randomColor = "#" . substr(md5(rand()), 0, 6);
                                        //  $barColors[] = $randomColor;
                                        $barColors[] = "#D9882B";
                                      }
                                   ?>

                                   // JavaScript code
                                   new Chart("barChartE", {type: "pie",data: {labels: <?php echo json_encode($xValues); ?>,
                                       datasets: [{backgroundColor: <?php echo json_encode($barColors); ?>,data: <?php echo json_encode($yValues); ?>}]},
                                       options: {legend: { display: false },title: {display: true,text: "Event"}}}
                                   );
                                </script>
                          </div>

                          <div class="col-xl-4 col-lg-4 col-md-4">
                                <canvas id="barChartTA"></canvas>
                                <script>
                                  <?php
                                     $allevent  = new Front();
                                     $result    = $allevent->get_supervisor_t_application_report($u_id);
                                     $i = 0;
                                     $xValues = []; // Create an empty array for xValues
                                     $yValues = []; // Create an empty array for yValues
                                     $barColors = []; // Create an empty array for barColors
                                     while($row = $result->fetch(PDO::FETCH_ASSOC)){
                                        $i++;
                                        $district = $row['district'];
                                        $total = $row['total'];

                                        // Add the values to the arrays
                                        $xValues[] = $district;
                                        $yValues[] = $total;
                                        //  $randomColor = "#" . substr(md5(rand()), 0, 6);
                                        //  $barColors[] = $randomColor;
                                        $barColors[] = "#D9882B";
                                      }
                                   ?>

                                   // JavaScript code
                                   new Chart("barChartTA", {type: "pie",data: {labels: <?php echo json_encode($xValues); ?>,
                                       datasets: [{backgroundColor: <?php echo json_encode($barColors); ?>,data: <?php echo json_encode($yValues); ?>}]},
                                       options: {legend: { display: false },title: {display: true,text: "Training Application"}}}
                                   );
                                </script>
                             </div>
                          </dev>
                          
                          <div class="col-xl-4 col-lg-4 col-md-4">
                                <canvas id="barChartEV"></canvas>
                                <script>
                                  <?php
                                     $allevent  = new Front();
                                     $result    = $allevent->get_supervisor_ev_application_report($u_id);
                                     $i = 0;
                                     $xValues = []; // Create an empty array for xValues
                                     $yValues = []; // Create an empty array for yValues
                                     $barColors = []; // Create an empty array for barColors
                                     while($row = $result->fetch(PDO::FETCH_ASSOC)){
                                        $i++;
                                        $district = $row['district'];
                                        $total = $row['total'];

                                        // Add the values to the arrays
                                        $xValues[] = $district;
                                        $yValues[] = $total;
                                        //  $randomColor = "#" . substr(md5(rand()), 0, 6);
                                        //  $barColors[] = $randomColor;
                                        $barColors[] = "#D9882B";
                                      }
                                   ?>

                                   // JavaScript code
                                   new Chart("barChartEV", {type: "pie",data: {labels: <?php echo json_encode($xValues); ?>,
                                       datasets: [{backgroundColor: <?php echo json_encode($barColors); ?>,data: <?php echo json_encode($yValues); ?>}]},
                                       options: {legend: { display: false },title: {display: true,text: "E-Rickshaw Application"}}}
                                   );
                                </script>
                            </div>
                          </div>
                      </div>
                  </div>
                </div>               
            </div>
          </div>
       </div>
    </section>
    <!--/Supervisor Deatails-->


    <!--Footer Section--> 
    <?php include 'web_include/web_footer.php';?>
    <!--Footer Section-->

    <!--Chat Section-->
    <script src="//code.tidio.co/qzcv6uu0f30uubc7ji0mti2sumkxxcf3.js" async></script>
      <!--/Chat Section-->

      <!-- Back to top -->
      <div class="top-bar d-none d-sm-block">
      <a href="#top" id="back-to-top"><i class="fa fa-arrow-up"></i></a>
      </div>
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
  </body>
</html>