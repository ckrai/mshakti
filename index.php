<?php require_once('manage/app/app_include/session.php'); ?>
<!doctype html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

   <!--Google Analytics Start-->
   <?php include 'web_include/google_analytics.php';?>
   <!--Google Analytics End-->

   <!-- Title -->
   <title>Mission Shakti | Home</title>

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

   <style>

    body {margin: 0;}

    #animation-container {
      position: fixed;
      bottom: 0;
      right: 0; /* Align image on the bottom right */
      z-index: 9999;
    }

    #erickshaw-img {
      display: none;
      width: 100px; /* Set the image size to 100px */
      height: auto; /* Preserve the aspect ratio */
      transition: right 0.2s; /* Add a transition for smooth animation */
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
   <?php include 'web_include/web_navbar.php'; ?>
   <!--/Topbar-->

   <div id="main">
      <!--Sliders Section-->
      <div id="carousel-indicators4" class="carousel slide" data-bs-ride="carousel">
         <ol class="carousel-indicators4 carousel-indicators">
            <li data-bs-target="#carousel-indicators4" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carousel-indicators4" data-bs-slide-to="1" class=""></li>
            <li data-bs-target="#carousel-indicators4" data-bs-slide-to="2" class=""></li>
            <li data-bs-target="#carousel-indicators4" data-bs-slide-to="3" class=""></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img class="d-block w-100" alt="" src="images/slider/banner-1.jpg" data-holder-rendered="true">
            </div>
            <div class="carousel-item">
               <img class="d-block w-100" alt="" src="images/slider/banner-2.jpg" data-holder-rendered="true">
            </div>
            <div class="carousel-item">
               <img class="d-block w-100" alt="" src="images/slider/banner-3.jpg" data-holder-rendered="true">
            </div>
            <div class="carousel-item">
               <img class="d-block w-100" alt="" src="images/slider/banner-4.jpg" data-holder-rendered="true">
            </div>
         </div>
         </section>
      </div>
      <!--/Sliders Section-->


      <!--Breadcrumb-->
      <div class="bg-white border-bottom">
         <div class="announcement-banner-container container-fluid bg-danger">
            <div class="announcement-banner Announcement_Banner ">
               <div class="title bg-success-transparent" style="color: rgb(77, 181, 52);">
                  <div class="title-content" style="background-image: linear-gradient(90deg, rgb(16, 142, 47) 0%, rgb(16, 142, 47) 50%, rgb(77, 181, 52) 100%);">
                     <div id="announcement-banner-title-instant-activation-status-banner" class="title-content-wrapper ">Spotlight </div>
                  </div>
               </div>
               <div class="content bg-success-transparent font-weight-semibold">
                  <marquee onmouseover="this.stop();" onmouseout="this.start();">
                     <ul class="d-flex flex-row">
                        <li style="margin-right:15px;">
                           <i class="fa fa-hand-o-right text-success" aria-hidden="true"></i>
                           <a target="_blank" class="text-dark" href="#">Udyam Sakhi Helpline Number - 18002126844</a>
                        </li>
                        <li style="margin-right:15px;">
                           <i class="fa fa-hand-o-right text-success" aria-hidden="true"></i>
                           <a target="_blank" class="text-dark" href="#">Empowering Women: Mission Shakti 2.0 Unleashes the Power Within</a>
                        </li>
                        <li style="margin-right:15px;">
                           <i class="fa fa-hand-o-right text-success" aria-hidden="true"></i>
                           <a target="_blank" class="text-dark" href="#">Building a Safer Future: Mission Shakti 2.0 Redefines Women's Security</a>
                        </li>
                        <li style="margin-right:15px;">
                           <i class="fa fa-hand-o-right text-success" aria-hidden="true"></i>
                           <a target="_blank" class="text-dark" href="#">From Empowerment to Entrepreneurship: Mission Shakti 2.0 Fuels Women's Success</a>
                        </li>
                        <li style="margin-right:15px;">
                           <i class="fa fa-hand-o-right text-success" aria-hidden="true"></i>
                           <a target="_blank" class="text-dark" href="#">Unlocking Potential, Transforming Lives: Mission Shakti 2.0 Creates an Inclusive Society</a>
                        </li>
                     </ul>
                  </marquee>
               </div>
            </div>
         </div>
      </div>
      <!--/Breadcrumb-->

      <!--Numbers Highlights-->
      <section class="sptb pb-2 pt-2 bg-white">
         <div class="container">
            <div class="row no-gutters  row-deck find-job">
               <div class="col-md-4 col-sm-4">
                  <div class="p-0 mt-5 mt-md-0 w-100">
                     <div class="card-body text-center">
                        <div class="bg-warning icon-bg  icon-service  text-purple mb-4" style="width:150px; height:150px;">
                           <img src="images/home/women_to_be_trained.jpg" class="brround avatar-md w-100 h-100" alt="To be Trained">
                        </div>
                        <h2 class="font-weight-bold mb-0 fs-20  MT-0 leading-tight" style="color: #DF1755;">75000</h2>
                        <p>Women to be Trained</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-4">
                  <div class="p-0 mt-5 mt-md-0 w-100">
                     <div class="card-body text-center">
                        <div class="bg-warning icon-bg  icon-service  text-purple mb-4" style="width:150px; height:150px;">
                           <img src="images/home/district-covered.jpg" class="brround avatar-md w-100 h-100" alt="District">
                        </div>
                        <h2 class="font-weight-bold mb-0 fs-20  MT-0 leading-tight" style="color: #DF1755;">75</h2>
                        <p>District to be covered </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-4">
                  <div class="p-0 mt-5 mt-md-0 w-100">
                     <div class="card-body text-center">
                        <div class="bg-warning icon-bg  icon-service  text-purple mb-4" style="width:150px; height:150px;">
                           <img src="images/home/trained_women.jpg" class="brround avatar-md w-100 h-100" alt="Trained">
                        </div>
                        <h2 class="font-weight-bold mb-0 fs-20  MT-0 leading-tight" style="color: #DF1755;">76547</h2>
                        <p>Women trained (Mission Shakti 1.0)</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--/Numbers Highlights-->

      <!--About-->
      <section class="sptb pb-2 pt-2 bg-white">
         <div class="container">
            <div class="row">

               <!--Left Side Content-->
               <div class="col-xl-4 col-lg-4 col-md-12">
                  <div class="card">
                     <div class="card-header" style="background-color: #FDD9AE;">
                        <h3 class="card-title">Objectives</h3>
                     </div>
                     <div class="card-body p-0">
                        <div class="list-catergory">
                           <div class="item-list">
                              <ul class="list-group mb-0">
                                 <li class="list-group-item">
                                    <a href="#" class="text-dark">
                                       <i class="fa fa-file-text-o bg-primary text-primary"></i> Raising Awareness and Ensuring Safety
                                       <!-- <span class="badgetext badge rounded-pill bg-light mb-0 mt-1">17</span> -->
                                    </a>
                                 </li>
                                 <li class="list-group-item ">
                                    <a href="#" class="text-dark">
                                       <i class="fa fa-file-text-o bg-success text-success"></i>Establishing a Secure Environment
                                       <!-- <span class="badgetext badge rounded-pill bg-light mb-0 mt-1">31</span> -->
                                    </a>
                                 </li>
                                 <li class="list-group-item ">
                                    <a href="#" class="text-dark">
                                       <i class="fa fa-file-text-o bg-info text-info"></i>Comprehensive Workshops
                                       <!-- <span class="badgetext badge rounded-pill bg-light mb-0 mt-1">10</span> -->
                                    </a>
                                 </li>
                                 <li class="list-group-item ">
                                    <a href="#" class="text-dark">
                                       <i class="fa fa-file-text-o bg-warning text-warning"></i>Entrepreneurship Development
                                       <!-- <span class="badgetext badge rounded-pill bg-light mb-0 mt-1">83</span> -->
                                    </a>
                                 </li>
                                 <li class="list-group-item ">
                                    <a href="#" class="text-dark">
                                       <i class="fa fa-file-text-o bg-danger text-danger"></i> Driving and E-Auto Rickshaw Training
                                       <!-- <span class="badgetext badge rounded-pill bg-light mb-0 mt-1">0</span> -->
                                    </a>
                                 </li>

                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>


               </div>
               <!--/Left Side Content-->

               <!--Right Side Content-->
               <div class="col-xl-8 col-lg-8 col-md-12">
                  <div class="card">
                     <div class="card-header" style="background-color: #FDD9AE;">
                        <h3 class="card-title">About the Mission</h3>
                     </div>
                     <div class="card-body pb-3">
                        <p class="text-start fs-16">Mission Shakti 2.0 is a comprehensive and visionary initiative that aims to empower women for safety, security, and self-reliance. By raising awareness, establishing a secure environment, and providing workshops and training programs, the mission strives to transform the lives of women and create a society that is inclusive and empowered. Through its multifaceted approach, Mission Shakti 2.0 empowers women to take charge of their safety, pursue entrepreneurship, and gain the skills needed to thrive in various sectors. By addressing the specific challenges faced by women and providing them with the necessary support and opportunities, Mission Shakti 2.0 paves the way for a more equal and inclusive society where women can fulfill their potential and contribute to the overall progress and development of the nation.</p>
                     </div>
                  </div>
               </div>
               <!--/Right Side Content-->
            </div>
         </div>
      </section>
      <!--/About-->


      <!--QUOTATIONS-->
      <section class="sptb">
         <div class="container">
            <div id="defaultCarousel" class="owl-carousel owl-carousel-icons3 owl-loaded owl-drag">
               <div class="item">
                  <div class="card mb-0">
                     <div class="card-body p-3">
                        <div class="card-body text-center">
                           <!-- <a href="event-and-workshop.html"></a> -->
                           <div class="icon-bg  icon-service  text-purple mb-4" style="width:100px; height:100px;">
                              <img src="images/leaders/p.png">
                           </div>
                           <div class="card-body p-4 cardHeight">
                              <h4>“I am confident that Mission Shakti will be a success. It is a program that is in line with the government's commitment to women's empowerment.”</h4><br>
                              <!-- <h5 class="mb-3 mt-0">Smt. Droupadi Murmu</h5> -->
                              <h4 class="mb-3 mt-0" style="color: #DF1755;">Smt. Droupadi Murmu</h4>
                              <small class="badge rounded-pill badge bg-success me-2">President of India</small>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="card mb-0">
                     <div class="card-body p-3">
                        <div class="card-body text-center">
                           <!-- <a href="event-and-workshop.html"></a> -->
                           <div class="icon-bg  icon-service  text-purple mb-4" style="width:100px; height:100px;">
                              <img src="images/leaders/pm.png">
                           </div>
                           <div class="card-body p-4 cardHeight">
                              <h4>“Our Matru Shakti is our pride. Women empowerment is very crucial to our development.”</h4><br>
                              <!-- <h5 class="mb-3 mt-0">Shri. Narendra Modi Ji</h5> -->
                              <h4 class="mb-3 mt-0" style="color: #DF1755;">Shri. Narendra Modi Ji</h4>
                              <small class="badge rounded-pill badge bg-success me-2">Honorable Prime Minister of India</small>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="card mb-0">
                     <div class="card-body p-3">
                        <div class="card-body text-center">
                           <!-- <a href="event-and-workshop.html"></a> -->
                           <div class="icon-bg  icon-service  text-purple mb-4" style="width:100px; height:100px;">
                              <img src="images/leaders/cm.png">
                           </div>
                           <div class="card-body p-4 cardHeight">
                              <h4>“Women are the symbol of strength, and they are sacred as per the traditions of the Sanatan Dharm. The festival of Navratri is the proof of that.”</h4><br>
                              <!-- <h5 class="mb-3 mt-0">Shri. Yogi Adityanath Ji</h5> -->
                              <h4 class="mb-3 mt-0" style="color: #DF1755;">Shri. Yogi Adityanath Ji</h4>
                              <small class="badge rounded-pill badge bg-success me-2">Chief Minister of Uttar Pradesh</small>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--/END QUOTATIONS-->


      <!-- Highlights -->
      <section class="sptb pb-2 pt-2 bg-white">
         <div class="container">
            <div class="section-title center-block text-center">
               <br>
               <h2 class="font-weight-bold mb-0 fs-22  MT-0 leading-tight" style="color: #DF1755;">Highlights of the Program</h2>
            </div>
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12">
                  <div class="card">
                     <div class="card-header" style="background-color: #FDD9AE;">
                        <h3 class="card-title fs-18">6-day program on "Safety, Security, Self-Defence Training, and Entrepreneurship Development"</h3>
                     </div>
                     <div class="card-body pb-3">
                        <p>Throughout the 6-day program, participants will have opportunities for networking and forming support systems with fellow attendees. The combination of safety, security, self-defense training, and entrepreneurship development equips participants with the necessary tools to not only protect themselves but also embark on entrepreneurial journeys confidently.</p>
                        <p>The program's holistic approach fosters an environment where participants can explore their potential, feel empowered, and develop the skills needed to thrive in both personal and professional spheres. By combining these two essential training areas, the participants will leave the program better prepared to lead secure lives and contribute to economic growth through their entrepreneurial endeavors.</p>
                     
                     </div>
                  </div>
               </div>
               <div class="col-xl-12 col-lg-12 col-md-12">
                  <div class="card">
                     <div class="card-header" style="background-color: #FDD9AE;">
                        <h3 class="card-title fs-18">60 DAY SELF-EMPLOYMENT SKILL ORIENTED TRAINING</h3>
                     </div>
                     <div class="card-body pb-3">
                        <p>The program aims to provide comprehensive training to women individuals selected in the field of driving, equipping them with the necessary skills to purchase and operate an auto rickshaw. Our goal is to empower females with the knowledge and expertise required to excel in the driving profession. By offering thorough training and support, we strive to enhance their capabilities and ensure they are well-prepared to navigate the challenges of the E- Rickshaw industry.</p>
                       </div>
                  </div>
               </div>
            </div>
      </section>
      <!-- /Highligths -->

      <!-- E-Rickshwa -->
      <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
               <br>
               <h2 class="font-weight-bold mb-0 fs-22  MT-0 leading-tight" style="color: #DF1755;">E-Rickshaw</h2>
               <p>Self Employment Oriented Training</p>
               <!-- <a target="_blank" href="" class="text-dark"><a href="javascript:void(0);" class="me-4 text-dark "><b>Self Employment Oriented Training</b></a> -->
               <!-- <p>We invite you to join us in this transformative journey, empowering women and fostering progress in local communities. Together, let's create a brighter and more inclusive future where trained women thrive as proud owners of Pink E-rickshaws, and everyone involved shares in the success and prosperity of this innovative initiative. </p> -->
            </div>
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card overflow-hidden">
                <div class="item-card7-img">
                  <div class="item-card7-imgs">
                    <img src="/images/home/ev_training1.jpg" alt="img" class="cover-image">
                  </div>
                </div>
                <div class="card-body">
                  <div class="item-card7-desc">
                    <div class="item-card7-text">
                      <a target="_blank" href="" class="text-dark">
                        <a href="javascript:void(0);" class="me-4 text-dark "><b>Understanding E-Rickshaw Operations</b></a><br/>
                      </a>
                      <br>
                      <p>The first step is to gain a comprehensive understanding of E-Rickshaw operations and the relevant regulations governing their use. This involves learning about the technical aspects of E-Rickshaws, such as battery charging, maintenance, and safety features. Additionally, you should familiarize yourself with local and national laws related to operating E-Rickshaws, including licensing requirements, permits, and traffic regulations. Understanding these aspects is crucial to ensure compliance and a smooth business operation.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card overflow-hidden">
                <div class="item-card7-img">
                  <div class="item-card7-imgs">
                    <img src="/images/home/ev_training2.jpg" alt="img" class="cover-image">
                  </div>
                </div>
                <div class="card-body">
                  <div class="item-card7-desc">
                    <div class="item-card7-text">
                      <a target="_blank" href="" class="text-dark">
                      <a href="javascript:void(0);" class="me-4 text-dark "><b>Technical Training and Practical Skills</b></a><br/>
                      </a>
                      <br>
                      <P>The second step is to acquire the technical skills required to operate and maintain E-Rickshaws. This includes hands-on training in driving E-Rickshaws, managing battery charging and replacement, handling basic repairs, and troubleshooting common issues. You may also need to learn about customer service, handling fares, and basic financial management to run the business successfully. Practical training and real-life scenarios will help you build confidence and competence in managing an E-Rickshaw venture.</p><br>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card overflow-hidden">
                <div class="item-card7-img">
                  <div class="item-card7-imgs">
                    <img src="/images/home/bank.jpg" alt="img" class="cover-image">
                  </div>
                </div>
                <div class="card-body">
                  <div class="item-card7-desc">
                    <div class="item-card7-text">
                      <a target="_blank" href="" class="text-dark">
                      <a href="javascript:void(0);" class="me-4 text-dark "><b>Transformative E-Rickshaw Loan Program</b></a><br/>
                      </a>
                      <br>
                      <p>In a world where opportunities are evolving and barriers are being shattered, a remarkable initiative has emerged to empower women in an unconventional and empowering way. SIDBI Bank and other Banking Partners, a pioneer in innovative financial solutions, has introduced a groundbreaking program aimed at nurturing and uplifting women in the E- Rickshaw industry. This visionary endeavor not only provides comprehensive training but also facilitates access to financial resources, enabling women to excel in a male-dominated profession.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card overflow-hidden">
                <div class="item-card7-img">
                  <div class="item-card7-imgs">
                    <img src="/images/home/ev_training3.jpg" alt="img" class="cover-image">
                  </div>
                </div>
                <div class="card-body">
                  <div class="item-card7-desc">
                    <div class="item-card7-text">
                      <a target="_blank" href="" class="text-dark">
                      <a href="javascript:void(0);" class="me-4 text-dark "><b>Business Management and Outreach</b></a><br/>
                      </a>
                      <br>
                      <P>The final step involves learning essential business management and marketing skills. Self-employment-oriented training should cover topics like creating a business plan, budgeting, financial record-keeping, and managing expenses. You should also be trained in effective marketing strategies to attract customers, retain them, and build a strong customer base. This could include understanding digital marketing, promoting your services through social media, local advertising, and networking with potential clients.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /E-Rickshwa -->

      <!--Supporters-->
      <section class="sptb">
         <div class="container">
            <div class="section-title center-block text-center">
               <h2 class="font-weight-bold mb-0 fs-22  MT-0 leading-tight" style="color: #DF1755;">Supporters</h2>
               <p>Mission Shakti 2.0 Supporters</p>
            </div>

            <div id="company-carousel" class="owl-carousel owl-carousel-icons4 owl-loaded owl-drag">
               <div class="owl-stage-outer">
                  <div class="owl-stage">
                     <div class="owl-item ">
                        <div class="item">
                           <div class="card mb-0">
                              <div class="card-body">
                                 <img src="images/supporter/gov_india.png" alt="Government of India">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="owl-item ">
                        <div class="item">
                           <div class="card mb-0">
                              <div class="card-body">
                                 <img src="images/supporter/gov_up.png" alt="UP Government">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="owl-item ">
                        <div class="item">
                           <div class="card mb-0">
                              <div class="card-body">
                                 <img src="images/supporter/msme.png" alt="MSME">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="owl-item ">
                        <div class="item">
                           <div class="card mb-0">
                              <div class="card-body">
                                 <img src="images/supporter/sidbi.png" alt="SIDBI">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="owl-item ">
                        <div class="item">
                           <div class="card mb-0">
                              <div class="card-body">
                                 <img src="images/supporter/sbi.png" alt="SBI">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="owl-item ">
                        <div class="item">
                           <div class="card mb-0">
                              <div class="card-body">
                                 <img src="images/supporter/pnb.png" alt="PNB">
                              </div>
                           </div>
                        </div>
                     </div>
                     
                     <div class="owl-item ">
                        <div class="item">
                           <div class="card mb-0">
                              <div class="card-body">
                                 <img src="images/supporter/uco.png" alt="UCO">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="owl-item ">
                        <div class="item">
                           <div class="card mb-0">
                              <div class="card-body">
                                 <img src="images/supporter/bob.png" alt="BOB">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="owl-item ">
                        <div class="item">
                           <div class="card mb-0">
                              <div class="card-body">
                                 <img src="images/supporter/upicon.png" alt="UPICON">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="owl-item ">
                        <div class="item">
                           <div class="card mb-0">
                              <div class="card-body">
                                 <img src="images/supporter/vaa.png" alt="Varion Advisors">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="owl-nav disabled">
                  <button type="button" role="presentation" class="owl-prev">
                     <span aria-label="Previous">‹</span>
                  </button>
                  <button type="button" role="presentation" class="owl-next">
                     <span aria-label="Next"></span>
                  </button>
               </div>
               <div class="owl-dots disabled"></div>
            </div>
         </div>
      </section>
      <!--/Supporters-->

      <!--News and Media-->
      <section class="sptb pb-2 pt-2 bg-white">
         <div class="container">
            <div class="section-title center-block text-center">
               <h2 class="font-weight-bold mb-0 fs-22  MT-0 leading-tight" style="color: #DF1755;"><br>News and Media</h2>
            </div>
            <br>
            <div id="company-carousel" class="owl-carousel owl-carousel-icons4">
            <div class="item">
                  <div class="p-0 m-0 item-card9-img">
                     <div class="item-card9-imgs">
                        <a href="#"></a>
                        <img src="images/news/news-7.jpg" alt="img" class="h-100">
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="p-0 m-0 item-card9-img">
                     <div class="item-card9-imgs">
                        <a href="#"></a>
                        <img src="images/news/news-8.jpg" alt="img" class="h-100">
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="p-0 m-0 item-card9-img">
                     <div class="item-card9-imgs">
                        <a href="#"></a>
                        <img src="images/news/news-9.jpg" alt="img" class="h-100">
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="p-0 m-0 item-card9-img">
                     <div class="item-card9-imgs">
                        <a href="#"></a>
                        <img src="images/news/news-10.jpg" alt="img" class="h-100">
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="p-0 m-0 item-card9-img">
                     <div class="item-card9-imgs">
                        <a href="#"></a>
                        <img src="images/news/news-1.jpg" alt="img" class="h-100">
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="p-0 m-0 item-card9-img">
                     <div class="item-card9-imgs">
                        <a href="#"></a>
                        <img src="images/news/news-2.jpg" alt="img" class="h-100">
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="p-0 m-0 item-card9-img">
                     <div class="item-card9-imgs">
                        <a href="#"></a>
                        <img src="images/news/news-3.jpg" alt="img" class="h-100">
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="p-0 m-0 item-card9-img">
                     <div class="item-card9-imgs">
                        <a href="#"></a>
                        <img src="images/news/news-4.jpg" alt="img" class="h-100">
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="p-0 m-0 item-card9-img">
                     <div class="item-card9-imgs">
                        <a href="#"></a>
                        <img src="images/news/news-5.jpg" alt="img" class="h-100">
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="p-0 m-0 item-card9-img">
                     <div class="item-card9-imgs">
                        <a href="#"></a>
                        <img src="images/news/news-6.jpg" alt="img" class="h-100">
                     </div>
                  </div>
               </div>

            </div>
            <br>
         </div>
      </section>
      <!--/News and Media---->


      <!--Footer Section-->
      <?php include 'web_include/web_footer.php'; ?>
      <!--Footer Section-->

      <!--Chat Section-->
      <script src="//code.tidio.co/qzcv6uu0f30uubc7ji0mti2sumkxxcf3.js" async></script>
      <!--/Chat Section-->

      <!--Animation Section-->
      <?php include 'web_include/animation.php'; ?>
      <!--/Animation Section-->

      <!-- Back to top -->
      <!-- <div class="top-bar d-none d-sm-block">
      <a href="#top" id="back-to-top"><i class="fa fa-arrow-up"></i></a>
      </div> -->
      
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