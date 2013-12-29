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

    <!-- Add custom CSS here -->
    <link href="./assets/css/stylish-portfolio.css" rel="stylesheet">
    <link href="./assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <style type="text/css">
    .video-frame{
      border: none;
      width: 100%;
      min-height: 600px;
    }
    </style>
  </head>

  <body>

    <!-- Side Menu -->
    <a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-bars"></i></a>
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
        <li class="sidebar-brand"><a href="./"></a></li>
        <li><a href="#top">Forsíða</a></li>
        <li><a href="#about">servies .. Útköll á árinu ?</a></li>
        <li><a href="#services">.....</a></li>
        <li><a href="#portfolio">Úrval</a></li>
        <li><a href="#contact">Sölustaðir</a></li>
      </ul>
    </div>
    <!-- /Side Menu -->
  
    <!-- Full Page Image Header Area -->
    <div id="top" class="header">
      <div class="vert-text">
        <img src="./assets/img/bfa-noback-full-noshadow.png">
        <!--<h1>Björgunarfélag Árborgar !</h1>
         <h3><em>We</em> Build Great Templates, <em>You</em> Make Them Better</h3>
       <a href="#about" class="btn btn-default btn-lg">Find Out More</a>-->
      </div>
    </div>
    <!-- /Full Page Image Header Area -->
  
    <!-- Intro -->
    <div id="about" class="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h2>Subtle Sidebar is the Perfect Template for your Next Portfolio Website Project!</h2>
            <p class="lead">This template really has it all. It's up to you to customize it to your liking! It features some fresh photography courtesy of <a target="_blank" href="http://join.deathtothestockphoto.com/">Death to the Stock Photo</a>.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- /Intro -->
  
    <!-- Services -->
<div id="services" class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center">
            <h2>Our Services</h2>
            <hr>
          </div>
        </div>
        <div class="row">
          <?php
            var_dump($db->GetUtkoll());
           ?>
        </div>
      </div>
    </div>
    <!-- /Services -->

    <!-- Callout -->
    <div class="callout">
      <div class="vert-text">
        <!--<h1>A Dramatic Text Area</h1>-->
      </div>
    </div>
    <!-- /Callout -->

    <!-- Portfolio -->
    <div id="portfolio" class="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center">
            <h2>Vöruúrval</h2>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-md-offset-2 text-center">
            <div class="portfolio-item">
              <a href="#"><img class="img-portfolio img-responsive" src="./assets/img/shooting.png"></a>
              <h4>Skotkökur</h4>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="portfolio-item">
              <a href="#"><img class="img-portfolio img-responsive" src="./assets/img/rocket.png"></a>
              <h4>Rakettur</h4>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-md-offset-2 text-center">
            <div class="portfolio-item">
              <a href="#"><img class="img-portfolio img-responsive" src="./assets/img/torch.jpg"></a>
              <h4>Blys</h4>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="portfolio-item">
              <a href="#"><img class="img-portfolio img-responsive" src="./assets/img/pakkar-black.jpg"></a>
              <h4>Pakkar</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Portfolio -->
<!-- Callout -->
    <div class="callout-2">
      <div class="vert-text">
        <h1>Gleðilegt nýtt ár</h1>
      </div>
    </div>
    <!-- /Callout -->
    <!-- Call to Action -->
    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h3>Fylgstu með félaginu !</h3>
            <a href="http://www.bfa.is" target="blank" class="btn btn-lg btn-default">Heimasíða</a>
            <a href="https://www.facebook.com/BjorgunarfelagArborgar" target="blank" class="btn btn-lg btn-primary">Facebook síða</a>

            <h2>Sölustaðir</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- /Call to Action -->

    <!-- Map -->

    <div id="contact" class="map col-md-6 ">
      <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=63.938805,-20.990605&amp;num=1&amp;t=h&amp;ie=UTF8&amp;ll=63.938867,-20.990582&amp;spn=0.004402,0.016512&amp;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?q=63.938805,-20.990605&amp;num=1&amp;t=h&amp;ie=UTF8&amp;ll=63.938867,-20.990582&amp;spn=0.004402,0.016512&amp;z=14&amp;source=embed"></a></small></iframe>
      <div class="text-center"><h3>Tryggvabúð, Árvegi 1 - Selfossi</h3></div>
    </div>
    <div id="contact" class="map col-md-6 ">
      <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=63.839391,-21.072854&amp;num=1&amp;t=h&amp;ie=UTF8&amp;ll=63.83942,-21.0727&amp;spn=0.008798,0.033023&amp;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?q=63.839391,-21.072854&amp;num=1&amp;t=h&amp;ie=UTF8&amp;ll=63.83942,-21.0727&amp;spn=0.008798,0.033023&amp;z=14&amp;source=embed"></a></small></iframe>
      <div class="text-center"><h3>Stokkseyri</h3></div>
    </div>
    <!-- /Map -->
    
    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <ul class="list-inline">
              <li></li>
            </ul>
            <div class="top-scroll">
              <a href="#top"><i class="fa fa-circle-arrow-up scroll fa-4x"></i></a>
            </div>
            <hr>
            <p>Björgunarfélag Árborgar 2013 <a href="https://www.facebook.com/BjorgunarfelagArborgar" target="blank"><i class="fa fa-facebook"></i></a></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- /Footer -->

    <!-- Modal
    <div id="marketing_modal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
      <div class="modal-dialog-large">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Haus</h4>
          </div>
          <div class="modal-body">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators 
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides 
              <div class="carousel-inner">
          <div class="item active">
            <iframe src="./frame.php" class="video-frame" scrolling="no"></iframe>
          </div>
          <div class="item">
            
          </div>
          <div class="item">
          </div>
        </div>

              <!-- Controls 
              <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div>

            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Loka</button>
          </div>

        </div><!-- /.modal-content 
      </div><!-- /.modal-dialog 
    </div>
    <!--/Modal-->

    <!-- JavaScript -->
    <script src="./assets/js/jquery-1.10.2.js"></script>
    <script src="./assets/js/bootstrap.js"></script>

    <!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
    <script>
        $("#menu-close").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
    </script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
    </script>
    <script>


    /**
    Sitebar links.
    */
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
            || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });


      /*$('.portfolio-item a[href="#"]').click(function (e){
        e.preventDefault();
          $('#marketing_modal').modal('show');
        return false;
      });*/
    </script>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/is_IS/all.js#xfbml=1&appId=251063381611215";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript">
(function(element){
  var iframe = $(element),
      width = $(document).width(),
      src = iframe.attr('src');
      src = src + "?client-width=" + width;
    iframe.attr('src', src);
  }('.video-frame'));

</script>

  </body>

</html>