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

        <div class="row title">
          <div class="col l12">
            <h1>ABOUT US</h1>
            <h2>The institute of Art, Culture and Civic Engagement.</h2>
          </div>
        </div>

        <article class="page row">
          <div class="col l4">
            <img src="assets/images/c0858faee814.jpg" alt="About CANVAS" style="width:100%"/>
          </div>

          <div class="col l8">
            <p class="init-text">
CANVAS is the think-tank where locals and visitors alike are brought together for cultural exchange, art exhibitions, public programs, art creation, indie film screenings, television and radio programming, and multimedia classes. Integral to the mission of CANVAS is that it will be open to community members and organizations to join together in utilizing the space as an incubator to create new ideas, programs, and opportunities with overarching goals to improve the local and global community.</p>
            <p>The launch of CANVAS is both innovative and unique in creative space making in Staten Island, bringing together rich cultural diversity and incredible talent in one place, with both a local and global perspective to introducing a world of experiences to Staten Island residents and visitors. </p>
            <!-- <h2 class="left">BOBBY'S BIO</h2> -->
          </div>
        </article>

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
