<?php header( 'Location: /portfolio.php' ) ;  ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">

  <!-- HOSTED -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,600italic,300italic,400italic,300,700italic,800italic,800' rel='stylesheet' type='text/css'>
  <!-- <link href="fonts/mdi/css/materialdesignicons.min.css" media="all" rel="stylesheet" /> -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/2.7.94/css/materialdesignicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- LOCAL -->
  <link rel="stylesheet" href="styles/styles.css">
  <link rel='shortcut icon' href='favicon.ico' type='image/x-icon' >

  <!-- HOSTED -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>

  <!-- LOCAL -->
  <script src="scripts/pt.min.js"></script>
  <script src="scripts/index.js"></script>
  <script src="scripts/modal.js"></script>
  

</head>
<body>
<div class="overflow-wrap">

<!-- HOME -->
  <div class="modal-wrap flex">
    <div class="mask"></div>
    <div class="modal" id="modal">
      <div class="info-box">
        <div class="title"></div>
        <div class="tag"></div>
        <div class="detail"></div>
        <button type="button" class="close" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      
    </div>
  </div>

  <section id="home" class="flex height-fix">
    <div id="pt" class="canvas">

    </div>
    
    <div class="skills-wrapper flex row-gt-sm"style="font-size: x-large; margin-bottom: 3%;line-height: 38px;">
        <div class="flex-100-gt-sm waypoint" data-animation="slide-in-left">
            <div class="app-title">    
                <p style="padding-left: 10px;">Weather</p>    
                </div>
            <table class="table table-striped  ">     
                <thead class="text-right">
                <tr>
                <th scope="col">
                 <div class="notification"> </div>   
                    </th>
                              <th scope="col">
                                    <div class="weather-icon">    
                                            <!--img src="icons/unknown.png" alt=""-->    
                                        </div> 
                                  </th>
                              <th scope="col">
                                    <div class="temperature-value">    
                                            <p>- °<span>C</span></p>    
                                        </div> 
                              </th>
                              <th scope="col">
                                    <div class="temperature-description">    
                                            <p> - </p>    
                                        </div>  
                              </th>
                              <th scope="col">
                                    <div class="location">    
                                            <p>-</p>    
                                        </div>  
                              </th>
                            </tr>
                          </thead>
            </table> 
           <a>Total Viewers:
                              <img src="https://hitwebcounter.com/counter/counter.php?page=7346800&style=0024&nbdigits=4&type=page&initCount=0" title="Web Counter" Alt="counter free"   border="0" style="background-color: white;">
                              </a> 
        </div>
    </div>
    <div class="flex">
     
      <div class="text">
        
        Hello, I'm <span class="highlight">Sravankumar Tangella</span>.
        <br>
        I'm a UI/UX developer & Designer
      </div>

      <div class="button page-link" dest="about">View my Projects <i class="mdi mdi-arrow-right"></i></div>

      <nav class="flex">
        <div class="link-wrap">
          <div class="active page-link" dest="home">Home</div>
          <div class="page-link" dest="about">About</div>
          <div class="page-link" dest="portfolio">Projects</div>
          <div class="page-link" dest="blog">Educations</div>
          <div class="page-link" dest="contact">Contact</div>
          <div class="page-link">
              <a href="https://www.linkedin.com/in/kumar-tangella-b59976163/" target="_blank">linkedin</a>
          </div>
          
                         
        </div>
        <i class="mdi mdi-menu"></i>
      </nav>
    </div>
  
  </section>

<!-- ABOUT -->
  <section id="about">
    <div class="container flex">

      <div class="header waypoint" data-animation="slide-in-left">ABOUT</div>
      <div class="header-bar waypoint" data-animation="slide-in-left" data-delay=".50s"></div>

      <div class="skills-wrapper flex row-gt-sm" style="margin-bottom:5%">
          <div class="flex flex-100-gt-sm waypoint" data-animation="slide-in-left">
            <img src="sravan.png" class="me">
            <!-- <div><img class="up-arrow" src="img/up-arrow.png"></div> -->
            <div class="label bold">Who's this guy?</div>
            <div>
              I'm the UX/UI designer & developer for <a class="highlight" href="">COT</a> in Frankfort,KY.
              <br>
              I have serious passion for UI effects, animations and creating intuitive, dynamic user experiences.
              <br>
              <span class="page-link highlight" dest="contact">Let's make something special.</span>
            </div>
          </div>
  
          
        </div>

      <div class="flex row label-wrap"style="margin-bottom:5%">
        <div class="flex row-gt-sm">
        <div class="flex bullet-wrap ">
          <div class="hex-wrap waypoint" data-animation="flip-in-x">
            <div class="hexagon">
              <i class="mdi mdi-speedometer"></i>
            </div>
          </div>
          <div class="waypoint" data-animation="fade-in">
            <div class="label bold">Fast</div>
            <div>Fast load times and lag free interaction, my highest priority.</div>
          </div>
        </div>

        <div class="flex bullet-wrap " >
          <div class="hex-wrap waypoint" data-animation="flip-in-x" data-delay=".2s">
            <div class="hexagon">
              <i class="mdi mdi-cellphone-link"></i>
            </div>
          </div>
          <div class="waypoint" data-animation="fade-in" data-delay=".2s">
            <div class="label bold">Responsive</div>
            <div>My layouts will work on any device, big or small.</div>
          </div>
        </div>
        </div>
        <div class="flex row-gt-sm">
          <div class="flex bullet-wrap " >
            <div class="hex-wrap waypoint" data-animation="flip-in-x" data-delay=".4s">
              <div class="hexagon">
                <i class="mdi mdi-lightbulb-outline"></i>
              </div>
            </div>
            <div class="waypoint" data-animation="fade-in" data-delay=".4s">
              <div class="label bold">Intuitive</div>
              <div>Strong preference for easy to use, intuitive UX/UI.</div>
            </div>
          </div>

          <div class="flex bullet-wrap " >
            <div class="hex-wrap waypoint" data-animation="flip-in-x" data-delay=".6s">
              <div class="hexagon">
                <i class="mdi mdi-rocket"></i>
              </div>
            </div>
            <div class="waypoint" data-animation="fade-in" data-delay=".6s">
              <div class="label bold">Dynamic</div>
              <div>Websites don't have to be static, I love making pages come to life.</div>
            </div>
          </div>
        </div>
      </div>

     
      <div class="skills-wrapper flex row-gt-sm">
          <div class="flex flex-100-gt-sm waypoint" data-animation="slide-in-left">
        
          <div class="btn-group" role="group" aria-label="Basic example">
          <button type="button" class="btn btn-secondary skillsbutton " id ="Designerbutton">Tools</button>
          <button type="button" class="btn btn-secondary skillsbutton " id="DevelopmentButton">Languages</button>
          <button type="button" class="btn btn-secondary skillsbutton  " id="frameworksButton">Frameworks</button> 
          </div>
          <div class="flex-wrapper" style="width: inherit;">
          <div class="row" id ="designerPercent" style="width:800px;display: flex;">

          </div>
          </div>
      
    </div>
  </div>
  </section>

<!-- PORTFOLIO -->
  <section class="flex" id="portfolio">

    <div class="header waypoint" data-animation="slide-in-right">PROJECTS</div>
    <div class="header-bar waypoint" data-animation="slide-in-right" data-delay=".3s"></div>

    <div class="filter-wrap waypoint" data-animation="fade-in">
      <div class="flex row">
        <div class="filter" data-filter="all">ALL</div>
        <div class="filter" data-filter=".ReactJs">NODE.JS</div>
        <div class="filter" data-filter=".ReactJs">ReactJs</div>
        <div class="filter" data-filter="all">JAVASCRIPT</div>
        <div class="filter" data-filter= "all">Design</div>
      </div>
      <div class="float-bar">
        <div class="flex row">
          <div class="filter" data-filter="all">ALL</div>
          <div class="filter" data-filter=".ReactJs">NODE.JS</div>
          <div class="filter" data-filter=".ReactJs">ReactJs</div>
        
          <div class="filter" data-filter="all">JAVASCRIPT</div>
          <div class="filter" data-filter="all">Design</div>
        </div>
      </div>
    </div>

    <div id="gallery" class="container flex row wrap waypoint">
      <div class="mix js" data-my-order="1">
        <div>
          <div class="card" style="margin-right:10px"></div>
          <div class="text">
            <div class="bold">Cigna</div>
            <span class="highlight">Pure JavaScript + Design + jquery</span>
          </div>
          <div class="button" id="Cigna">LEARN MORE</div>
        </div>
      </div>

      <div class="mix ReactJs" data-my-order="1">
        <div>
          <div class="card" style="margin-right:10px"></div>
          <div class="text">
            <div class="bold">USAA</div>
            <span class="highlight">Node.js and ReactJs</span>
            <span class="highlight">CoreJava and ReactJs</span>
            <span class="highlight">Design</span>

          </div>
          <div class="button" id="USAA">LEARN MORE</div>
        </div>
      </div>

      <div class="mix" data-my-order="1">
        <div>
          <div class="card"></div>
          <div class="text">
            <div class="bold">YETI</div>
            <span class="highlight">Desgin + development</span>
          </div>
          <div class="button" id="DTE1">LEARN MORE</div>
        </div>
      </div>
      

      <div class="mix" data-my-order="1">
        <div>
          <div class="card" style="margin-top:10px"></div>
          <div class="text">
            <div class="bold">COT</div>
            <span class="highlight">Desgin + development</span>
          </div>
          <div class="button" id="DTE">LEARN MORE</div>
        </div>
      </div>

      


      
  </section>

<!-- BLOG -->
<section id="blog">
    <div class="container flex">

      <div class="header waypoint" data-animation="slide-in-left">Educations</div>
      <div class="header-bar waypoint" data-animation="slide-in-left" data-delay=".5s"></div>

      <div class="flex row wrap">
        <div class="flex row-gt-sm">
            <div class="blog-wrap waypoint" data-animation="fade-in">
              <div class="fade-wrap">
                <div class="thumb" id="thumb-1"></div>
                <div class="label bold">Bachelors in Information Technology</div>
                
                
              </div>
            </div>
          
          
            <div class="blog-wrap waypoint" data-animation="fade-in" data-delay=".2s">
              <div class="fade-wrap">
                <div class="thumb" id="thumb-2"></div>
                <div class="label bold">Masters in ComputerSciences</div>
                
                
              </div>
            </div>
          
        </div>
        <div class="flex row-gt-sm">
          
            <div class="blog-wrap waypoint" data-animation="fade-in" data-delay=".4s">
              <div class="fade-wrap">
                <div class="thumb" id="thumb-3"></div>
                <div class="label bold">Second Masters: Information Systems Security 
                  </div>
                
               
              </div>
            </div>
        
          
        </div>
        <div class="flex row-gt-sm">
          
          <div class="blog-wrap waypoint" data-animation="fade-in" data-delay=".4s">
            <div class="fade-wrap">
              <div class="thumb" id="thumb-3"></div>
              <div class="label bold">Third Masters: Project Managment 
                </div>
              <div class="date">STill Going On</div>
              <div class="bar"></div>
             
            </div>
          </div>
      
        
      </div>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact">
    <svg preserveAspectRatio="none" viewBox="0 0 100 102" height="75" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="svgcolor-light">
      <path d="M0 0 L50 100 L100 0 Z" fill="white" stroke="white"></path>
    </svg>
    <div class="container flex">
      <div class="header waypoint" data-animation="slide-in-left">CONTACT</div>
      <div class="header-bar waypoint" data-animation="slide-in-right" data-delay=".25s"></div>
      <div class="highlight waypoint" data-animation="slide-in-right" data-delay=".5s">Have a question or want to work together?</div>
      <form class="waypoint" data-animation="pop-in" data-delay=".5s" id="contact-form">
        <input placeholder="Name" type="text" name="name" required>
        <input placeholder="Enter email" type="email" name="email" required>
        <textarea placeholder="Your Message" type="text" name="message"></textarea>
        <div id="success">
          <div>Your message was sent successfully. Thanks!<span id="close" class="mdi mdi-close"></span></div>
        </div>
        <input class="button" type="submit" id="submit" value=SUBMIT>
      </form>
    </div>
  </section>

  <footer>
    <i class="mdi mdi-chevron-double-up page-link" dest="home"></i>

    <div class="icon-wrap flex row">
      <a href="https://www.linkedin.com/in/kumar-tangella-b59976163/">
        
        <div class="flex icon" id="icon-2">
          <i class="mdi mdi-linkedin"></i>

        </div>
      </a>
      <a href="https://www.facebook.com/matthew.williams.351">
        <div class="flex icon" id="icon-3">
          <i class="mdi mdi-facebook"></i>
        </div>
      </a>
      <a href="https://instagram.com/infinite_edge/">
        <div class="flex icon" id="icon-4">
          <i class="mdi mdi-instagram"></i>
        </div>
      </a>
      <a href="http://codepen.io/matthewwilliams/">
        <div class="flex icon" id="icon-5">
          <i class="mdi mdi-codepen"></i>
        </div>
      </a>
    </div>
    <div class="info-box">
      <div class="footnote">SravanKumar <span class="highlight">&copy;2018</span></div>
    </div>
  </footer>

</div>

<div id="preload">
  
</div>
<script src="scripts/skillsGraph.js"></script>
<script src="scripts/app.js"></script>
<script>
$(Designerbutton).trigger('click');
</script>

</body>
</html>

<script src="scripts/canvas.js"></script>
