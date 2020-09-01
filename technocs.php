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
        <title>Cyber-Security</title>
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
                <h2><a class="navbar-brand" href="#"><img src="./a.jpg"></a>   <span>C</span>YBER-<SPAN>S</SPAN>ECURITY</h2>
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
                    <img width="100%" src="./cs.jpg" class="d-block img-fluid" >
                        <div class="carousel-caption">
                            <h5>WHAT IS CYBER-SECURITY?</h5>
                        </div>
                  </div>    
                  <div class="carousel-item">
                    <img width="100%" src="./cs1.jpg" class="d-block img-fluid" >
                        <div class="carousel-caption">
                            <h5>HOW IS SECURITY MAINTAINED?</h5>
                        </div>
                  </div>
                  <div class="carousel-item">
                    <img width="100%" src="./cs5.jpg" class="d-block img-fluid" >
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
                        <p>Application security<br><progress max = "100" value="67"></progress>  (67%)</p>
                        
                        <p>Information Security<br><progress max = "100" value="90"></progress>  (90%)</p>
                        
                        <p>Operational Security<br><progress max = "100" value="74"></progress>  (74%)</p>
                       
                        <p>Network Security<br><progress max = "100" value="34"></progress>  (34%)</p>
                    </div> 
                    </div>
                </div>
            </div>
        </section>
        
        <section id="promo">
            <div class="container">
                <h1>
                    Information about Cyber-Security
                </h1>
                <p>Cyber security is the practice of defending computers, servers, mobile devices, electronic systems, networks, and data from malicious attacks. It's also known as information technology security or electronic information security. ... Application security focuses on keeping software and devices free of threats.</p>
            </div>
        </section>

        
        <section id="summary">
            <div class="container">
                <div class="row">
                    <h2>
                        <strong>Summary</strong>
                    </h2>
                    <div class="summary-content">
                        <P>Cyber security is important because government, military, corporate, financial, and medical organizations collect, process, and store unprecedented amounts of data on computers and other devices. A significant portion of that data can be sensitive information, whether that be intellectual property, financial data, personal information, or other types of data for which unauthorized access or exposure could have negative consequences. Organizations transmit sensitive data across networks and to other devices in the course of doing businesses, and cyber security describes the discipline dedicated to protecting that information and the systems used to process or store it. As the volume and sophistication of cyber attacks grow, companies and organizations, especially those that are tasked with safeguarding information relating to national security, health, or financial records, need to take steps to protect their sensitive business and personnel information. As early as March 2013, the nation’s top intelligence officials cautioned that cyber attacks and digital spying are the top threat to national security, eclipsing even terrorism.</P>                
                    <!-- </div> -->
                    <br>
                    <br>
                    <h2>
                        <strong>Course Highlights</strong>
                    </h2>
                    <div class="summary-content">
                        <ul>
                            <li>Disaster recovery and business continuity </li>
                            <li> End-user education </li>
                            <li>Types of cyber threats</li>
                            <li>Malware</li>
                            <li>SQL injection</li>
                            <li>Phishing</li>
                            <li>API'S and UI'S</li>
                            <li>Cyber safety tips</li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </section>

       
        <section  id="video">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-4">
                        <iframe class="img-fluid" width="560" height="315" src="https://www.youtube.com/embed/2mh-N9_O_yI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-4">
                        <iframe class="img-fluid" width="560" height="315" src="https://www.youtube.com/embed/Zjc34iTLUA4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-4">
                        <iframe class="img-fluid" width="560" height="315" src="https://www.youtube.com/embed/otWst36CKyM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

       
        <section id="services">
            <div class="container">
                <h1>Topics Covered</h1>
                <div class="row services">
                    <div class="col-md-3 text-center">
                        <div class="icon">
                            <i class="fa fa-desktop"></i>
                        </div>
                            <h3>THREATS</h3>
                            <p>The global cyber threat continues to evolve at a rapid pace, with a rising number of data breaches each year. A report by RiskBased Security revealed that a shocking 7.9 billion records have been exposed by data breaches in the first nine months of 2019 alone. This figure is more than double (112%) the number of records exposed in the same period in 2018.</p>
                        </div>
                    <div class="col-md-3 text-center">
                        <div class="icon">
                            <i class="fa fa-book"></i>
                        </div>
                            <h3>SECURITY</h3>
                            <p>Security, in information technology (IT), is the defense of digital information and IT assets against internal and external, malicious and accidental threats.Security is critical for enterprises and organizations of all sizes and in all industries. Weak security can result in compromised systems or data, either by a malicious threat actor or an unintentional internal threat.  </p>
                        </div>
                    <div class="col-md-3 text-center">
                        <div class="icon">
                            <i class="fa fa-database"></i>
                        </div>
                            <h3>JSON</h3>
                            <p>JavaScript Object Notation (JSON) security performs deep inspection of incoming packets for web applications that use the JSON protocol to exchange data over HTTP. Applications including mobile applications exchange data with the servers using JSON which is a light weight data-interchange format. JSON-based application can be attacked in multiple ways.</p>
                        </div>
                    <div class="col-md-3 text-center">
                        <div class="icon">
                            <i class="fa fa-line-chart"></i>
                        </div>
                            <h3>TIPS</h3>
                            <p>The most effective and important cybersecurity safety tips to keep in mind for prevention and risk mitigation. Included are some baseline security tips, as well as online safety tips including best practices for browsing, email security and other online activity. We also include guidance on social media safety that focuses specifically on social media practices. </p>
                        </div>
                </div>
            </div>
        </section>
        
        
       
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
      
        
      
    </body>
</html>