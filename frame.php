<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Flugeldasala Björgunarfélags Árborgar</title>

    <!-- Bootstrap core CSS -->
    <link href="./assets/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="./assets/css/stylish-portfolio.css" rel="stylesheet">
    <link href="./assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="col-md-7 video-frame">
              <iframe width="560" src="https://www.youtube.com/embed/lh6SBW4uGTY" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-md-4 video-comments">
              <div class="fb-comments" data-href="https://edge.is" data-numposts="5" data-colorscheme="light" ></div>
            </div>

        <!-- JavaScript -->
    <script src="./assets/js/jquery-1.10.2.js"></script>
    <script src="./assets/js/bootstrap.js"></script>
    <script type="text/javascript">
    <?php 
      $width = (array_key_exists('client-width', $_GET)) ? $_GET['client-width'] : 1400;
    ?>
      var client = <?php print $width; ?> * 0.8;
      var elements = {
        video : $('.video-frame iframe'),
        comments : $('.video-comments .fb-comments')
      }
      var width = {
          video   : client * 0.7,
          comments: client * 0.3
        }

      console.log(width, elements);

      elements.comments.attr('data-width', width.comments);
      elements.video.attr('width', width.video);
      elements.video.attr('height', GetAspect(width.video, '4:3'));

      function GetAspect(width, ratio){
        var height;
        if (ratio = "4:3"){
          height = width * 0.8;
        }
        else if ( ratio = "16:9"){
          height = width * 0.5425;
        }
        return height;
      }

    </script>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/is_IS/all.js#xfbml=1&appId=251063381611215";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  </body>
</html>