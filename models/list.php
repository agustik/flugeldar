<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php print $locale->title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="./assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS for the '4 Col Portfolio' Template -->
    <link href="./assets/css/portfolio-item.css" rel="stylesheet">
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

      <div class="row">

        <div class="col-lg-12">
          <h1 class="page-header">4 Col Portfolio <small>Showcase Your Work</small></h1>
        </div>

      </div>

      <div class="row">

        <div class="col-md-3 portfolio-item">
          <a href="portfolio-item.html"><img class="img-responsive" src="http://placehold.it/750x450"></a>
        </div>

        <div class="col-md-3 portfolio-item">
          <a href="portfolio-item.html"><img class="img-responsive" src="http://placehold.it/750x450"></a>
        </div>

        <div class="col-md-3 portfolio-item">
          <a href="portfolio-item.html"><img class="img-responsive" src="http://placehold.it/750x450"></a>
        </div>

        <div class="col-md-3 portfolio-item">
          <a href="portfolio-item.html"><img class="img-responsive" src="http://placehold.it/750x450"></a>
        </div>

      </div>

      <div class="row">

        <div class="col-md-3 portfolio-item">
          <a href="portfolio-item.html"><img class="img-responsive" src="http://placehold.it/750x450"></a>
        </div>

        <div class="col-md-3 portfolio-item">
          <a href="portfolio-item.html"><img class="img-responsive" src="http://placehold.it/750x450"></a>
        </div>

        <div class="col-md-3 portfolio-item">
          <a href="portfolio-item.html"><img class="img-responsive" src="http://placehold.it/750x450"></a>
        </div>

        <div class="col-md-3 portfolio-item">
          <a href="portfolio-item.html"><img class="img-responsive" src="http://placehold.it/750x450"></a>
        </div>

      </div>

      <div class="row">

        <div class="col-md-3 portfolio-item">
          <a href="portfolio-item.html"><img class="img-responsive" src="http://placehold.it/750x450"></a>
        </div>

        <div class="col-md-3 portfolio-item">
          <a href="portfolio-item.html"><img class="img-responsive" src="http://placehold.it/750x450"></a>
        </div>

        <div class="col-md-3 portfolio-item">
          <a href="portfolio-item.html"><img class="img-responsive" src="http://placehold.it/750x450"></a>
        </div>

        <div class="col-md-3 portfolio-item">
          <a href="portfolio-item.html"><img class="img-responsive" src="http://placehold.it/750x450"></a>
        </div>

      </div>

      <hr>
      <!--
      <div class="row text-center">
        
        <div class="col-lg-12">
          <ul class="pagination">
            <li><a href="#">&laquo;</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
          </ul>        
        </div>

      </div>-->

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
  </body>

</html>