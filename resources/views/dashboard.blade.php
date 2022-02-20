<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <meta charset="utf-8">
	<title>Ceevee Web Design</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <link rel="stylesheet" href="../css/default.css">
	<link rel="stylesheet" href="../css/layout.css">
   <link rel="stylesheet" href="../css/media-queries.css">
   <link rel="stylesheet" href="../css/magnific-popup.css">

	<script src="js/modernizr.js"></script>

</head>

<body>

   <header id="home">

      <nav id="nav-wrap">

         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	      <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

         <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="#home">Home</a></li>
            <li><a class="smoothscroll" href="#about">About</a></li>	  
            <li><a class="smoothscroll" href="#portfolio">Works</a></li>
            <li><a class="smoothscroll" href="#contact">Contact</a></li>
            <li><form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form></li>
         </ul>

      </nav>

      <div class="row banner">
         <div class="banner-text">
         <img src="/img/flash.jpg" alt="flash logo" style=" border-radius:50%; border-style: solid; border-color: #333; border-width: 5px;" width="250px !important" height="250px !important" />
            <h3 class="responsive-headline">Supakorn Peng-ont</h3>
            
            
         </div>
      </div>

      <p class="scrolldown">
         <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
      </p>

   </header> 

   <section id="about">

      <div class="row">

         <div class="three columns">

            <img class="profile-pic"  src="/img/flash.jpg" alt="" />

         </div>

         <div class="nine columns main-col">

            <h2>About Me</h2>

            <span>Education</span><br>
            <span>2019-Present &nbsp Thammasat University</span><br>
            <span>2011-2019 &nbsp &nbsp &nbsp &nbsp Sarasas Witaed Ratchaphruek School</span>
            </p>

            <div class="row">

               <div class="columns contact-details">

                  <h2>Contact Details</h2>
                  <p class="address">
						   <span>Thammasat University</span><br>
						   <span>99 Moo 18 Paholyothin Road,<br>
                      Klong Luang, Rangsit, Prathumthani 12121 Thailand
                     </span><br>
						   <span>+66 (0) 2564 4440-79</span>
                  
					   </p>

               </div>


            </div>

         </div>

      </div>

   </section>

   <section id="resume">

   <section id="portfolio">

      <div class="row">

         <div class="twelve columns collapsed">

            <h1>Check Out Some of My Works.</h1>

            <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf">

          	   <div class="columns portfolio-item">
                  <div>

                  <video width="320" height="240" controls>
                     <source src="Final Edit.mp4" type="video/mp4">
                     Your browser does not support the video tag.
                  </video>

                  </div>
          		</div> 

               <div class="columns portfolio-item">
                  <div>

                  </div>
          		</div> 
                <div class="columns portfolio-item">
                  <div>

                  </div>
          		</div> 

               <div class="columns portfolio-item">
                  <div>

                  <video width="320" height="240" controls>
                     <source src="Final Edit_1.mp4" type="video/mp4">
                     Your browser does not support the video tag.
                  </video>

                  </div>
          		</div>


      </div>

   </section>



   <section id="contact">

         <div class="row section-head">

            <div class="two columns header-col">

               <h1><span>Get In Touch.</span></h1>

            </div>

         </div>

         <div class="row">

            <div class="eight columns">

               <form action="" method="post" id="contactForm" name="contactForm">
					<fieldset>

                  <div>
						   <label for="contactName">Name <span class="required">*</span></label>
						   <input type="text" value="" size="35" id="contactName" name="contactName">
                  </div>

                  <div>
						   <label for="contactEmail">Email <span class="required">*</span></label>
						   <input type="text" value="" size="35" id="contactEmail" name="contactEmail">
                  </div>

                  <div>
						   <label for="contactSubject">Subject</label>
						   <input type="text" value="" size="35" id="contactSubject" name="contactSubject">
                  </div>

                  <div>
                     <label for="contactMessage">Message <span class="required">*</span></label>
                     <textarea cols="50" rows="15" id="contactMessage" name="contactMessage"></textarea>
                  </div>

                  <div>
                     <button class="submit">Submit</button>
                     <span id="image-loader">
                        <img alt="" src="images/loader.gif">
                     </span>
                  </div>

					</fieldset>
				   </form>

               
               <div id="message-warning"> Error boy</div>
				   <div id="message-success">
                  <i class="fa fa-check"></i>Your message was sent, thank you!<br>
				   </div>

            </div>


            <aside class="four columns footer-widgets">

               <div class="widget widget_contact">

					   <h4>Address and Phone</h4>
					   <p class="address">
                  <span>Thammasat University</span><br>
						   <span>99 Moo 18 Paholyothin Road,<br>
                      Klong Luang, Rangsit, Prathumthani 
                     </span><br>
						   <span>12121 Thailand</span><br>
						   <span>+66 (0) 2564 4440-79</span>
					   </p>

				   </div>

               

            </aside>

      </div>

   </section> 

   <footer>

      <div class="row">

         <div class="twelve columns">


         </div>

         <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>

      </div>

   </footer> 

   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/jquery.flexslider.js"></script>
   <script src="js/waypoints.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/magnific-popup.js"></script>
   <script src="js/init.js"></script>

</body>

</html>