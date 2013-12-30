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

    <!-- Custom CSS for the '3 Col Portfolio' Template -->
    <link href="./assets/css/portfolio-item.css" rel="stylesheet">
    <link href="./assets/video-js/video-js.min.css" rel="stylesheet">
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
             $key = md5('video' . $video);
             if($cache = $memcache->Get($key)){
              $v = $cache;
             }else{
              $v = $db->GetVideo($video);

              $memcache->Store($key, $v, 0);
             }

             $video_src = $v['src'];
             $name      = $v['name'];
             $description = $v['description'];
             $view_count       = $v['views'];
             $poster    =   "./assets/img/flugelda-icon/750x500/".$video_src.".png";
             $mp4       =   "./assets/video/mp4/".  $video_src.".mp4";
             $webm      =   "./assets/video/webm/". $video_src.".webm";
             $parameters= '{"autoplay" : ' . $autoplay. '}';
             $db->BumpViewCount($video);
          ?>
      <!--
          Vidoes..
        -->
      <div class="row">

        <div class="col-lg-12">
          <h1 class="page-header"><?php echo $name; ?></h1>
        </div>

      </div>

      <div class="row">

        <div class="col-md-8">


          <!--<img class="img-responsive" src="http://placehold.it/750x500">-->
          <video id="example_video_1" class="video-js vjs-default-skin vjs-big-play-centered"
            controls preload="auto" width="750" height="500"
            poster="<?php print $poster; ?>"
            data-setup='<?php print $parameters; ?>'>
           <source src="<?php print $mp4; ?>" type='video/mp4' />
           <source src="<?php print $webm; ?>" type='video/webm' />
          </video>
          <div >
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab">Lýsing</a></li>
              <li class=""><a href="#profile" data-toggle="tab">Upplýsingar</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade active in" id="description">
                <?php
                  print $description;
                ?>
              </div>
              <div class="tab-pane fade" id="stats">
                <p></p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="fb-comments" data-href="<?php print CurrentUrl(); ?>" data-numposts="5" data-colorscheme="light" data-width="390" ></div>
        </div>

      </div>

      <div class="row">

        <div class="col-lg-12">
          <h3 class="page-header">Skoðaðu þetta...</h3>
        </div>
        <?php
        $items = $db->GetRandomItems(4);
         foreach ($items as $item) {
            $name = $item['name'];
            $src = $item['src'];
            $id = $item['id'];
            $image = "./assets/img/flugelda-icon/750x500/". $src .".png";
            $link = "./?view=play.php&video=$id&autoplay=true";
            if (!file_exists($image)){
              $image = "./assets/img/" . $type .".png";
            }
            print " <div class='col-sm-3 col-xs-6'><a href='$link'  data-toggle='tooltip' title='$name'><img class='img-responsive portfolio-item' src='$image'></a></div>";
         }
        ?>

      </div>

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
$(document).tooltip({
  selector : '[data-toggle="tooltip"]'
});

  videojs.options.flash.swf = "./assets/video-js/video-js.swf"
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