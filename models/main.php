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
        <!--<li><a href="#about"></a></li>-->
        <li><a href="#services">Útköll á árinu</a></li>
        <li><a href="#portfolio">Vöruúrval</a></li>
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
            <h2>Velkomin</h2>
            <p class="lead">Þú getur nálgast vöruúrval <a target="_blank" href="./?view=list.php&type=cake">hér</a> </p>
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
            <h2>Útköll á árinu</h2>
            <hr>
          </div>
        </div>
        <div class="row">
          <?php
            $key = md5('utkoll');
            if($cache = $memcache->Get($key)){
              $items = $cache;
            }else{
              $items = $db->GetUtkoll();
              $memcache->Store($key, $items, 0);
            }
            foreach ($items as $item ) {
              $name = $item['name'];
              $priority = $item['priority'];
              $date = $item['is_date'];
              $html = "<div class='col-md-1 text-center'><div class='service-item' data-toggle='tooltip' title='$date - $priority > $name'><i class='service-icon fa fa-map-marker'></i></div></div>";
              print $html;
            }
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
              <a href="./?view=list.php&type=cake"><img class="img-portfolio img-responsive" src="./assets/img/cake.png"></a>
              <h4>Skotkökur</h4>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="portfolio-item">
              <a href="./?view=list.php&type=rocket"><img class="img-portfolio img-responsive" src="./assets/img/rocket.png"></a>
              <h4>Rakettur</h4>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-md-offset-2 text-center">
            <div class="portfolio-item">
              <a href="./?view=list.php&type=torch"><img class="img-portfolio img-responsive" src="./assets/img/torch.png"></a>
              <h4>Blys</h4>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="portfolio-item">
              <a href="./?view=list.php&type=packages"><img class="img-portfolio img-responsive" src="./assets/img/package.png"></a>
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
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/is_IS/all.js#xfbml=1&appId=251063381611215";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<script type="text/javascript">

$(document).tooltip({
  selector : '[data-toggle="tooltip"]'
});

(function(){
  /* Select all tooltips*/
  var tooltips = $('#services').find('[data-toggle="tooltip"]'),
    l = tooltips.length;
    DisplayPopover();
    setInterval(function(){
      DisplayPopover();
    },3000);

    function DisplayPopover(){
      var random = Math.floor(Math.random() * l) + 1,
          element = $(tooltips[random]);
          element.tooltip('show');
          setTimeout(function(){
            element.tooltip('hide');
          },2000)
    }
}());
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46120168-1', 'edge.is');
  ga('send', 'pageview');

</script>
  </body>

</html>