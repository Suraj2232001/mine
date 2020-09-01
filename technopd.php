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
    <title>Python Databases</title>
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
            <h2><a class="navbar-brand" href="#"><img src="./a.jpg"><span>P</span>YTHON <span>D</span>ATABASES </a></h2>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                    <img width="100%" src="./pd.jpg" class="d-block img-fluid">
                    <div class="carousel-caption">
                        <h5>WHAT IS PYTHON PROGRAMMING?</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img width="100%" src="./pd1.jpg" class="d-block img-fluid">
                    <div class="carousel-caption">
                        <h5>HOW IS USE PYTHON IN REAL WORLD?</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img width="100%" src="./pd5.jpg" class="d-block img-fluid">
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
                        Technocolabs is a Software Development Services Company that Provide Services in Application
                        Development, Web development, API Management, Cloud Application Development , Website
                        Integretion, Data Science, Data Mining, Search Engine Optimization (SEO), Product Development
                        Services, Android Application Development Services, Python Software Development Services, Java
                        Web application Services, Machine learning App Development, Deep learning Model Tunning,
                        Serverside Optimization, Data Base Development Services etc.
                    </div>
                    <button type="button" class="btn btn-primary">Read more</button>
                </div>
                <div class="col-md-6 skills-bar">
                    <p>Python Data Structures<br><progress max="100" value="67"></progress> (67%)</p>

                    <p>Capstone:Visualizing Data with Python<br><progress max="100" value="90"></progress> (90%)</p>

                    <p>Using Databases with Python<br><progress max="100" value="74"></progress> (74%)</p>

                    <p>Python PyPlot With Matplotlib<br><progress max="100" value="34"></progress> (34%)</p>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- course info -->
    <section id="promo">
        <div class="container">
            <h1>
                INFORMATION ABOUT PYTHON PROGRAMMING
            </h1>
            <p>Python is a high-level programming language designed to be easy to read and simple to implement. It is
                open source, which means it is free to use, even for commercial applications. Python can run on Mac,
                Windows, and Unix systems and has also been ported to Java and .NET virtual machines.Python is
                considered a scripting language, like Ruby or Perl and is often used for creating Web
                applications and dynamic Web content. It is also supported by a number of 2D and 3D imaging programs,
                enabling users to create custom plug-ins and extensions with Python. Examples of applications that
                support a Python API include GIMP, Inkscape, Blender, and Autodesk Maya.</p>
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
                    <P> This specialization teaches the fundamentals of programming in Python 3. We will begin at the
                        beginning, with variables, conditionals, and loops, and get to some intermediate material like
                        keyword parameters, list comprehensions, lambda expressions, and class inheritance.

                        You will have lots of opportunities to practice. You will also learn ways to reason about
                        program execution, so that it is no longer mysterious and you are able to debug programs when
                        they don’t work.

                        By the end of the specialization, you’ll be writing programs that query Internet APIs for data
                        and extract useful information from them. And you’ll be able to learn to use new modules and
                        APIs on your own by reading the documentation. That will give you a great launch toward being an
                        independent Python programmer..</P>
                    <!-- </div> -->
                    <br>
                    <br>
                    <h2>
                        <strong>Course Highlights</strong>
                    </h2>
                    <div class="summary-content">
                        <ul>
                            <li>Python Basics</li>
                            <li>Python programming Pipeline</li>
                            <li>Python libraries & Analysis</li>
                            <li>Using Python to Access Web Data</li>
                            <li>Scrapy, Beautiful Soup</li>
                            <li>Web Development & Data Visualization</li>
                            <li>Python uses in Machine Learning </li>
                            <li>Data Collection and Processing with Python</li>
                            <li>Python Data Structures</li>
                            <li>Python for Computer Vision</li>
                            <li>Python Functions, Files, and Dictionaries</li>
                            <li>Frameworks - Numpy, Pandas, Sci-kit, Keras, Matplotlib, Scrapy, BeautifulSoup etc.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- video -->
    <!-- course info -->
    <section id="video">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4">
                    <iframe class="img-fluid" width="560" height="315" src="https://www.youtube.com/embed/4F2m91eKmts"
                        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="col-md-4">
                    <iframe class="img-fluid" width="560" height="315" src="https://www.youtube.com/embed/_uQrJ0TkZlc"
                        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="col-md-4">
                    <iframe class="img-fluid" width="560" height="315" src="https://www.youtube.com/embed/rfscVS0vtbw"
                        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
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
                    <h3>Python Data Structures</h3>
                    <p>This course will introduce the core data structures of the Python programming language. We will
                        move past the basics of procedural programming and explore how we can use the Python built-in
                        data structures such as lists, dictionaries./p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <h3>Capstone:Visualizing Data with Python</h3>
                    <p>In the capstone, students will build a series of applications to retrieve, process and visualize
                        data using Python. The projects will involve all the elements of the specialization. In the
                        first part of the capstone, students will do some visualizations to become familiar with the
                        technologies .</p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="icon">
                        <i class="fa fa-database"></i>
                    </div>
                    <h3>Using Databases with Python</h3>
                    <p>This course will introduce students to the basics of the Structured Query Language (SQL) as well
                        as basic database design for storing data as part of a multi-step data gathering, analysis, and
                        processing effort. The course will use SQLite3 as its database.</p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="icon">
                        <i class="fa fa-line-chart"></i>
                    </div>
                    <h3>Python PyPlot With Matplotlib</h3>
                    <p>Python is an interpreted, high-level, general-purpose programming language. Python's design
                        philosophy emphasizes code readability with its notable use of significant whitespace.Matplotlib
                        is an amazing visualization library in Python for 2D plots of arrays.</p>
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
                        <img src="./manish.JPG" class="user">
                        <blockquote>"I have nothing but good things to say about my experience with Technocolabs. I have
                            loved the learning I have been able to do and look forward to taking many more classes with
                            them ... I don't understand the reviews with low ratings. I have never had any problems with
                            them."</blockquote>
                        <h3>MANISH KUMAR<br><span>Placed at 3RD YEAR</span></h3>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="profile">
                        <img src="./vandit.jpeg" class="user">
                        <blockquote>"This course has taught me a lot of techniques in searching information for my
                            academic researches. Thank you to all people behind this,especially to the professors in
                            this course,I thought this course introduced the topic of data science very well. I think I
                            have a much better idea how to describe data science."</blockquote>
                        <h3>VANDIT JAIN<br><span>Placed at 3RD YEAR</span></h3>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="profile">
                        <img src="./yashpic.png" class="user">
                        <blockquote>"This is one of the best course I have completed regarding Preparing a Scientific,
                            well written Research. The course is organised in the best way to support learners in
                            academic information seeking. After the course, I was able to identify my faults which I
                            have done before in conducting research."
                        </blockquote>
                        <h3>YASH JAIN<br><span>Placed at 3RD YEAR</span></h3>
                    </div>
                </div>
            </div>
        </div>
        <div>
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