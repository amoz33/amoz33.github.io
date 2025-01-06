<?php 
    
    if (isset($_POST ['contact_message'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        if($name !="" && $email !="" && $phone !="" && $message !="" ){

                   $toEmail = 'tosinadegoke30@gmail.com';
                   $emailSubject = 'New Portfolio Email Message';
                   $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
                   $bodyParagraphs = ['<p><b>Name: </b>'.$name.'</p>'.
                                     '<p><b>Email: </b>'.$email.'</p>'.
                                     '<p><b>Phone Number: </b>'.$phone.'</p>'.
                                     '<p><b>Message: </b>'.$message.'</p>'];
                   $body = join(PHP_EOL, $bodyParagraphs);

                   if (mail($toEmail, $emailSubject, $body, $headers)) {

                       header('Location: index.php');
                   } else {
                       $errorMessage = 'Oops, something went wrong. Please try again later';

                   }//END if (mail($toEmail, $emailSubject, $body, $headers)) {
            
        }else{

            $_SESSION['error'] = 'You did not enter any information.';

        }//END if($email !=""){

    }//END if if (isset($_POST ['contact_message'])){
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your Web development with Amos Oluwatosin.">
    <meta name="author" content="Devcrud">
    <link rel="icon" type="image/jpg" sizes="16x16" href="assets/imgs/favicon.jpg">
    <title>Oluwatosin Amos Adegoke | My Portfolio</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + JohnDoe main styles -->
	<link rel="stylesheet" href="assets/css/johndoe.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <a href="https://linkedin.com/in/adexson2010" class="btn btn-primary btn-component" data-spy="affix" data-offset-top="600"><b><i class="ti-shift-left-alt"></i> LinkedIn Profile</b></a>
    <header class="header">
        <div class="container">
            <ul class="social-icons pt-3">
                <li class="social-item"><a class="social-link text-light" href="https://facebook.com/adexson2010"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="https://x.com/adexson2010"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="https://www.youtube.com/@webdevwithamos5071"><i class="ti-youtube" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="https://instagram.com/adexson2010"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="https://github.com/amoz33"><i class="ti-github" aria-hidden="true"></i></a></li>
            </ul>  
            <div class="header-content">
                <h4 class="header-subtitle" >Hello, I am</h4>
                <h1 class="header-title">Tosin Adegoke</h1>
                <h6 class="header-mono" >Full-Stack Developer | Web Designer</h6>
                <a href="https://drive.google.com/file/d/1Jxwkz07c2cWVZZhwHO-DsWSyXbPdqAYH/view?usp=sharing" type="button" class="btn btn-primary btn-rounded"><i class="ti-printer pr-2"></i>Print Resume</a>
            </div>
        </div>
    </header>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white" data-spy="affix" data-offset-top="510">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse mt-sm-20 navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#resume" class="nav-link">Resume</a>
                    </li>
                </ul>
                <ul class="navbar-nav brand">
                    <img src="assets/imgs/tosin_passport.jpg" alt="" class="brand-img">
                    <li class="brand-txt">
                        <h5 class="brand-title">Tosin Adegoke</h5>
                        <div class="brand-subtitle">Full-Stack Developer | Web Designer</div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#portfolio" class="nav-link">Projects</a>
                    </li>
                    <li class="nav-item last-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div id="about" class="row about-section">
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Who am I ?</h3>
                <span class="line mb-5"></span>
                <h5 class="mb-3">A Passionate and Adaptable Individual</h5>
                <p class="mt-20">with work experiences in design, development, deployment and maintenance of responsive web applications for businesses; successfully completed series of projects such as Inventory Management System, School Management System, Professional Business Websites and HR Management System for private bodies, schools, and IT departments.</p>
                <a href="https://drive.google.com/file/d/1Jxwkz07c2cWVZZhwHO-DsWSyXbPdqAYH/view?usp=sharing" type="button" class="btn btn-outline-danger"><i class="icon-down-circled2 "></i>Download My CV</a> 
            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Personal Info</h3>
                <span class="line mb-5"></span>
                <ul class="mt40 info list-unstyled">
                    <li><span>Email</span> : tosinadegoke30@gmail.com</li>
                    <li><span>Phone</span> : +2348162667912</li>
                    <li><span>LinkedIn</span> : @adexson2010 </li>
                    <li><span>Address</span> : Federal Capital Territory (FCT), Abuja, Nigeria.</li>
                </ul>
                <ul class="social-icons pt-3">
                    <li class="social-item"><a class="social-link" href="https://facebook.com/adexson2010"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="https://x.com/adexson2010"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="https://www.youtube.com/@webdevwithamos5071"><i class="ti-youtube" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="https://instagram.com/adexson2010"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="https://github.com/amoz33"><i class="ti-github" aria-hidden="true"></i></a></li>
                </ul> 
            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">My Expertise</h3>
                <span class="line mb-5"></span>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-widget icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>UI / UX Design</h6>
                        <p class="subtitle"> Proficiency with the use of Adode XD.</p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-paint-bucket icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Web Development</h6>
                        <p class="subtitle">Well experienced in Web Applications Development.</p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-stats-up icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>SEO</h6>
                        <p class="subtitle">Well vasted in Search Engine Optimization.</p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Resume Section-->
    <section class="section" id="resume">
        <div class="container">
            <h2 class="mb-5"><span class="text-danger">My</span> Resume</h2>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                       <div class="card-header">
                            <div class="mt-2">
                                <h4>Expertise</h4>
                                <span class="line"></span>  
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="title text-danger">2021 - 2024</h6>
                            <P><b>Full-Stack Developer</b></P>
                            <P class="subtitle">Promoted to a Full-Stack Developer role at SchoolShell LTD.</P>
                            <hr>
                            <h6 class="title text-danger">2019 - 2020</h6>
                            <P><b>Junior Web Developer</b></P>
                            <P class="subtitle">Started as a Junior Web Developer at SchoolShell LTD.</P>
                            <hr>
                            <h6 class="title text-danger">2013 - 2018</h6>
                            <P><b>Graphics / Web Designer</b></P>
                            <P class="subtitle">Worked as a Graphics & Web Designer at Visual Concept Multimedia.</P>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                       <div class="card-header">
                            <div class="mt-2">
                                <h4>Education</h4>
                                <span class="line"></span>  
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="title text-danger">2021 - 2024</h6>
                            <P><b>Bachelor of Science (B.Sc.) in Physics</b></P>
                            <P class="subtitle">Studied Physics at the University of Abuja, Federal Capital Territory (FCT), Abuja, Nigeria.</P>
                            <hr>
                            <h6 class="title text-danger">2014 - 2016</h6>
                            <P><b>Ordinary National Diploma in Computer Science</b></P>
                            <P class="subtitle">Studied Computer Science at Osun State Polytechnic, Iree, Osun State, Nigeria.</P>
                            <hr>
                            <h6 class="title text-danger">2003 - 2009</h6>
                            <P>Senior Secondary Certificate Examination</P>
                            <P class="subtitle">Went to Secondary School (High School) in Bolade Grammar School, Oshodi, Lagos State, Nigeria.</P>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                       <div class="card-header">
                            <div class="pull-left">
                                <h4 class="mt-2">Skills</h4>
                                <span class="line"></span>  
                            </div>
                        </div>
                        <div class="card-body pb-2">
                           <h6>HTML5 &amp; CSS3</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 97%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>JavaScript</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>PHP</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>SQL</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>React Native</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>React</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                       <div class="card-header">
                            <div class="pull-left">
                                <h4 class="mt-2">Languages</h4>
                                <span class="line"></span>  
                            </div>
                        </div>
                        <div class="card-body pb-2">
                           <h6>English</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>Yoruba</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-dark text-center">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 col-lg-3">
                    <div class="row ">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-alarm-clock icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">500</h1>
                            <p class="text-light mb-1">Hours Worked</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="row">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-layers-alt icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">50</h1>
                            <p class="text-light mb-1">Project Finished</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="row">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-face-smile icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">80K</h1>
                            <p class="text-light mb-1">Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="row">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-heart-broken icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">6yrs</h1>
                            <p class="text-light mb-1">Work Experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Portfolio Section -->
    <section class="section" id="portfolio">
        <div class="container">
            <h2 class="mb-5 pb-4"><span class="text-danger">My</span> Projects</h2>
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <h5><b>Here are some of the Projects I have worked on</b></h5>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                       <div class="card-header has-icon">
                            <i class="ti-vector text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark"><b>Xclusive Styles App</b></h5>
                            <P class="subtitle">This Repository is a Web Application built on PHP, using the MVC Architecture, to serve as an Inventory Management System for its end users.</P>
                            <a href="https://github.com/amoz33/XclusiveStylesApp" type="button" class="btn btn-danger" target="_blank"><i class="icon-down-circled2 "></i>View Project</a> 
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                       <div class="card-header has-icon">
                            <i class="ti-write text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark"><b>BlueDrops App</b></h5>
                            <P class="subtitle">This is a Web Application built on PHP, HTML5, CSS3 and JavaScript. It is a PP-based polymer product that is used for construction formwork.</P>
                            <a href="https://bluedrops.ng" type="button" class="btn btn-danger" target="_blank"><i class="icon-down-circled2 "></i>View Project</a> 
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                       <div class="card-header has-icon">
                            <i class="ti-package text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark"><b>XclusiveApp</b></h5>
                            <P class="subtitle">This Repository contains a project built using React Native for the front-end development while PHP (CodeIgniter) for the backend development.</P>
                            <a href="https://github.com/amoz33/XclusiveApp" type="button" class="btn btn-danger" target="_blank"><i class="icon-down-circled2 "></i>View Project</a> 
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                       <div class="card-header has-icon">
                            <i class="ti-map-alt text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark">Provident</h5>
                            <P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                       <div class="card-header has-icon">
                            <i class="ti-bar-chart text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark">Consectetur</h5>
                            <P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                       <div class="card-header has-icon">
                            <i class="ti-support text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark">Veritatis</h5>
                            <P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- End of portfolio section -->

    <section class="section bg-dark py-5">
        <div class="container text-center">
            <h2 class="text-light mb-5 font-weight-normal">I Am Available For FreeLance</h2>
            <a href="#contact" type="button" class="btn bg-primary w-lg" >Hire me</a>
        </div>
    </section>

    <div class="section contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-form-card">
                        <h4 class="contact-title">Send a message</h4>

                        <?php if(@$_SESSION['error']!=""){ ?>
                            
                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                              <div>
                                <?php echo htmlentities($_SESSION['error']);?>
                                <?php echo htmlentities($_SESSION['error']="");?>
                              </div>
                            </div>
                        <?php }//END if(@$_SESSION['error']!=""){ ?>

                        <?php if(@$_SESSION['success']!=""){ ?>

                            <div class="alert alert-success d-flex align-items-center" role="alert">
                              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                              <div>
                                <?php echo htmlentities($_SESSION['success']);?>
                                <?php echo htmlentities($_SESSION['success']="");?>
                              </div>
                            </div>
                        <?php }//END if(@$_SESSION['success']!=""){ ?>

                        <form method="post" action="index.php">
                            <div class="form-group">
                                <input  class="form-control" name="name" type="text" placeholder="Name *" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="email" type="email" placeholder="Email *" required>
                            </div>
                            <div class="form-group">
                                <input  class="form-control" name="phone" type="text" placeholder="Phone Number *" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" id=" placeholder="Message *" rows="7" required></textarea>
                            </div>
                            <div class="form-group ">
                                <button type="submit" name="contact_message" class="form-control btn btn-primary" >Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info-card">
                        <h4 class="contact-title">Get in touch</h4>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-mobile icon-md"></i>
                            </div>
                            <div class="col-10 ">
                                <h6 class="d-inline">Phone : <br> <span class="text-muted">+2348162667912</span></h6>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-map-alt icon-md"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="d-inline">Address :<br> <span class="text-muted">Federal Capital Territory (FCT), Abuja, Nigeria</span></h6>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-envelope icon-md"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="d-inline">Email :<br> <span class="text-muted">tosinadegoke30@gmail.com</span></h6>
                            </div>
                        </div>
                        <ul class="social-icons pt-4">
                            <li class="social-item"><a class="social-link text-light" href="https://facebook.com/adexson2010"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-light" href="https://x.com/adexson2010"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-light" href="https://www.youtube.com/@webdevwithamos5071"><i class="ti-youtube" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-light" href="https://instagram.com/adexson2010"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-light" href="https://github.com/amoz33"><i class="ti-github" aria-hidden="true"></i></a></li>
                        </ul> 
                    </div>
                </div>
            </div>

        </div>
    </div>
    <footer class="footer py-3">
        <div class="container">
            <p class="small mb-0 text-light">
                &copy; <script>document.write(new Date().getFullYear())</script> Created With <i class="ti-heart text-danger"></i> By <a href="http://amoz33.github.io" target="_blank"><span class="text-danger" title="Oluwatosin Adegoke Portfolio">Tosin Adegoke</span></a> 
            </p>
        </div>
    </footer>

	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope  -->
    <script src="assets/vendors/isotope/isotope.pkgd.js"></script>

    <!-- JohnDoe js -->
    <script src="assets/js/johndoe.js"></script>

</body>
</html>