<?php require_once( 'couch/cms.php' ); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Us | Mungari Kenya Marketing</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta name="author" content="George Ndirangu +254746649576 ndirangu.mepawa@gmail.com">
    <meta name="keywords" content="'web design' 'seo' ' online advertising' 'social media marketing' "> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
    <link rel="stylesheet" href="fonts/css/fontawesome-all.css">
</head>
<body>
     <div class="container-fluid" id="top-services">
        <div class="back-tint-services">
        <!-- navbar from w3 schools -->
        <nav class="navbar navbar-custom">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#homeNavbar">
                        <span class="icon-bar hamburger"></span>
                        <span class="icon-bar hamburger"></span>
                        <span class="icon-bar hamburger"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Mungari Kenya Marketing</a>
                </div>
                <div class="collapse navbar-collapse" id="homeNavbar">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="about.php">About Us</a>
                        </li>
                        <li>
                            <a href="services.php">Services</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
        </nav>
        </div>
    </div>

    <div class="container" id="contact-wrapper">
        <h1 class="text-center">We would like to hear from you</h1>
        <p class="text-center">Got any questions, feedback or suggestions? We would like to know what you have to say. Use the information on the left pane to contact one of employees directly or send us a message using the contact form on the right pane</p>
        <div class="row contact-content">
             <cms:editable name='contact' type='richtext'>
            <div class="col-md-4 contact-items">
                <h5>Support</h5>
                <ol>
                    <li><i class="fa fa-phone"></i> +254741231582</li>
                    <li><i class="fa fa-envelope"></i> support@mungari.co.ke</li>
                </ol>
                <h5>Enquiries</h5>
                <ol>
                    <li><i class="fa fa-phone"></i> +254741231582</li>
                    <li><i class="fa fa-envelope"></i> enquiries@mungari.co.ke</li>
                </ol>
                <h5>Investor Relations</h5>
                <ol>
                    <li><i class="fa fa-phone"></i> +254741231582</li>
                    <li><i class="fa fa-envelope"></i> ir@mungari.co.ke</li>
                </ol>
            </div>
            </cms:editable>
            <div class="col-md-8 contact-form">
                <cms:form action="contact.php" method="post" role="form">
                    <div class="form-group">
                        <label for="full_name">Full Name:</label>
                        <cms:input class="form-control" type="text" name="full_name" id="full_name" required='1' placeholder="Enter full name"/>
                        <cms:if k_error_full_name>
                        <p id="full_name_error" class="error">Name is required</p>
                        </cms:if>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <cms:input class="form-control" type="text" name="email" id="email" required='1' validator="email" placeholder="someone@email"/>
                        <cms:if k_error_email>
                        <p id="email_error" class="error">Enter Email in correct format</p>
                        </cms:if>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject:</label>
                        <cms:input class="form-control" type="text" name="subject" id="subject" required='1' placeholder="Enter subject"/>
                        <cms:if k_error_subject>
                        <p id="subject_error" class="error">Subject is required</p>
                        </cms:if>
                    </div>
                    <div class="form-group">
                        <cms:input type="textarea" class="form-control" name="message" id="message" cols="30" rows="10" placeholder="comments, enquiry, feedback here........"
                            required='1'></cms:input>
                            <cms:if k_error_messagel>
                            <p id="message_error" class="error">message body can't be empty</p>
                            </cms:if>
                    </div>
                    
                    <input  value="SEND" type="submit" name="submit" class="btn btn-info class="form-control"">
                    <cms:if k_success>
                        <p id="message_success" class="success">Success! We will contact you on your email</p>
                        <cms:send_mail from=k_email_from to=k_email_to subject="Contact Form From your website">
                        The following is the email
                        <cms:show k_success/>
                    </cms:send_mail> 
                     </cms:if>
                </cms:form>
            </div>
        </div>
    </div>
    
    <div class="container-fluid" id="footer_services">
        <h6><?php echo "&copy;".date("Y") ."Mungari Kenya Marketing" ?></h6>
        <h5><span><a href="index.php">Home</a></span> | <span><a href="about.php">About Us</a></span> | <span><a href="services.php">Services</a></span> | <span><a href="about.php">The Team</a></span> | <span><a href="contact.php">Contact Us</a></span> </h5>
    </div>
    
   
      <!-- _______________________________________ -->

    <!--                 UI scripts               -->
    <!-- __________________________________________ -->
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
<?php COUCH::invoke(); ?>