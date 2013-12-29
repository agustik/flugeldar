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
            <span class="sr-only">Opna</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./"><?php print $locale->title; ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a href="./?view=list.php&type=cake">Skotkökur</a></li>
            <li><a href="./?view=list.php&type=rockets">Rakettur</a></li>
            <li><a href="./?view=list.php&type=torch">Blys</a></li>
            <li><a href="./?view=list.php&type=packages">Blys</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>

    <div class="container">
      <?php
        $items = $db->GetItems($type, 100);
        var_dump($items);

      ?>

      <div class="row">

        <div class="col-lg-12">
          <h1 class="page-header">Vörur</h1>
        </div>

      </div>


        <?php

          $limit = 4; $i = 0;
           foreach ($items as $item) {
            $name = $item['name'];
            $src = $item['src'];
            if($i = 0){
              print "<div class='row'>";
            }
              print "<div class='col-md-3 portfolio-item'><a href='portfolio-item.html'><img class='img-responsive' src='http://placehold.it/750x450'></a></div>";
            $i++;
            if($i = 3){
              print "</div>";
              $i = 0;
            }
          }

        ?>


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
            <p><?php print $locale->footer; ?></p>
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