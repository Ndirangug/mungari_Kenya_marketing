<?php require_once( 'couch/cms.php' ); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home | Mungari Kenya Marketing</title>
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
    <div class="container-fluid" id="top">
        <div class="back-tint">
        <!-- navbar from w3 schools -->
        <nav style="padding:0 0em 2em 2em;" class="navbar navbar-custom">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#homeNavbar">
                        <span class="icon-bar hamburger"></span>
                        <span class="icon-bar hamburger"></span>
                        <span class="icon-bar hamburger"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img style="display:inline;" class="logo" src="images/logo_nav.png" height="70" width="70" alt=""><span style="display:inline; margin-left:1em; font-size:1.3em;" >Mungari Marketing Kenya</span></a>
                </div>
                <div class="collapse navbar-collapse" style="margin-right:4em;" id="homeNavbar">
                    <ul style="margin-top:1em; margin-bottom:0;" class="nav navbar-nav navbar-right">
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
        <!-- slider -->
            <!-- left right buttons -->
            <span onclick="plusSlides(-1)" class="glyphicon glyphicon-chevron-left prev"></span>
            <span onclick="plusSlides(1)" class="glyphicon glyphicon-chevron-right next"></span>
        <div class="content">
            <cms:editable name='slider' type='richtext'>
            <!-- social media marketing -->
            <div class="item">
                <div class="row">
                    <div class="col-md-4"><img src="images/social_media_marketing_banner_inset.jpg" class="img-circle" alt=""></div>
                    <div class="col-md-8"> <h1>Social Media Marketing</h1>
                    <p>We create social media accounts for you and manage them on your behalf.We make sure your pages and profiles on social media are up to standard and visible. We take care of making you visible so that you only think about production in your business.</p>
                    <a href="services.php" class="btn btn-info">SEE MORE <span class="glyphicon glyphicon-chevron-right"></span></a></div>
                </div>
               
            </div>
            <!-- logo design -->
            <div class="item">
                <div class="row">
                    <div class="col-md-4"><img src="images/logo_design_banner_inset.png" class="img-circle" alt=""></div>
                    <div class="col-md-8"> <h1>Logo Design</h1>
                    <p>We design logos for your business, institution, organization or any other entity according to your preferences. Our logo designs are professsionaly done and made to look good on any surface, material or background</p>
                    <a href="services.php" class="btn btn-info">SEE MORE <span class="glyphicon glyphicon-chevron-right"></span></a></div>
                </div>
                
            </div>
            <!-- web design -->
            <div class="item">
                <div class="row">
                    <div class="col-md-4"><img src="images/web_design_banner_inset.png" class="img-circle" alt=""></div>
                    <div class="col-md-8"><h1>Web Design</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia blanditiis ut necessitatibus aperiam aut totam corrupti nisi dolorem expedita amet aliquid repellat ratione illo adipisci, saepe fugit exercitationem beatae iure.</p>
                    <a href="services.php" class="btn btn-info">SEE MORE <span class="glyphicon glyphicon-chevron-right"></span></a></div>
                </div>
                
            </div>
            <!-- email marketing -->
            <div class="item">
                <div class="row">
                    <div class="col-md-4"><img src="images/email_marketing_banner_inset.jpg" class="img-circle" alt=""></div>
                    <div class="col-md-8">
                        <h1>Email Marketing</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam delectus molestiae perferendis facilis. Provident unde esse harum maxime dolorum nam eius aperiam officiis fugiat praesentium, illum ea deserunt? Dolores, ipsam</p>
                    <a href="services.php" class="btn btn-info">SEE MORE <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                </div>
                
            </div>
            <!-- seo -->
            <div class="item">
                <div class="row">
                    <div class="col-md-4"><img src="images/seo_banner_inset.png" class="img-circle" alt=""></div>
                    <div class="col-md-8"><h1>Search Engine Optimization</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio molestiae blanditiis provident dignissimos non laboriosam sunt sit ratione architecto iusto. Quibusdam nam aspernatur praesentium aliquid repudiandae impedit, assumenda cupiditate iusto!</p>
                    <a href="services.php" class="btn btn-info">SEE MORE <span class="glyphicon glyphicon-chevron-right"></span></a></div>
                </div>
                
            </div>
            <!-- copyrighting -->
            <div class="item">
                <div class="row">
                    <div class="col-md-4"><img src="images/copyright_banner_inset.jpg" class="img-circle" alt=""></div>
                    <div class="col-md-8"><h1>Copyrighting</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime dicta, nulla aut fugiat numquam debitis iusto sint aliquid harum ad tenetur, dolorem mollitia repudiandae, asperiores hic animi repellat exercitationem earum?</p>
                    <a href="services.php" class="btn btn-info">SEE MORE <span class="glyphicon glyphicon-chevron-right"></span></a></div>
                </div>
                
            </div>
           
            <!-- content marketing -->
            <div class="item">
                <div class="row">
                    <div class="col-md-4"><img src="images/content_marketing_banner_inset.jpg" class="img-circle" alt=""></div>
                    <div class="col-md-8">
                        <h1>Content Marketing</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque cumque qui, ipsam reprehenderit aperiam tenetur distinctio amet aliquid illum, excepturi totam nihil fuga consectetur magnam! Inventore quis voluptas quia velit!</p>
                    <a href="services.php" class="btn btn-info">SEE MORE <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                </div>
            </div>
            <!-- pr outreach -->
            <div class="item">
                <div class="row">
                    <div class="col-md-4"><img src="images/pr_outreach_banner_inset.jpg" class="img-circle" alt=""></div>
                    <div class="col-md-8">
                         <h1>P.R. Outreach</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur aperiam rem ratione soluta odio maiores voluptas harum voluptatibus corrupti architecto repudiandae perspiciatis nam dolores necessitatibus, saepe, accusantium maxime, blanditiis sequi.</p>
                    <a href="services.php" class="btn btn-info">SEE MORE <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                </div>
            </div>
                </cms:editable>  
            
        </div>
        <!-- dots at bottom of slider -->
        <div class="indicators text-center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
            <span class="dot" onclick="currentSlide(7)"></span>
            <span class="dot" onclick="currentSlide(8)"></span>
           
        </div>
        
        </div>
    </div>
    <!-- portfolio -->
    <div class="container" id="portfolio">
        <div class="portfolio-wrapper">
            <h1 class="text-center">Our Portfolio</h1>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        
                        <td  colspan="2" rowspan="2" id="company1">
                            <div class="portfolio-item">
                                <cms:editable name='grivit8' type='richtext'>
                                <h1>Gravit 8 Marketing</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quidem error consectetur praesentium. Recusandae earum cupiditate corrupti ut porro libero. Cum ullam autem repellendus fugit dicta atque ut. Nihil, amet.</p>
                                </cms:editable>
                            </div>
                        </td>
                        <td colspan="2" id="company2">
                            <div class="portfolio-item">
                                <cms:editable name='bluefountain' type='richtext'>
                                <h1>Blue Fountain Media</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quidem error consectetur praesentium. Recusandae earum cupiditate corrupti ut porro libero. Cum ullam autem repellendus fugit dicta atque ut. Nihil, amet.</p>
                                </cms:editable>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td id="company3">
                            <div class="portfolio-item">
                                <cms:editable name='enate' type='richtext'>
                                <h1>Enate Marketing</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quidem error consectetur praesentium. Recusandae earum cupiditate corrupti ut porro libero. Cum ullam autem repellendus fugit dicta atque ut. Nihil, amet.</p>
                            </cms:editable>
                            </div>
                        </td>
                        <td rowspan="3" id="company4">
                            <div class="portfolio-item">
                                <cms:editable name='kvantum' type='richtext'>
                                <h1>Kvantum</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quidem error consectetur praesentium. Recusandae earum cupiditate corrupti ut porro libero. Cum ullam autem repellendus fugit dicta atque ut. Nihil, amet.</p>
                        </cms:editable>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="2" id="company5">
                            <div class="portfolio-item">
                                <cms:editable name='wixon' type='richtext'>
                                <h1>Wixon Jewellers</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quidem error consectetur praesentium. Recusandae earum cupiditate corrupti ut porro libero. Cum ullam autem repellendus fugit dicta atque ut. Nihil, amet.</p>
                                </cms:editable>
                            </div>
                        </td>
                        <td colspan="2" id="company6">
                            <div class="portfolio-item">
                                <cms:editable name='i7marketing' type='richtext'>
                                <h1>i7 Marketing</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quidem error consectetur praesentium. Recusandae earum cupiditate
                                    corrupti ut porro libero. Cum ullam autem repellendus fugit dicta atque ut. Nihil, amet.</p>
                            </cms:editable>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td id="company7">
                            <div class="portfolio-item">
                                <cms:editable name='ripplemarketing' type='richtext'>
                                <h1>Ripple Marketing</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quidem error consectetur praesentium. Recusandae earum cupiditate corrupti ut porro libero. Cum ullam autem repellendus fugit dicta atque ut. Nihil, amet.</p>
                        </cms:editable>
                            </div>
                        </td>
                        <td id="company8">
                            <div class="portfolio-item">
                                <cms:editable name='snemark' type='richtext'>
                                <h1>Smemark</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quidem error consectetur praesentium. Recusandae earum cupiditate corrupti ut porro libero. Cum ullam autem repellendus fugit dicta atque ut. Nihil, amet.</p>
                            </cms:editable>
                            </div>
                        </td>

                    </tr>
                </table>
            </div>
           
        </div>
        
    </div>
    <div class="container-fluid text-center" id="testimonials">
        <h1 class="text-center">Testimonials</h1>
        <!-- slider -->
        <!-- left right buttons -->
        <span onclick="plusTestimonial(-1)" class="glyphicon glyphicon-chevron-left prev-testimonial"></span>
        <span onclick="plusTestimonial(1)" class="glyphicon glyphicon-chevron-right next-testimonial"></span>
        <div class="content">


        <cms:editable name='testimonials' type='richtext'>
            <!-- customer 1 -->
            <div class="item-testimonial">
                <div class="row">
                    <!-- <div class="col-md-4">
                        <img src="images/social_media_marketing_banner_inset.jpg" class="img-circle" alt="">
                    </div> -->
                    <div class="col-md-12">
                        <h2>Customer 1</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quam sequi tempora illo? Odit, eos labore quasi numquam enim est natus voluptate iste possimus fugiat saepe eum impedit voluptas quaerat..</p>
                        
                    </div>
                </div>
        
            </div>
            <!-- customer 2 -->
            <div class="item-testimonial">
                <div class="row">
                    <!-- <div class="col-md-4">
                        <img src="images/logo_design_banner_inset.png" class="img-circle" alt="">
                    </div> -->
                    <div class="col-md-12">
                        <h2>Customer 2</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo officia tenetur rem, perferendis tempora quis, itaque maxime, adipisci ex qui eaque veritatis dignissimos soluta? Commodi qui iure obcaecati accusamus voluptatem.</p>                       
                    </div>
                </div>
        
            </div>
            <!-- customer 3-->
            <div class="item-testimonial">
                <div class="row">
                    <!-- <div class="col-md-4">
                        <img src="images/web_design_banner_inset.png" class="img-circle" alt="">
                    </div> -->
                    <div class="col-md-12">
                        <h2>customer 3</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia blanditiis ut necessitatibus aperiam aut
                            totam corrupti nisi dolorem expedita amet aliquid repellat ratione illo adipisci, saepe fugit exercitationem
                            beatae iure.</p>
                        
                    </div>
                </div>
        
            </div>
            <!-- customer 4 -->
            <div class="item-testimonial">
                <div class="row">
                    <!-- <div class="col-md-4">
                        <img src="images/email_marketing_banner_inset.jpg" class="img-circle" alt="">
                    </div> -->
                    <div class="col-md-12">
                        <h2>Customer 4</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam delectus molestiae perferendis facilis.
                            Provident unde esse harum maxime dolorum nam eius aperiam officiis fugiat praesentium, illum ea deserunt?
                            Dolores, ipsam</p>
                       
                    </div>
                </div>
        
            </div>
            <!-- customer 5-->
            <div class="item-testimonial">
                <div class="row">
                    <!-- <div class="col-md-4">
                        <img src="images/seo_banner_inset.png" class="img-circle" alt="">
                    </div> -->
                    <div class="col-md-12">
                        <h2>Customer 5</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio molestiae blanditiis provident dignissimos
                            non laboriosam sunt sit ratione architecto iusto. Quibusdam nam aspernatur praesentium aliquid repudiandae
                            impedit, assumenda cupiditate iusto!</p>
                       
                    </div>
                </div>
        
            </div>
            </cms:editable>
        
            
           
        
        
        </div>
        <!-- dots at bottom of slider -->
        <div class="indicators text-center">
            <span class="dot-testimonial dot1" onclick="currentTestimonial(1)"><img src=<cms:editable name='customer1' type='image'>"images/social_media_marketing_banner_inset.jpg"</cms:editable> class="img-circle" alt=""></span>
            <span class="dot-testimonial dot2" onclick="currentTestimonial(2)"><img src=<cms:editable name='customer2' type='image'>"images/logo_design_banner_inset.png"</cms:editable> class="img-circle" alt=""></span>
            <span class="dot-testimonial dot3" onclick="currentTestimonial(3)"><img src=<cms:editable name='customer3' type='image'>"images/web_design_banner_inset.png"</cms:editable> class="img-circle" alt=""></span>
            <span class="dot-testimonial dot4" onclick="currentTestimonial(4)"><img src=<cms:editable name='customer4' type='image'>"images/email_marketing_banner_inset.jpg"</cms:editable> class="img-circle" alt=""></span>
            <span class="dot-testimonial dot5" onclick="currentTestimonial(5)"><img src=<cms:editable name='customer5' type='image'>"images/seo_banner_inset.png"</cms:editable> class="img-circle" alt=""></span>
            
        
        </div>

    </div>

    <div class="container text-center" id="subscribe">
        <form action="index.php" class="form-inline" role="form" method="post">
            <div class="form-group">
                <label for="email">Subscribe to our newsletter and get to know of all the current trends and offers from us</label>
                <br>
                <input type="email" required  name="email" class="form-control" placeholder="enter email address"/>
                
                <input type="submit" name="submit" class="btn btn-info" value="SUBSCRIBE"/>
               
                <?php

                    if (isset($_POST['submit'])) {
                        if (mail("ndirangu.mepawa@outlook.com", "NEW SUBSCRIPTION ON MUNGARI WEBSITE", "Hello, a new email ".$_POST['email']." asked to be added to the subsciption list ")) {
                            echo "<p style='color:green;'>Success!Your request has been received. Check email shortly</p>";
                        }

                        else{
                            echo "<p style='color:red;'>Sorry, your request could not be processed at this time</p>";   
                        }
                    }
                ?>
            </div>
        </form>
    </div>

    <div class="conatiner-fluid text-center" id="footer">
        <h1>MUNGARI KENYA LIMITED</h1>
        <a href="<cms:editable name='facebooklink' type='richtext'>https://facebook.com </cms:editable>" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="<cms:editable name='instagramlink' type='richtext'>https://instagram.com </cms:editable>"  target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="<cms:editable name='twitterlink' type='richtext'>https://twitter.com</cms:editable>" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="<cms:editable name='googlepluslink' type='richtext'>https://twitter.com</cms:editable>" target="_blank"><i class="fab fa-google-plus"></i></a>
        <div class="row">
            <div class="col-md-3">
                <h5><a href="about.php">About Us</a></h5>
                <h5><a href="about.php">Our Team</a></h5>
                <h5><a href="contact.php">Contact Us</a></h5>
            </div>
            <div class="col-md-3">
                <h5><a href="services.php">Search Engine Optimization</a></h5>
                <h5><a href="services.php">Advertising</a></h5>
                <h5><a href="services.php">Logo Design</a></h5>
            </div>
            <div class="col-md-3">
                <h5><a href="services.php">Web Designs</a></h5>
                <h5><a href="services.php">Email Marketing</a></h5>
                <h5><a href="services.php">Copyrighting</a></h5>
            </div>
            <div class="col-md-3">
                <h5><a href="services.php">Content Marketing</a></h5>
                <h5><a href="services.php">P.R. Outreach</a></h5>
                <h5><a href="services.php">Social Media Marketing</a></h5>
            </div>
        </div>
        <div class="row" id="copyright">
            <div class="col-md-12 text-center">
                <?php
                echo "&copy;".date("Y") ."Mungari Kenya Marketing"
                ?>
            </div>
        </div>
    </div>

    

    <!-- _______________________________________ -->

    <!--                 UI scripts               -->
    <!-- __________________________________________ -->
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="js/main.js"></script>
    <script>

        function nextSlide() {
            plusSlides(1);
        }
      
        //on hover portfoio item, show info
        $("document").ready(function(){
              
           

            //slide timer
            setInterval(nextSlide, 3000);
            
            //portfolio fade
            $(".portfolio-item").mouseenter(function(){
                $(this).fadeTo(1000, 1);
            });

            $(".portfolio-item").click(function () {
                $(this).fadeTo(1000, 1);
            });
            $(".portfolio-item").focusin(function () {
               $(this).fadeTo(1000, 1);
            });
            $(".portfolio-item").focusout(function () {
                $(this).fadeTo(2000, 0);
            });
            $(".portfolio-item").mouseleave(function () {
                $(this).fadeTo(2000, 0);
            });
           
          
        });
    </script>
</body>
</html>
<?php COUCH::invoke(); ?>