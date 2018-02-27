<?php require_once( 'couch/cms.php' ); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>About | Mungari Kenya Marketing</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta name="author" content="George Ndirangu +254746649576 ndirangu.mepawa@gmail.com">
    <meta name="keywords" content="'web design' 'seo' ' online advertising' 'social media marketing' "> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
    <link rel="stylesheet" href="fonts/css/fontawesome-all.css">
</head>
<body>
    <!--_____________- navbar + banner_______________ -->
    <div class="container-fluid" id="top-about">
        <div class="back-tint-about">
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
    <!-- overview -->
    <div class="container-fluid" id="overview">
        <div class="jumbotron">
            <div class="back-tint-about text-center">
                <cms:editable name='overview' type='richtext'>
                <h1>Overview</h1>
                <p>We are a marketing and communication consultancy providing marketing startegy, web design, search engine optimization(SEO), social media and copyrighting service to startups, SMEs and other sole traders working in many sectors.We are professional, approachable and specialize in working in partnerships with clients to understand the key elements of their business and help them grow. We provide advice about potential tactics for long-term growth and short-term campaigns.We help reach a wider audience for your project and service through integrated methods. For short term businesses, we can offer consultancy and business meetings outside of normal office hours to avoid time loss.</p>
                </cms:editable>
            </div>
        </div>
    </div>

    <div class="container text-center" id="team">
        <cms:editable name='the_team' type='richtext'>
        <h1>The Team</h1>
        <p>Below is the team of creative minds governing the company</p>
        <div class="person">
            <div class="person-back">
                <img src="images/george_about.jpg" alt="">
                <div class="social overlay"><a href="#"><i class="fab fa-facebook"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-linkedin"></i></a></div>
                <h4>Albert Mwangi</h4>
                <h5>C.E.O and executive director</h5>
                <p>.Being the sole founder he  holds teh companys viison and mission to heart and dilligently drives it toward attaintment of its vision .His management talent is of utmost value to the company</p>
            </div>
        </div>
        <div class="person">
            <div class="person-back">
                <img src="images/george_about.jpg" alt="">
                <div class="social overlay"><a href="#"><i class="fab fa-facebook"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-linkedin"></i></a></div>
                <h4>George Ndirangu</h4>
                <h5>The Head of IT and Web Administartor</h5>
                <p>.He is the creativve and briliant mind behind everything IT here at Mungari Kenya Marketing. His rare blend of IT, coding and design skills are what give this company its edge in technology use </p>
            </div>
        </div>
        <div class="person">
            <div class="person-back">
                <img src="images/george_about.jpg" alt="">
                <div class="social overlay"><a href="#"><i class="fab fa-facebook"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-linkedin"></i></a></div>
                <h4>Person Three</h4>
                <h5>Lorem ipsum dolor sit amet</h5>
                <p> consectetur adipisicing elit. Placeat ratione et minima possimus, non provident molestiae suscipit corporis. Libero aliquid dolorum sed perferendis necessitatibus aspernatur assumenda quo veniam. Omnis, dolor. </p>
            </div>
        </div>
        </cms:editable>
    </div>
    <div class="container-fluid" id="why_work_with_us">
        <cms:editable name='why_us' type='richtext'>
        <h1>Why Work With Us</h1>
        <div class="row row1">
            <div class="col-md-3">
                <div class="reason">
                    <h3>Personal Attention</h3>
                    <p>We work with only few clients at a time so we can personally supervise or execure your project and ensyre the best work. Our workforce is specialized, each individual in their oen area of work, so that at each step ofthe project we deliver the best.accusantium illo aliquam impedit voluptates delectus ipsum asperiores temporibus!</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="reason">
                    <h3>100% satisfaction</h3>
                    <p>Just know that you are working with the best every single time.No headaches. No bulls. The results speqak for themselves.
                        we also give updates to our customers as to whether or where the process is, how many clients so far..etaccusantium illo aliquam impedit voluptates delectus ipsum asperiores temporibus!c</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="reason">
                    <h3>Exceptional supportn</h3>
                    <p>We respond to any queries or questions in 24hrs for better service Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus sequi consequuntur minima earum officia enim, quae itaque molestiae porro veritatis magnam, accusantium illo aliquam impedit voluptates delectus ipsum asperiores temporibus!</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="reason">
                    <h3>On time completion</h3>
                    <p>I provide realistic timelines and estimates, never missing a deadline for any task or project Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil fugiat ullam maxime ipsa blanditiis non architecto perferendis nulla labore natus est placeat quisquam voluptate voluptatibus sequi rem voluptatem, aut magnam.</p>
                </div>
            </div>
        </div>
        <div class="row row2">
            <div class="col-md-4">
                <div class="reason">
                    <h3>Cost Effectiveness</h3>
                    <p>I do not do offfice so as to lower overhead and cost for my clients</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="reason">
                    <h3>Peace of Mind</h3>
                    <p>Your Payments is always secure. We have intuitive project management tools and a refund guarantee</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="reason">
                    <h3>All round expertise</h3>
                    <p>Our variations in knowledge and majorization helps deliver great results</p>
                </div>
            </div>
        </div>
        
            </cms:editable>   
         
        
        
        
        
        
    </div>

    <div class="container-fluid" id="footer_about">
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