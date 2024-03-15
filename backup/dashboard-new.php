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

      <style>
    /* Add CSS styles for the rating bar */
    .rating-bar {
        display: inline-block;
    }

    .fa {
        font-size: 10px;
    }

    .fa-star {
        color: gray;
    }

    .fa-star.checked {
        color: orange;
    }
</style>

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
      <section class="sptb pb-2 pt-2 bg-white">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 web-news ajax-table-data">
                  <div class="card">
                    <div class="section-title center-block text-center">
                       <br>
                       <h2 class="font-weight-bold mb-0 fs-22  MT-0 leading-tight" style="color: #DF1755;">Number</h2>
                       <p>as on <?php echo date("d-m-Y"); ?></p>
                     </div>
                     <div class="row no-gutters  row-deck find-job">
               
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

               <!-- <div class="col-md-2 col-sm-2">
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
               </div> -->
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
                        <h2 class="font-weight-bold mb-0 fs-20  MT-0 leading-tight" style="color: #DF1755;"><?php echo $result-1; ?></h2>
                        <p>Total Event</p>
                     </div>
                  </div>
               </div>

               <div class="col-md-2 col-sm-2">
                  <div class="p-0 mt-5 mt-md-0 w-100">
                     <div class="card-body text-center">
                        <div class="icon-bg  icon-service  text-purple mb-4" style="width:100px; height:100px;">
                           <img src="images/home/home_event.png" class="brround avatar-md w-100 h-100" alt="To be Trained">
                        </div>
                        <?php
                          $ceventcount  = new Front();
                          $resultcevent = $ceventcount->completed_event_count();  
                        ?>
                        <!-- <h2 class="font-weight-bold mb-0 fs-20  MT-0 leading-tight" style="color: #DF1755;"><?php echo $resultcevent; ?></h2> -->
                        <h2 class="font-weight-bold mb-0 fs-20  MT-0 leading-tight" style="color: #DF1755;">145</h2>
                        <p>Completed Event</p>
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
                        <p>Women Trained</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2">
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

         <!--Pie graph-->
   <section class="sptb pb-2 pt-2 bg-white">
      <div class="container">
         <div class="row">

            <div class="col-xl-6 col-lg-4 col-md-12">
               <div class="card">
                  <div class="card-header" style="background-color: #FBD3D5;">
                     <h3 class="card-title">Our mission: Empowering Women Through Education and Training</h3>
                  </div>


               </div>
            </div>

            <div class="col-xl-6 col-lg-4 col-md-12">
               <div class="card">
                  <div class="card-header" style="background-color: #E8F3E3;">
                     <h3 class="card-title">District wise Data:</h3>
                  </div>

                  <div class="col-12">
                     <? include 'upMap.php'; ?>
                  </div>
                  <div class="card-text">
                     <h1 id="tooltip"></h1>
                  </div>
               </div>
               <script>
                  // Get the SVG path and the tooltip element
                  // Get the SVG path and the tooltip element
                  const path = document.getElementById('matrix-group');
                  const tooltip = document.getElementById('tooltip');

                  // Add a mouseover event listener to show the tooltip
                  path.addEventListener('mouseover', (e) => {
                     tooltip.innerHTML = e.target.id;
                     tooltip.style.visibility = 'visible';
                  });

                  // Add a mouseover event listener to show the tooltip
                  path.addEventListener('click', (e) => {
                     window.open(`https://upmissionshakti.in/district-information?district=${e.target.id}`);
                  });

                  // Add a mouseout event listener to hide the tooltip
                  path.addEventListener('mouseout', () => {
                     tooltip.style.visibility = 'hidden';
                  });
               </script>

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
            <div>
               <?php
               $row = $result->fetch(PDO::FETCH_ASSOC); // Fetch the first row
               if ($row) {
                  $jsonRow = json_encode($row); // Convert the row to JSON
                  echo htmlspecialchars($jsonRow, ENT_QUOTES, 'UTF-8'); // Output JSON inside the div
               } else {
                  echo "failed";
               }
               ?>
            </div>


         </div>
      </div>
   </section>
   <!--/Pie graph-->
      
      <!--Pie graph-->
      <section class="sptb pb-2 pt-2 bg-white">
         <div class="container">
            <div class="row">

               <div class="col-xl-6 col-lg-4 col-md-12">
                  <div class="card">
                     <div class="card-header" style="background-color: #FBD3D5;">
                        <h3 class="card-title">Our mission: Empowering Women Through Education and Training</h3>
                     </div>
                     
                      <div class="col-md-6 col-sm-2">
                        <div id="piechart"></div>
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script type="text/javascript">
                            // Load google charts
                            google.charts.load('current', {'packages':['corechart']});
                            google.charts.setOnLoadCallback(drawChart);

                            // Draw the chart and set the chart values
                            function drawChart() {var data = google.visualization.arrayToDataTable([['Trained','To be Trained'],['Trained', <?php echo $resulttr; ?>],['To be Trained', 75000]]);

                            // Optional; add a title and set the width and height of the chart
                            var options = {'title':' ', 'width':500, 'height':250};

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
                        google.charts.load('current', {'packages':['corechart']});
                        google.charts.setOnLoadCallback(drawChart);

                        // Draw the chart and set the chart values
                        function drawChart() {
                           // Create a JavaScript array to store the data
                           var chartData = [['Women', 'Count']];

                           // Add data from PHP to the chartData array
                          <?php
                             $allevent  = new Front();
                             $result    = $allevent->get_trainee_report();
                             while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                $district = $row['district'];
                                $total = $row['total'];
                                echo "chartData.push(['$district', $total]);";
                              }
                          ?>

                          // Convert the JavaScript array to a Google DataTable
                          var data = google.visualization.arrayToDataTable(chartData);

                          // Optional; add a title and set the width and height of the chart
                          var options = {'title':' ', 'width':500, 'height':250};

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
                                    while($row = $result->fetch(PDO::FETCH_ASSOC))
                                    {
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

     

      <!--Event List-->
      <section class="sptb pb-2 pt-2 bg-white">
         <div class="container">
            <div class="row">

            
               <div class="col-xl-4 col-lg-4 col-md-12">
                  <div class="card">
                     <div class="card-header" style="background-color: #E8F3E3;">
                        <h3 class="card-title">Completed Event</h3>
                     </div>

                     <div class="table-responsive border-top mb-0 ">
                        <table class="table table-bordered table-hover  mb-0">
                              <tbody>
                                 <?php
                                    $allevent  = new Front();
                                    $result    = $allevent->get_running_event_list();
                                    $i = 0;
                                    while($row = $result->fetch(PDO::FETCH_ASSOC))
                                    {
                                    $i++;
                                    $start_date=$row['start_date'];
                                    $s_dateTime = new DateTime($start_date);
                                    $newDateFormat = $s_dateTime->format('j M');

                                    $end_date=$row['end_date'];
                                    $e_dateTime = new DateTime($end_date);
                                    $new2DateFormat = $e_dateTime->format('j M, Y');

                                    $trainee_count = $trainee->event_trainee_count($row['id']);  
                                  
                                    $trainee_mudra = $trainee->event_trainee_mudra_form_count($row['id']);  
                                    $rating_count  = $trainee->district_rating_count($row['district']);
                                    $rating_sum    = $trainee->district_rating_sum($row['district']); 
                                    $rating        =$rating_sum/$rating_count;

                                    
                                    //$avg_rating    =$rating['rating_sum']; 
                                 ?>
                              
                                 <div class="item-det card-body bg-white p-3">
                                     <a href="#" class="me-4 text-dark "><b><?php echo $i.'. '.$row['name']; ?></b></a><br>
                                     <div class="rating-bar">
                                    <?php
                                        //$rating = '5'; // Replace 'rating' with the actual column name in your database
                                       for ($j = 1; $j <= 5; $j++) {
                                          if ($j <= $rating) {echo '<span class="fa fa-star checked"></span>'; } 
                                          else {echo '<span class="fa fa-star"></span>';}
                                       }
                                    ?>
                                 </div>
                                   <small class="text-muted"><?php echo number_format($rating,2); ?></small>
                                     <br>
                                     <small class="text-start fs-12"><i class="fa fa-calendar-o text-muted me-2"></i> <?php echo $newDateFormat.' to '.$new2DateFormat; ?></small><br>
                                     <!-- <small class="text-muted"><i class="fa fa-pencil fa-fw"></i> <?php echo $row['district']; ?></small><br> -->
                                     <small class="text-dark"><i class="fa fa-wpforms text-muted me-2"></i> <?php echo 'Women Trained : '.$trainee_count; ?></small>
                                     <small class="text-dark"></i><?php echo ' || Mudra Form Recieved : '.$trainee_mudra; ?></small><br>
                                     <!-- <small class="text-muted"><i class="fa fa-calendar-o text-muted me-2"></i> <?php echo $row['e_status']; ?></small> -->
                                     <!-- <div class="icons mt-3 pb-0 text-right"><a href="#" class="btn btn-outline-success btn-sm icons"><?php echo $row['e_status']; ?><i class="fa fa-eye"></i></a></div> -->
                                 </div>
                                 

                                 <?php } ?>
                              </tbody>
                        </table>
                     </div>
                     
                  </div>


               </div>
              
               <div class="col-xl-4 col-lg-8 col-md-12">
                  <div class="card">
                     <div class="card-header" style="background-color: #FBD3D5;">
                        <h3 class="card-title">Running Event</h3>
                     </div>

                     
                    
                  </div>
               </div>

               <div class="col-xl-4 col-lg-4 col-md-12">
                  <div class="card">
                     <div class="card-header" style="background-color: #E8F3E3;">
                        <h3 class="card-title">District wise Stats</h3>
                     </div>
                     <div class="table-responsive border-top mb-0 ">
                           <table class="table table-bordered table-hover  mb-0">
                              <thead class="text-white text-nowrap"style="background-color: #FDD9AE;" >
                                 <tr>
                                    <th class="text-white">S.N</th>
                                    <th class="text-white">District</th>
                                    <th class="text-white">Women Trained</th>
                                 </tr>
                              </thead>
                              <tbody>
                              <?php
                                    $treport  = new Front();
                                    $result    = $treport->get_trainee_report(); 
                                    $i = 0;
                                    while($row = $result->fetch(PDO::FETCH_ASSOC))
                                    {
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
      </section>
      <!--/Event List-->


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