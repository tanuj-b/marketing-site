<?php
if (isset($_SESSION['user'])) {
header('Location: http://www.prepsquare.com/app/');
        }
else{?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

	<!-- Your Basic Site Informations -->
	<title>PrepSquare</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="description" content="PrepSquare is the best preparation tool for IIT JEE 2013. We get you the best content from the best teachers." />
    <meta name="keywords" content="Landing Page, Business, Contact Form, Portofolio, HTML, CSS, jQuery, Clean, Responsive, Marketing" />
    <!-- <meta name="author" content="Dots Theme" /> -->
    
    <!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/prettyPhoto.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/layout-red.css">
    <link href='http://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <noscript><link rel="stylesheet" href="css/no-js.css"></noscript>
    
    <!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    
    <!-- JavaScript -->
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type='text/javascript' src='js/bootstrap.min.js'></script>
    <script type="text/javascript" src="js/jquery-easing.js"></script>
    <script type='text/javascript' src='js/jquery.placeholder.min.js'></script>
    <script type='text/javascript' src='js/jquery.flexslider-min.js'></script>
    <script type='text/javascript' src='js/jquery.prettyPhoto.js'></script>
    <script type='text/javascript' src='js/jquery.hoverdir.js'></script>
    <script type='text/javascript' src='js/modernizr.custom.js'></script>
    <script type="text/javascript" src="js/main.js"></script>
    
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38361771-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body data-spy="scroll" data-offset="80">

 <div id="header">
  <div class="container">
   <div class="row-fluid">
   
    <div class="logo">
     <a href="/"><img src="images/logo.png" alt="PrepSquare" /></a>
    </div> <!-- End Logo -->
    
    <nav class="nav menu-nav">
     <ul>
      <li><a href="#howto">How it Works</a></li>
      <li><a href="/app/#library">Library</a></li>
      <li><a href="/app/#facs">Faculty</a></li>
      <li><a href="/contact.html">Contact Us</a></li>
      <li><a href="/app/#signup">Sign Up</a></li>
     </ul>
    </nav> <!-- End Menu-Nav -->
   
   </div> <!-- End Row-Fluid -->
  </div> <!-- End Container -->
 </div> <!-- End Header -->
 <div id="slider">
  <div class="container">
   <div class="row-fluid">
   
    <div class="span1 slider-images flexslider loading">
    </div> <!-- End Slider-Images -->
    
    <div class="span5 content">
     <h3>Your perfect revision tool</h3>
     <h4>For JEE 2013 : Mains & Advanced</h4>
     <p>Access our library of questions & their video solutions by India's best teachers</p>
  
       <div class="flexslider">
        <ul class="slides">
         <li class="flex-active-slide"><a href="http://blog.prepsquare.com/" target="_blank"><i class="icon-pencil icon-white"></i>Get Preparation Tips on Our Blog</a></li>
        </ul>
       </div><br /><br /><br /><br />
      <div class="button">
        <a href="/app/#signup" class="btn"><i class="icon-white icon-shopping-cart"></i>Sign Up to get 3 Free Tests</a>
      </div>

     <script type="text/javascript">
         function clickFollow(target)
         {  
          window.open(target,"_self");
         }
          function clickSmoothScroll(target){
          var $anchor = $(this);    
          $('html, body').stop().animate({
            scrollTop: parseInt($(target).offset().top) - 100
          }, 2000,'easeInOutExpo');
          event.preventDefault();
        }
     </script>
     
    </div> <!-- End Content -->
   </div> <!-- End Row-Fluid -->
  </div> <!-- End Container -->
 </div> <!-- End Slider -->
 
 
 <!-- Buy Now Button
    <div class="span3 button">
     <a href="#" class="btn"><i class="icon-white icon-shopping-cart"></i> Buy Now</a>
    </div> -->

 <div id="features">
  <div class="container">
  
   <div class="sep-border"></div> <!-- Separator -->
  
   <div class="header">
    <h3>Features</h3>
    <p>Learn what makes PrepSquare the right choice for your needs</p>
   </div>
   
   <div class="row-fluid">
    <div class="span4 item clearfix"> <!-- Two -->
     <img src="images/features/users.png" alt="Feature" />
     <div class="content">
      <h4>Best Faculty</h4>
      <p>Almost all of PrepSquare's teachers are IITians with years of experience in JEE coaching and loved by hundreds of students.<br /><br />Sign-up to see the difference that learning from a high-quality teacher makes.</p>
     </div>
    </div>
    <div class="span4 item clearfix"> <!-- One -->
     <img src="images/features/page.png" alt="Feature" />
     <div class="content">
      <h4>Hand-Picked Tests</h4>
      <p>Our tests have been carefully designed by our faculty to cover each topic extensively. Don't waste valuable prep time on attempting every possible question.<br /><br />Let our faculty and their experience pick the right questions for you!</p>
     </div>
    </div>
    <div class="span4 item clearfix"> <!-- Three -->
     <img src="images/features/chart.png" alt="Feature" />
     <div class="content">
      <h4>Personalised Feedback</h4>
      <p>PrepSquare provides great feedback on your performance, allowing you to identify your strong & weak areas.<br /><br />Based on your history, PrepSquare's advanced algorithms make recommendations on which test you should solve next.</p>
     </div>
    </div>
   </div> <!-- End Row-Fluid -->
   
  </div> <!-- End Container -->
 </div> <!-- End Features -->
 
 <div id="howto">
  <div class="container">
   
   <div class="sep-border"></div> <!-- Separator -->
  
   <div class="header">
    <h3>How It Works</h3>
    <p>Get started with PrepSquare in seconds!</p>
   </div>
   
   <div class="row-fluid steps">
    <div class="span4 step"> <!-- One -->
     <div class="step-number">
      <div class="number">1</div>
     </div>
     <div class="content">
      <h4>Register For Free</h4>
      <img src="images/howtos/1.png" alt="Step 1" />
      <p>Fill out our quick sign up form and get access to 3 free tests.</p>
     </div>
    </div>
    <div class="span4 step"> <!-- Two -->
     <div class="step-number">
      <div class="number">2</div>
     </div>
     <div class="content">
      <h4>Take A Test</h4>
      <img src="images/howtos/2.png" alt="Step 2" />
      <p>Browse the library and select a test you want to take. Attempt it as a Timed Test or Practice.</p>
     </div>
    </div>
    <div class="span4 step"> <!-- Three -->
     <div class="step-number">
      <div class="number">3</div>
     </div>
     <div class="content">
      <h4>See Videos & Analytics</h4>
      <img src="images/howtos/3.png" alt="Step 3" />
      <p>Analyze how you performed and watch videos to learn concepts you missed out on</p>
     </div>
    </div>
   </div> <!-- End Row-Fluid -->
   
  </div> <!-- End Container -->
 </div> <!-- End HowTo -->
 
 <div id="main-tabs">
  <div class="container">
  
   <ul class="tabs">
    <li class="active last-element"><a href="#testimonials" data-toggle="tab">Testimonials</a></li>
   </ul> <!-- End Nav-Tabs -->
  
   <div class="tab-content">
     
    <div class="tab-pane testimonials active" id="testimonials">
     <div class="row-fluid">
      <div class="span4 item"> <!-- One -->
       <img src="images/testimonials/1.png" alt="Avatar 1" />
       <div class="arrow"></div>
       <div class="text">It is important to prioritise your preparation, stick to your plan and focus on solving high quality questions in the last phase of study</div>
       <div class="name"><strong>Amitabh Saraswati</strong>, Rank 19 JEE ‘11</div>
      </div>
      <div class="span4 item"> <!-- Two -->
       <img src="images/testimonials/2.png" alt="Avatar 2" />
       <div class="arrow"></div>
       <div class="text">PrepSquare  helps students figure out  how to improve their exam strategy – a must for every student preparing for JEE!</div>
       <div class="name"><strong>Gaurav Talwar</strong>, IIT Delhi, Maths Faculty in Kota</div>
      </div>
      <div class="span4 item"> <!-- Three -->
       <img src="images/testimonials/3.png" alt="Avatar 3" />
       <div class="arrow"></div>
       <div class="text">I am more confident solving questions now after using PrepSquare – the concepts are explained very well on video</div>
       <div class="name"><strong>Ritwik Kinra</strong>, Class 11, Delhi</div>
      </div>
     </div> <!-- End Row-Fluid -->
    </div> <!-- End Testimonials -->
    
   </div> <!-- End Tab-Content -->
  </div> <!-- End Container -->
 </div> <!-- End Main-Tabs -->
 
 
 <div id="buynow">
  <div class="container">
   <h1>Are you ready to boost your Preparation with PrepSquare?</h1>
   <p>Sign up now and take our free tests!</p>
   <a href="/app/#signup" class="btn"><i class="icon-white icon-shopping-cart"></i> Sign Up to get 3 Free Tests</a>
  </div> <!-- End Container -->
 </div> <!-- End BuyNow -->
 
 <div id="clients">
  <div class="container">
  
   <div class="row-fluid">
    <div class="span2"><a href='http://www.nextbigwhat.com/tlabs-third-batch-startups-297/'><img src="images/clients/NextBigWhat-logo.png" alt="PrepSquare on NextBigWhat" /></a></div>
    <div class="span2"><a href='http://yourstory.in/2013/03/tlabs-announces-new-startups-for-batch-8/'><img src="images/clients/yslogo.png" alt="PrepSquare on YourStory.in" /></a></div>
    <div class="span2"><a href='http://www.indiadigitalreview.com/news/tlabs-introduces-7-start-ups-its-3rd-accelerator-batch'><img src="images/clients/india_digital_review.png" alt="PrepSquare on India Digital Review" /></a></div>
    <div class="span2"><a href='http://techcircle.vccircle.com/2013/03/15/meet-the-7-startups-picked-for-tlabs-3rd-accelerator-batch/'><img src='images/clients/techcircle.png' alt="PrepSquare on techcircle" /></a></div>
    <div class="span2"><br><br><p>Backed By :</p><br><br></div>
    <div class="span2"><a href='http://www.tlabs.in/'><img src="images/clients/tlabs.png" alt="Logo" /></a></div>
   </div> <!-- End Row-Fluid -->
   
  </div> <!-- End Container -->
 </div> <!-- End Clients -->
 
 <div id="footer">
  <div class="container">
  
   <div class="copyright">Copyright &copy; 2013 Apeirogon Ventures. All rights reserved.</div>
   
   <div class="social">
    <ul>
     <li><a href="/about.html" title="About Us">About Us</a></li>
     <li><a href="/legal.html" title="Legal">Legal</a></li>
     <li><a href="http://blog.prepsquare.com/" target="_blank" title="PrepSquare Blog">Blog</a></li>
    </ul>
   </div>
   
  </div> <!-- End Container -->
 </div> <!-- End Footer -->
 
 <a href="#" class="scrollup" title="Back to Top!">Scroll</a>

</body>
</html>
<?php
}