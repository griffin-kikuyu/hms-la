<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services</title>

  <!-- css -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
  <link href="css/animate.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- boxed bg -->
  <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet">

<style >
  .bg-skin {
    background: #0062cc;
    
  }


  .nav>li>a:hover, .nav>li>a:focus {
    text-decoration: none;
    background-color: #251f1f00;
    /* color: blue; */
}

.btn-skin {
  background-color: #0062cc;
    border-color: #0062cc;
}
.box h4 {
    font-size: 24px;
    color: white;
    font-family: 'IBM Plex Sans', sans-serif;
}
.service-desc h5 {
    margin-bottom: 10px;
     color: white;
    font-family: 'IBM Plex Sans', sans-serif;
}
.fa-stethoscope:before {
  color: white;
}

.fa-h-square:before {
    color: white;
}

.fa-wheelchair:before {
    color: white;
}

.fa-filter:before {
    color: white;
}

.fa-plus-square:before {
    color: white;
}

.fa-user-md:before {
    color: white;
    background: #00ffff2b;
}

.fa-check:before {
    background: #084dbe;
}

.fa-list-alt:before {
    background: #005cd0;
}

.fa-hospital-o:before {
    background: #0eacf0de
}

.fa-heartbeat:before {
    color: white;
}

footer .widget h5 {
    font-size: 20px;
    
    text-transform: uppercase;
    color: white;
}

.intro-content {
    /*background: url(../img/dummy/bg1.jpg) no-repeat top center;*/
    background:-webkit-linear-gradient(left, #3931af, #00c6ff);
    padding: 200px 0 60px;
}


</style>
</head>


<body>
  <div class="row">
    <div class="col-md-12">
        @include('nav')
    </div>
</div>

  <div class="container navigation" style="background: -webkit-linear-gradient(left, #3931af, #00c6ff);width: 98.85vw;height: 70px;padding-top: 10px;">

        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
          <a class="navbar-brand js-scroll-trigger" href="index.php" style="margin-top: 0px;font-family: 'IBM Plex Sans', sans-serif;"><h5 style="color: white;"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp GLOBAL HOSPITALS</h5></a>
        </div>

        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li class="active" style="margin-right: 40px;font-family: 'IBM Plex Sans', sans-serif;"><a href="index.php" style="color: white">HOME</a></li>
            <li class="active" style="margin-right: 40px;font-family: 'IBM Plex Sans', sans-serif;"><a href="services.html" style="color: white">ABOUT US</a></li>
            <li><a href="contact.html" style="margin-right: 40px;font-family: 'IBM Plex Sans', sans-serif;color: white">CONTACT</a></li>
              </ul>
        </div>
  
      </div>


  <div id="wrapper">

<section id="intro" class="intro"  style="font-family: 'IBM Plex Sans', sans-serif;">
      <div class="intro-content" style="padding-top: 75px;">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                <h2 style="font-family: 'IBM Plex Sans', sans-serif;color: white">GLOBAL HOSPITALS</h2>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                <h4 class="h-light" style="font-family: 'IBM Plex Sans', sans-serif;color: #efe1e1">Provide best quality healthcare for you</h4>
              </div>
              <div class="well well-trans" style="background:#ffffff00;color: white">
                <div class="wow fadeInRight" data-wow-delay="0.1s">

                  <ul class="lead-list">
                    <li><span class="fa fa-check-square-o fa-2x icon-success"></span> <span class="list"><strong>World Class Care Here and Now</strong><br />Meet our world class team of doctors and nurses</span></li>
                    <li><span class="fa fa-check-square-o fa-2x icon-success"></span> <span class="list"><strong>Request an appoinment</strong><br />Book your appoinment now</span></li>
                    <li><span class="fa fa-check-square-o fa-2x icon-success"></span> <span class="list"><strong>Internationally Recognized<br />We are an internationally renowned brand</span></li>
                  </ul>
                  <p class="text-right wow bounceIn" data-wow-delay="0.4s">
                    <a href="#" class="btn btn-skin btn-lg" style="background:white;color:#006ccf">Learn more <i class="fa fa-angle-right"></i></a>
                  </p>
                </div>
              </div>


            </div>
            <div class="col-lg-6">
              <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                <img src="img/dummy/img-1.png" class="img-responsive" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="boxes" class="home-section paddingtop-80" style="background: -webkit-linear-gradient(left, #3931af, #00c6ff);color: white;font-family: 'IBM Plex Sans', sans-serif;">

      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.3s">
              <div class="box text-center">

                <i class="fa fa-check fa-3x bg-skin"></i>
                <h4>Make an appoinment</h4>
                <p>
                  Make your appoinment at any time
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.5s">
              <div class="box text-center">

                <i class="fa fa-list-alt fa-3x bg-skin"></i>
                <h4>Choose your package</h4>
                <p>
                 Choose your doctor
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.7s">
              <div class="box text-center">
                <i class="fa fa-user-md fa-3x bg-skin"></i>
                <h4>Help by specialist</h4>
                <p>
                  Get treated with our world class staff
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">

            <div class="wow fadeInUp" data-wow-delay="0.9s">
              <div class="box text-center">

                <i class="fa fa-hospital-o fa-3x bg-skin"></i>
                <h4>Get diagnostic report</h4>
                <p>
                   Get your diagnostic report
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>


  <section id="service" class="home-section nopadding paddingtop-60" style="background: -webkit-linear-gradient(left, #3931af, #00c6ff);color: white" style="height: 80%;" >
  <div class="container">

        <div class="row">
          <div class="col-sm-6 col-md-6">
            <div class="wow fadeInLeft" data-wow-delay="0.2s">
              <img src="img/dummy/img-6.png" class="img-responsive" alt="" />
            </div>
          </div>
          <div class="col-sm-3 col-md-3">

            <div class="wow fadeInRight" data-wow-delay="0.1s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-stethoscope fa-3x" style="color:#0062cc"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Medical checkup</h5>
                  <p>Get normal checkups.</p>
                </div>
              </div>
            </div>

            <div class="wow fadeInRight" data-wow-delay="0.2s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-wheelchair fa-3x" style="color:#0062cc"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Nursing Services</h5>
                  <p>We offer nursing services</p>
                </div>
              </div>
            </div>
            <div class="wow fadeInRight" data-wow-delay="0.3s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-plus-square fa-3x" style="color:#0062cc"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Pharmacy</h5>
                  <p>Visit our phamarcy</p>
                </div>
              </div>
            </div>


          </div>
          <div class="col-sm-3 col-md-3">

            <div class="wow fadeInRight" data-wow-delay="0.1s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-h-square fa-3x" style="color:#0062cc"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Gyn Care</h5>
                  <p>We have excellent gyn care.</p>
                </div>
              </div>
            </div>

            <div class="wow fadeInRight" data-wow-delay="0.2s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-filter fa-3x" style="color:#0062cc"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Neurology</h5>
                  <p>We have a team of world class neurologists</p>
                </div>
              </div>
            </div>
            
          </div>

        </div>
      </div>
    </section>

    <footer style="background: -webkit-linear-gradient(left, #3931af, #00c6ff);color: #e4d6d6">

      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>About Global Hospitals</h5>
                <p>
                  Global hospital is a non-profit organization that is leading in medical expertise and service provision, with deservedly earned recognition throughout East Africa and beyond as an advanced diagnostic, treatment and referral centre.
                </p>
                </p>
              </div>
            </div>
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Information</h5>
                <ul >
                  <li><a style="color: #e4d6d6" href="#">Home</a></li>
                  <li><a style="color: #e4d6d6" href="#">Laboratory</a></li>
                  <li><a style="color: #e4d6d6"href="#">Medical treatment</a></li>
                  <li><a style="color: #e4d6d6" href="#">Terms & conditions</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Global Hospitals</h5>
                <p>
                 
                </p>
                <ul>
                  <li>
                    <span class="fa-stack fa-lg">
                  <i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
                </span> Monday - Saturday, 8am to 10pm
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
                  <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                </span> +254 790 779 806
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
                  <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
                </span> global@hospitals.com
                  </li>

                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Our location</h5>
                <p>Uhuru Gardens, Langata, Nairobi, Kenya</p>

              </div>
            </div>
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Follow us</h5>
                <ul class="company-social">
                  <li class="social-facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                  <li class="social-twitter"><a href="https://www.twitter"><i class="fa fa-twitter"></i></a></li>
                  <li class="social-google"><a href="https://myaccount.google.com/"><i class="fa fa-google-plus"></i></a></li>
                  <li class="social-vimeo"><a href="https://vimeo.com/"><i class="fa fa-vimeo-square"></i></a></li>
                  <li class="social-dribble"><a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </footer>


  </div>


  <!-- Core JavaScript Files -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/stellar.js"></script>
  <script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/nivo-lightbox.min.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>
