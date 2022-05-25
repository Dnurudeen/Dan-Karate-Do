<!-- <?php 
if(isset($_POST['submit'])){
    $to = "apply@dankarate.com.ng"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $full_name = $_POST['name'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $address = $_POST['address'];
    $bloodGroup = $_POST['bloodGroup'];
    $genoType = $_POST['genoType'];
    $respiratoryProblem = $_POST['respiratoryProblem'];
    $diabetic = $_POST['diabetic'];
    $cadioVascularProblems = $_POST['cadioVascularProblems'];
    $emgName = $_POST['emgName'];
    $emgNo = $_POST['emgNo'];
    $emgAddress = $_POST['emgAddress'];
    $acceptanceOne = $_POST['acceptanceOne'];
    $acceptanceTwo = $_POST['acceptanceTwo'];
    
    $subject = "Application Submission from: $full_name";
    $subject2 = "Hi $full_name !";
    $message = "Name: $full_name \n" . "Email: $from \n" . "Phone: $phone \n" . "Age: $age \n" . "Date of Birth: $dob \n" . "Gender: $gender \n" . "City: $city \n" . "State: $state \n" . "Address: $address \n" . "Blood Group: $bloodGroup \n" . "Genotype: $genoType \n" . "Respiratory Problem: $respiratoryProblem \n" . "Diabetic: $diabetic \n" . "Cadio-Vascular Problems: $cadioVascularProblems \n" . "Emergency Name: $emgName \n" . "Emergency No.: $emgNo \n" . "Emergency Address: $emgAddress \n" . "Guardian Must Read: $acceptanceOne \n" . "Dojo Rules: $acceptanceTwo \n";
    $message2 = "A message from DAN KARATE-DO \n\n" . "You've successfully applied for our Karate Training program. \n" . "We'll contact you shortly!";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // echo "<div style='background-color: green; padding: 30px; color: white; text-align: center; margin-top: 75px;'>Application Successful! Thank you $full_name, we will contact you shortly.</div>";
    header("location: thankyou.php"); //to redirect to another page.
    }
?> -->
<!-- PHP codes above -->

<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.12.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-removebg-preview-122x122.png" type="image/x-icon">
  <meta name="description" content="Get in touch with us using out contact addresses or send a message using the form.">
  
  
  <title>Apply</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
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
                        <img src="assets/images/logo-removebg-preview-122x122.png" alt="logo" title="" style="height: 5rem;">
                    </a>
                </span>
                
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
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


<section class="mbr-section form4 cid-sXckKA0YZP mbr-parallax-background" id="form4-p">
    <div class="mbr-overlay p-5" style="opacity: 0.9; background-color: rgb(35, 35, 35);">
    </div>
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-md-12">
                <h2 class="pb-3 align-center mbr-fonts-style display-2">
                    Get Started
                </h2>
                <div>
                    <div class="icon-block pb-3 align-center">
                        
                        <h4 class="icon-block__title align-center mbr-fonts-style display-5">
                            Karate Classes for All Ages 
                        </h4>
                    </div>
                </div>
                
                <div class="p-3">
                    <!---Form--->
                    <form action="" method="POST" class="mbr-form form-with-styler">
                        <!-- <div class="row">
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            </div>
                        </div> -->
                        <div class="dragArea row">
                            <div class="p-4" style="border: #ffffff 2px solid; width: 100%; height: auto; padding: 20px; border-radius: 20px;">
                                <h5 style="color: #fff;"><i>Personal Information</i></h5>
                                <div class="row col-md-12  form-group">
                                    <input type="text" name="name" placeholder="Your Name *" required="required" class="form-control input display-7" id="name-form4-p">
                                </div>
                                <div class="row">
                                    <div class="col-md-6  form-group">
                                        <input type="number" name="phone" placeholder="Phone *" required="required" class="form-control input display-7" id="phone-form4-p">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="email" placeholder="Email *" class="form-control input display-7" required="required" id="email-form4-p">
                                    </div>
                                </div>
                                  
                                <div class="row">
                                    <div class="col-md-6  form-group">
                                        <input type="number" name="age" placeholder="Age *" required="required" class="form-control input display-7" id="name-form4-p">
                                    </div>
                                    <div class="col-md-6  form-group">
                                        <input type="date" name="dob" placeholder="Date of Birth *" required="required" class="form-control input display-7" id="name-form4-p">
                                    </div>
                                </div>

                                <div>
                                    <select>
                                        
                                    </select>
                                </div>

                                <div class="row col-md-12 form-group">
                                    <label for="" style="color: #fff;" >Gender: *</label>
                                    <select name="gender" id="" class="form-control input display-7" required="required">
                                        <option value="">Select gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Rather not say">Rather not say</option>
                                    </select>
                                </div>
                            </div>
                            
                            
                                <div class="p-4 my-5" style="border: #ffffff 2px solid; width: 100%; height: auto; padding: 20px; border-radius: 20px;">
                                    <h5 style="color: #fff;"><i>Current Resident</i></h5>
                                    <div class="row col-12">
                                    <div class="col-md-6  form-group">
                                        <input type="text" name="city" placeholder="City *" required="required" class="form-control input display-7" id="phone-form4-p">
                                    </div>
                                    <div class="col-md-6  form-group">
                                        <input type="text" name="state" placeholder="State *" required="required" class="form-control input display-7" id="phone-form4-p">
                                    </div>
                                </div>
                                    <div class="col-md-12  form-group">
                                        <input type="text" name="address" placeholder="Address" class="form-control input display-7" id="phone-form4-p">
                                    </div>
                            </div>

                            <!-- MEDICAL REPORT -->

                            <div class="p-4" style="border: #ffffff 2px solid; width: 100%; height: auto; padding: 20px; border-radius: 20px;">
                                <h5 style="color: #fff;"><i>MEDICAL INFORMATION</i></h5>
                                <!-- <div class="row col-md-12  form-group" data-for="name">
                                    <input type="text" name="name" placeholder="Your Name" required="required" class="form-control input display-7" id="name-form4-p">
                                </div> -->
                                <div class="row">
                                    <div class="col-md-6  form-group">
                                    <label for="" style="color: #fff;" >Blood Group: *</label>
                                    <select name="bloodGroup" id="" class="form-control input display-7" required="required">
                                        <option value="">Select blood  group</option>
                                        <option value="Blood Group A">Blood Group A</option>
                                        <option value="Blood Group B">Blood Group BB</option>
                                        <option value="Blood Group O">Blood Group O</option>
                                        <option value="Blood Group AB">Blood Group AB</option>
                                        <option value="Not Sure!">Not Sure!</option>
                                    </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="" style="color: #fff;" >Genotype: *</label>
                                    <select name="genoType" id="" class="form-control input display-7" required="required">
                                        <option value="">Select Genotype</option>
                                        <option value="AA">AA</option>
                                        <option value="AS">AS</option>
                                        <option value="SS">SS</option>
                                        <option value="Not Sure!">Not Sure!</option>
                                    </select>
                                    </div>
                                </div>
                                  
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="" style="color: #fff;" >Any respiratory problems: </label>
                                        <select name="respiratoryProblem" id="" class="form-control input display-7" required="required">
                                            <option value="">-----</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                            <option value="Don't know">Don't know</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="" style="color: #fff;" >Are you diabetic? </label>
                                        <select name="diabetic" id="" class="form-control input display-7" required="required">
                                            <option value="">-----</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                            <option value="Don't know">Don't know</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="" style="color: #fff;" >Any cadio-vascular problems: </label>
                                        <select name="cadioVascularProblems" id="" class="form-control input display-7" required="required">
                                            <option value="">-----</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                            <option value="Don't know">Don't know</option>
                                        </select>
                                    </div>
                                </div> 
                                <style>
                                    hr{
                                        border-color: #fff;
                                    }
                                </style>
                                <hr>

                                <h5 style="color: #fff;"><i>EMERGENCY INFORMATION</i></h5>
                                <div class="row col-12">
                                    <div class="col-md-6  form-group">
                                        <input type="text" name="emgName" placeholder="Emergency contact Name *" required="required" class="form-control input display-7" id="phone-form4-p">
                                    </div>
                                    <div class="col-md-6  form-group">
                                        <input type="number" name="emgNo" placeholder="Emergency contact No. *" required="required" class="form-control input display-7" id="phone-form4-p">
                                    </div>
                                </div>
                                <div class="col-md-12  form-group">
                                    <input type="text" name="emgAddress" placeholder="Emergency contact Address" class="form-control input display-7" id="phone-form4-p">
                                </div>
                            </div>

                            <!-- MEDICAL REPORT -->
                        
                            <div class="py-3">
                                <div class="foot-menu-item mbr-fonts-style display-7">
                                    <input type="checkbox" name="acceptanceOne" value="Accepted" id="" required="required" class="mr-3"><label for="" style="color: #fff;">Guardian of students under the age of 18 should read this</label> <a href="terms/accpt.html" target="_blank" class="text-danger mbr-bold pl-3">read</a>
                                </div>
                                <div class="foot-menu-item mbr-fonts-style display-7">
                                    <input type="checkbox" name="acceptanceTwo" id="" value="Accepted" required="required" class="mr-3"><label for="" style="color: #fff;">Dan Karate-Do Club Dojo rules </label><a href="terms/dojorules.html" target="_blank" class="text-danger mbr-bold pl-3">read</a>
                                </div>
                            </div>
                            
                            <div class="col-md-12 input-group-btn  mt-2 align-center">
                                <button type="submit" name="submit" class="btn btn-form btn-secondary display-4">APPLY</button>
                            </div>
                        </div>
                    </form>
                    <!---Form--->
                </div>
            </div>
        </div>
    </div>
</section>

<section once="footers" class="cid-sXbc02NreJ" id="footer7-l">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">    
                    <li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="about.html" target="_blank">About us</a>
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
                    </div><div class="soc-item">
                        <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                            <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.youtube.com/c/mobirise" target="_blank">
                            <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://instagram.com/mobirise" target="_blank">
                            <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                            <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.behance.net/Mobirise" target="_blank">
                            <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div></div>
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
                   padding: 20px
                }
            </style>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
</body>
</html>