<?php
session_start();
if(isset($_SESSION['user_name'])){
  echo "Hello ,  " .$_SESSION['user_name'];
    echo ' <form align="right" action="technologout.php"><input type="submit" value="Logout" ></form>';
  
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Web Development</title>
        <link rel="stylesheet" href="technodsmlwdpdjcsdl.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </head>
    <body>
        <section id="nav-bar">
            <nav class="navbar navbar-expand-lg ">
                <h2><a class="navbar-brand" href="technocolabsmainpage.php"><img src="a.jpg"></a>   <span>W</span>EB <SPAN>D</SPAN>EVELOPMENT</h2>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                   
                    <li class="nav-item">
                      <a class="nav-link" href="#about">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#promo">COURSE</a>
                      </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#services">TOPICS COVERED</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#price">PRICE PLANS</a>
                      </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#testimonials">REVIEWS</a>
                    </li>
                  
                  </ul>
                </div>
              </nav>
        </section>
        <div id="slider">
            <div id="headerSlider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
                  <li data-target="#headerSlider" data-slide-to="1"></li>
                  <li data-target="#headerSlider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img width="100%" src="./wd6.jpg" class="d-block img-fluid" >
                        <div class="carousel-caption">
                            <h5>WHAT IS WEB DEVELOPMENT ?</h5>
                        </div>
                  </div>    
                  <div class="carousel-item">
                    <img width="100%" src="wd1.jpg" class="d-block img-fluid" >
                        <div class="carousel-caption">
                            <h5>HOW IS WEB DEVELOPING USED?</h5>
                        </div>
                  </div>
                  <div class="carousel-item">
                    <img width="100%" src="wd2.jpg" class="d-block img-fluid" >
                        <div class="carousel-caption">
                            <h5>LET TECHNOCOLABS HELP YOU.</h5>
                        </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>About Us</h2>
                        <div class="about-content">
                            Technocolabs is a Software Development Services Company that Provide Services in Application Development, Web development, API Management, Cloud Application Development , Website Integretion, Data Science, Data Mining, Search Engine Optimization (SEO), Product Development Services, Android Application Development Services, Python Software Development Services, Java Web application Services, Machine learning App Development, Deep learning Model Tunning, Serverside Optimization, Data Base Development Services etc.
                        </div>
                        <button type="button" class="btn btn-primary">Read more</button>
                    </div>
                            <div class="col-md-6 skills-bar">
                        <p>HTML5(HYPERTEXT MARKUP LANGUAGE 5)<br><progress max = "100" value="67"></progress>  (67%)</p>
                        
                        <p>CSS3 (CASCADING STYLE SHEETS 3)<br><progress max = "100" value="90"></progress>  (90%)</p>
                        
                        <p>JS (JAVASCRIPT)<br><progress max = "100" value="74"></progress>  (74%)</p>
                       
                        <p>API and UI<br><progress max = "100" value="34"></progress>  (34%)</p>
                    </div> 
                    </div>
                </div>
            </div>
        </section>
        <!-- course info -->
        <section id="promo">
            <div class="container">
                <h1>
                    Information about Web Development
                </h1>
                <p>Web development is the work involved in developing a Web site for the Internet (World Wide Web) or an intranet (a private network). ... Among Web professionals, "Web development" usually refers to the main non-design aspects of building Web sites: writing markup and coding.</p>
            </div>
        </section>

        <!-- summary -->
        <section id="summary">
            <div class="container">
                <div class="row">
                    <h2>
                        <strong>Summary</strong>
                    </h2>
                    <div class="summary-content">
                        <P>Web development is the building and maintenance of websites; it’s the work that happens behind the scenes to make a website look great, work fast and perform well with a seamless user experience.

                            Web developers, or ‘devs’, do this by using a variety of coding languages. The languages they use depends on the types of tasks they are preforming and the platforms on which they are working.
                            
                            Web development skills are in high demand worldwide and well paid too – making development a great career option. It is one of the easiest accessible higher paid fields as you do not need a traditional university degree to become qualified.
                            
                            The field of web development is generally broken down into front-end (the user-facing side) and back-end (the server side). Let’s delve into the details.</P>                
                    <!-- </div> -->
                    <br>
                    <br>
                    <h2>
                        <strong>Course Highlights</strong>
                    </h2>
                    <div class="summary-content">
                        <ul>
                            <li>Html 5</li>
                            <li>CSS 3</li>
                            <li>Javascript</li>
                            <li>Object, Prototypes and Inheritence</li>
                            <li>Document Object Model (DOM)</li>
                            <li>Network, Https and Servers</li>
                            <li>API'S and UI'S</li>
                            <li>Webpage/Webapp and server Interactions</li>
                            <li>Web Applications, Front End Libraries and Frameworks</li>
                            <li>Basic React</li>
                            <li>GITHUB</li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- video -->
        <!-- course info -->
        <section  id="video">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-4">
                        <iframe class="img-fluid" width="560" height="315" src="https://www.youtube.com/embed/GEfuOMzRgXo?t=39" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-4">
                        <iframe class="img-fluid" width="560" height="315" src="https://www.youtube.com/embed/bDtxF7qSofg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-4">
                        <iframe class="img-fluid" width="560" height="315" src="https://www.youtube.com/embed/RsQ1tFLwldY?t=75" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

        <!-- services -->
        <section id="services">
            <div class="container">
                <h1>Topics Covered</h1>
                <div class="row services">
                    <div class="col-md-3 text-center">
                        <div class="icon">
                            <i class="fa fa-desktop"></i>
                        </div>
                            <h3>HTML 5</h3>
                            <p>HTML5 is a programming language whose acronym stands for Hyper Text Markup Language. It is a system that allows the modification of the appearance of web pages, as well as making adjustments to their appearance. It also used to structure and present content for the web.</p>
                        </div>
                    <div class="col-md-3 text-center">
                        <div class="icon">
                            <i class="fa fa-book"></i>
                        </div>
                            <h3>CSS 3</h3>
                            <p>CSS3 is the latest evolution of the Cascading Style Sheets language and aims at extending CSS2. 1. It brings a lot of long-awaited novelties, like rounded corners, shadows, gradients, transitions or animations, as well as new layouts like multi-columns, flexible box or grid layouts.</p>
                        </div>
                    <div class="col-md-3 text-center">
                        <div class="icon">
                            <i class="fa fa-database"></i>
                        </div>
                            <h3>Javascript</h3>
                            <p>JavaScript is a programming language used primarily by Web browsers to create a dynamic and interactive experience for the user. Most of the functions and applications that make the Internet indispensable to modern life are coded in some form of JavaScript.</p>
                        </div>
                    <div class="col-md-3 text-center">
                        <div class="icon">
                            <i class="fa fa-line-chart"></i>
                        </div>
                            <h3>API's</h3>
                            <p>API is the acronym for Application Programming Interface, which is a software intermediary that allows two applications to talk to each other. Each time you use an app like Facebook, send an instant message, or check the weather on your phone, you're using an API. </p>
                        </div>
                </div>
            </div>
        </section>
        
        
        <!-- price plans -->
        <section id="price">
            <div class="container">
                <h1>Price Plans</h1>
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-price">
                            <div class="price-head">
                                <h2>FREE</h2>
                                <p>Rs.0/<span>Month</span></p>
                            </div>
                            <div class="price-content">
                                <ul>
                                    <li><i class="fa fa-check-circle"></i>1 month trial</li>
                                    <li><i class="fa fa-times-circle"></i>Quizzes</li> 
                                    <li><i class="fa fa-times-circle"></i>Access on mobile and TV</li>
                                    <li><i class="fa fa-times-circle"></i>9 downloadable resources</li>
                                    <li><i class="fa fa-times-circle"></i>Certification</li>
                                </ul>
                            </div>
                            <div class="price-button">
                                <a class="buy-btn" href="technologin.html">Register</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-price">
                            <div class="price-head">
                                <h2>LITE</h2>
                                <p>Rs.1499/<span>6 Months</span></p>
                            </div>
                            <div class="price-content">
                                <ul>
                                    <li><i class="fa fa-check-circle"></i>Full course access</li>
                                    <li><i class="fa fa-check-circle"></i>Quizzes</li> 
                                    <li><i class="fa fa-check-circle"></i>Access on mobile and TV</li>
                                    <li><i class="fa fa-times-circle"></i>9 downloadable resources</li>
                                    <li><i class="fa fa-times-circle"></i>Certification</li>
                                </ul>
                            </div>
                            <div class="price-button">
                                <a class="buy-btn" href="technologin.html">Register</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-price">
                            <div class="price-head">
                                <h2>PREMIUM</h2>
                                <p>Rs.2999/<span>6 Months</span></p>
                            </div>
                            <div class="price-content">
                                <ul>
                                    <li><i class="fa fa-check-circle"></i>Full course access</li>
                                    <li><i class="fa fa-check-circle"></i>Quizzes</li> 
                                    <li><i class="fa fa-check-circle"></i>Access on mobile and TV</li>
                                    <li><i class="fa fa-check-circle"></i>9 downloadable resources</li>
                                    <li><i class="fa fa-check-circle"></i>Certification</li>
                                </ul>
                            </div>
                            <div class="price-button">
                                <a class="buy-btn" href="technologin.html">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonials -->
        <section id="testimonials">
            <div class="container">
                <h1>What our students say</h1>
                <p class="text-center"></p>
                <div class="row">
                    <div class="col-md-4 text-center">
                        <div class="profile">
                        <img src="./jeet.jpg" class="user">
                        <blockquote>"I very much enjoyed the biological aspects of the class, specifically the various species of marine life and their interaction and place in the food chain. My least favorite parts of the class were the math-heavy sections. Overall I feel I learned a lot in the course."</blockquote>
                        <h3>JEET PATEL<br><span>Placed at 3RD YEAR</span></h3>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="profile">
                        <img src="./4.jpg" class="user">
                        <blockquote>"I really enjoyed this class !!! .... Especially the virtual labs. I think it would be cool and interesting to maybe have some videos relating to oceanography.  I can’t really think of anything else that I would change ..you’ve been great !!! Thanks : )"</blockquote>
                        <h3>SURAJ SINGH<br><span>Placed at 3RD YEAR</span></h3>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="profile">
                        <img src="./3.jpg" class="user">
                        <blockquote>"I just wanted to tell you how much I enjoyed the class (Microsoft Project). What an excellent instructor and I learned things that I did not know about Project including how to do things better than I have been. Again thank you very much."</blockquote>
                        <h3>GAURAV PANDEY<br><span>Placed at 3RD YEAR</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        <div class="puppy">
        <p>Copyright © 2020 Technocolabs. All rights reserved</p>
      </div>
        </section>
        <!-- what our students say -->
        
        <script src="js/smooth-scroll.js"></script>
        <script>
            var scroll = new SmoothScroll('a[href*="#"]');
        </script>
    </body>
</html>