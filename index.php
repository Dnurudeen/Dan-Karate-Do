 <?php 
        if(isset($_POST['submit'])){
            $to = "info@dankarate.com.ng"; // this is your Email address
            $from = $_POST['email']; // this is the sender's Email address
            $full_name = $_POST['name'];
            $phone = $_POST['phone'];
            $msg = $_POST['message'];
            
            $subject = "Form submission from Dan Karate-do Contact form";
            $subject2 = "Hi $full_name !";
            $message = "Name: $full_name \n" . "Email: $from \n" . "Phone: $phone \n" . "Message: $msg \n";
            $message2 = "A message from DAN KARATE-DO \n\n" . "Your message have been successfully sent. \n" . "We'll get in-touch shortly!";

            $headers = "From:" . $from;
            $headers2 = "From:" . $to;
            mail($to,$subject,$message,$headers);
            mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
            echo "<div style='background-color: green; padding: 30px; color: white; text-align: center; margin-top: 75px;'>Form Submission Successful! Thank you $full_name, we will get in-touch shortly.</div>";
            // You can also use header('Location: thank_you.php'); to redirect to another page.
        }
    ?>
<!-- PHP codes above -->
                            
                            
<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.12.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="Dan Karate Do" content="Karate School in Lagos, Nigeria.">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-removebg-preview-122x122.png" type="image/x-icon">
  <meta name="description" content="Dan Karate-Do is Martial School in Surulere, Lagos to train/teach both children and adult the way of Karate.">
  
  <title>Dan Karate-Do</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-201880180-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-201880180-1');
</script>
</head>
<body>
  <section class="menu cid-sXcT2LprTy" once="menu" id="menu2-q">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.php">
                        <img src="assets/images/logo-removebg-preview-122x122.png" alt="dan karate do" title="" style="height: 5rem;">
                    </a>
                </span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-info display-4" href="index.php">
                        <b>Home</b> 
                    </a> 
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-info display-4" href="about.html">
                        <b>About Us</b>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-info display-4" href="contact.php">
                        <b>Contact</b> 
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-info display-4" href="gallery.html">
                       <b>Gallery</b> 
                    </a>
                </li>
            </ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-secondary display-4" href="welcome.php"><span class="mobi-mbri mobi-mbri-user-2 mbr-iconfont mbr-iconfont-btn"></span>   
                    Students Profile</a></div>
        </div>
    </nav>
</section>

<section class="engine"><a href="#"></a></section><section class="carousel slide cid-sX5jpkCQXi" data-interval="false" id="slider1-1">
    <div class="full-screen">
        <div class="" data-keyboard="false" data-ride="carousel" data-interval="6000" data-pause="true">
            <ol class="carousel-indicators">
                <li data-app-prevent-settings="" data-target="#slider1-1" class=" active" data-slide-to="0"></li>
                <li data-app-prevent-settings="" data-target="#slider1-1" data-slide-to="1"></li>
                <li data-app-prevent-settings="" data-target="#slider1-1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(assets/images/dan3-2.jpeg);">
                    <div class="container container-slide">
                        <div class="image_wrapper"><div class="mbr-overlay" style="opacity: 0.7;"></div>
                        <img src="assets/images/dan3-2.jpeg" alt="" title="">
                        <div class="carousel-caption justify-content-center">
                            <div class="col-10 align-center">
                                <h2 class="mbr-fonts-style display-1">DAN KARATE-DO</h2>
                                <p class="lead mbr-text mbr-fonts-style display-5">SEEK PERFECTION OF CHARACTER, BE FAITHFUL, ENDEAVOR, RESPECT OTHERS, REFRAIN FROM VIOLENT BEHAVIOURS.</p>
                                <div class="mbr-section-btn" buttons="0">
                                    <a class="btn display-7 btn-secondary" href="apply.php">ENROL NOW</a> 
                                    <a class="btn  btn-white-outline display-7" href="gallery.html">GALLERY</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/dan1-2.jpeg);">
                <div class="container container-slide"><div class="image_wrapper">
                    <div class="mbr-overlay" style="opacity: 0.7;"></div>
                    <img src="assets/images/dan1-2.jpeg" alt="" title="">
                    <div class="carousel-caption justify-content-center">
                        <div class="col-10 align-left">
                            <h2 class="mbr-fonts-style display-1">DAN KARATE-DO</h2>
                            <p class="lead mbr-text mbr-fonts-style display-5">SEEK PERFECTION OF CHARACTER, BE FAITHFUL, ENDEAVOR, RESPECT OTHERS, REFRAIN FROM VIOLENT BEHAVIOURS.</p>
                            <div class="mbr-section-btn" buttons="0">
                                <a class="btn btn-primary display-7" href="apply.php">ENROL NOW</a> 
                                <a class="btn  btn-white-outline display-7" href="gallery.html">GALLERY</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/dan4-1.jpeg);">
            <div class="container container-slide">
                <div class="image_wrapper">
                    <div class="mbr-overlay" style="opacity: 0.7;"></div>
                    <img src="assets/images/dan4-1.jpeg" alt="" title="">
                    <div class="carousel-caption justify-content-center">
                        <div class="col-10 align-right">
                            <h2 class="mbr-fonts-style display-1">DAN KARATE-DO</h2>
                            <p class="lead mbr-text mbr-fonts-style display-5">SEEK PERFECTION OF CHARACTER, BE FAITHFUL, ENDEAVOR, RESPECT OTHERS, REFRAIN FROM VIOLENT BEHAVIOURS.</p>
                            <div class="mbr-section-btn" buttons="0">
                                <a class="btn display-4 btn-secondary" href="apply.php">ENROL NOW</a> 
                                <a class="btn  btn-white-outline display-4" href="gallery.html">GALLERY</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a data-app-prevent-settings="" class="carousel-control-prev" role="button" data-slide="prev" href="#slider1-1"><span aria-hidden="true" class=""></span><span class="sr-only">Previous</span></a><a data-app-prevent-settings="" class=" carousel-control-next" role="button" data-slide="next" href="#slider1-1"><span aria-hidden="true" class=""></span><span class="sr-only">Next</span></a></div></div>

</section>

<section class="mbr-section content4 cid-sXb30naYQM" id="content4-2">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-5">
                    ABOUT DAN KARATE-DO</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-7">
                Dan karate–Do is a club established to train interested individuals the Art of Karate as well as self- defense with the sole aim of improving self-esteem and health. The club has been existing since 2019 solely to expand its base and widen its range of services.
                </h3>
                
                <div>
                <br>
                    <h2 class="pb-3 mbr-fonts-style mbr-light display-7">CLUB SERVICES INCLUDE:</h2>
                    <ul class="mbr-section-subtitle mbr-light mbr-fonts-style display-7">
                        <li>Traditional Karate classes</li>
                        <li>Fitness class</li>
                        <li>Stretching/ yoga classes</li>
                        <li>Self-defense class</li>
                        <li>Buying and Selling of sport items and materials</li>
                    </ul>
                </div>
                <div class="align-center">
                    <a class="btn display-4 btn-light" href="about.html">READ MORE...</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section contacts3 cid-sXb3pW10tt mbr-parallax-background" id="contacts3-3">
    <!---->
    
    <!---->
    <!--Overlay-->
    <div class="mbr-overlay" style="opacity: 0.9; background-color: rgb(35, 35, 35);">
    </div>
    <!--Container-->
    <div class="container">
        <div class="row">
            <!--Titles-->
            <div class="title col-12">
                <h2 class="align-left mbr-fonts-style display-2">
                    Our Contacts
                </h2>
                
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <div class="wrapper">
                            <span class="iconfont-wrapper">
                                <span class="amp-iconfont icon fa-thumbs-o-up fa mobi-mbri-map-pin mobi-mbri" style="color: rgb(204, 204, 204); fill: rgb(204, 204, 204);"></span>
                            </span>
                            <div class="b-info b-adress">
                                <h5 class="align-left mbr-fonts-style display-5">
                                    Address:
                                </h5>
                                <p class="mbr-text align-left mbr-fonts-style display-7">
                                    Iluseyi Street, Surulere Love Garden, Lagos Nigeria.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <div class="wrapper">
                            <span class="iconfont-wrapper">
                                <span class="amp-iconfont icon fa-phone fa mobi-mbri-phone mobi-mbri" style="color: rgb(204, 204, 204); fill: rgb(204, 204, 204);"></span>
                            </span>
                            <div class="b-info b-phone">
                                <h5 class="align-left mbr-fonts-style display-5">
                                    Phone:
                                </h5>
                                <p class="mbr-text align-left mbr-fonts-style display-7">
                                    <a href="tel:09086792299" class="text-white">+234 9086792299</a><br>
                                    <a href="tel:09098529409" class="text-white">+234 9098529409</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <div class="wrapper">
                            <span class="iconfont-wrapper">
                                <span class="amp-iconfont icon fa-comment-o fa socicon-mail socicon" style="color: rgb(204, 204, 204); fill: rgb(204, 204, 204);"></span>
                            </span>
                            <div class="b-info b-mail">
                                <h5 class="align-left mbr-fonts-style display-5">
                                    E-mail:
                                </h5>
                                <p class="mbr-text align-left mbr-fonts-style display-7">
                                    <a href="mailto:info@dankarate.com.ng" class="text-white">info@dankarate.com.ng</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 py-3">
                        <div class="wrapper">
                            <span class="iconfont-wrapper">
                                <span class="amp-iconfont icon fa-th-large fa mobi-mbri-idea mobi-mbri" style="color: rgb(204, 204, 204); fill: rgb(204, 204, 204);"></span>
                            </span>
                            <div class="b-info b-mail">
                                <h5 class="align-left mbr-fonts-style display-5">
                                    Working Hours:
                                </h5>
                                <p class="mbr-text align-left mbr-fonts-style display-7">
                                    <strong>24 Hours</strong><strong>
                                    (Monday </strong> - <strong>Friday)</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <div class="wrapper">
                            <span class="iconfont-wrapper">
                                <span class="amp-iconfont icon fa-th-large fa mobi-mbri-idea mobi-mbri" style="color: rgb(204, 204, 204); fill: rgb(204, 204, 204);"></span>
                            </span>
                            <div class="b-info b-mail">
                                    <h5 class="align-left mbr-fonts-style display-5">
                                        Training Hours:
                                    </h5>
                                    <p class="mbr-text align-left mbr-fonts-style display-7"><strong>
                                        Thursdays </strong>---- <strong>5:30pm - 7pm</strong><br><strong>Sundays</strong> ---- <strong>5:00pm - 7pm<br></strong></p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section form4 cid-sXb3tChZCW mbr-parallax-background" id="form4-4">

    <div class="mbr-overlay" style="opacity: 0.9; background-color: rgb(35, 35, 35);">
    </div>
    <div class="container">
        <div class="row">
            <div class="container col-md-6">
                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.140905594246!2d3.3591862140940334!3d6.503840925197616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8d1e9c1fb5f3%3A0x978bc8f4eb6265b9!2sLove%20Garden!5e0!3m2!1sen!2sng!4v1645643869339!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="pb-3 align-left mbr-fonts-style display-2">
                    Drop a Line
                </h2>
                <div>
                    <div class="icon-block pb-3 align-left">
                        <span class="icon-block__icon">
                            <span class="mbri-letter mbr-iconfont"></span>
                        </span>
                        <h4 class="icon-block__title align-left mbr-fonts-style display-5">
                            Don't hesitate to contact us
                        </h4>
                    </div>
                    
                </div>
                <div class="container">
                    <!---Formbuilder Form--->
                    <form action="" method="POST" class="mbr-form form-with-styler">
                        <!-- <div class="row">
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            </div> -->
                        </div>
                        <div class="dragArea row">
                            <div class="col-md-6  form-group">
                                <input type="text" name="name" placeholder="Your Name"  required="required" class="form-control input display-7" id="name-form4-4">
                            </div>
                            <div class="col-md-6  form-group">
                                <input type="text" name="phone" placeholder="Phone" required="required" class="form-control input display-7" id="phone-form4-4">
                            </div>
                            <div class="col-md-12  form-group">
                                <input type="text" name="email" placeholder="Email" class="form-control input display-7" required="required" id="email-form4-4">
                            </div>
                            <div class="col-md-12  form-group">
                                <textarea name="message" placeholder="Message" class="form-control input display-7" id="message-form4-4"></textarea>
                            </div>
                            <div class="col-md-12 input-group-btn  mt-2 align-center">
                                <button type="submit" name="submit" class="btn btn-form btn-secondary display-4">SEND MESSAGE</button>
                            </div>
                        </div>
                    </form><!---Formbuilder Form--->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section content4 cid-sXcdsJsWac" id="content4-j">

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                
                
                
            </div>
        </div>
    </div>
</section>

<section class="header12 cid-sXb7BoPwFc mbr-parallax-background" id="header12-a">

    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);">
    </div>

    <div class="container">
            <div class="media-container">
                <div class="col-md-12 align-center">
                    <h1 class="mbr-section-title pb-3 mbr-white mbr-bold mbr-fonts-style display-2">
                        TRAIN THE MIND AND SOUL</h1>
                    <div class="icons-media-container mbr-white">
                        <div class="card col-6 col-md-6 col-lg-4">
                            <div class="icon-block">
                            
                                <span class="mbr-iconfont mbri-layers"></span>
                            
                            </div>
                            <h5 class="mbr-fonts-style display-5">
                                SELF DEFENSE</h5>
                        </div>

                        <div class="card col-6 col-md-6 col-lg-4">
                            <div class="icon-block">
                                
                                    <span class="mbr-iconfont mbri-star"></span>
                                
                            </div>
                            <h5 class="mbr-fonts-style display-5">
                                CONFIDENCE</h5>
                        </div>

                        <div class="card col-12 col-md-6 col-lg-4">
                            <div class="icon-block">
                                
                                    <span class="mbr-iconfont mbri-touch-swipe"></span>
                                
                            </div>
                            <h5 class="mbr-fonts-style display-5">
                                GOOD REFLEX</h5>
                        </div>

                        
                    </div>
                </div>
            </div>
    </div>

    
</section>

<section once="footers" class="cid-sXbc02NreJ" id="footer7-b">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">
                    <li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="#" target="_blank">About us</a>
                    </li>
                    <li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="#" target="_blank">Services</a>
                    </li>
                    <li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="contact.php" target="_blank">Get In Touch</a>
                    </li>
                    <li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="welcome.php" target="_blank">Account</a>
                    </li>
                    <li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="gallery.html" target="_blank">Gallery</a>
                    </li>
                </ul>
            </div>
            <div class="row social-row">
                <div class="social-list align-right pb-2">    
                    <div class="soc-item">
                        <a href="https://twitter.com/mobirise" target="_blank">
                            <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                            <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://www.youtube.com/c/mobirise" target="_blank">
                            <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://instagram.com/mobirise" target="_blank">
                            <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                            <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://www.behance.net/Mobirise" target="_blank">
                            <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7" id="footer">
                    © Copyright 2022 <b><a href="index.php">Dan Karate-Do</a></b> - All Rights Reserved
                </p>
                <div class="hrline">
                    
                </div>
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7" id="footer">
                    Designed By: <b><a href="mailto:danijunurdeen@gmail.com">Daniju Nurudeen</a></b> <br> (A Software Developer in Lagos)
                </p>
            </div>
            <style>
                #footer a{
                    color: rgb(211, 211, 211);
                }
                #footer a:hover{
                    color: rgb(238, 238, 238);
                }
                .hrline{
                   padding: 20px;
                }
            </style>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/slidervideo/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
</body>
</html>