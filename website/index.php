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
        <?php require("include/slider.php");?>

        <div class="row title">
          <div class="col l12">
            <h1>Welcome to CANVAS!</h1>
            <h2>The institute of Art, Culture and Civic Engagement.</h2>
          </div>
        </div>
        <article class="row">
          <h4>Local Leaders Hold Community Discussion in Response to Recent Events Across the Country</h4>
          <div class="col l7">
            <video controls poster="assets/videos/2016-07-16/preview_video.jpg" loop width="100%" preload>
                <source src=assets/videos/2016-07-16/webm_version.webm type=video/webm>
                <source src=assets/videos/2016-07-16/ogv_version.ogv type=video/ogg>
                <source src=assets/videos/2016-07-16/mp4_version.mp4 type=video/mp4>
            </video>
            <small style="font-size:13px; font-style:italic; display:block">By TWC News Staff</small>
          </div>
          <div class="col l5">
            <p class="init-text">Staten Island residents are trying to come up with solutions following the recent events in Louisiana, Dallas, and Minnesota. NY1's Krizia Ruiz filed the following report. </p>
            <p>Local leaders and elected officials are working to ease the tension that they say stands between some community members and the police.</p>
            <p><a href="Local-Leaders-Hold-Community-Discussion-in-Response-to-Recent-Events-Across-the-Country">Read More</a></p>
          </div>
        </article>
        <article id="next-event" class="row">
          <div class="row">

            <div class="col l4">
              <div class="row title-event">
                  <div class="col m2 date">22<small>JUL</small></div>
                  <div clasS="col m10"><h3>OPEN MIC NIGHT at Canvas!</h3></div>
              </div>
              <a href="#"><img src="assets/images/events/thum-event2.jpg" alt="Event 1 Title"/></a>
            </div>
            <div class="col l4">
              <div class="row title-event">
                  <div class="col m2 date">23<small>JUL</small></div>
                  <div clasS="col m10"><h3>Yoga at Canvas! Brought by NYCYogaProject </h3></div>
              </div>
              <a href="#"><img src="assets/images/events/thum-event4.jpg" alt="Event 1 Title"/></a>
            </div>
            <div class="col l4">
              <div class="row title-event">
                  <div class="col m2 date">29<small>JUL</small></div>
                  <div clasS="col m10"><h3>Jazz Nights at Canvas!</h3></div>
              </div>
              <a href="#"><img src="assets/images/events/thum-event5.jpg" alt="Event 1 Title"/></a>
            </div>
          </div>

          <div class="row">

            <div class="col l4">
              <div class="row title-event">
                  <div class="col m2 date">30<small>JUL</small></div>
                  <div clasS="col m10"><h3>OSHA Classes at Canvas (1ST Session) </h3></div>
              </div>
              <a href="#"><img src="assets/images/events/no-image.jpg" alt="Event 1 Title"/></a>
            </div>
            <div class="col l4">
              <div class="row title-event">
                  <div class="col m2 date">06<small>AUG</small></div>
                  <div clasS="col m10"><h3>OSHA Classes at Canvas (2ND session)</h3></div>
              </div>
              <a href="#"><img src="assets/images/events/no-image.jpg" alt="Event 1 Title"/></a>
            </div>
            <div class="col l4">
              <div class="row title-event">
                  <div class="col m2 date">13<small>AUG</small></div>
                  <div clasS="col m10"><h3>Yoga at Canvas! Brought by NYCYogaProject</h3></div>
              </div>
              <a href="#"><img src="assets/images/events/thum-event4.jpg" alt="Event 1 Title"/></a>
            </div>
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
