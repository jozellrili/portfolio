<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portfolio: Jozell Rili</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="#">Jozell Mateo Rili</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#home">Home</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#skills">Skills</a>
                    </li>
                    <li>
                        <a href="#experience">Experience</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="home"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Jozell Mateo Rili</h1>
                        <h3>if ($hasProject) hireMe();</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="mailto:jozellrili@gmail.com" class="btn btn-default btn-lg"><i class="fa fa-envelope fa-fw"></i> <span class="network-name">Email</span></a>
                            </li> 
                            <li>
                                <a href="https://github.com/jozellrili" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                            </li>
                            <li>
                                <a href="https://ph.linkedin.com/in/jozell-rili" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!--Email Modal -->
    <div class="container">
     <div class="modal fade" id="emailModal" role="dialog">
       <div class="modal-dialog modal-md">
        <form id="contact-form" method="POST" action="mailbox.php" role="form">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">I'm glad to hear from you!</h4>
                </div>
                <div class="modal-body">
                    
                    <div class="messages"></div>
                    <div class="controls">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">Firstname *</label>
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required." maxlength="75">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_lastname">Lastname *</label>
                                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required." maxlength="75">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">Email *</label>
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required." maxlength="255">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_phone">Phone</label>
                                    <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone" maxlength="11">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form_message">Message *</label>
                                    <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please leave a message to proceed." maxlength="255"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button name= "sumbit" type="submit" class="btn btn-success btn-send" onclick="form_submit()" disabled="disabled">Send message</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-muted"><strong>*</strong> These fields are required.</p>
                            </div>
                        </div>
                    </div>   
                </div>
                <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             </div>
         </div>
     </form>
 </div>
</div>
</div>
<!-- end of Email Modal -->

<!-- Page Content -->

<a  name="about"></a>
<div class="content-section-a">

    <div class="container">
        <div class="row">
           <div class="col-lg-5 col-lg-offset-2 col-sm-6">
            <img id = "img-about" class="img-responsive" src="img/phone_photo.png" alt="">
        </div>
        <div class="col-lg-5 col-sm-6">
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h2 class="section-heading">Who is Jozell Mateo Rili?</h2>
            <p class="lead">Jozell is an experienced web developer who integrates well with existing teams. She had work with several cloud base systems for different industries. Jozell is easy-going, a good listener and understand the needs of the business. She was quick to respond and even worked several weekends to deliver on schedule.</p>
        </div>
        
    </div>

</div>
<!-- /.container -->

</div>
<!-- /.content-section-a -->

<a name="skills"></a>
<div class="content-section-b">

    <div class="container">

        <div class="row">
            <div class="col-lg-5 col-sm-push-7  col-sm-7">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">SKILLS</h2>
                <div class="multicolumn">
                   <ul>
                      <li> Front-end Web Development (HTML/CSS/Bootstrap/Javascript/JQuery/Ajax/XML)</li>
                      <li>Back-end Web Development(PHP/MySQL/Apache)</li>
                      <li>Knowledgeable in Unix/Linux (Web Server)</li>
                      <li>Database Management</li>
                      <li>Version control (Git/Subversion)</li>
                      <li>Graphic Editing (Adobe Photoshop/Illustrator/Sony Vegas/Adobe After Effect)</li>
                      <li>Network Configuration</li>
                      <li>Server Management</li>
                      <li>Application Programming</li>
                      <li>Arduino Programming</li>
                      <li>Technical Documentation</li>
                  </ul>
              </div>
          </div>
          <div class="col-lg-5 col-sm-pull-5  col-sm-5">
            <img class="img-skills" src="img/efficient-web-developer-skills.png" alt="">
        </div>
    </div>

</div>
<!-- /.container -->

</div>
<!-- /.content-section-b -->

<a name="experience"></a>
<div class="content-section-a">

    <div class="container">
       <div class="row">
          <div class="col-lg-6 col-sm-7">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">EXPERIENCE</h2>
              <p>Jozell have been involved in the development of web-based system for different industries and designing websites. She's an experienced web developer that has work in Windows and Linux platforms. Jozell is able to participate and contribute in all aspects of software development (requirements gathering, design, coding, testing, deployment, support)</p>
          </div>
          <div class="col-lg-4 col-sm-5">
           <img class="img-exp" src="img/desktop-login.png" alt="">
       </div>
   </div>

</div>

<!-- /.container -->

</div>
<!-- /.content-section-a -->



<a  name="contact"></a>
<div class="banner">

    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <h2>Experience a different kind of Web Development Service</h2>
            </div>
            <div class="col-lg-6">
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="#emailModal" data-toggle="modal" class="btn btn-default btn-lg"><i class="fa fa-envelope fa-fw"></i> <span class="network-name">Email</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/jozellrili" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href="https://ph.linkedin.com/in/jozell-rili" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.banner -->

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-inline">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a href="#skills">Skills</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a href="#experience">Experience</a>
                        <li class="footer-menu-divider">&sdot;</li>                   </li>

                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Jozell Mateo Rili <?php echo date('Y'); ?> All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-137267454-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-137267454-1');
  </script>

  <!-- jQuery -->
  <script src="js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/validator.js"></script>
  <script src="js/contact.js"></script>
  <script src="js/check_inputs.js"></script>

  <script type="text/javascript">
    function form_submit() {
        document.getElementById("contact-form").submit();
    }    
</script>
</body>

</html>
