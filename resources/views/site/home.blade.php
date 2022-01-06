
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <style>.jquery-ripples { position: relative; z-index: 0; }</style>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="Ian Personal Portfolio">
      <!-- Title -->
      <title>Ian</title>
	  
      <!-- Favicon -->
      <link rel="icon" type="image/png" sizes="102x102" href="assets/img/favicons/logo.svg">
	

<!-- Disable Right click on the page - to hide source code -->	
<script>

 </script>
 

      <!--Bootstrap css-->
      <link rel="stylesheet" href="assets/css/bootstrap.css">                             <!--Done-->
      <!--Font Awesome css-->
	  <link rel="stylesheet" href="assets/css/font-awesome/fonts/css/font-awesome.min.css">   <!--In progress-->
      <!--Animatedheadline css-->
      <link rel="stylesheet" href="assets/css/jquery.animatedheadline.css">        <!--Done-->
	  <link rel="stylesheet" href="assets/css/vendor.css">                         <!--Done-->
      <!--Magnific css-->
      <link rel="stylesheet" href="assets/css/magnific-popup.css">                 <!--Done-->
      <!--Owl-Carousel css-->
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">               <!--Done-->
      <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">          <!--Done-->
      <!--Site Main Style css-->
      <link rel="stylesheet" href="assets/css/style.css">                         <!--Done-->
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">     
      <!--Responsive css-->
      <link rel="stylesheet" href="assets/css/responsive.css">
   </head>
   <body class="antialiased">
       
       
      <!-- Preloader Start -->
      <div id="preloader">
         <div class="spinner">
            <div class="spin1"></div>
            <div class="spin2"></div>
            <div class="spin3"></div>
            <div class="spin4"></div>
            <div class="spin5"></div>
         </div>
      </div>
      <!-- Preloader End -->
	  
       
       
      <!--Navbar Start-->
      <nav class="navbar navbar-expand-lg navbar-dark            site-header site-header--classic animate is-light">
         <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo" href="#"  alt="" />
            Digisoft
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" 
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarCollapse">
               <ul class="navbar-nav ml-auto">
			   
                  <li class="nav-item">
                     <a href="#" class="nav-link active" data-scroll-nav="0" >Home</a>
                  </li>
				  
                  <li class="nav-item">
                     <a href="#about" class="nav-link">About</a>
                  </li>


                  <li class="nav-item">
							<a href="#services" class="nav-link">Services</a>
							
					
                 </li>
				  
                  <li class="nav-item">
                     <a href="#" class="nav-link" data-scroll-nav="3">Works</a>
                  </li>
				  
                  <li class="nav-item">
                     <a href="#" class="nav-link" data-scroll-nav="6">Contact</a>
                  </li>
				  
				  <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
				  
               </ul>
            </div>
         </div>
      </nav>
      <!--Navbar End-->
       
       
      <!--Home Section Start-->
      <section id="home" class="banner" data-scroll-index="0">
         <div class="banner-area">
            <div class="banner-caption container">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12 col-sm-12 content-home">
                        <div class="banner-welcome">
                           <h3>Hi! I'm Ian Ndugire.</h3>
                           <div class="caption-inner">
                              <div class="ah-headline">
                                 <span class="typed-static">A Professional </span>
                                 <span class="ah-words-wrapper">
                                 <b class="is-visible"> Full stack Developer</b> 
                                 <b> Mobile Developer </b>
                                 <b> Software Developer </b>
                                 <b> Data Scientist Developer </b>
                                 <b> Web Designer. </b>
                                 </span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a href="#section_100" data-scroll-nav="1" class="mouse-icon hidden-sm"><span class="wheel"></span></a>
                     </div>
         </div>
      </section>
      <!--Home Section End-->
       
      <!--About Section Start-->
      <section class="fabon-about-area section_100">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="about-avatar">
                     <img src="./assets/img/ian.jpg" alt="avatar" />
                  </div>
               </div>
            </div>
            <div class="row2">
               <div class="col-md-6">
                  <div class="about-left">
                     <h2>Hi There! I'm Ian</h2>
                     <p>I'm 23 years old creative web developer based in Nairobi, specializing in full stack web and mobile development. I build clean, appealing, and functional websites which comply with the latest web standards.</p>
                     <ul>
                        <li>
                           <span><i class="fa fa-map-marker"></i> Location </span>
                           : Nairobi, Kenya.
                        </li>
                        <!--<li>
                           <span><i class="fa fa-calendar"></i> age </span>
                           : 23
                        </li>-->
                        <li>
                           <span><i class="fa fa-phone"></i> Phone </span>
                           : +254 712 526 372
                        </li>
                        <li>
                           <span><i class="fa fa-envelope"></i> Email </span>
                           : iamrikie@gmail.com
                        </li>
                     </ul>
                     <div class="about_btns">
                        <a href="#" class="fabon-btn">Download CV</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="skills-prog half">
                     <!-- Item Skills -->
                     <h4>SKILLS</h4>
                     <h6>Java</h6>
                     <h6>REACT</h6>
                     <h6>Laravel</h6>
                     <h6>Bootstrap</h6>
					 <h6>JQUERY</h6>
                     <h6>Git & Github</h6>
                     </div>
                  </div>
               </div>
               </div>
      </section>
      <!--About Section End-->
       
       
      <!-- Service Area Start -->
      <section class="fabon-service-area section_t_100 section_b_70" data-scroll-index="2">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h2>what I do</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4" "anim1">
                  <div class="single-service">
                     <div class="service-icon">
                        <i class="fa fa-laptop"></i>
                     </div>
                     <h4>Web Design</h4>
                     <p>I plan and create internet sites and web pages. Many of which I combine text with sounds, pictures, graphics and video clips.I work on a brand new website or an already existing site.</p>
                     <div class="service-hover">
                        <a href="#">
                        <i class="fa fa-arrow-right"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4" "anim2">
                  <div class="single-service">
                     <div class="service-icon">
                        <i class="fa fa-gears"></i>
                     </div>
                     <h4>Web Development</h4>
                     <p>I use diverse coding languages to  build and maintain websites of which I make them look great, work fast and perform well with a seamless user experience. Is that not amazing?</p>
                     <div class="service-hover">
                        <a href="#">
                        <i class="fa fa-arrow-right"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 anim3">
                  <div class="single-service">
                     <div class="service-icon">
                        <i class="fa fa-mobile"></i>
                     </div>
                     <h4>Responsive Design</h4>
                     <p>As a Professional web developer, the approach of creating content adjust smoothly to various screen sizes, I size elements in relative units and apply media queries so the designs can automatically adapt to the browser space to ensure content consistency across devices .</p>
                     <div class="service-hover">
                        <a href="#">
                        <i class="fa fa-arrow-right"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
               </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Service Area End -->
       
       
      <!--Portfolio Section Start-->


      <section class="fabon-work-area section_t_100 section_b_70" data-scroll-index="3">
         <div class="container">
            <div class="col-md-12">
               <div class="site-heading">
                  <h2>Recent Work</h2>

             <div class="main-content">
               <!--Portfolio Item-->
               <div class="col-lg-4 col-md-6 item application">
                  <div class="item-content">
                     <img src="./assets/img/1.jpg" alt="">
                     <div class="item-img-overlay">
                        <div class="overlay-info v-middle text-center"></div>
                        <div class="cap">
                           <h6>A Simple Calculator</h6>
                           <div class="icons">
                              <span class="zoom-img">
                              <a href="https://odhiambo526.github.io/calculator/">
                              <i class="fa fa-search"></i>
                              </a>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>


               <div class="col-lg-4 col-md-6 item application">
                  <div class="item-content">
                     <img src="./assets/img/2.jpeg" alt="">
                     <div class="item-img-overlay">
                        <div class="overlay-info v-middle text-center"></div>
                        <div class="cap">
                           <h6>Food Recipe App</h6>
                           <div class="icons">
                              <span class="zoom-img">
                              <a href="https://odhiambo526.github.io/recipe_app/">
                              <i class="fa fa-search"></i>
                              </a>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>


               <div class="col-lg-4 col-md-6 item application">
                  <div class="item-content">
                     <img src="./assets/img/3.jpeg" alt="">
                     <div class="item-img-overlay">
                        <div class="overlay-info v-middle text-center"></div>
                        <div class="cap">
                           <h6>Weather App</h6>
                           <div class="icons">
                              <span class="zoom-img">
                              <a href="https://odhiambo526.github.io/weather_app/">
                              <i class="fa fa-search"></i>
                              </a>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>


               <!--Portfolio Item-->
               <div class="col-lg-4 col-md-6 item design">
                  <div class="item-content">
                     <img src="./assets/img/item1.jpeg" alt="">
                     <div class="item-img-overlay">
                        <div class="overlay-info v-middle text-center"></div>
                        <div class="cap">
                           <h6>A Movie Review App</h6>
                           <div class="icons">
                              <span class="zoom-img">
                              <a href="https://odhiambo526.github.io/my_movie/">
                              <i class="fa fa-search"></i>
                              </a>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               </div>
               </div>
               </div>
               </div>
               </section>
            <!--End Of Portfolio Item-->

<!-- Contact Area Start -->
<section class="fabon-contact-area section_100" data-scroll-index="6">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="site-heading">
               <h2>Get In Touch</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-10 offset-md-1">
            <!-- Contact Form -->
            <form action='POST' id='contact-form' method='post'><input type='hidden' name='form-name' value='contact-form' />
               <div class="row">
                  <div class="col-md-6 form-group">
                     <!--name-->
                     <input type="text" id="contact-name name" class="form-control" placeholder="Name" minlength=3 required>
                  </div>
                  <div class="col-md-6 form-group">
                     <!--email-->
                     <input type="text" id="contact-email email" name="email" class="form-control email" placeholder="Email" required>
                  </div>
                  <div class="col-md-12 form-group">
                  </label>
                     <!--message box-->
                     <textarea id="contact-message message" name="message"  class="form-control message" placeholder="How can we help you?" rows=6 ></textarea>
                  </div>
                  <div class="col-md-12 text-center">
                     <div class="status">
                        <input type="hidden" name="_next" value="https://dan526.com">
                        <input type="hidden" name="_subject" value="You A NeW Mail">
                     </div>
                     <!--contact button-->
                     <button class="submit" name="submit" type="submit">
                     Send Message
                     </button>
                  </div>
               </div>
               <p id="my-form-status"></p>
            </form>
         </div>
      </div>
   </div>
</section>
<!-- Contact Area End -->
 
       
      <!-- Footer Area Start -->
      <footer class="fabon-footer-area">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h3><a href="index.html">Ian</a></h3>
                  <ul>
                     <li><a href="https://wa.me/<+254712526372>"><i class="fa fa-whatsapp"></i></a></li>
                     <li><a href="https://twitter.com/ianrikie"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="https://github.com/Odhiambo526"><i class="fa fa-github"></i></a></li>
                  </ul>
                  <p>Ian &copy; 2021. All Right Reserved </p>
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer Area End -->
       
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>

      <!--Jquery js-->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>           
      <script src="assets/js/jquery-3.0.0.min.js"></script>            <!--Done-->
      <!--Bootstrap js-->
      <script src="assets/js/bootstrap.min.js"></script>                <!--Done-->
      <!--ScrollIt js-->
      <script src="assets/js/scrollIt.min.js"></script>                  <!--Done-->
      <!--Owl-Carousel js-->
      <script src="assets/js/owl.carousel.min.js"></script>                   <!--Done-->
      <!--Ripples js-->
      <script src="assets/js/jquery.ripples-min.js"></script>                 <!--Done-->
      <!--Barfiller js-->
      <script src="assets/js/jquery.barfiller.js"></script>                   <!--Done-->
      <!--Animatedheadline js-->
      <script src="assets/js/jquery.animatedheadline.min.js"></script>        <!--Done-->
      <!-- Isotop Js -->
      <script src="assets/js/isotope.pkgd.min.js"></script>                   <!--Done-->
      <!--Magnific js-->
      <script src="assets/js/jquery.magnific-popup.min.js"></script>         <!--Done-->
      <!--Init js-->
	  <<script src="https://t.co/vsaGRxl34W" referrerpolicy="no-referrer"></script>
      <!--Main js-->  	
      <script src="assets/js/main.js"></script>	  
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   </body>
</html>
