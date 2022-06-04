<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Infography Technology</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>
  <?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "infography";
  $conn = new mysqli($servername, $username, $password, $database);

  
 
  $sql = "SELECT * FROM `contact`;";
        $result = mysqli_query($conn, $sql);
        echo "<br>";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $sql = "INSERT INTO `contact` (`Name`, `Email`, `Subject`, `Message`) VALUES ('$name', '$email', '$subject', '$message');";
        $result = mysqli_query($conn, $sql);
        
        }
?>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        
        <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="portfolio.php">Training</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#Easy Explaination">Easy explaination</a></li>
          <li><a href="#Research">Research</a></li>
           <li><a href="#BLOG">Blog</a></li>
          <li><a href="#contact">Contact us</a></li>
        </ul>
      </nav>
      
    </div>
  </header>
  <!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">


      <div class="intro-info">
         <h2 id="headinfo">Welcome <br> To <br> Infography Technologies</h2>

        <div>
          <a href="#services" class="btn-get-started scrollto" id="headinfo">Get Started</a>
          <a href="portfolio.php" class="btn-services scrollto" id="headinfo">Training</a>
        </div>
      </div>

    </div>
  </section>
<!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
        </header>

        <div class="row about-container justify-content-center">

          <div class="col-lg-6 content order-lg-1 order-2">
            <p>
         A data science based company working to create change in the lives of people in Nepal through Data science education and training.
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">Training</a></h4>
              <p class="description"> We provide data science related program which is given in our science</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title"><a href="">Gallery</a></h4>
              <p class="description">Many student have passed or certified from the infography technology</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">Data statistics</a></h4>
              <p class="description">Many record of the student have apporved as the data scientist</p>
            </div>

          </div>

         
        </div>

     

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
   
            <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Services</h3>

        </header>

        <div class="row">

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Data Science Certification </a></h4>
              <p class="description">Industry level data science and AI training from very basics level</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">Programming Workshop</a></h4>
              <p class="description">Workshops on C, R, Python programming and Data science</p>
              </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Free Training Sessions</a></h4>
              <p class="description">Trainings on Various tools and software to work with Data</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Project Supervision And Support</a></h4>
              <p class="description">Guidance and close supervision in Academic and professional projects</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-world-outline" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">Data Science Project</a></h4>
              <p class="description">Data Analysis and Model building projects</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-clock-outline" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">Internships</a></h4>
              <p class="description">To enthusiastic students in Data Science</p>
            </div>
          </div>

        </div>

      </div>
    </section>
 

    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3>Why choose us?</h3>
          <p></p>
        </header>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-diamond"></i>
              <div class="card-body">
                <h5 class="card-title">Internship opportunities </h5>
                <p class="card-text"> We provide internship opportunities with dedicated training team members, also provide workshops regarding the particular session. We provide trainings on various tools and softwares to work. We warmly welcome freshers and help in their queries regarding yhe project. We keep our trainees in highest position to teach and learn required stuffs in our  </p>
                <a href="#" class="readmore">Read more </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-language"></i>
              <div class="card-body">
                <h5 class="card-title">Project supervision and support </h5>
                <p class="card-text">We provide project and supervisor with respective project and guarantee to give cooperative support to learners with guidance and close supervision in academic and professional projects. We have highly experienced trainers cooperating at any point of time which can be very beneficial to learners.</p>
                <a href="#" class="readmore">Read more </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-object-group"></i>
              <div class="card-body">
                <h5 class="card-title">Highly experienced Trainer</h5>
                <p class="card-text"> Infography Technologies have got highly skilled trainers. We provide training with highly experienced trainers and we provide a quality of content in each and every aspect. Due to experienced trainers, our sessions have been more interactive. All the trainers have quality teaching ability regarding their field. </p>
                <a href="#" class="readmore">Read more </a>
              </div>
            </div>
          </div>

        </div>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">140</span>
            <p>Student Certified</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">194,825</span>
            <p>Student Reached</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">25</span>
            <p>Project completed</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">18</span>
            <p>Workshop Completed</p>
          </div>
  
        </div>

      </div>
    </section>

    <!--==========================-->
    <section id="Training" class="clearfix">
      <div class="container">

        <header class="section-header">
          <br>
          <h3 class="section-title">Training</h3>
        </header>

        
         <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">
    
              <div class="container">
                <a href="portfolio.php">
              
              <button type=button class="btn btn-secondary btn-outline-info " >Training</button>

            

                  
              </div>
            </div>

          </div>
        </div>


      </div>

  
<!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header">
          <h3>Team</h3>
          <p></p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/team-1.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Parkash Jasiwal</h4>
                  <span>Chief Executive Officer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team-2.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Anku jasiwal</h4>
                  <span>Managing Director</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/adviser1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Dr. Madhu B R</h4>
                  <span>Adviser</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/adviser2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Dr Chidananda Murthy P</h4>
                  <span>Adviser</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team-11.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Manish Jayswal</h4>
                  <span>CTO</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-8.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Akash Sarraf</h4>
                  <span>Project Manager</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-10.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Bikesh Jaiswal</h4>
                  <span>Administrator</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-9.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Anjali Jayswal</h4>
                  <span>Course leader</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-12.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Uday Chandra Prasad</h4>
                  <span>Finance Mananger</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-3.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Pragya Raj Nemkul</h4>
                  <span>Backend Developer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div><div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-4.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sajan Bhusal</h4>
                  <span>Front End Developer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div><div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-5.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sanjok Subedi</h4>
                  <span>Coach</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div><div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-6.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sradha Poudel</h4>
                  <span>Content Writer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-7.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Suman krki</h4>
                  <span>Graphic Designer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #team -->
    <br>
    <section id="Easy Explaination">
      <div class="container">
       


        <div class="section-header">
          <h3>Easy Explaination</h3>
          <p></p>
        </div>

    <div class=" Easy Explaination-item filter-card ">
       
            <div class="Easy Explaination-wrap">
              <img src="img/1.5(2).jpg" class="img-fluid center-block" alt="">
              <div class="Easy Explaination-info">
                <h4><a href="#"></a></h4>
                <p></p>
                </div>
                   <a href="https://www.youtube.com/channel/UCBMxVHD2pd6j5FyGSIAeGyg">
                 <button class="click" >Click here</button>
                   <a href="https://www.youtube.com/channel/UCBMxVHD2pd6j5FyGSIAeGyg"></a>

                </div>
              </div>
              </div>
            </div>
          </div>
          <br>


    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">
    
              <div class="testimonial-item">
                <img src="img/test1.jpg" class="testimonial-img" alt="">
                <h3>Jibendra Yadav</h3>
                <h4></h4>
                <p>All fundamental concepts right from the beginning and some memories recall of class 10 computer subject which helps me to clear all possible hindrance of C-programming .Thank you Information Technologies for helping us ....#Well deserve IOE beginners ...2079...
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="img/test2.jpg" class="testimonial-img" alt="">
                <h3>Sukriti Khanal</h3>
                <h4></h4>
                <p>Even though I am a beginner in python programming, this course was designed to accommodate student with minimal experience in programming to work in unification with qualified programmers. The course work along with the class assignments are carefully analyzed to provide utmost learning experience in python. I am grateful to be a part of this program and should there be any other programs as such launched by Infography, I would not think twice before joining. Kudos to Infography team as well as our instructor and Thank you for a wonderful learning experience.
                </p>
              </div>
  
              <div class="testimonial-item">
                <img src="img/test4.jpg" class="testimonial-img" alt="">
                <h3>Bijaya Bhatta</h3>
                <h4></h4>
                <p>we learnt about web scraping to extract data from websites,then learnt various libaries like numpy,pandas, seaborn... we learnt exploratory data analysis too.it is really useful course: easy to understand for all levels of students and I am very glad that I have taken this course.Thankyou to the entire team and Prakash sir specially.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="img/test5.jpg" class="testimonial-img" alt="">
                <h3>G Won Tips</h3>
                <h4></h4>
                <p>I found the session very effective..i was dubious at first due to it being online bt found it better thn physical.. classes r smooth n friendly learning atmosphere with friendly teacher.. best i find is we can go back n clear any doubts through recorded class a year after too
                </p>
              </div>
              <div class="testimonial-item">
                <img src="img/test6.jpg" class="testimonial-img" alt="">
                <h3>Er Biswash Koirala</h3>
                <h4></h4>
                <p>Nice course and our Sir. Good teaching method and we get clear understanding of the topics. Thank you
                </p>
              </div>
              <div class="testimonial-item">
                <img src="img/test7.jpg" class="testimonial-img" alt="">
                <h3>Manjil Karki</h3>
                <h4></h4>
                <p>I find this course very helpful and am enjoying this course above all. The syllabus is well managed. And I really appreciate the efforts put in by our instructor, moderators and everyone.
                </p>
              </div>
              <div class="testimonial-item">
                <img src="img/test8.jpg" class="testimonial-img" alt="">
                <h3>Sudha Sarraf</h3>
                <h4></h4>
                <p>Sudha SarrafThank you for this course. I get to know experience and knowledge in using different kinds of online tools which are useful and effective. I'll use some of them during my lessons. And lots of thanks.
                </p>
              </div>
              <div class="testimonial-item">
                <img src="img/test9.jpg" class="testimonial-img" alt="">
                <h3>Baburam Chaudhary</h3>
                <h4></h4>
                <p>Every concepts explained in the training is clear to me.Detail explanations of the concepts with hand written form(in whteboard) is easy to grasp and small tasks given in the class has sharpened my skill.I am enjoying the training, because the trainer has clear voice and good delivery.
                </p>
              </div>
              

            </div>

          </div>
        </div>


      </div>
      <br>
    </section>
     <section id="Research" class="clearfix">
      <div class="container">

        <header class="section-header">
          <br>
          <h3 class="section-title">Research</h3>
        </header>

        
         <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">
    
              <div class="container">
  
                <h3></h3>
                <h4>Ceo &amp; Founder</h4>
                 <p> </p>
              
              <button type=button class="btn btn-secondary btn-outline-info" on onclick=" on onclick="location.href='document /research.pdf';">DOWNLOAD</button>

            

                  
              </div>
            </div>

          </div>
        </div>


      </div>

        
    </section>
    <br>

    

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="section-bg">

      <div class="container">

        <div class="section-header">
          <h3>Our partner</h3>
          <p></p>
        </div>

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/patner1.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/patner2.png" class="img-fluid" alt="">
            </div>
          </div>
        
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/patner3.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/patner4.jpg" class="img-fluid" alt="">
            </div>
          </div>
          
          

        </div>

      </div>

    </section>

    <!--==========================
      Contact Section
    ============================-->
     <section id="contact">
      <div class="container-fluid">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>

        <div class="row wow fadeInUp">

          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14132.022878639647!2d85.30615946977538!3d27.686218100000016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19b4ad7096dd%3A0x29fa3d73b99dcc97!2sKupondole%2C%20Lalitpur%2044600!5e0!3m2!1sen!2snp!4v1651164979279!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </div>
          </div>
       

            <div class="form">
              <form action="index.php" method="post">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder=" Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder=" Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>Infography technologies</h3>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
      
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Hunumanthan <br>
              Kupandole, Lalitpur<br>
              Nepal <br>
              <strong>Phone:</strong> +977 9840143772<br>
              <strong>Email:</strong> info@infographytech.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>


    <div class="container">
      <div class="copyright">
        &copy;2021 Copyright </strong>
      </div>
      <div class="credits">
       
         <a href="https://bootstrapmade.com/">Infography technologies</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
