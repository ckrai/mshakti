<?php require_once('manage/app/app_include/session.php'); ?>
<?php require_once('manage/app/app_include/function.php'); ?>
<?php include 'manage/app/action/class/front-class.php';?>
<!doctype html>
<html lang="en" dir="ltr">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
       
      <!--Google Analytics Start-->
      <?php include 'web_include/google_analytics.php';?>
      <!--Google Analytics End-->
      
      <!-- Title -->
      <title>Mission Shakti | Dashboard</title>
       
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
      <link href="assets/css/transparent-style.css" rel="stylesheet"/>
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
      <link rel="stylesheet" href="assets/color-skins/demo.css"/>
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

      <div class="bannerimg cover-image bg-background3">
         <div class="header-text mb-0">
            <div class="container">
               <div class="text-center text-white ">
                  <h1 class="">Dashboard</h1>
                  <ol class="breadcrumb text-center">
                     <li class="breadcrumb-item"><a href="index">Home</a></li>
                     <li class="breadcrumb-item active text-white" aria-current="page">Dashboard</li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
      

      <!--Number list-->
      <section class="sptb pb-3 pt-2 bg-white">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 web-news ajax-table-data">
                  <div class="card">
                    <div style="text-align: end; margin-right: 10px;">
                       <br>
                       <!-- <h2 class="font-weight-bold mb-0 fs-22  MT-0 leading-tight" style="color: #DF1755;">Number</h2> -->
                       <p>As on <?php echo date("d-m-Y"); ?></p>
                     </div>
                     <div class="row no-gutters  row-deck find-job">
               
               <div class="col-md-3 col-sm-2">
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
               
               <div class="col-md-3 col-sm-2">
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
                        <p>E-Rickshaw Application</p>
                     </div>
                  </div>
               </div>

               <div class="col-md-3 col-sm-2">
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
                        <p>Women Trained</p>
                     </div>
                  </div>
               </div>

               <div class="col-md-3 col-sm-2">
                  <div class="p-0 mt-5 mt-md-0 w-100">
                     <div class="card-body text-center">
                        <div class="icon-bg  icon-service  text-purple mb-4" style="width:100px; height:100px;">
                           <img src="images/home/home_supervisor.png" class="brround avatar-md w-100 h-100" alt="Mudra Form">
                        </div>
                        <?php
                        $mudra  = new Front();
                        $resultmudra = $mudra->mudra_form_count();  
                        ?>
                        <h2 class="font-weight-bold mb-0 fs-20  MT-0 leading-tight" style="color: #DF1755;"><?php echo $resultmudra; ?></h2>
                        <p>Mudra Form</p>
                     </div>
                  </div>
               </div>
              
            </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--/Number list-->


      <!--Event List-->
      <section class="sptb pb-2 pt-2 bg-white">
         <div class="container">
            <div class="row">

            
               <div class="col-xl-4 col-lg-4 col-md-12">
                  <div class="card">
                     <div class="card-header" style="background-color: #E4E6F3;">
                        <h3 class="card-title">Ongoing District</h3>
                     </div>

                     <div class="table-responsive border-top mb-0 ">
                           <table class="table table-bordered table-hover  mb-0">
                              <thead class="text-white text-nowrap"style="background-color: #FDD9AE;" >
                                 <tr>
                                    <th class="text-white">S.N</th>
                                    <th class="text-white">District</th>
                                    <!-- <th class="text-white">Action</th> -->
                                    <!-- <th class="text-white">Batch</th> -->
                                 </tr>
                              </thead>
                              <tbody>
                              <?php
                                    $treport  = new Front();
                                    $result    = $treport->get_running_district(); 
                                    $i = 0;
                                    while($row = $result->fetch(PDO::FETCH_ASSOC))
                                    {
                                    $i++;
                                 ?>
                                 <tr>
                                    <td><?php echo $i; ?>.</td>
                                    <td><a href="district-information?district=<?php echo $row['district'];?>" class="me-4 text-dark "><?php echo $row['district']; ?></a></a></td>
                                    <!-- <td><a href="district-information?district=<?php echo $row['district']; ?>" class="btn btn-outline-primary btn-sm employers-btn">View <i class="fa fa-eye"></i></a></td>  -->
                                    <!-- <td><?php echo $row['total']; ?></td> -->

                                   </tr>
                                 <?php } ?>
                              </tbody>
                           </table>
                     </div>
                     
                  </div>


               </div>
              
               <div class="col-xl-4 col-lg-8 col-md-12">
                  <div class="card">
                     <div class="card-header" style="background-color: #FBD3D5;">
                        <h3 class="card-title">Planned District</h3>
                     </div>
                     <div class="table-responsive border-top mb-0 ">
                           <table class="table table-bordered table-hover  mb-0">
                              <thead class="text-white text-nowrap"style="background-color: #FDD9AE;" >
                                 <tr>
                                    <th class="text-white">S.N</th>
                                    <th class="text-white">District</th>
                                    <!-- <th class="text-white">Women Trained</th> -->
                                 </tr>
                              </thead>
                              <tbody>
                              <?php
                                    $treport  = new Front();
                                    $result    = $treport->get_planned_district(); 
                                    //$runningDistricts    = $treport->get_running_district(); 
                                    //$remainingDistricts = array_diff($allDistricts, $runningDistricts);
                                    // print_r($allDistricts);
                                    // exit();
                                    $i = 0;
                                    while($row = $result->fetch(PDO::FETCH_ASSOC))
                                    {
                                    $i++;
                                 ?>
                                 <tr>
                                    <td><?php echo $i; ?>.</td>
                                    <td><a href="district-information?district=<?php echo $row['district'];?>" class="me-4 text-dark "><?php echo $row['district']; ?></b></a></a></td>
                                    <!-- <td><a href="district-information?district=<?php echo $row['district']; ?>" class="btn btn-outline-primary btn-sm employers-btn">View <i class="fa fa-eye"></i></a></td>  -->
                                    <!-- <td><?php echo $row['total']; ?></td> -->
                                   </tr>
                                 <?php } ?>
                              </tbody>
                           </table>
                     </div>

                     
                    
                  </div>
               </div>

               <div class="col-xl-4 col-lg-4 col-md-12">
                  <div class="card">
                     <div class="card-header" style="background-color: #E8F3E3;">
                        <h3 class="card-title">Completed District</h3>
                     </div>
                     <div class="table-responsive border-top mb-0 ">
                           <table class="table table-bordered table-hover  mb-0">
                              <thead class="text-white text-nowrap"style="background-color: #FDD9AE;" >
                                 <tr>
                                    <th class="text-white">S.N</th>
                                    <th class="text-white">District</th>
                                    <!-- <th class="text-white">Batch</th> -->
                                 </tr>
                              </thead>
                              <tbody>
                              <?php
                                    $treport  = new Front();
                                    $result    = $treport->get_completed_district(); 
                                    $i = 0;
                                    while($row = $result->fetch(PDO::FETCH_ASSOC))
                                    {
                                    $i++;
                                 ?>
                                 <tr>
                                    <td><?php echo $i; ?>.</td>
                                    <td><a href="district-information?district=<?php echo $row['district'];?>" class="me-4 text-dark "><?php echo $row['district']; ?></a></a></td>
                                    <!-- <td><a href="district-information?district=<?php echo $row['district']; ?>" class="btn btn-outline-primary btn-sm employers-btn">View <i class="fa fa-eye"></i></a></td>  -->
                                    <!-- <td><?php echo $row['total']; ?></td> -->

                                   </tr>
                                 <?php } ?>
                              </tbody>
                           </table>
                     </div>

                  </div>
               </div>

            </div>
         </div>
      </section>
      <!--/Event List-->











      <!--Training Application  Graph-->
      <!-- <section class="sptb pb-2 pt-2 bg-white">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 web-news ajax-table-data">
                  <div class="card">
                    <div class="section-title center-block text-center">
                       <br>
                       <h2 class="font-weight-bold mb-0 fs-22  MT-0 leading-tight" style="color: #DF1755;">Training Application</h2>
                       <p>District-wise Training Application</p>
                     </div>
                     <div class="card-body">
                     <canvas id="barChartTraining" style="width:100%;max-width:100%;";></canvas>
                     <script>
                       <?php
                          $allevent  = new Front();
                          $result    = $allevent->get_training_application_report();
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
                        new Chart("barChartTraining", {type: "bar",data: {labels: <?php echo json_encode($xValues); ?>,
                          datasets: [{backgroundColor: <?php echo json_encode($barColors); ?>,data: <?php echo json_encode($yValues); ?>}]},
                          options: {legend: { display: false },title: {display: true,text: "Training Application"}}}
                        );
                    </script>
               </div>
            </div>
         </div>
      </section> -->
      <!--/Training Application  Graph-->

      <!--EV Application  Graph-->
      <!-- <section class="sptb pb-2 pt-2 bg-white">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 web-news ajax-table-data">
                  <div class="card">
                    <div class="section-title center-block text-center">
                       <br>
                       <h2 class="font-weight-bold mb-0 fs-22  MT-0 leading-tight" style="color: #DF1755;">E-Rickshaw Application</h2>
                       <p>District-wise E-Rickshaw Application</p>
                     </div>
                     <div class="card-body">
                     <canvas id="barChartEV" style="width: 100%; max-width: 100%;"></canvas>
                     <script>
                       <?php
                          $allevent  = new Front();
                          $result    = $allevent->get_ev_application_report();
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
                        new Chart("barChartEV", {type: "bar",data: {labels: <?php echo json_encode($xValues); ?>,
                          datasets: [{backgroundColor: <?php echo json_encode($barColors); ?>,data: <?php echo json_encode($yValues); ?>}]},
                          options: {legend: { display: false },title: {display: true,text: "E-Rickshaw Application"}}}
                        );
                    </script>
               </div>
            </div>
         </div>
      </section> -->
      <!--/EV Application  Graph-->

      <!--Event  Graph-->
      <!-- <section class="sptb pb-2 pt-2 bg-white">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 web-news ajax-table-data">
                  <div class="card">
                    <div class="section-title center-block text-center">
                       <br>
                       <h2 class="font-weight-bold mb-0 fs-22  MT-0 leading-tight" style="color: #DF1755;">Event</h2>
                       <p>District-wise Events</p>
                     </div>
                     <div class="card-body">
                     <canvas id="barChartEvent" style="width: 100%; max-width: 100%;"></canvas>
                     <script>
                       <?php
                          $allevent  = new Front();
                          $result    = $allevent->get_event_report();
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
                        new Chart("barChartEvent", {type: "bar",data: {labels: <?php echo json_encode($xValues); ?>,
                          datasets: [{backgroundColor: <?php echo json_encode($barColors); ?>,data: <?php echo json_encode($yValues); ?>}]},
                          options: {legend: { display: false },title: {display: true,text: "Event"}}}
                        );
                    </script>
               </div>
            </div>
         </div>
      </section> -->
      <!--/EV Application  Graph-->
      



      <!--Event Gallery-->
      <section class="sptb pb-2 pt-2 bg-white">
            <div class="container">
               <div class="section-title center-block text-center">
               <br>
                <h2 class="font-weight-bold mb-0 fs-22  MT-0 leading-tight" style="color: #DF1755;">Event Gallery</h2>
                <p>Latest images of Mission Shakti Training</p>
              </div>
               
               <div id="defaultCarousel" class="owl-carousel owl-carousel-icons4 owl-loaded owl-drag">
               <?php
                  $allevent    = new Front();
                  $result    = $allevent->get_event_img();
                  while($rowp = $result->fetch(PDO::FETCH_ASSOC))
                  {
                  ?>
                    <div class="card overflow-hidden">
                        <div class="item-card7-img">
                           <div class="item-card7-imgs">
                            <a href="APIs/images/event/<?php echo $rowp['name']; ?>" target="_blank"></a>
                            <img class="cover-image" src="APIs/images/event/<?php echo $rowp['name']; ?>" style="height: 180px; width: 180px;">
                           </div>
                        </div>
                     </div>
               <?php } ?>
            </div>
            </div>
         </div>
      </section>
      <!--Event Gallery-->
      
      
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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   </body>
</html>