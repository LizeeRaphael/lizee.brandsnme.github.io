<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<?php
require('mysqlconnect.php');
if(isset($_POST['submit_contact'])){
    $message="";
    // $first_name =mysqli_real_escape_string($conn, $_POST['firstname']);
   // $name =mysqli_real_escape_string($conn, $_POST['name']);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    

//   }else{
$sql = "INSERT INTO softwareclients (name, email, message) VALUES ('$name', '$email', '$message')";

if(mysqli_query($conn,$sql)){
   
     //echo  "Sent, we would respond shortly!";
  echo header("location:success.php");
}else{
  echo "Error!".mysqli_error($conn);
}
};

?>
    <title>Lizee - Brands N' Me</title>

    <!-- load CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                  <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="fontawesome/css/fontawesome-all.min.css">                <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>                       <!-- http://kenwheeler.github.io/slick/ -->
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/tooplate-style.css">                               
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font/font-awesome-4.7.0/css/font-awesome.min.css">
    
    
    <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this in a modern browser such as latest version of Chrome or Microsoft Edge.");</script>
    
</head>

<body>
    <div id="tm-bg"></div>
    <div id="tm-wrap">
        <div class="tm-main-content">
            <div class="container tm-site-header-container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-md-col-xl-6 mb-md-0 mb-sm-4 mb-4 tm-site-header-col">
                        <div class="tm-site-header">
                            <h1 class="mb-4">Lizee Raphael</h1>
                            <img src="img/underline.png" class="img-fluid mb-4">
                            <p>Software Developer</p>
                            <p><h6>Brands N' Me</h6></p>           
                        </div>                        
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="content">
                            <div class="grid">
                                <div class="grid__item" id="home-link">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-home fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Reception</span>
                                            <div class="product__bg"></div>        
                                        </div>                                    
                                        <div class="product__description">
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <h2 class="tm-page-title">Lizee Welcomes You!</h2>        
                                                </div>
                                            </div>                                        
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                    <img src="img/960x0.jpg" class="img-fluid mb-3">
                                                    <p>Welcome to my portfolio! We're ready to give you the best programming services. You need a Pro like us! </p>
                                                    <p>Please tell your friends about our simple and classy designs @ <a rel="nofollow" href="#" target="_parent">Brands N' Me</a>. That will be very helpful for us. Thank you!</p>    
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                    <p> Want a professional design? Worry less, you're in the right place!</p>
                                                    <p>For questions and enquiries, feel free to <a rel="nofollow" href="#" target="_parent">contact us</a>. You are welcome.</p>
                                                    <img src="img/gettyimages-1322517295-170667a.jpg" class="img-fluid">
                                                </div>                                        
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="grid__item" id="team-link">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-users fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Team</span>
                                            <div class="product__bg"></div>            
                                        </div>                                     
                                        <div class="product__description">
                                            <div class="p-sm-4 p-2">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title">About Brands N' Me</h2>        
                                                    </div>
                                                </div>
                                                <div class="row tm-reverse-sm">
                                                    <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                                        <p class="mb-4">Hi My name is Lizee, I lead Brands N' Me team, birthed out of my passion for tech.</p>
                                                        <p class="mb-4">Brands N' Me is a group of software developers, graphic designers, branding, prints and video editors. We come in when there's a project that should involve a team or a group to carry out different tasks and achieve great results faster.</p>
                                                        <p class="mb-5">We work together, share ideas, create projects and design web applications. we are UI and UX experts! We also take individual projects that does not require team.</p>
                                                        <a href="#" class="btn tm-btn-gray">Contact Lizee</a>        
                                                    </div>                                                
                                                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-lg-0 mb-sm-4 mb-4">
                                                        <img src="img/istockphoto-1081869336-612x612.jpg" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid__item">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-handshake fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text"> Jobs</span>
                                            <div class="product__bg"></div>             
                                        </div>                                                                 
                                        <div class="product__description">
                                            <div class="p-sm-4 p-2">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title">What We Do</h2>        
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <p><li>Responsive designs.</li></p>
                                                        <p><li>Professional UI/UX.</li></p>
                                                        <p><li>Domain name & registration.</li></p>
                                                        <p><li>Admin dashboards.</li></p>
                                                        <p><li>SSL Certificate.</li></p>
                                                        <p><li>SEO optimization.</li></p>
                                                        <p><li>API integration.</li></p>
                                                        <p><li>Social media integration.</li></p>
                                                        <p><li>Payment Gateway integration.</li></p>
                                                        <p><li>Live chat integration.</li></p>
                                                        <p><li>Website Maintenance.</li></p>
                                                      
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="p-sm-4 p-2 tm-img-container">
                                                            <div class="tm-img-slider" id="tmImgSlider">
                                                              <a href="#" class="tm-slider-img-link"><img src="img/istockphoto-1248263998-612x612.jpg" alt="Image 1" class="img-fluid tm-slider-img"></a>
                                                              <a href="#" class="tm-slider-img-link"><img src="img/gettyimages-1322517295-170667a.jpg" alt="Image 2" class="img-fluid tm-slider-img"></a>
                                                              <a href="#" class="tm-slider-img-link"><img src="img/tech-devices-icons-connected-digital-planet-earth_117023-449.jpg" alt="Image 3" class="img-fluid tm-slider-img"></a>
                                                              <a href="#" class="tm-slider-img-link"><img src="img/istockphoto-1364358321-612x612.jpg" alt="Image 4" class="img-fluid tm-slider-img"></a>
                                                              <a href="#" class="tm-slider-img-link"><img src="img/1E-Sponsors-Womens-Technology-Award.jpg" alt="Image 5" class="img-fluid tm-slider-img"></a>
                                                              <a href="#" class="tm-slider-img-link"><img src="img/istockphoto-1081869336-612x612.jpg" alt="Image 6" class="img-fluid tm-slider-img"></a>
                                                              
                                                            </div>
                                                        </div>  
                                                    </div>
                                                </div>
                                        <h2><p>We also offer</li></p></h2>
                                                <p><li>Professional Graphic Designs.</li></p>
                                                <p><li>Video Editing.</li></p>
                                                <p><li>Brandings and Prints.</li></p>
                                                <p>For questions and enquiries, always feel free to <a rel="nofollow" href="#" target="_parent">contact us</a></p>
                                            </div>
                                        </div>       
                                    </div>
                                </div>

                                <div class="grid__item">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-comments fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Contact</span>
                                            <div class="product__bg"></div>             
                                        </div>                                                              
                                        <div class="product__description">
                                            <div class="pt-sm-4 pb-sm-4 pl-sm-5 pr-sm-5 pt-2 pb-2 pl-3 pr-3">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title">Hire A Pro</h2>        
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-12">
                                                        
                                                        <!-- <p>
                                                            <a href="#">
                                                                <img src="img/Facebook-PNG-Image-38915.png" width="30px" height="30px">
                                                            </a>
                                                            <img src="img/778-7786102_instagramm-clipart-instagram-icon-instagram-follower-logo-transparent.png" width="28px" height="20px">
                                                            
                                                            </p> -->
                                                            <p> Call: <i class="fa fa-phone"></i> +234 818 800 9138</i></a></p>
                                                            <img src="img/Gmail_Icon.png" width="30px" height="30px"> brandsnme@gmail.com
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <form action="brand.php" method="post" class="contact-form">
                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                                                  <input type="text" id="contact_name" name="name" class="form-control" placeholder="Name"  required/>
                                                                </div>
                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6 tm-col-email">
                                                                  <input type="email" id="contact_email" name="email" class="form-control" placeholder="Email"  required/>
                                                                </div>
                                                            </div>                                                        
                                                            <div class="form-group">
                                                              <textarea id="contact_message" name="message" class="form-control" rows="9" placeholder="Message" required></textarea>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary tm-btn-submit" name="submit_contact">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>                       
                    </div>
                </div>                
            </div>
            <footer>
                <p class="small tm-copyright-text">Copyright &copy; <span class="tm-current-year">2022</span> Brand N' Me
                
                Design: <a rel="nofollow" href="#" class="tm-text-highlight"> By Lizee Raphael</a></p>
            </footer>
        </div> <!-- .tm-main-content -->  
    </div>
    <!-- load JS -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>         <!-- https://jquery.com/ -->    
    <script src="slick/slick.min.js"></script>                  <!-- http://kenwheeler.github.io/slick/ -->  
    <script src="js/anime.min.js"></script>                     <!-- http://animejs.com/ -->
    <script src="js/main.js"></script>  
    <script>      

        function setupFooter() {
            var pageHeight = $('.tm-site-header-container').height() + $('footer').height() + 100;

            var main = $('.tm-main-content');

            if($(window).height() < pageHeight) {
                main.addClass('tm-footer-relative');
            }
            else {
                main.removeClass('tm-footer-relative');   
            }
        }

        /* DOM is ready
        ------------------------------------------------*/
        $(function(){

            setupFooter();

            $(window).resize(function(){
                setupFooter();
            });

            $('.tm-current-year').text(new Date().getFullYear());  // Update year in copyright           
        });

    </script>             

</body>
</html>