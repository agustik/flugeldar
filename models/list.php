<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php print $locale->title; ?></title>
    <style type="text/css">
    .img-responsive {
      max-height: 143px;
      }
    </style>
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
            <li><a href="./?view=list.php&type=rocket">Rakettur</a></li>
            <li><a href="./?view=list.php&type=torch">Blys</a></li>
            <li><a href="./?view=list.php&type=packages">Blys</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>

    <div class="container">
      <?php
        $key = md5("list".$view.$type);
        if($cache = $memcache->Get($key)){
          $items = $cache;
        }else{
          $items = $db->GetItems($type, 100);
          $memcache->Store($key, $items, 900);
        }
        
      ?>

      <div class="row">

        <div class="col-lg-12">
          <h1 class="page-header">Vörur</h1>
        </div>

      </div>
      <div class="">
        <?php

          $limit = 4;
          $i = 0;
          if(sizeof($items) == 0){
            print "<div class='text-center'><h1>Úps ! Ekkert hér, kíktu við hjá okkur, við erum á Árvegi 1 Selfossi og Smíðaskúrnum á stokkseyri.</h1></div>";
          }
           foreach ($items as $item) {
            $name = $item['name'];
            $src = $item['src'];
            $price = (int)$item['price'];
            $id = $item['id'];
            $image = DIR_BASE . "assets/img/flugelda-icon/750x500/". $src .".png";
            $link = "./?view=play.php&video=$id&autoplay=true";
            $tooltip = $name . ' - ' . PrettyPrintCurrency($price) . ' ' . $locale->currency;
            if (!file_exists($image)){
              $image = "./assets/img/" . $type .".png";
            }
          if($debug){
            print "<!-- $id $src $price  $image  $link  -->";
          }
            
         print "<div class='col-md-3 portfolio-item'><a href='$link' data-toggle='tooltip' title='$name'><img class='img-responsive' src='$image'></a></div>";
         }
        ?>
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
    <script type="text/javascript">
    $(document).tooltip({
      selector : '[data-toggle="tooltip"]'
    });
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