<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php print $locale->title; ?></title>>

    <!-- Bootstrap core CSS -->
    <link href="./assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS for the '3 Col Portfolio' Template -->
    <link href="./assets/css/portfolio-item.css" rel="stylesheet">
    <link href="./assets/video-js/video-js.min.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://startbootstrap.com">Start Bootstrap</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>

    <div class="container">
      <!--
          Vidoes..
        -->
      <div class="row">

        <div class="col-lg-12">
          <h1 class="page-header">Portfolio Item <small>Explain Your Work</small></h1>
        </div>

      </div>

      <div class="row">

        <div class="col-md-8">
          <!--<img class="img-responsive" src="http://placehold.it/750x500">-->
          <video id="example_video_1" class="video-js vjs-default-skin vjs-big-play-centered"
            controls preload="auto" width="750" height="500"
            poster="./assets/img/flugelda-icon/750x500/orlygsstadabardagi_2.png"
            data-setup='{"example_option":true}'>
           <source src="./assets/video/mp4/orlygsstadabardagi_2.mp4" type='video/mp4' />
           <source src="./assets/video/webm/orlygsstadabardagi_2.webm" type='video/webm' />
          </video>
        </div>

        <div class="col-md-4">
          <h3>Project Description</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
          <h3>Project Details</h3>
          <ul>
            <li>Lorem Ipsum</li>
            <li>Dolor Sit Amet</li>
            <li>Consectetur</li>
            <li>Adipiscing Elit</li>
          </ul>
        </div>

      </div>

      <div class="row">

        <div class="col-lg-12">
          <h3 class="page-header">Related Projects</h3>
        </div>
        <!--
          Other videoes that might be interresting
        -->
        <div class="col-sm-3 col-xs-6">
        	<a href="#"><img class="img-responsive portfolio-item" src="http://placehold.it/500x300"></a>
        </div>

        <div class="col-sm-3 col-xs-6">
        	<a href="#"><img class="img-responsive portfolio-item" src="http://placehold.it/500x300"></a>
        </div>

        <div class="col-sm-3 col-xs-6">
        	<a href="#"><img class="img-responsive portfolio-item" src="http://placehold.it/500x300"></a>
        </div>

        <div class="col-sm-3 col-xs-6">
        	<a href="#"><img class="img-responsive portfolio-item" src="http://placehold.it/500x300"></a>
        </div>

      </div>

    </div><!-- /.container -->

    <div class="container">

      <hr>

      <footer>
        <div class="row">
          <div class="col-lg-12">
            <p>Copyright &copy; Company 2013</p>
          </div>
        </div>
      </footer>
      
    </div><!-- /.container -->

    <!-- JavaScript -->
    <script src="./assets/js/jquery-1.10.2.js"></script>
    <script src="./assets/js/bootstrap.js"></script>
    <script src="./assets/video-js/video.js"></script>
    <div id="fb-root"></div>
  <script>
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/is_IS/all.js#xfbml=1&appId=251063381611215";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  </script>
  <script>
  videojs.options.flash.swf = "./assets/video-js/video-js.swf"
  </script>
  </body>

</html>