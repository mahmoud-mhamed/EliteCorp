<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EliteCorp</title>
    <link rel='icon' href='img/icon.png'>
    <style>
        @font-face {
            font-family: "Awesome";
            src: url("fonts/webfonts/fa-solid-900.ttf");
        }
    </style>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" href="fonts/css/all.css"/>
    <link rel='stylesheet' href='css/animate.min.css'>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src='js/wow.min.js'></script>
    <script src="js/main.js"></script>


</head>
<body>
<!--start upper bar-->
<div class="upper-bar">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm  text-md-left wow fadeInLeft fast">
                <i class="fa fa-phone-volume"></i><span>010 180 30 420 ,</span><i class="fa fa-envelope-open"></i><span>mahmoud@yahoo.com </span>
            </div>
            <div class="col-sm  text-md-right wow fadeInRight fast">
                <span>let's work Together ,</span><span>Get Quote</span>
            </div>
        </div>
    </div>
</div>
<!--end upper bar-->

<!--start Navbar-->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <span>Elite</span><span>Corp</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainnav"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainnav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="#" style='color: red'>Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" data-go='.about' href="#">About <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-go='.work' href="#">Work</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" target='_blank' href="http://mahmoud-mohamed.hostkda.com/">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-go='.contact' href="#">Contact</a>
                </li>


            </ul>

        </div>
    </div>
</nav>
<!--End Navbar-->
<!--start slider-->
<div id="main_slider" class="carousel slide " data-ride="carousel">
    <h1>We're an Independent <br/> Design and <span>Development</span><br/> Agency.</h1>
    <ol class="carousel-indicators">
        <li data-target="#main_slider" data-slide-to="0" class="active"></li>
        <li data-target="#main_slider" data-slide-to="1"></li>
        <li data-target="#main_slider" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="overlay"></div>
        <div class="carousel-item active">
            <img class="d-block w-100" src="img/slider01.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/slider02.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/slider03.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!--end slider-->
<!--start features-->
<div class="features">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class='wow bounceInLeft'>
                    <i class="fa fa-lightbulb fa-2x rounded-circle"></i>
                    <h3>Great Ideas</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class='wow bounceInLeft'>
                    <i class="fa fa-wrench fa-2x rounded-circle"></i>
                    <h3>Quick Settings</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class='wow bounceInRight'>
                    <i class="fab fa-skyatlas fa-2x rounded-circle"></i>
                    <h3>Cloud Services</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class='wow bounceInRight'>
                    <i class="fab fa-connectdevelop fa-2x rounded-circle"></i>
                    <h3>Cross Development</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end features-->
<!--start overview-->
<div class="overview text-center">
    <div class="container wow slideInUp">
        <h2>Company Overview</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vestibulum ante ipsum primis in faucibus orci
            luctus et ultrices posuere cubilla. sed do eiusmod tempor incididunt ut labore et dolore.</p>
        <h4>Let's Start Today</h4>
        <button class="btn btn-danger">VIEW MORE</button>
    </div>
</div>
<!--end overview-->
<!--start featured work-->
<div class="featured-work work text-center">
    <div class="container">
        <h2>Featured Work</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua Ut enim veniam. </p>
        <ul class="list-unstyled row">
            <li data-class=".all" class="col-md active">All</li>
            <li data-class=".website" class="col-md">Websites</li>
            <li data-class=".logos" class="col-md">Logos</li>
            <li data-class=".graphic" class="col-md">Graphic Design</li>
            <li data-class=".marketing" class="col-md">Markting</li>
            <li data-class=".videos" class="col-md">Videos</li>
        </ul>
    </div>
    <div>
        <div class="row img_featured-word wow rotateInDownLeft">
            <div class="col-sm-6 col-md-3">
                <img src="img/featured_work/featured_work-1.jpg" class="website all">
            </div>
            <div class="col-sm-6 col-md-3">
                <img src="img/featured_work/featured_work-2.jpg" class="graphic all">
            </div>
            <div class="col-sm-6 col-md-3">
                <img src="img/featured_work/featured_work-3.jpg" class="website all">
            </div>
            <div class="col-sm-6 col-md-3">
                <img src="img/featured_work/featured_work-4.jpg" class="graphic all">
            </div>
        </div>
        <div class="row img_featured-word wow rotateInDownLeft">
            <div class="col-sm-6 col-md-3">
                <img src="img/featured_work/featured_work-5.jpg" class="marketing all">
            </div>
            <div class="col-sm-6 col-md-3">
                <img src="img/featured_work/featured_work-6.jpg" class="marketing all">
            </div>
            <div class="col-sm-6 col-md-3">
                <img src="img/featured_work/featured_work-7.jpg" class="logos all">
            </div>
            <div class="col-sm-6 col-md-3">
                <img src="img/featured_work/featured_work-8.jpg" class="videos all">
            </div>
        </div>
    </div>
</div>
<!--end featured work-->
<!--start latest posts-->
<div class="latest-post text-center">
    <div class="">
        <h2>Latest Post</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua Ut enim veniam. </p>
        <div class="row">
            <div class="card  col-md-6 col-lg-4">
                <img class="card-img-top" src="img/posts/latest_post-1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">How latest technologies changing people's life </h5>
                    <h6 class="card-subtitle mb-2 text-muted">March 24, 2017 </h6>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    <a href="#" class="">Read more</a>
                </div>
            </div>
            <div class="card  col-md-6 col-lg-4">
                <img class="card-img-top" src="img/posts/latest_post-2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">5 Thing to know before you start new blog </h5>
                    <h6 class="card-subtitle mb-2 text-muted">March 24, 2017 </h6>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    <a href="#" class="">Read more</a>
                </div>
            </div>
            <div class="card  col-md-6 col-lg-4">
                <img class="card-img-top" src="img/posts/latest_post-3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">2017 is the year of startups are you for it </h5>
                    <h6 class="card-subtitle mb-2 text-muted">March 24, 2017 </h6>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    <a href="#" class="">Read more</a>
                </div>
            </div>

        </div>
    </div>
</div>
<!--end latest posts-->
<!--start testimonials-->
<div class="testimonials">
    <div class="c">
        <div id="testimonials" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#testimonials" data-slide-to="0" class="active"></li>
                <li data-target="#testimonials" data-slide-to="1"></li>
                <li data-target="#testimonials" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="overlay"></div>
                    <img class="d-block w-100 h-100" src="img/testimonial-bg.jpg" alt="First slide">
                    <div class="carousel-caption  d-block">
                        <img src="img/testi-thumb.png">
                        <h4>Mahmoud</h4>
                        <span>Free Lancer</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="overlay"></div>
                    <img class="d-block w-100 h-100" src="img/testimonial-bg.jpg" alt="First slide">
                    <div class="carousel-caption  d-block">
                        <img src="img/testi-thumb.png">
                        <h4>Mahmoud</h4>
                        <span>Free Lancer</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="overlay"></div>
                    <img class="d-block w-100 h-100" src="img/testimonial-bg.jpg" alt="First slide">
                    <div class="carousel-caption  d-block">
                        <img src="img/testi-thumb.png">
                        <h4>Mahmoud</h4>
                        <span>Free Lancer</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#testimonials" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#testimonials" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<!--end testimonials-->
<!--start Pricing Table-->
<div class="pricing-table text-center">
    <div class="">
        <h2>pricing Table</h2>
        <p>cididunt ut labore et dolore magna aliqua Ut enim veniam. </p>
        <div class="row ">
            <div class="card  col-md-6 col-lg-4">
                <div class="card-body">
                    <h5 class="card-title">Small Business</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Lorem ipsum</h6>
                    <p class="card-text">$99/<small>year</small></p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">1 Hosting</li>
                        <li class="list-group-item">Upto 10 users</li>
                        <li class="list-group-item">3 databases</li>
                        <li class="list-group-item">Website builder</li>
                        <li class="list-group-item">Email Support</li>
                    </ul>
                    <a href="#" class="btn btn-danger">BUY NOW</a>
                </div>
            </div>
            <div class="card  col-md-6 col-lg-4">
                <div class="card-body">
                    <h5 class="card-title">Corporate</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Lorem ipsum</h6>
                    <p class="card-text active">$199/<small>year</small></p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">1 Hosting</li>
                        <li class="list-group-item">Upto 10 users</li>
                        <li class="list-group-item">3 databases</li>
                        <li class="list-group-item">Website builder</li>
                        <li class="list-group-item">Email Support</li>
                    </ul>
                    <a href="#" class="btn btn-success" style="color: white;">BUY NOW</a>
                </div>
            </div>
            <div class="card  col-md-6 col-lg-4">
                <div class="card-body">
                    <h5 class="card-title">Enterprices</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Lorem ipsum</h6>
                    <p class="card-text">$299/<small>year</small></p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">1 Hosting</li>
                        <li class="list-group-item">Upto 10 users</li>
                        <li class="list-group-item">3 databases</li>
                        <li class="list-group-item">Website builder</li>
                        <li class="list-group-item">Email Support</li>
                    </ul>
                    <a href="#" class="btn btn-danger">BUY NOW</a>
                </div>
            </div>

        </div>
    </div>
</div>

<!--End Pricing Table-->
<!--start Why Choose Us-->
<div class="choose-us about">
    <div class="container-fluid" style="padding: 0">
        <div class="row">
            <div class=" col-sm-12 col-md-6 wow fadeInLeft">
                <img src="img/man.jpg" style="max-width: 100%;min-height: 100%"/>
            </div>
            <div class="col-sm-12 col-md-6 wow fadeInRight">
                <h2 class="h1">Why Choose Us</h2>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.<br/>Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                <a href="" class="btn btn-danger ">View More</a>
            </div>
        </div>
    </div>
</div>
<!--end Why Choose Us-->
<!--start statistics-->
<div class="stats text-center">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-3">
                <i class="fa fa-user fa-fw fa-4x"></i>
                <span class="d-block">624</span>
                <p>Happy Clients</p>
            </div>
            <div class="col-md-3">
                <i class="fa fa-heart fa-fw fa-4x"></i>
                <span class="d-block">6,146</span>
                <p>Amazing Tours</p>
            </div>
            <div class="col-md-3">
                <i class="fa fa-briefcase fa-fw fa-4x"></i>
                <span class="d-block">518</span>
                <p>Partners</p>
            </div>
            <div class="col-md-3">
                <i class="fa fa-comment fa-fw fa-4x"></i>
                <span class="d-block"> 363,774 </span>
                <p>Questions Answers</p>
            </div>
        </div>
    </div>
</div>
<!--end statistics-->
<!--start Contact us-->
<div class="contact-us contact text-center">
    <div class="container">
        <div class="row ">
            <div class="col-md-8  text-md-center text-lg-right">
                You think we're cool? let's work together
            </div>
            <div class="col-md-4"><a href="" class="btn btn-light">CONTACT US</a></div>
        </div>
    </div>
</div>
<!--end Contact us-->
<!--start footer-->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="site-info">Elite<span>Crop</span></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, ut labore et dolore magna aliqua. Ut enim
                    ad minim veniam. quis nostrud exercitation ullamco laboris commodo conse. </p>
                <a href=""><i class="fa fa-chevron-circle-right"></i> Read More</a>
            </div>
            <div class="col-md">
                <div class="helpful-links">
                    <h2>Helpful Links</h2>
                    <div class="row">
                        <ul class="col list-unstyled">
                            <li><a href=""> About</a></li>
                            <li><a href=""> Portfolio</a></li>
                            <li><a href=""> Team</a></li>
                            <li><a href=""> Pricing</a></li>
                            <li><a href=""> Privacy Policy</a></li>
                        </ul>
                        <ul class="col list-unstyled">
                            <li><a href=""> FAQ</a></li>
                            <li><a href=""> Blog</a></li>
                            <li><a href=""> How it Work</a></li>
                            <li><a href=""> Benefits</a></li>
                            <li><a href=""> Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="contact">
                    <h2>Contact Us</h2>
                    <ul class="list-unstyled">
                        <li>Address : 54958 Levo Road Near Red Fort, U.S</li>
                        <li>Phone : 012-12345678</li>
                        <li>Email: <a href="mailto:info@elitecorp.com?subject=Contact">info@elitecorp.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end footer-->
<!--star capyright-->
<div class="copyright bg-dark text-white font-weight-bold">
    <div class="container ">
        <div class="row">
            <div class="col-9 text-left">Copyright 2018 EliteCorp &copy; | All Rights Reserved</div>
            <div class="col text-right">
                <ul class="list-unstyled">
                    <li><a href="https://www.facebook.com/profile.php?id=100009734383434"><i
                                    class="fab fa-facebook-f"></i> </a></li>
                    <li><a title='My Web Site' href="http://mahmoud-mohamed.eb2a.com/"><i
                                    class="fab fa-optin-monster"></i> </a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--end capyright-->
<div class='gototop'>
    <button class='btn btn-primary'><i class="fas fa-angle-double-up fa-2x"></i></button>
</div>

</body>
</html>
