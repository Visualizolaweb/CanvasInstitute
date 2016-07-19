<!DOCTYPE html>
  <html>
    <head>
      <link rel="stylesheet" href="assets/icons/font-awesome-4.6.3/css/font-awesome.min.css">
      <link type="text/css" rel="stylesheet" href="assets/framework/materialize/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="assets/stylesheet/main.css" media="screen" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <section class="container">
        <?php require("include/header.php");?>

        <div class="row">
          <div class="col l12 center">
            <img src="assets/images/Be-Back-Soon.png" alt="Will Be Back Soon" width="400" style="margin-top:20px; margin-bottom: -30px;"/>
          </div>
        </div>

        <?php include_once("include/footer.php"); ?>
      </section>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="assets/framework/materialize/js/materialize.min.js"></script>

      <script>
        $(document).ready(function(){
          $('.button-collapse').sideNav({
              menuWidth: 300,
              edge: 'right',
              closeOnClick: true
          });

          $('.slider').slider({indicators: false});

          $('.nextSlide').click(function(){
             $('.slider').slider('next');
          });

          $('.prevSlide').click(function(){
             $('.slider').slider('prev');
          });

        });
      </script>
    </body>
  </html>
