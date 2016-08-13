
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>
 @yield('title')
  </title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css"   rel="stylesheet">
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/logo.png">
  <style type="text/css">
  #profit{
    color: yellow !important;
  }  
  .logo-img{
    height: 60px !important
  }
  </style>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  
</head><!--/head-->

<!--.preloader-->
    <div class="preloader"> <i class="fa fa-spinner" aria-hidden="true"></i></div>
  <!--/.preloader-->

  <header id="home" class="changebg">
  @section('slide')
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(images/slider/1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">usi <span id="profit">Profit</span></h1>
            <p class="animated fadeInRightBig">
            <div class="col-md-3"></div>
             <div class="input-group col-md-6">
  
              <input type="textarea" class="form-control " placeholder="Search here" aria-describedby="basic-addon1">
              <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-search"></i></span>
            </div>
            </p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/2.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">USI <span id="profit">profit</span></h1>
              <p class="animated fadeInRightBig">
            <div class="col-md-3"></div>
             <div class="input-group col-md-6">
  
              <input type="textarea" class="form-control " placeholder="Search here" aria-describedby="basic-addon1">
              <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-search"></i></span>
            </div>
            </p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/3.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">usi <span id="profit">profit</span></h1>
              <p class="animated fadeInRightBig">
            <div class="col-md-3"></div>
             <div class="input-group col-md-6">
                <input type="textarea" class="form-control " placeholder="Search here" aria-describedby="basic-addon1">
                <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-search"></i></span>
            </div>
            </p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
        </div>
      </div>
      

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <h1><img class="img-responsive logo-img" src="images/logo.png" alt="logo" height="30px"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"><a href="#home">Home</a></li>
            <li class="scroll"><a href="#services">Service</a></li> 
            <li class="scroll"><a href="#about-us">About Us</a></li>                     
            <li class="scroll"><a href="#portfolio">Portfolio</a></li>
            <li class="scroll"><a href="#team">Team</a></li>
            <li class="scroll"><a href="#blog">Blog</a></li>
            <li class="scroll"><a href="#contact">Contact</a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
    @show
  </header><!--/#home-->
    @include('partials.service')
    @include('partials.aboutus')
    @include('partials.portfolio')
    @include('partials.team')
    @include('partials.features')
    @include('partials.pricing')
    @include('partials.twitter')
    @include('partials.blog')
    @include('partials.contact')
    @include('partials.footer')

  
